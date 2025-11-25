<?php

namespace App\Http\Controllers;

use App\Models\SchoolClass;
use App\Models\WebAboutUs;
use App\Models\WebBanner;
use App\Models\WebBlog;
use App\Models\WebGeneralNotice;
use App\Models\WebMessage;
use App\Service\GalleryService;
use App\Service\TeacherService;

class HomeController extends Controller
{
    protected $teacherService;

    protected $galleryService;

    public function __construct(TeacherService $teacherService, GalleryService $galleryService)
    {
        $this->teacherService = $teacherService;
        $this->galleryService = $galleryService;

    }

    public function home()
    {
        $banners = WebBanner::where('status', 1)->orderBy('order', 'asc')->get();
        $about = WebAboutUs::first();
        $messages = WebMessage::get();

        $notices = WebGeneralNotice::limit(4)->orderBy('created_at', 'desc')->get();
        $teachers = $this->teacherService->list(4);
        $galleries = $this->galleryService->list();
        $classWiseStudent = SchoolClass::withCount(['enrollments'])->get();

        $blogs = WebBlog::where('status', 1)->limit(3)->get();

        return view('home', compact('about', 'messages', 'notices', 'teachers', 'banners', 'blogs', 'galleries','classWiseStudent'));
    }
}
