@extends('layouts.master')

@section('title', 'Favorite')

@section('style-libraries')

@stop

@section('style-customize')
<link rel="stylesheet" href="{{ asset('css/user.css') }}">
@stop

@section('content')
  <div style="margin-top: 94px" class="wrap-profile position-relative">
      <div class="img-page">
        <img width="100%" src="{{ asset('image/profile-default.png') }}" alt="">
      </div>
      <div class="position-absolute info-user d-flex">
        <a class="box-image" href="javascript:void(0);">
          <img src="{{ asset('image/user.png') }}" alt="" class="img-user">
        </a>
        <div class="user">
          <div class="user-name">{{ Auth()->user()->username }}</div>
          @if (Auth()->user()->active == 0)
          <div class="user-free">Tài khoản miễn phí</div>
          @else
          <div class="user-vip">Tài khoản vip</div>
          @endif
          <div class="action">
            @if (Auth()->user()->active == 0)
              <a href="#" class="register-vip">Đăng ký VIP</a>
            @endif
            <div class="change-cover">Thay ảnh nền</div>
          </div>
        </div>
      </div>
      <div id="user-statistic" class="artist_detail wapper">
        <div class="container artist wapper d-flex justify-content-center align-items-center">
          <div class="item-anav active-anav ">
            <a href="{{ url('user-favorite') }}">Nhạc yêu thích</a>
          </div>
          <div class="item-anav ">
            <a href="{{ url('user-playlist') }}">Playlist</a>
          </div>
          <div class="item-anav ">
            <a href="{{ url('user-listen') }}">Nhạc đã nghe</a>
          </div>
        </div>
        <div class="show-favorite mt-5 container pb-5">
            <div class="d-flex justify-content-between align-items-center">
                <div class="title-favorite">Bài hát yêu thích</div>
                <div class="play-favorite">
                    <a href="#">
                        <i class="fad fa-random"></i>
                        <span>Nghe tất cả</span>
                    </a>
                </div>
            </div>
            <div class="pl-5 mt-5">Bạn chưa có bài hát yêu thích nào</div>
        </div>
      </div>
  </div>
@stop

@section('script-libraries')

@stop

@section('script-customize')
    
@stop