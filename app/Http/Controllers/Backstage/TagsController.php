<?php

namespace App\Http\Controllers\Backstage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\Types;

class TagsController extends Controller
{
    /**
     * Tags List
     * @author Albin Wong 2019-02-27
     * @return
     */
    public function index()
    {
        $data = Types::paginate(10);
        return view('backstage.tags.index', compact('data'));
    }

    /**
     * Edit or Create Some of Tag
     * @author Albin Wong 2019-02-27
     * @param  Request $request [description]
     * @return
     */
    public function edit(Request $request)
    {
        if ($request->isMethod('post')) {
            $this->validate($request, [
                'name'=>'required',
                'status'=>'required',
                'frequency'=>'required',
            ], [
                'name.required'=>'标签名必填!',
                'status.required'=>'状态必选!',
                'frequency.required'=>'权重必填!',
            ]);
            $data = $request->except(['_token']);
            if ($request->input('id')) {
                if (Types::where('id', $request->input('id'))->update($data)) {
                    return redirect('/admin/tags')->with('info', '标签更新成功!');
                } else {
                    return redirect('/admin/tags')->with('info', 'Oops, 标签更新失败!');
                }
            } else {
                if (Types::create($data)) {
                    return redirect('/admin/tags')->with('info', '标签添加成功!');
                } else {
                    return back()->with('info', 'Oops, 标签添加失败!');
                }
            }
        } else {
            if ($request->input('id')) {
                $res = Types::find($request->input('id'));
            }
            return view('backstage.tags.edit', compact('res'));
        }
    }

    /**
     * Del Tag
     * @author Albin Wong 2019-02-27
     * @param  Request $request [description]
     * @param  Number  $id    Primary Key of Tag Record
     * @return Json           Status/Message
     */
    public function del(Request $request, $id = 0)
    {
        if ($request->ajax() && $request->input('_token') == csrf_token()) {
            /*$exists = Org_Type::where('tid', $request->input('id'))->first();
            if ($exists) {
                return response()->json(['status'=>false,'mesg'=>'该标签下已存在文章,不能删除!']);
            } else {*/
            $data = Types::findOrFail($id);
            if (Types::destroy($data->id)) {
                return response()->json(['status'=>true,'msg'=>'标签删除成功!']);
            } else {
                return response()->json(['status'=>false,'msg'=>'标签删除失败!']);
            }
            // }
        } else {
            return response()->json(['status'=>false,'mesg'=>'非法请求!']);
        }
    }
}
