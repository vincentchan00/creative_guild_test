<?php

namespace App\Http\Controllers;

use App\Http\Resources\PhotographerRes;
use App\Models\Photographer;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    //
    public function getPhotographer()
    {
        $photographerData = PhotographerRes::collection(Photographer::all());
        return $photographerData;
    }

}
