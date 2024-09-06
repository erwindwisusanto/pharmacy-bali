<?php

namespace App\Http\Controllers;

use App\Http\Services\ApiEprescriptionService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ApiEprescriptionController extends Controller
{
    protected $apiEprescriptionService;
    public function __construct(ApiEprescriptionService $apiEprescriptionService)
    {
        $this->apiEprescriptionService = $apiEprescriptionService;
    }

    public function signup(Request $request)
    {
        $rules = [
            "name" => "string|required",
            "phone" => "string|required",
            "email" => "string|required",
            "password" => "string|required",
        ];

        $reqdata = $request->validate($rules);

        $reponse = $this->apiEprescriptionService->SaveNewUser($reqdata);

        return response()->json($reponse);
    }

    public function singin(Request $request)
    {
        $rules = [
            "email" => "string|required",
            "password" => "string|required",
        ];

        $reqdata = $request->validate($rules);

        $reponse = $this->apiEprescriptionService->CheckCredential($reqdata);

        return response()->json($reponse);
    }

    public function sendEprescription(Request $request)
    {
        $reponse = $this->apiEprescriptionService->SavePrescription($request->all());

        return response()->json(['message' => $reponse], 200);
    }

    public function pdf($prescriptionId)
    {
        $response = $this->apiEprescriptionService->GetEPrescription($prescriptionId);

        return response()->json(['success' => true, 'data' => $response]);
    }
}
