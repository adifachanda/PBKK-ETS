@extends('sections.page')


@section('content')
    <div class="breadcrumb-holder container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item">Ganti Password</li>
        </ul>
    </div>
    @include('components.flash-status')
    <div class="container-fluid mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <section id="reset-password">
                        <div class="card-body">
                            <form id="form-reset-password" method="POST"
                                  action="{{route('auth.change-password')}}">
                                @csrf

                                @if(Auth::user()->roleUser->id_unique == 'a01')
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <select id="username" class="form-control" name="username">
                                        @foreach($users as $user)
                                            <option
                                                value="{{$user->username}}">{{$user->first_name}} {{$user->last_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @else
                                    <input type="hidden" name="username" value="{{ Auth::user()->username }}" />
                                @endif

                                <div class="form-group">
                                    <label for="oldPassword">Password Lama</label>
                                    <input type="password" class="form-control" name="oldPassword"
                                           id="oldPassword"
                                           placeholder="Password Lama">
                                </div>
                                <div class="form-group">
                                    <label for="newPassword">Password Baru</label>
                                    <input type="password" class="form-control" name="newPassword"
                                           id="newPassword"
                                           placeholder="Password Baru">
                                </div>
                                <hr>
                                <button class="btn btn-sm btn-primary" id="btn_ganti_pass" type="submit">Simpan
                                    Perubahan
                                </button>
                            </form>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
@endsection