<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\fundedAfricaRequest1;
use App\Models\Industries;

class PartnerController extends Controller
{
    public function get_funded_africa(){
        return view('partners.getFunded');
    }

    public function funded_one(fundedAfricaRequest1 $request){
        if ($request->isMethod('post')) {
            $request->session()->put('admit', $request->all());
            return redirect()->to('getFundedAfrica2');
        }

        return redirect()->route('partners.getFunded2');
    }

    public function get_funded_africa2(){
        $industries = Industries::all();
        return view('partners.getFunded2', compact('industries'));
    }

    public function funded_two(Request $request){

    }
}
