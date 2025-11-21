<?php

namespace App\Service;

use App\Repository\TeacherRepository;

class TeacherService
{
    public $teacherRepository;
    public function __construct(TeacherRepository $teacherRepository)
    {
        $this->teacherRepository = $teacherRepository;
    }
    public function list($limit=null)
    {
        return $this->teacherRepository->list($limit);
    }
}
