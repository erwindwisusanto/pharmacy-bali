<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PsychiatryController extends Controller
{
    public function index()
    {
        $medicines = json_decode(file_get_contents(public_path('data/medicine.json')), true);
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
