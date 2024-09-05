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
        $rules = [
            "doctor" => "nullable|string",
            "patientName" => "required|string",
            "patientPhoneNumber" => "required|string",
            "patientAge" => "required|integer",
            "patientAddress" => "required|string",
            "patientSex" => "required|string",
            "patientWeight" => "required|integer",
            "medications" => "required|array",
            "user_id" => "required|string",
            "alergi" => "",
            "alergiInfo" => "",
            "diagnosis" => "required|string",
        ];
    
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors()
            ], 422);
        }

        $validatedData = $validator->validated();

        $reponse = $this->apiEprescriptionService->SavePrescription($validatedData);

        return response()->json(['message' => $reponse], 200);
    }

    public function pdf($prescriptionId)
    {
        $response = $this->apiEprescriptionService->GetEPrescription($prescriptionId);

        return response()->json(['success' => true, 'data' => $response]);
    }
}
