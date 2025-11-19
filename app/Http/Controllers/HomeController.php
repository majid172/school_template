<?php

namespace App\Http\Controllers;

use App\Models\WebGeneralNotice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function home()
    {
        $notices = WebGeneralNotice::limit(4)->orderBy('created_at','desc')->get();
        return view('home',compact('notices'));
    }
}
