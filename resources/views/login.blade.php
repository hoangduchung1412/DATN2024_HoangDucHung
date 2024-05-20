@extends('layouts.site')
@section('main')
<div class="box-login">
    <div class="container">
        <div class="wrap-login">
            <div class="tab-info-login">
                <form method="POST" action="" class="content-info-login">
                    <div class="back-home"><a href="{{route('home.index')}}"><i class="fa-solid fa-arrow-left"></i><span>Quay về trang chủ</span></a></div>
                    <h3>Đăng nhập</h3>
                    @csrf
                    <label for="acc">Tài khoản</label>
                    <input type="text" name="email" required>
                    @error('email') 
                      <small>{{$message}}</small>
                    @enderror
                    <label for="pass">Mật khẩu</label>
                    <input type="password" name="password" required>
                    @error('password') 
                      <small>{{$message}}</small>
                    @enderror
                    <div class="rememberPass">
                        <input type="checkbox" name="remember">
                        <label for="rememberPass">Nhớ mật khẩu</label>
                    </div>
                    <button class="btn-login">Đăng nhập</button>
                    <div class="social-loginPage">
                        <span>Hoặc đăng nhập bằng</span>
                        <div class="social-login">
                            <div class="social-login--facebook"><a href="{{ url('login/facebook')}}"><img src="{{ url('public/site') }}/images/fb-btn.svg"></a></div>
                            <div class="social-login--google"><a href=""><img src="{{ url('public/site') }}/images/gp-btn.svg"></a></div>
                        </div>
                    </div>
                    <div class="support">
                        <a href="">Quên mật khẩu?</a>
                        <div class="toRegister">
                            Bạn chưa có tài khoản?
                            <a href="{{route('home.register')}}">Đăng ký</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection