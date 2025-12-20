<?php

use App\Models\WebSchoolSetting;
use Illuminate\Support\Facades\Cache;

function settings()
{
    static $settings = null;

    if ($settings === null) {
        $settings = WebSchoolSetting::first();
    }

    return $settings;
}

function enToBn($number)
{
    $eng = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
    $ban = ['০', '১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯'];

    return str_replace($eng, $ban, $number);
}
