<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\TestRequest;
use App\Services\PaykuService;
use Illuminate\Http\JsonResponse;

class PaykuController extends Controller
{
    public function processTestRequest(TestRequest $request) : JsonResponse
    {
        $validated = $request->validated();

        $response = PaykuService::processTestRequest($validated['question_id']);

        return $this->sendResponse([
            'response' => $response
        ], 'Response question ' . $validated['question_id']);

    }
}
