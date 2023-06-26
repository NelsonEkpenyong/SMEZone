<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\fundedAfricaRequest1;
use App\Http\Requests\fundedAfricaRequest2;
use App\Http\Requests\fundedAfricaRequest;
use App\Models\GetFundedAfrica;
use Illuminate\Support\Facades\Route;
use App\Models\Industries;

class PartnerController extends Controller
{
    public function get_funded_africa(){
        return view('partners.getFunded');
    }

    public function funded_one(fundedAfricaRequest1 $request){
        // $request->session()->put('admit', $request->all());
        // return redirect('/getFundedAfrica2');

        if ($request->isMethod('post')) {
            $request->session()->put('admit', $request->all());

            return redirect()->to('/getFundedAfrica2');
        }

        return redirect()->route('/getFundedAfrica1');
    }

    public function get_funded_africa2(){
        $industries = Industries::all();
        return view('partners.getFunded2', compact('industries'));
    }

    public function funded_two(Request $request){
        $page1Data = session('admit');
        $allData   = array_merge($page1Data, $request->all());

        $funded                    = new GetFundedAfrica;
        $funded->fullname          = $allData['fullname'];
        $funded->email             = $allData['email'];
        $funded->phone             = $allData['phone'];
        $funded->whatsappId        = $allData['whatsappId'];
        $funded->jTitle            = $allData['jTitle'];
        $funded->gender            = $allData['gender'];
        $funded->location          = $allData['location'];
        $funded->ageRange          = $allData['ageRange'];
        $funded->bio               = $allData['bio'];
        $funded->startupName       = $allData['startupName'];
        $funded->businessStage     = $allData['businessStage'];
        $funded->industry_id       = $allData['industry_id'];
        $funded->foundYear         = $allData['foundYear'];
        $funded->annualRevenue     = $allData['annualRevenue'];
        $funded->raisedAmount      = $allData['raisedAmount'];
        $funded->raiseDesire       = $allData['raiseDesire'];
        $funded->founderExperience = $allData['founderExperience'];
        $funded->helpWith          = $allData['helpWith'];
        $funded->joiningGoal       = $allData['joiningGoal'];
        $funded->specialExpertiseOrExperience  = $allData['specialExpertiseOrExperience'];
        $funded->jobsToCreate      = $allData['jobsToCreate'];
        $funded->haveAccount       = $allData['haveAccount'];
        $funded->accountNumber     = $allData['accountNumber'];
        $funded->debitConfirmation = $allData['debitConfirmation'];
        
        $funded->save();
        flash()->addSuccess('Form submitted Successfully!😃');
        return redirect('/'); 

        // dd($allData);

        // $responded = Route::dispatch( Request::create('api/partner/getFunded', 'POST', $allData) );
        // // dd($responded );
        // if ($responded->status() == 200 ) {
        //     //session()->forget('admit');
        //     flash()->addSuccess('Form submitted Successfully!😃');
        //     return redirect('/');
        // }
        // return redirect()->back()->with('error', 'Form wasn\'t submitted. Please try again. 😞');  
    }
}
