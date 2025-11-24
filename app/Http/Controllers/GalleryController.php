<?php

namespace App\Http\Controllers;

use App\Service\GalleryService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GalleryController extends Controller
{
    protected $galleryService;

    public function __construct(GalleryService $galleryService)
    {
      
        $this->galleryService = $galleryService;

    }
    public function list()
    {
        $title = "গ্যালারি";
        $galleries = $this->galleryService->list(); 
        return view('gallery',compact('title','galleries'));
    }
}
