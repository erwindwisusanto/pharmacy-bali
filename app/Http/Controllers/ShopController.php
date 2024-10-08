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

  public function Products(Request $request)
  {
    $searchProducts = $request->search_products;
    $sortPrice = $request->sort_price;
    $filterCategory = $request->category;

    $products = $this->shopService->GetProducts($searchProducts, $sortPrice, $filterCategory);

    if (empty($products)) {
      return response()->json([]);
    }

    return response()->json(['data' => $products]);
  }

  public function loadingScreen()
  {
    return view('shop.loading');
  }

  public function delivery()
  {
    return view('shop.delivery');
  }

  public function success()
  {
    return view('shop.success');
  }
}
