<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\Types;
use App\Model\Posts;
use App\Model\Subscribe;
use App\Model\Contact;

class CommonController extends Controller
{
    public static function tags()
    {
        $tags = Types::select('id', 'name')->where('status', 1)->orderby('id', 'asc')->get();
        return $tags;
    }

    public static function lastArticle()
    {
        $article = Posts::select('id', 'title')->where('publish_status', 'published')->orderby('created_at', 'desc')->take(4)->get();
        return $article;
    }

    /**
     * Article subscribe
     * @author Albin Wong 2019-03-22
     * @param  Request $request [description]
     */
    public function subscribe(Request $request)
    {
        $data = [];
        $data['email'] = $request->input('email');
        $data['token'] = sha1(time().$data['email']);
        $result = Subscribe::create($data);
        if ($result) {
            return response()->json(['status' => true, 'msg' => 'Subscribe Success']);
        } else {
            return response()->json(['status' => false, 'msg' => 'Subscribe Error']);
        }
    }


    /**
     * Contact Message
     * @author Albin Wong 2019-03-28
     * @param  Request $request [description]
     */
    public function contact(Request $request)
    {
        $data = $request->only(['name', 'email', 'subject', 'content']);
        $result = Contact::create($data);
        if ($result) {
            return response()->json(['status' => true, 'msg' => 'Ok']);
        } else {
            return response()->json(['status' => false, 'msg' => 'Fail!']);
        }
    }
}
