@extends('layout.main')

@section('title', '登入')

@section('subTitle', "輸入帳號吧!")

@section('backgroundImageUrl', asset('img/login-bg.jpg'));

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <h2>Login</h2>
                <form name="loginForm" id="loginForm" method="post" action="{{ route('loginc') }}">
                    @csrf
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>UserName</label>
                            <input type="text" class="form-control" placeholder="UserName" name="username" id="username" required data-validation-required-message="Please enter your username.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>Password</label>
                            <input type="password" class="form-control" placeholder="Password" name="password" id="password" required data-validation-required-message="Please enter your password.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <br>
                    <div id="success"></div>
                    <button type="submit" class="btn btn-primary" id="loginBtn">Login</button>
                </form>
            </div>
        </div>
    </div>
@endsection
