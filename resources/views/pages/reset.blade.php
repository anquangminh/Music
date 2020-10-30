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
                    <form action="{{ url('reset') }}" class="form-reset">
                        @csrf
                        <input
                            type="email"
                            id="resetEmail"
                            class="form-control"
                            placeholder="Email address"
                            required=""
                            autofocus="">
                        <button class="btn btn-primary btn-block" type="submit">Reset Password</button>
                        <a href="#" id="cancel_reset">
                            <i class="fas fa-angle-left"></i>
                            Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop

@section('script-libraries')

@stop

@section('script-customize')
@stop