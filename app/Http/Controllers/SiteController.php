<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post; //Postモデルを使うためのuse宣言

class SiteController extends Controller
{
    public function index(Request $request)
    {
        // return view('site/top'); 
        $posts = Post::all(); // 全ての投稿を取得
        return view('site/top', ['posts' => $posts]); // 'products'ビューに$postsを渡す
    }

    public function create(Request $request)
    {
        return view('site.top');
    }
}