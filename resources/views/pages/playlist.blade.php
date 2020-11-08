@extends('layouts.master')

@section('title', 'Playlist')

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
      <div id="user-statistic" class="artist_detail wapper pt20">
        <div class="container artist wapper d-flex justify-content-center align-items-center">
          <div class="item-anav ">
            <a href="{{ url('user-favorite') }}">Nhạc yêu thích</a>
          </div>
          <div class="item-anav active-anav ">
            <a href="{{ url('user-playlist') }}">Playlist</a>
          </div>
          <div class="item-anav ">
            <a href="{{ url('user-listen') }}">Nhạc đã nghe</a>
          </div>
        </div>
        <div class="show-playlist mt-5 container pb-5">
          <div class="d-flex justify-content-between align-items-center">
              <div class="title-playlist">Playlist của tôi</div>
              <div class="play-playlist">
                  <a data-toggle="modal" data-target="#myModal" class="a-playlist d-flex align-items-center justify-content-lg-between" href="#">
                      <i class="fad fa-plus-circle"></i>
                      <span>Tạo mới playlist</span>
                  </a>
              </div>
          </div>
          <div class="mt-5">
            <div class="row">
              <div class="col-lg-3">
                <div class="img-playlist">
                  <img width="90%" src="{{ url('image/playlist-default.png') }}" alt="">
                </div>
                <div class="name-playlist mt-2">Haha</div>
                <div class="number-playlist mt-2">3 bài hát</div>
              </div>
              <div class="col-lg-3">
                <div class="img-playlist">
                  <img width="90%" src="{{ url('image/playlist-default.png') }}" alt="">
                </div>
                <div class="name-playlist mt-2">Haha</div>
                <div class="number-playlist mt-2">3 bài hát</div>
              </div>
              <div class="col-lg-3">
                <div class="img-playlist">
                  <img width="90%" src="{{ url('image/playlist-default.png') }}" alt="">
                </div>
                <div class="name-playlist mt-2">Haha</div>
                <div class="number-playlist mt-2">3 bài hát</div>
              </div>
              <div class="col-lg-3">
                <div class="img-playlist">
                  <img width="90%" src="{{ url('image/playlist-default.png') }}" alt="">
                </div>
                <div class="name-playlist mt-2">Haha</div>
                <div class="number-playlist mt-2">3 bài hát</div>
              </div>
            </div>
          </div>
      </div>
      </div>
  </div>
  <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <form id="newModalForm" action="{{ url('create-playlist') }}">
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">New Playlist</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <input required type="text" name="name" class="form-control" aria-describedby="emailHelp" placeholder="Enter name playlist">
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
          <button type="button" data-dismiss="modal" class="btn btn-danger">Close</button>
        </div>
      </form>
      </div>
    </div>
  </div>
@stop

@section('script-libraries')

@stop

@section('script-customize')
<script>
  $(function() {

  $("#newModalForm").validate({
    rules: {
      name: {
        required: true,
        minlength: 8
      },
      action: "required"
    },
    messages: {
      name: {
        required: "Please enter some data",
        minlength: "Your data must be at least 8 characters"
      },
      action: "Please provide some data"
    }
  });
  });
</script>
@stop