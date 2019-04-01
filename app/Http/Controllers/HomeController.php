<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\Posts;
use App\Model\Types;
use App\Model\PostTagRelation;

use Hashids;

class HomeController extends Controller
{
    protected $cateList = [
                        1 => '架构',
                        '互联网',
                        '运维',
                        '数据库',
                        '前端',
                        '后端',
                        '研发管理',
                        '安全',
                        '区块链',
                        '资讯',
                        '计算机理论与基础',
                        '其他',
                    ];

    public function index()
    {
        $articles = Posts::select('id', 'title', 'intro', 'cate_id', 'page_view', 'created_at')->where('publish_status', 'published')->orderby('created_at', 'desc')->paginate(10);
        $sidebar = 'home';
        $cateList = $this->cateList;
        return view('exclusive/index', compact('articles', 'sidebar', 'cateList'));
    }

    public function single($pid = 0)
    {
        $pid = count(Hashids::connection('recommend')->decode($pid)) ? Hashids::connection('recommend')->decode($pid)[0] : abort(404);
        $data = Posts::where('publish_status', 'published')->findOrFail($pid);
        $data->page_view += 1;
        $data->save();
        $tags = PostTagRelation::where('pid', $pid)->get(['tid'])->toArray();
        $tags = array_column($tags, 'tid');
        $tags = Types::select('id', 'name')->where('status', 1)->whereIn('id', $tags)->get();
        $sidebar = 'archive';
        return view('exclusive/single', compact('data', 'sidebar', 'tags'));
    }

    public function contact()
    {
        $sidebar = 'contact';
        return view('exclusive/contact', compact('sidebar'));
    }

    public function archive($type = 'list', $cid = 0)
    {
        $cid = count(Hashids::decode($cid)) ? Hashids::decode($cid)[0] : abort(404);
        if (!in_array($type, ['list', 'tag'])) {
            abort(404);
        }
        $sidebar = 'archive';
        $cateName = '';
        $articles = Posts::select('id', 'title', 'intro', 'cate_id', 'page_view', 'created_at')->where('publish_status', 'published');
        if ($type == 'list') {
            if (array_key_exists($cid, $this->cateList)) {
                $cateName = $this->cateList[$cid];
            } else {
                abort(404, '么有找到相关的页面呀!!!');
            }
            $articles = $articles->where('cate_id', $cid);
        } else {
            $articlesId = PostTagRelation::where('tid', $cid)->get(['pid'])->toArray();
            $articlesId = array_column($articlesId, 'pid');
            $tags = Types::where('status', 1)->findOrFail($cid);
            $tags->frequency = $tags->frequency+1;
            $tags->save();
            $cateName = $tags->name;
            // dd($cateName);
            $articles = $articles->whereIn('id', $articlesId);
        }
        $articles = $articles->orderby('created_at', 'desc')->paginate(10);
        $cateList = $this->cateList;
        return view('exclusive/archive', compact('sidebar', 'articles', 'cateName', 'cateList'));
    }

}
