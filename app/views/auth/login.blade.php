@extends('auth.layout.master')
@section('title')
Highly Succeed - Login Page
@stop
@section('styles')
{{ HTML::style('assets/css/custom.css') }}
@stop
@section('content')
<div class="block-login">
    <div class="block-login-logo">
        <a class="logo">Gemini</a>
    </div>
    <div class="block-login-content">
        <h1>Sign in</h1>
        @include('notification')
        {{ Form::open(array('route' => 'auth.login.process','id' => 'signinForm')) }}
            <div class="form-group">
                <input type="text" name="username" class="form-control" placeholder="Your Username"/>
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Your Password"/>
            </div>
            <div class="pull-left">
                <div class="checkbox">
                    <label><input type="checkbox" name="remember_me"> Keep me signed in</label>
                </div>
            </div>
            <div class="pull-right">
                <a href="#">Forgot password?</a>
            </div>

            <button class="btn btn-primary btn-block" type="submit">Sign in</button>
        {{ Form::close() }}
        <div class="sp"></div>

      	<div style="text-align:center;">
            © All Rights Reserved Highly Succeed 2014
        </div>
    </div>
</div>
@stop

@section('bottom_script')

<script type="text/javascript">
$("#signinForm").validate({
    rules: {
        username    : "required",
        password    : "required"
    },
    messages: {
        username    : "Please enter your username",
        password    : "Please enter your password"
    }
});
</script>

@stop