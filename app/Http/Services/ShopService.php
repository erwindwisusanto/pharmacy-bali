<?php
namespace App\Http\Services;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ShopService
{
  protected $qontakService;
  public function __construct(QontakService $qontakService)
  {
    $this->qontakService = $qontakService;
  }

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

  public function pay($name, $age, $phoneNumber, $address, $locationDetails, $note, $items)
  {
    try {
      $qontak = $this->qontakService->sendWhatsAppMessageCS($name, $age, $phoneNumber, $address, $locationDetails, $note, $items);
      return $qontak;
    } catch (\Throwable $e) {
      return $e->getMessage();
    }
  }
}
