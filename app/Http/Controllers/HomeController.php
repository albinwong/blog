<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\Posts;
use App\Model\Types;
use App\Model\PostTagRelation;

class HomeController extends Controller
{
    public function index()
    {
        // $tags = Types::select('id', 'name')->where('status', 1)->orderby('id', 'asc')->get();
        $articles = Posts::select('id', 'title', 'intro', 'created_at')->where('publish_status', 'published')->orderby('created_at', 'desc')->paginate(10);
        $sidebar = 'home';
        return view('exclusive/index', compact('articles', 'sidebar'));
    }

    public function single($pid = 0)
    {
        $data = Posts::where('publish_status', 'published')->findOrFail($pid);
        $tags = PostTagRelation::where('pid', $pid)->get(['tid'])->toArray();
        $tags = array_column($tags, 'tid');
        $tags = Types::select('id', 'name')->where('status', 1)->whereIn('id', $tags)->get();
        // dd($tags);
        $sidebar = 'archive';
        return view('exclusive/single', compact('data', 'sidebar', 'tags'));
    }
}
