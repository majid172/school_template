<?php

namespace App\Http\Controllers;

use App\Models\WebAboutUs;
use App\Models\WebBanner;
use App\Models\WebGeneralNotice;
use App\Models\WebMessage;
use App\Service\TeacherService;

class HomeController extends Controller
{
    protected $teacherService;

    public function __construct(TeacherService $teacherService)
    {
        $this->teacherService = $teacherService;
    }

    public function home()
    {
        $banners = WebBanner::get();
        $about = WebAboutUs::first();
        $messages = WebMessage::get();
        $notices = WebGeneralNotice::limit(4)->orderBy('created_at', 'desc')->get();
        $teachers = $this->teacherService->list(4);

        //  dd($teachers->toArray());
        return view('home', compact('about', 'messages', 'notices', 'teachers','banners'));
    }
}
