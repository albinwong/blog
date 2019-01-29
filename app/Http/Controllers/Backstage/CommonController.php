<?php

namespace App\Http\Controllers\Backstage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommonController extends Controller
{
    public function index()
    {
        return view('backstage.index');
    }

    public function gallery()
    {
    	return view('backstage.gallery');
    }
}
