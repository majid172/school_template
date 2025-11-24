<?php
namespace App\Http\Controllers;

use App\Models\WebAboutUs;
use App\Models\WebBanner;
use App\Models\WebBlog;
use App\Models\WebGeneralNotice;
use App\Models\WebMessage;
use App\Service\TeacherService;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    protected $teacherService;

    public function __construct(TeacherService $teacherService)
    {
        $this->teacherService = $teacherService;
    }

    public function home()
    {

        $banners  = WebBanner::where('status', 1)->orderBy('order', 'asc')->get();
        $about    = WebAboutUs::first();
        $messages = WebMessage::get();
        $notices  = WebGeneralNotice::limit(4)->orderBy('created_at', 'desc')->get();
        $teachers = $this->teacherService->list(4);
        $galleries = DB::table('web_gallery_images')->where('status',1)->get(); 
        $blogs    = WebBlog::where('status', 1)->limit(3)->get();

        return view('home', compact('about', 'messages', 'notices', 'teachers', 'banners', 'blogs','galleries'));
    }
}
