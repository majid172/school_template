<?php
namespace App\Repository;

use Illuminate\Support\Facades\DB;

class GalleryRepository
{
    /**
     * Create a new class instance.
     */
    public function list($limit)
    {
        $galleries = DB::table('web_gallery_images')->where('status', 1)->limit($limit)->get();
        return $galleries;
    }
}
