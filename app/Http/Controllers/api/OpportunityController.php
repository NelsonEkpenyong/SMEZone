<?php

namespace App\Http\Controllers\api;

use App\DataTransferObject\OpportunityDTO;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\OpportunityRequest;
use App\Services\OpportunityService;
use Illuminate\Http\JsonResponse;

class OpportunityController extends Controller
{
    private OpportunityService $opportunityService;

    public function __construct(OpportunityService $opportunityService)
    {
        $this->opportunityService = $opportunityService;
    }

    public function save_opportunity(OpportunityRequest $request) : JsonResponse
    {
        try {
            $oppDTO      = new OpportunityDTO($request->title,$request->provider, $request->link, $request->description, $request->image);
            $opportunity = $this->opportunityService->addOpportunity($oppDTO);

            return response()->json($opportunity);

        } catch (\InvalidArgumentException $error) {
            return response()->json(['error' => $error->getMessage()], 400);
        } catch (\Exception $error) {
            return response()->json(['error' => 'An error occurred'],  500);
        }

    }
}
