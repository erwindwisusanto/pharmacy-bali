<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PsychiatryController extends Controller
{
    public function index()
    {
        return view('psychiatry/index');
    }

    public function order()
    {
        return view('psychiatry/order-list');
    }
}
