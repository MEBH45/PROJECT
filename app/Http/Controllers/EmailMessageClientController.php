<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use App\Models\Email_Message_client;
use Illuminate\Http\Request;

class EmailMessageClientController extends Controller
{
    public function saveMessageClient(Request $request)
    {

        $message = new Email_Message_client();
        $message->name = $request->name;
        $message->email = $request->email;
        $message->subject = $request->subject;
        $message->message = $request->message;
        $message->save();
        return redirect('/');
    }
}
