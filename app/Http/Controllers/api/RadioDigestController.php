<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\DigestRequest;
use App\Services\DigestService;
use App\DataTransferObject\DigestDTO;
use Illuminate\Http\JsonResponse;

class RadioDigestController extends Controller
{
    private DigestService $digestService;
    public function __construct(DigestService $digestService){
        $this->digestService = $digestService;
    }
    public function save_digest(DigestRequest $request): JsonResponse {
        $digestDTO = new DigestDTO($request->digest_name, $request->digest_link, $request->digest_thumbnail);
        $digest    = DigestService::addRadioDigest($digestDTO);
        return response()->json($digest);
    }
}
