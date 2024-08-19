<?php

namespace App\Http\Controllers;

use App\Http\Services\ShopService;
use Illuminate\Http\Request;

class ShopController extends Controller
{
  protected $shopService;
  public function __construct(ShopService $shopService)
  {
    $this->shopService = $shopService;
  }

  public function index()
  {
    return view('shop.index');
  }
}
