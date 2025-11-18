<?php

namespace App\Http\Controllers;

use App\Models\WebSchoolSetting;
use Illuminate\Http\Request;
use DB;

class ContactController extends Controller
{
public function contact(){
$title="যোগাযোগ ";
dd(DB::table('web_school_settings')->first());
$contact =WebSchoolSetting::first();
return view('contact',compact('title','contact'));

}
}
