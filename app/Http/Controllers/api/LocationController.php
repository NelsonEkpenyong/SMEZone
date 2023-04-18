<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Lga;
use App\Models\State as States;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function lgaBySate($state){
        return Lga::select(['id', 'name'])->where('state_id', $state)->get(); 
    }
}
