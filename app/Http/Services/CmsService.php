<?php
namespace App\Http\Services;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class CmsService
{
  
  public function Get()
  {
    $response = Http::get('https://api.sehatcepat.com/api/pharmacy-bali/medicines');

    if ($response->successful()) {
        $data = $response->json()['data'];

        $processed = array_map(function($e) {
            $cat = ucfirst($e['Category']);
            if($cat == 'Adhd') {
              $cat = "ADHD";
            }

            $d = [
              "id" => $e['ID'],
              "name" => $e['Name'],
              "category" => $cat,
              "image" => 'https://api.sehatcepat.com/' . $e['Image'],
            ];
            return $d;
        }, $data);

        return $processed;
    }

    return [];
  }
}
