<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WebSchoolSetting extends Model
{
    protected $table = 'web_school_seetings';
   protected $fillable = [
        'school_name',
        'logo',
        'favicon',
        'address',
        'phone',
        'email',
        'website_url',
        'created_by',
        'updated_by',
        'deleted_by',
    ];
}
