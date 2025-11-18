<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebSchoolSetting extends Model
{
    use HasFactory;

    protected $table = 'web_school_settings';

    protected $fillable = [
      
    'school_name', 'address', 'email', 'phone'
    ];
}
