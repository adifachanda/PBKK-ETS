@extends('blank.blank')

@section('content')
<x-auth-validation-errors class="mb-4" :errors="$errors" />
    <div class="page login-page">
        <div class="container d-flex align-items-center">
            <div class="form-holder has-shadow">
                <div class="row">
                    <!-- Logo & Information Panel-->
                    <div class="col-lg-6">
                        <div class="info d-flex align-items-center">
                            <div class="content">
                                <div class="logo">
                                    <h1>Register</h1>
                                </div>
                                <p>HotelTrip.com</p>
                            </div>
                        </div>
                    </div>
                    <!-- Form Panel    -->
                    <div class="col-lg-6 bg-white">
                        <div class="form d-flex align-items-center">
                            <div class="content">
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf

                                    <!-- Name -->
                                    {{-- <div>
                                        <x-label for="name" :value="__('Name')" />

                                        <x-input id="name" class="block mt-1 w-full" type="text" name="name"
                                            :value="old('name')" required autofocus />
                                    </div> --}}
                                    
                                    <div class="form-group">
                                        <input id="name"  type="email" name="email" required class="input-material">
                                        <label for="name"  class="label-material">your first name</label>
                                    </div>

                                    
                                    <!-- Email Address -->
                                    {{-- <div class="mt-4">
                                        <x-label for="email" :value="__('Email')" />

                                        <x-input id="email" class="block mt-1 w-full" type="email" name="email"
                                            :value="old('email')" required />
                                    </div> --}}

                                    <div class="form-group">
                                        <input id="email" type="email" name="email"  required class="input-material">
                                        <label for="email" class="label-material">Email Address</label>
                                      </div>
                                    <!-- Password -->
                                    {{-- <div class="mt-4">
                                        <x-label for="password" :value="__('Password')" />

                                        <x-input id="password" class="block mt-1 w-full" type="password" name="password"
                                            required autocomplete="new-password" />
                                    </div> --}}

                                    <div class="form-group">
                                        <input id="password" type="password" name="password" required class="input-material">
                                        <label for="password" class="label-material">Password</label>
                                      </div>
                                    <!-- Confirm Password -->
                                    {{-- <div class="mt-4">
                                        <x-label for="password_confirmation" :value="__('Confirm Password')" />

                                        <x-input id="password_confirmation" class="block mt-1 w-full" type="password"
                                            name="password_confirmation" required />
                                    </div> --}}
                                    <div class="form-group">
                                        <input id="password_confirmation" type="password" name="password_confirmation" required class="input-material">
                                        <label for="password_confirmation" class="label-material">Retype Password</label>
                                    </div>

                                    {{-- <div class="flex items-center justify-end mt-4">
                                        <a class="underline text-sm text-gray-600 hover:text-gray-900"
                                            href="{{ route('login') }}">
                                            {{ __('Already registered?') }}
                                        </a> --}}
                                        <x-button class="btn btn-primary">
                                            {{ __('Register') }}
                                        </x-button>
                                        <br>
                                        <small>Already have an account? </small><a href="{{ route('login')}}" class="signup">Login</a>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
