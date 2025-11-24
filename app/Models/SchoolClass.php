<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SchoolClass extends Model
{
    public function enrollments()
    {
        return $this->hasMany(StudentEnrollment::class, 'school_class_id');
    }
}
