<?php
namespace App\Http\Services;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class ShopService
{
  public function GetProducts()
  {
    try {
      $cacheKey = 'products';

      $products = Cache::remember($cacheKey, now()->addHours(1), function () {
        return DB::table('product')->get();
      });

      foreach ($products as $product) {
				$product->id = encryptId($product->id);
			}

      return $products;
    } catch (\Exception $e) {
      return [];
    }
  }
}
