@extends('layouts.master')

@section('title', 'Login-Register')

@section('style-libraries')

@stop

@section('style-customize')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
@stop

@section('content')
  <nav style="margin-top: 94px" class="navbar navbar-expand-lg navbar-dark bg-primary">
      <a class="navbar-brand" href="#">Laravel 6 User Registration and Login</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
              <a class="nav-link text-white"> Welcome: {{ ucfirst(Auth()->user()->username) }} </a>
          </li>
        </ul>
      </div>
    </nav>
@stop

@section('script-libraries')

@stop

@section('script-customize')
    
@stop