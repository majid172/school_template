<?php
namespace App\Http\Controllers\Blogs;

use App\Http\Controllers\Controller;
use App\Models\WebBlog;

class BlogController extends Controller
{

    public function list()
    {
        $title = "সংবাদ/ব্লগ তালিকা ";
        $blogs = WebBlog::where('status',1)->get();
        return view('blogs.list',compact('title','blogs'));
    }
    public function show(WebBlog $blog, $slug)
    {
        $title = "সংবাদ/ব্লগ";
        return view('blogs.show', compact('title','blog'));
    }
}
