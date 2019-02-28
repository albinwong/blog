<?php

namespace App\Http\Controllers\Backstage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index()
    {
        dd('文章列表');
    }

    public function edit()
    {
        return view('backstage.posts.edit');
    }

    public function del()
    {
        dd('删除文章');
    }
}
