<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Auth;
use App\Models\Customer;
class CustomerController extends Controller
{
    public function register() {
        return view('register');
    }
    public function check_register() {
        request()->validate([
            'name' => 'required',
            'email' => 'required|email|unique:account',
            'password' => 'required',
            'confirm_password' => 'required|same:password',
        ]);
        $data = request()->all('name', 'email', 'phone', 'address');
        $data['password'] = Hash::make(request('password'));
        Customer::create($data);
        return redirect()->route('home.login');
    }
    public function login() {
        return view('login');
    }
    public function check_login() {
        request()->validate([
            'email' => 'required|email|exists:account',
            'password' => 'required',
        ],[
            'email.required'=>'Vui lòng nhập địa chỉ email',
            'email.required'=>'Vui lòng nhập mật khẩu'
        ]);
        if(Auth::guard('cus')->attempt(request()->only('email', 'password'))) {
            return redirect()->route('home.index');
        } else {
            return redirect()->back();
        }
    }
    public function logout() {
        Auth::guard('cus')->logout();
        session()->flush();
        return redirect()->route('home.login');
    }
}
