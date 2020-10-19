@extends('layout.main')

@section('title', '註冊')

@section('subTitle', "在這邊可以輕鬆地註冊一個帳號!")

@section('backgroundImageUrl', 'https://s.yimg.com/os/en/homerun/feed_manager_auto_publish_494/2470f8d45f6819b41af7900233786da6');

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <h2>Register</h2>
                <form name="regForm" id="regForm" method="post" action="{{ route('regc') }}">
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
                            <label>Email</label>
                            <input type="email" class="form-control" placeholder="Email" name="email" id="email" required data-validation-required-message="Please enter your email.">
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
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>Full Name</label>
                            <input type="text" class="form-control" placeholder="FullName" name="fullname" id="fullname" required data-validation-required-message="Please enter your fullname.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>Phone</label>
                            <input type="text" class="form-control" placeholder="Phone" name="phone" id="phone" required data-validation-required-message="Please enter your phone.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <br>
                    <div id="success"></div>
                    <button type="submit" class="btn btn-primary" id="regBtn">Register</button>
                </form>
            </div>
        </div>
    </div>
@endsection
