<?php
namespace App\Http\Controllers\Notice;

use App\Http\Controllers\Controller;
use App\Models\WebGeneralNotice;

class NoticeController extends Controller
{
    public function list()
    {
        $title   = "নোটিশ তালিকা ";
        $notices = WebGeneralNotice::where('status', 1)->get();
        return view('notice.list', compact('title', 'notices'));
    }
    public function showNotice($id)
    {
        $title  = "নোটিশ বোর্ড ";
        $notice = WebGeneralNotice::where('status', 1)->where('id', $id)->first();
        return view('notice.show', compact('title', 'notice'));
    }
    public function download($id)
    {
        $notice = WebGeneralNotice::findOrFail($id);

        if (! $notice->attachment) {
            abort(404, 'File not found');
        }

        $finfo    = finfo_open();
        $mimeType = finfo_buffer($finfo, $notice->attachment, FILEINFO_MIME_TYPE);

        return response($notice->attachment)
            ->header('Content-Type', $mimeType)
            ->header('Content-Disposition', 'inline; filename="notice_file"');
    }
}
