<?php
namespace App\Http\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class QontakService
{
  protected $client;
	protected $API_URL = "https://service-chat.qontak.com/api/open/v1/broadcasts/whatsapp/direct";

  public function send($data)
  {
    Log::channel('qontak')->info('[REQUEST]'.json_encode($data));
    try {
      $response = Http::withHeaders([
        'Authorization' => "Bearer {$data['key']}",
				'Content-Type' => "application/json"
      ])->post($this->API_URL, [
        'to_number' => $data['to_number'],
				'to_name' => $data['to_name'],
				'message_template_id' => $data['message_template_id'],
				'channel_integration_id' => $data['channel_integration_id'],
				'language' => [
					'code' => $data['lang_code']
				],
				'parameters' => [
					'body' => $data['body']
				]
      ]);
      Log::channel('qontak')->info('[RESPONSE]'.json_encode($response->body()));
      return true;
    } catch (\Throwable $e) {
      Log::channel('qontak')->info('[FAILED]'. $e->getMessage());
      return false;
    }
  }

  public function sendWhatsAppMessageCS($name, $age, $phoneNumber, $address, $locationDetails, $note, $items)
	{
    $totalPrice = 0;
    $formattedItems = [];
    foreach($items as $key => $item) {
      $totalPrice += $item['product_price_native'] * $item['quantity'];
      $formattedItems[] = chr(97 + $key) . ". " . $item['product_name'] . ' ' . $item['quantity'] . 'x ' . $item['product_price'];
    }

    $itemsText = "";
    foreach ($formattedItems as $item) {
      $itemsText .= $item . "\\n";
    }

		$data = [
			'key' => "Nm_1LwjuNGRSuI_b9baeA2UBTZu7KlvL5oB6lmudZbE",
			'to_number' => "6282221122311",
			'to_name' => $name,
			'message_template_id' => "2f401f8c-8ea8-47ee-91d9-371cee6a7b27",
			'channel_integration_id' => "4f81cdab-3220-44a1-8981-05f163f78b20",
			'lang_code' => 'en',
			'body' => [
				[
					'key' => '1',
					'value' => 'patient_name',
					'value_text' => $name
				],
				[
					'key' => '2',
					'value' => 'age',
					'value_text' => $age
				],
				[
					'key' => '3',
					'value' => 'address',
					'value_text' => $address
				],
				[
					'key' => '4',
					'value' => 'location_details',
					'value_text' => $locationDetails
				],
				[
					'key' => '5',
					'value' => 'total',
					'value_text' => number_format($totalPrice, 0)
				],
				[
					'key' => '6',
					'value' => 'items',
					'value_text' => $itemsText
        ],
				[
					'key' => '7',
					'value' => 'note',
					'value_text' => $note
			  ]
      ]
		];

		return $this->send($data);
	}
}
