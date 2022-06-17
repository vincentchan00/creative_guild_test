<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    //
    public function Api_getLandscapes()
    {
        $landscapes = json_decode(file_get_contents(storage_path() . "/app/private/landscapes.json"), true);

        return $landscapes;
    }

}
