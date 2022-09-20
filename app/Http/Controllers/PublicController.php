<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\WheelSegment;

class PublicController extends Controller
{


    public function getLuckSegs(){
        $promos = WheelSegment::all();
        return response()->view('luck_wheel.luckjs', compact('promos'))->header('Content-Type', 'application/javascript');

    }

}
