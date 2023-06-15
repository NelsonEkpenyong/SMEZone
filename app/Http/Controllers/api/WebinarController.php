<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\webinarRecordingsRequest as webRequest;
use Illuminate\Http\Request;
use App\Services\WebinarService;
use App\DataTransferObject\WebinarDTO;
use Illuminate\Http\JsonResponse;

class WebinarController extends Controller
{
    private WebinarService $webinarService;
    public function __construct(WebinarService $webinarService){
        $this->webinarService = $webinarService;
    }
    public function add_recording(webRequest $request): JsonResponse {
        $webinarDTO = new WebinarDTO($request->webinar_name, $request->webinar_name, $request->webinar_thumbnail);
        $recording = WebinarService::addWebinarRecording($webinarDTO);
        return response()->json($recording);
    }
}
