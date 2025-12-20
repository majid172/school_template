<?php

namespace App\Http\Controllers;

use App\Models\WebAboutUs;
use App\Models\WebInstitutionInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AboutController extends Controller
{
    public function about()
    {
        $title = "প্রতিষ্ঠান সম্পর্কে";
        $about_us = WebAboutUs::first();
        $mission = WebInstitutionInfo::where('type','mission')->first();
        $vision = WebInstitutionInfo::where('type','vision')->first();
        $history = WebInstitutionInfo::where('type','history')->first();
        // $about = DB::table('web_institution_infos')->get()->toArray();
        // $content['objective'] = $webInstitution[0];
        // $content['mission'] = $webInstitution[1];
        // $content['vision'] = $webInstitution[2];
        // $content['history'] = $webInstitution[3];

        return view('about', compact('title','about_us','mission','history','vision'));
    }

    public function speech()
    {
        $title = "পরিচালকদের বাণী";
        $messages = DB::table('web_messages')->get();
        
        return view('principal_speech',compact('title','messages'));
    }
}
