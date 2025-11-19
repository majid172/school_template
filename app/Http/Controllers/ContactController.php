<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function contact()
    {
        $title = "যোগাযোগ";
        $contact = DB::table('web_school_seetings')->first();
        return view('contact',compact('title','contact'));
        
    }
}
