<?php

namespace App\Http\Controllers;

use App\Events\FailedLogin;
use App\Events\ResetPassword;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth.layout-auth');
    }

    public function indey(){
        return view('auth.register');
    }

    public function authenticated(Request $request)
    {
        $credentials = $request->only(['email' => 'loginEmail', 'password' => 'loginPassword']);
        if (Auth::attempt([
            'email' => $credentials['loginEmail'],
            'password' => $credentials['loginPassword'],
            'active' => 1
        ])) {
            $request->session()->regenerate();

            return redirect('dashboard');
        }

        $user = User::where('email', $credentials['loginEmail'])->first();
        $data = [
            'id' => $user?->id,
            'email' => $credentials['loginEmail'],
            'request' => $request
        ];
        FailedLogin::dispatch($data);
        return back()->withErrors([
            'username' => 'Username salah.',
            'password' => 'Password salah.',
        ]);
    }

    /**
     * Log the user out of the application.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('auth.login');
    }

    public function changePassword(Request $request)
    {
        if ($request->isMethod('get')) {
            $authUsers = User::all();
            return view('auth.reset-password', ['users' => $authUsers]);
        }

        $request->validate([
            'newPassword' => 'required|string|min:4',
            'oldPassword' => 'required|string',
            'username' => 'required|string'
        ]);
        $user = User::where('username', $request->username)->first();

        if (!Hash::check($request->oldPassword, $user->password)) {
            return redirect()->back()->with('status', [
                'type' => 'error',
                'message' => 'Password lama tidak sesuai. Coba periksa kembali.'
            ]);
        }

        $user->password = Hash::make($request->newPassword);
        $user->save();
        ResetPassword::dispatch([
            'user' => $request->user(),
            'request' => $request,
            'resetUser' => $user
        ]);

        return redirect()->back()->with('status', [
            'type' => 'success',
            'message' => 'Berhasil ganti password '
        ]);
    }

}