<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GalleryController extends Controller
{
    public function list()
    {
        $title = "গ্যালারি";
        $galleries = DB::table('web_gallery_images')->where('status',1)->get()->toArray(); 
        // dd($galleries);
        return view('gallery',compact('title','galleries'));
    }
}
