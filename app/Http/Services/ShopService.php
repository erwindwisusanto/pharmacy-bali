<?php
namespace App\Http\Services;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class ShopService
{
  protected $qontakService;
  public function __construct(QontakService $qontakService)
  {
    $this->qontakService = $qontakService;
  }

  public function GetProducts($searchProducts, $sortPrice, $category)
  {
    try {
      $cacheKey = 'products';

      $products = Cache::remember($cacheKey, now()->addHours(1), function () {
        return DB::table('product')->get();
      });

      $query = DB::table('product');

      if ($searchProducts) {
          $query->where(function($query) use ($searchProducts) {
              $query->where('name', 'like', '%' . $searchProducts . '%')
                    ->orWhere('type', 'like', '%' . $searchProducts . '%');
          });
      }

      if ($category) {
        $query->where('type', $category);
      }

      if ($sortPrice === 'low_to_high') {
        $query->orderBy('price', 'asc');
      } elseif ($sortPrice === 'high_to_low') {
        $query->orderBy('price', 'desc');
      }

      $products = $query->get();

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
