<?php

namespace App\Http\Controllers;

class PostController extends Controller
{
    /**
     * 一覧画面
     *
     * @return void
     */
    public function index()
    {
        return view('posts.index', [
            'url' => route('post.index'),
        ]);
    }
}
