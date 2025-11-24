<?php

namespace App\Service;

use App\Repository\GalleryRepository;

class GalleryService
{
    public $galleryRepository;
    public function __construct(GalleryRepository $galleryRepository)
    {
        $this->galleryRepository = $galleryRepository;
    }
    public function list($limit=null)
    {
        return $this->galleryRepository->list($limit);
    }
}
