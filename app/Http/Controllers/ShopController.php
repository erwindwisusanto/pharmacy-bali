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

  public function cart()
  {
    return view('shop.cart');
  }

  public function Products()
  {
    $products = $this->shopService->GetProducts();

    if (empty($products)) {
      return response()->json([]);
    }

    return response()->json(['data' => $products]);
  }
}
