<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\Posts;

class HomeController extends Controller
{
    public function index()
    {
        // $tags = Types::select('id', 'name')->where('status', 1)->orderby('id', 'asc')->get();
        $articles = Posts::select('id', 'title', 'intro', 'created_at')->where('publish_status', 'published')->orderby('created_at', 'desc')->paginate(10);
        return view('exclusive/index', compact('articles'));
    }
}
