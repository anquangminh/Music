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
                    {{-- Form register --}}
                    <form class="form-signup" method="POST" action="{{ url('user-store') }}">
                        @csrf
                        <h1 class="h3 mb-3 font-weight-normal" style="text-align: center">
                            Sign up</h1>
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

                        <p style="text-align:center">OR</p>

                        <input
                            type="text"
                            id="user-name"
                            name="username"
                            class="form-control"
                            placeholder="User name"
                            required=""
                            autofocus="">
                        <input
                            type="email"
                            id="user-email"
                            name="email"
                            class="form-control"
                            placeholder="Email address"
                            required="required"
                            autofocus="">
                        <input
                            name="password"
                            type="password"
                            id="user-pass"
                            class="form-control"
                            placeholder="Password"
                            required="required"
                            autofocus="">
                        <input
                            name="confirm_password"
                            type="password"
                            id="user-repeatpass"
                            class="form-control"
                            placeholder="Confirm Password"
                            required="required"
                            autofocus="">

                        <button class="btn btn-success btn-block" type="submit">
                            <i class="fas fa-user-plus"></i>
                            Sign Up</button>
                            <hr>
                            <button class="btn btn-primary btn-block" type="button" id="btn-signup">
                                <i class="fas fa-sign-in-alt"></i>
                                <a style="display: inline-block; color: #fff; text-decoration: none" href="{{ url('user-login') }}">Sign in</a></button>
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