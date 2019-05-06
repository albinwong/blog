<?php

namespace App\Http\Controllers\Backstage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\Posts;
use App\Model\Types;
use App\Model\PostTagRelation;

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

    /**
     * Article Create and Edit
     * @author Albin Wong 2019-03-21
     * @param  Request $request [description]
     * @return
     */
    public function edit(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->except(['_token', 'editormd-html-code', 'id', 'tags_id']);
            $data['content_html_code'] = $request->input('editormd-html-code');
            if (!$request->input('id')) {
                $result = Posts::create($data);
                if ($result) {
                    $this->postTag($result->id, $request->input('tags_id'));
                    return redirect('/admin/posts/index')->with('info', '文章添加成功!');
                } else {
                    return back()->with('info', 'Oops, 文章添加失败!');
                }
            } else {
                if (Posts::find($request->input('id'))->update($data)) {
                    $this->postTag($request->input('id'), $request->input('tags_id'));
                    return redirect('/admin/posts/index')->with('info', '文章修改成功!');
                } else {
                    return back()->with('info', 'Oops, 文章修改失败!');
                }
            }
        } else {
            $defaultTag = [];
            if ($request->input('id')) {
                $res = Posts::find($request->input('id'));
                $defaultTag = PostTagRelation::where('pid', $request->input('id'))->pluck('tid')->toArray();
            }
            $tags = Types::select('id', 'name')->where('status', 1)->orderby('id', 'asc')->get();
            return view('backstage.posts.edit', compact('res', 'tags', 'defaultTag'));
        }
    }

    /**
     * Adjust Article Tags Incidence Relation
     * @author Albin Wong 2019-03-21
     * @param  string      $postId Article Primary ID
     * @param  Array|array $tag    Tag Primary ID
     * @return
     */
    private function postTag($postId = '0', Array $tag = [])
    {
        foreach ($tag as $value) {
            $data[] = ['tid' => $value, 'pid' => $postId];
        }
        PostTagRelation::where('pid', $postId)->delete();
        PostTagRelation::insert($data);
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

    /**
     * Editormd Upload Image
     * @author Albin Wong 2019-05-06
     * @param  Request $request
     * @return Json
     */
    public function uploadimage(Request $request)
    {
        if ($request->file('editormd-image-file')) {
            $path="uploads/article/".date('Ymd');
            $pic = $request->file('editormd-image-file');
            if ($pic->isValid()) {
                $newName=md5(time() . rand(0, 10000)).".".$pic->getClientOriginalExtension();
                if ($pic->move($path, $newName)) {
                    $url = asset($path.'/'.$newName);
                    $message = '';
                } else {
                    $message="系统异常，文件保存失败";
                }
            } else {
                $message = "文件无效";
            }
        } else {
            $message="Not File";
        }
        $data = array(
            'success' => empty($message) ? 1 : 0,  //1：上传成功  0：上传失败
            'message' => $message,
            'url' => !empty($url) ? $url : ''
        );

        header('Content-Type:application/json;charset=utf8');
        exit(json_encode($data));


    }
}
