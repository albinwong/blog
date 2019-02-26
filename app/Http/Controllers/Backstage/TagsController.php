<?php

namespace App\Http\Controllers\Backstage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Types;

class TagsController extends Controller
{
    public function index()
    {
        $data = Types::paginate(10);
        return view('backstage.tags.index', compact('data'));
    }

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
     * 删除分类
     */
    public function del(Request $request)
    {
        if ($request->ajax() && $request->input('_token') == csrf_token()) {
            $exists = Org_Type::where('tid', $request->input('id'))->first();
            if ($exists) {
                return response()->json(['status'=>false,'mesg'=>'该分类下已被机构选择,不能删除!']);
            } else {
                $data = Type::findOrFail($request->input('id'));
                if (Type::destroy($data->id)) {
                    return response()->json(['status'=>true,'mesg'=>'分类删除成功!']);
                } else {
                    return response()->json(['status'=>false,'mesg'=>'分类删除失败!']);
                }
            }
        } else {
            return response()->json(['status'=>false,'mesg'=>'非法请求!']);
        }
    }

}
