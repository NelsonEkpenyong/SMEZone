<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\fundedAfricaRequest;
use Illuminate\Http\Request;
use App\Services\GetFundedService;
use App\DataTransferObject\FundedDTO;


class PartnerController extends Controller
{
    public function __construct(private GetFundedService $getFundedService){}
    public function get_funded(fundedAfricaRequest $request){
        $fundedDTO = new FundedDTO
        (
            $request->fullname,$request->email,$request->phone,$request->whatsappId,$request->jTitle,
            $request->gender,$request->location,$request->ageRange,$request->bio,$request->startupName,
            $request->businessStage,$request->industry_id,$request->foundYear,$request->raisedAmount,$request->annualRevenue,
            $request->raiseDesire,$request->helpWith,$request->joiningGoal,$request->specialExpertiseOrExperience,$request->jobsToCreate,
            $request->haveAccount, $request->accountNumber,$request->debitConfirmation
        );
        $getFunded = GetFundedService::getFunded($fundedDTO);

        return response()->json($getFunded);
    }
}
