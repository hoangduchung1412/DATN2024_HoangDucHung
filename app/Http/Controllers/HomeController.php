<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
use App\Models\Comment;
use App\Mail\ContactEmail;
use Mail;
use Auth;
class HomeController extends Controller
{
    //
    public function index() {
        $cat_prd = Category::orderBy('name', 'ASC')->limit(4)->get();
        $sliders = Post::orderBy('id', 'DESC')->limit(8)->get();
        $new_posts_big = Post::orderBy('id', 'DESC')->limit(3)->get();
        $new_posts_medium = Post::orderBy('id', 'DESC')->limit(6)->get();
        $hot_posts = Post::orderBy('title', 'ASC')->limit(5)->get();
        $out_posts = Post::orderBy('title', 'DESC')->limit(10)->get();
        $most_view_posts = Post::orderBy('id', 'DESC')->limit(10)->get();

        $content_list_news = Post::where('category_id', 1, "DESC")->limit(10)->get();
        $recently_posts = Post::orderBy('created_at', 'DESC')->limit(100)->get();
        return view('home', compact('sliders', 'cat_prd', 'new_posts_big', 'new_posts_medium', 'most_view_posts', 'hot_posts', 'out_posts', 'content_list_news', 'recently_posts'));
    }
    public function post(Post $post) {
        $related_posts =  Post::orderBy('id', 'DESC')->limit(10)->get();
        $comments = Comment::where('post_id', $post->id)->orderBy('id', 'DESC')->get();
        $most_view_posts = Post::orderBy('id', 'DESC')->limit(10)->get();
        return view('post', compact('post', 'related_posts', 'comments', 'most_view_posts'));
    }
    public function category(Category $category) {
        $post_cat = Post::where('category_id', $category->id)->paginate(20);
        $most_view_posts = Post::orderBy('id', 'DESC')->limit(10)->get();
        return view('category', compact('category', 'post_cat', 'most_view_posts'));
    }
    public function post_comment($p_id) {
        $data = request()->all('comment');
        $data['post_id'] = $p_id;
        $data['user_id'] = Auth::guard('cus')->id();
        if(Comment::create($data)) {
            return redirect()->back();
        }
        return redirect()->back();
    }
    public function contact() {
        return view('contact');
    }
}
