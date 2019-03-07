<?php

namespace App\Http\Controllers\Backstage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\Posts;

class PostController extends Controller
{
    public function index()
    {
        $data = Posts::select('id', 'title', 'publish_status', 'created_at')->orderby('id', 'desc')->paginate(10);
        return view('backstage.posts.index', compact('data'));
    }

    public function edit(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->except(['_token', 'editormd-html-code', 'id']);
            $data['content_html_code'] = $request->input('editormd-html-code');
            // dd($data);
            if (!$request->input('id')) {
                Posts::create($data);
            } else {
                Posts::find($request->input('id'))->update($data);
            }
        } else {
            if ($request->input('id')) {
                $res = Posts::find($request->input('id'));
            }
            return view('backstage.posts.edit', compact('res'));
        }
    }

    public function del()
    {
        dd('删除文章');
    }
}
