<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Http\Services\CmsService;

class PsychiatryController extends Controller
{
    protected $CmsService;

    public function __construct(CmsService $CmsService)
    {
        $this->CmsService = $CmsService;
    }

    public function index()
    {
        // $medicines = json_decode(file_get_contents(public_path('data/medicine.json')), true);
        $medicines = $this->CmsService->Get();

        // https://api.sehatcepat.com/images/pharmacy-bali/medicine/20250718_120438.jpeg
        return view('psychiatry.index', compact('medicines'));
    }

    public function search(Request $request)
    {
        $keyword = strtolower($request->input('q'));

        $medicines = json_decode(file_get_contents(public_path('data/medicine.json')), true);

        $filtered = array_filter($medicines, function ($med) use ($keyword) {
            return str_contains(strtolower($med['name']), $keyword) ||
                    str_contains(strtolower($med['category']), $keyword);
        });

        return view('psychiatry.index', ['medicines' => $filtered]);
    }

    public function order()
    {
        return view('psychiatry.order-list');
    }
}
