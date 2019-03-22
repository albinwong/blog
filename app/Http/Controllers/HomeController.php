<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\Types;

class HomeController extends Controller
{
    public function index()
    {
        // $tags = Types::select('id', 'name')->where('status', 1)->orderby('id', 'asc')->get();
        return view('exclusive/index');
    }
}
