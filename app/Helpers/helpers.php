<?php

use App\Models\WebSchoolSetting;
use Illuminate\Support\Facades\Cache;

function settings()
    {
        return Cache::rememberForever('webschool_settings', function () {
            return WebSchoolSetting::first()?->toArray() ?? [];
        });
    }
