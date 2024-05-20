@extends('layouts.site')
@section('main')
<div class="box-login">
    <div class="container">
        <div class="wrap-login">
            <div class="tab-info-login">
                <form method="POST" action="" class="content-info-login">
                    @csrf
                    <div class="back-home"><a href="{{route('home.index')}}"><i class="fa-solid fa-arrow-left"></i><span>Quay về trang chủ</span></a></div>
                    <h3>Đăng ký</h3>
                    <label for="acc">Tên người dùng</label>
                    <input type="text" name="name" required>
                    @error('name') 
                      <small>{{$message}}</small>
                    @enderror
                    <label for="acc">Email</label>
                    <input type="email" name="email" required>
                    @error('email') 
                      <small>{{$message}}</small>
                    @enderror
                    <label for="acc">Số điện thoại</label>
                    <input type="text" name="phone" required>
                    <label for="acc">Địa chỉ</label>
                    <input type="text" name="address" required>
                    <label for="pass">Mật khẩu</label>
                    <input type="password" name="password" required>
                    @error('password') 
                      <small>{{$message}}</small>
                    @enderror
                    <label for="pass">Xác nhân mật khẩu</label>
                    <input type="password" name="confirm_password">
                    @error('confirm_password') 
                      <small>{{$message}}</small>
                    @enderror
                    <button class="btn-login">Đăng ký</button>
                    <div class="support">
                        <div class="toLogin">
                            Bạn đã có tài khoản?
                            <a href="{{route('home.login')}}">Đăng nhập</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection