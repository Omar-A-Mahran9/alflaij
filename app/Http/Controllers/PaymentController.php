<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function handleCallback(Request $request)
    {
        \Log::info('Moyasar Callback Received:', $request->all());
    
         $status ='bassem';
        $amount = 1200;
     
        return view('pay.payment-success', compact('status', 'amount', ));
    }
    
    // Thank-you page
    public function thanks(Request $request)
    {
        return view('pay.payment-success', [
            'id' => $request->id,
            'status' => $request->status,
            'amount' => $request->amount,
            'message' => $request->message,
        ]);
    }   
}
