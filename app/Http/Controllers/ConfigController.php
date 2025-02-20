<?php

namespace App\Http\Controllers;

use App\Models\Config;

class ConfigController extends Controller
{
    public function getConfig()
    {
        $data = Config::first();
        return $data; 
    }

}
