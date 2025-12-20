<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentEnrollment extends Model
{
   public function schoolClass()
    {
        return $this->belongsTo(SchoolClass::class, 'school_class_id');
    }
 public function student()
    {
        return $this->belongsTo(Student::class, 'student_id');
    }
}
