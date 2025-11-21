<?php

namespace App\Http\Controllers\Notice;

use App\Http\Controllers\Controller;
use App\Models\WebGeneralNotice;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    public function list()
    {
        $title = "নোটিশ তালিকা ";
        $notices = WebGeneralNotice::where('status',1)->get();
        return view('notice.list',compact('title','notices'));
    }
    public function showNotice($id)
    {
        $title = "নোটিশ বোর্ড ";
        $notice = WebGeneralNotice::where('status',1)->where('id',$id)->first();
        return view('notice.show',compact('title','notice'));
    }
}
