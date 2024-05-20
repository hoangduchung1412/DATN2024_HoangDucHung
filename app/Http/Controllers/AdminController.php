<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use App\Models\Account;
use App\Models\Comment;
class AdminController extends Controller
{
    //
    public function register() {
        return view('admin.register');
    }
    public function check_register() {
        request()->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'confirm_password' => 'required|same:password',
        ]);
        $data = request()->all('name', 'email');
        $data['password'] = bcrypt(request('password'));
        User::create($data);
        return redirect()->route('admin.login');
    }
    public function login() {
        return view('admin.login');
    }
    public function check_login() {
        request()->validate([
            'email' => 'required|email|exists:users',
            'password' => 'required',
        ]);
        $data = request()->only('email', 'password');
        if(Auth::attempt($data)) {
            $user = Auth::user();
            session(['name' => $user->name]);
            return redirect()->route('admin.dashboard');
        } else {
            return redirect()->back();
        }
    }
    public function logout() {
        Auth::logout();
        session()->flush();
        return redirect()->route('admin.login');
    }
    public function dashboard() {
        $post_count= Post::count();
        $account_count= Account::count();
        $comment_count = Comment::count();
        return view('admin.dashboard', compact('post_count', 'account_count', 'comment_count'));
    }
}
