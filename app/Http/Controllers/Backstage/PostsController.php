<?php

namespace App\Http\Controllers\Backstage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{
    public function index()
    {
        echo "文章列表";
        die;
        // return view('backstage.posts.index');
    }

    public function edit()
    {
        echo "文章编辑";
        die;
        // return view('backstage.posts.edit');
    }

    public function del()
    {
        echo 'Del Article';
    }
}
