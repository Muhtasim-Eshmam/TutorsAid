<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SmsController extends Controller
{


    public function index()
    {
        $basic  = new \Vonage\Client\Credentials\Basic("3707971d", "CpptfcEJ29O5QuFR");
$client = new \Vonage\Client($basic);

$response = $client->sms()->send(
    new \Vonage\SMS\Message\SMS("8801776495947", BRAND_NAME, 'A text message sent using the Nexmo SMS API')
);

$message = $response->current();

if ($message->getStatus() == 0) {
    echo "The message was sent successfully\n";
} else {
    echo "The message failed with status: " . $message->getStatus() . "\n";
}
    }
}
