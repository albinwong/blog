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
        dd('文章编辑');
    }

    public function del()
    {
        dd('删除文章');
    }
}
