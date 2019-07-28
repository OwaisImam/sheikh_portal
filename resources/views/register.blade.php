@extends('layout.login.loginMaster')

@section('content')
<div class="wrapper full-page-wrapper page-auth page-register text-center">
    <div class="inner-page">
        <div class="logo">
            <a href="index-2.html"><img src="assets/img/kingadmin-logo-white.png" alt="" /></a>
        </div>
        <button type="button" class="btn btn-auth-facebook"><span>Connect using Facebook</span></button>
        <div class="separator"><span>OR</span></div>
        <div class="register-box center-block">
            <form>
                <p class="title">Create Your Account</p>
                <input type="email" placeholder="email" class="form-control">
                <input type="password" placeholder="password" class="form-control">
                <input type="password" placeholder="repeat password" class="form-control">
                <label class="fancy-checkbox">
                    <input type="checkbox">
                    <span>I accept the <a href="#">Terms &amp; Agreements</a></span>
                </label>
                <button class="btn btn-custom-primary btn-lg btn-block btn-auth"><i class="fa fa-check-circle"></i> Create Account</button>
            </form>
        </div>
    </div>
</div>
@endsection
