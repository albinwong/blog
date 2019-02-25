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
        return view('backstage.tags', compact('data'));
        /*if ($request->isMethod('post')) {
            if ($request->input('_token') == csrf_token()) {
                $data['icon'] = $request->input('icon') ? $request->input('icon') : '';
                $data['type_name'] = $request->input('className');
                $data['level'] = $request->input('level') ? $request->input('level') : 1;
                $data['path'] = $request->input('path') ?  $request->input('path') : 0;
                if ($request->input('id')) {
                    $res = Type::findOrFail($request->input('id'));
                    if ($res->update($data)) {
                        if (\Cache::has('type_nav_index')) {
                            \Cache::forget('type_nav_index');
                        }
                        return back()->with('info', '分类修改成功!');
                    } else {
                        return back()->with('error', '分类修改失败!');
                    }
                } else {
                    if (Type::create($data)) {
                        if (\Cache::has('type_nav_index')) {
                            \Cache::forget('type_nav_index');
                        }
                        return back()->with('info', '分类添加成功!');
                    } else {
                        return back()->with('error', '分类添加失败!');
                    }
                }
            } else {
                return back()->with('error', '参数错误!');
            }
        } else {
            $data = Type::where('level', 1)->select('id', 'type_name', 'icon')->get();
            return view('backstage.tags', compact('data'));
        }*/
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
