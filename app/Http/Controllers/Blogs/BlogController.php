<?php

namespace App\Http\Controllers\Blogs;

use App\Http\Controllers\Controller;
use App\Models\WebBlog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function  show(WebBlog $blog)
{

return view('blogs.show',compact('blog'));
}
}
