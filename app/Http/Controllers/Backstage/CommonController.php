<?php

namespace App\Http\Controllers\Backstage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommonController extends Controller
{
    /**
     * 后台首页
     * @author Albin Wong 2019-02-19
     * @return [type] [description]
     */
    public function index()
    {
        return view('backstage.index');
    }

    /**
     * 后台图集
     * @author Albin Wong 2019-02-19
     * @return [type] [description]
     */
    public function gallery()
    {
        
        return view('backstage.gallery');
    }
    
    /**
     * 后台收件箱
     * @author Albin Wong 2019-02-19
     * @return [type] [description]
     */
    public function mess()
    {
        return view('backstage.inbox');
    }

}
