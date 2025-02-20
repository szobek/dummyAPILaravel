<?php

namespace App\Http\Controllers;

use App\Models\Config;
use Illuminate\Http\Request;
class ConfigController extends Controller
{
    public function getConfig()
    {
        $data = Config::first();
        return $data; 
    }

    public function setConfig(Request $request)
    {
        $data = $request->all();
        Config::find(1)->update($data);
        return response()->json($data);
    }
}
