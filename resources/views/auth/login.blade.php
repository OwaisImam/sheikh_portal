@extends('layout.login.loginMaster')
@section('title','Moore Stephen | Login')
@section('content')
    <div class="wrapper full-page-wrapper page-auth page-login text-center">
        <div class="inner-page">
            <div class="logo">
                <a href="index-2.html"><img src="assets/img/kingadmin-logo-white.png" alt="" /></a>
            </div>
            <a href="{{'/login/google'}}" class="btn btn-auth-google"><span>Login via Google</span></a>
            <div class="separator"><span>OR</span></div>
            <div class="login-box center-block">
                @if(session('message'))
                    <h4 class="alert alert-info">{{session('message')}}</h4>
                @endif
                <form class="form-horizontal" role="form" method="post" action="{{route('login')}}">
                    @csrf
                    <p class="title">Use your email address</p>
                    <div class="form-group">
                        <label for="username" class="control-label sr-only">Username</label>
                        <div class="col-sm-12">
                            <div class="input-group">
                                <input type="text" placeholder="email" name="email" id="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>

                            </div>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <label for="password" class="control-label sr-only">Password</label>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <div class="input-group">
                                <input type="password" placeholder="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>

                            </div>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <label class="fancy-checkbox">
                        <input type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                        <span>Remember me next time</span>
                    </label>
                    <button type="submit" class="btn btn-custom-primary btn-lg btn-block btn-auth"><i class="fa fa-arrow-circle-o-right"></i> Login</button>
                </form>
                <div class="links">
                    @if (Route::has('password.request'))
                        <p><a href="{{ route('password.request') }}">Forgot Username or Password?</a></p>
                        <p><a href="{{route('register')}}">Create New Account</a></p>
                    @endif

                </div>
            </div>
        </div>
    </div>
@endsection

