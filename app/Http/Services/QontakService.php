<?php
namespace App\Http\Services;

use Illuminate\Support\Facades\Http;

class QontakService
{
  protected $client;
	protected $API_URL = "https://service-chat.qontak.com/api/open/v1/broadcasts/whatsapp/direct";

  public function send($data)
  {
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
      return true;
    } catch (\Throwable $e) {
      return false;
    }
  }
}
