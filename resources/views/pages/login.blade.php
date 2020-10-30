@extends('layouts.master')

@section('title', 'Login-Register')

@section('style-libraries')

@stop

@section('style-customize')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
@stop

@section('content')
    <div style="margin-top: 94px; height: 650px;" id="content">
        <div class="container  d-flex align-items-center">
            <div style="width: 500px; margin: 0 auto;" class="login">
                <div id="logreg-forms">
                    {{-- Form login --}}
                    <form class="form-signin" method="POST" action="{{ url('login') }}">
                        @csrf
                        <h1 class="h3 mb-3 font-weight-normal" style="text-align: center">
                            Sign in</h1>
                        <div class="social-login">
                            <button class="btn facebook-btn social-btn" type="button">
                                <span>
                                    <i class="fab fa-facebook-f"></i> Sign in with Facebook</span>
                            </button>
                            <button class="btn google-btn social-btn" type="button">
                                <span>
                                    <i class="fab fa-google-plus-g"></i>
                                    Sign in with Google+</span>
                            </button>
                        </div>
                        <p style="text-align:center">
                            OR
                        </p>
                        <input
                            name="email"
                            type="email"
                            id="inputEmail"
                            class="form-control"
                            placeholder="Email address"
                            required=""
                            autofocus="">
                        <input
                            name="password"
                            type="password"
                            id="inputPassword"
                            class="form-control"
                            placeholder="Password"
                            required="">

                        <button class="btn btn-success btn-block" type="submit">
                            <i class="fas fa-sign-in-alt"></i>
                            Sign in</button>
                        <a href="#" id="forgot_pswd">Forgot password?</a>
                        <hr>
                        <!-- <p>Don't have an account!</p> -->
                        <button class="btn btn-primary btn-block" type="button" id="btn-signup">
                            <i class="fas fa-user-plus"></i>
                            <a style="display: inline-block; color: #fff; text-decoration: none" href="{{ url('user-register') }}">Sign up New Account</a></button>
                    </form>
                    @if ($errors->any())
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li class="error">{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif 
                </div>
            </div>
        </div>
    </div>
@stop

@section('script-libraries')

@stop

@section('script-customize')
@stop