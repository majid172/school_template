<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AboutController extends Controller
{
    public function about()
    {
        $title = "প্রতিষ্ঠান সম্পর্কে";
        $about = DB::table('web_institution_infos')->get()->toArray();
        $content['objective'] = $about[0];
        $content['mission'] = $about[1];
        $content['vision'] = $about[2];
        $content['history'] = $about[3];
        // dd($content['history']);
        return view('about', array_merge($content, compact('title')));
    }
}
