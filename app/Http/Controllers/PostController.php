<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
        public function store(Request $request)
        {
            // リクエストパラメータから取得した値をもとにPostを作成する
            return Post::create($request->all());
        }
}
