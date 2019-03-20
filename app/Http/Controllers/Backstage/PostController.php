<?php

namespace App\Http\Controllers\Backstage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\Posts;

class PostController extends Controller
{
    /**
     * Artilce Lists
     * @author Albin Wong 2019-03-20
     * @return
     */
    public function index()
    {
        $data = Posts::select('id', 'title', 'publish_status', 'created_at')->orderby('id', 'desc')->paginate(10);
        $postNum = \DB::table('posts')->select('publish_status', \DB::RAW('count(*) as num'))->groupBy('publish_status')->get();
        $postStatus = [
            'published' => '发布',
            'draft' => '草稿',
            'covert' => '隐藏',
            'original' => '原创',
            'reprinted' => '转载',
            'translate' => '翻译',
            'top' => '置顶',
        ];
        $total = 0;
        foreach ($postNum as $value) {
            $total += intval($value->num);
        }
        return view('backstage.posts.index', compact('data', 'postNum', 'total', 'postStatus'));
    }

    public function edit(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->except(['_token', 'editormd-html-code', 'id']);
            $data['content_html_code'] = $request->input('editormd-html-code');
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

    /**
     * Post Delete
     * @author Albin Wong 2019-03-19
     * @param  Request $request
     * @param  integer $id      Article ID
     * @return Response
     */
    public function del(Request $request, $pid = 0)
    {
        if ($request->ajax() && $request->input('_token') == csrf_token()) {
            $data = Posts::findOrFail($pid);
            if (Posts::destroy($data->id)) {
                return response()->json(['status'=>true,'msg'=>'标签删除成功!']);
            } else {
                return response()->json(['status'=>false,'msg'=>'标签删除失败!']);
            }
        } else {
            return response()->json(['status'=>false,'msg'=>'非法请求!']);
        }
    }
}
