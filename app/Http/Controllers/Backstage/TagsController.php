<?php

namespace App\Http\Controllers\Backstage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Types;

class TagsController extends Controller
{
    public function index(Request $request)
    {
        $data = Types::paginate(10);
        return view('backstage.tags.index', compact('data'));
    }

    public function edit(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->except(['_token']);
            if (Types::create($data)) {
                return redirect('/admin/tags')->with('info', '分类添加成功!');
            } else {
                return back()->with('info', 'Oops, 标签添加失败!');
            }
        }
        return view('backstage.tags.edit');
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

    /**
     * 二级分类
     */
    public function subClass(Request $request)
    {
        $data = Type::where('level', 1)->select('id', 'type_name')->get();
        foreach ($data as $k => $v) {
            $data[$k]['child'] = Type::where('level', '2')->where('path', '0-'.$v['id'])->select('id', 'type_name')->get();
        }
        return view('vendor.ustars.cates.subclass', compact('data'));
    }
}
