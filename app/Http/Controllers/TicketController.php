<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Twilio\Rest\Client;


class TicketController extends Controller
{
    public function index(){


        return view('ticket.index');
    }

    public function whatsapp(){

    $twilioSID = 'AC9fe861f6126354e7783cfcf1d8ba2670';
    $twilioAuthToken = '155315dfc74305cc1c63fb52052e00b0';

    $twilio = new Client($twilioSID, $twilioAuthToken);

    $message = $twilio->messages->create(
        '+9647717745071', // Replace with recipient's WhatsApp number
        [
            'from' => '+17066403337', // Replace with your Twilio WhatsApp number
            'body' => 'Hello from Laravel and Twilio!'
        ]
    );

    return "WhatsApp message sent.";

    }


}
