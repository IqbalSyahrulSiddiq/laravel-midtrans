<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MidtransController extends Controller
{
    public function callbackNotification(Request $request)
    {
        /* $pesanSuccess = 'Request berhasil';

        return response()->json([
            'data' => $pesanSuccess,
            'message' => 'Sukses melakukan request'
        ], 200); */

        $callbackNotification['transaction_time'] = $request->transaction_time;
        $callbackNotification['transaction_status'] = $request->transaction_status;
        $callbackNotification['transaction_id'] = $request->transaction_id;
        $callbackNotification['order_id'] = $request->order_id;
        $callbackNotification['status_message'] = $request->status_message;
        $callbackNotification['status_code'] = $request->status_code;
        $callbackNotification['signature_key'] = $request->signature_key;
        $callbackNotification['payment_type'] = $request->payment_type;
        $callbackNotification['merchant_id'] = $request->merchant_id;
        $callbackNotification['gross_amount'] = $request->gross_amount;

        if($callbackNotification['transaction_status'] == 'settlement')
        {
            $updateStatusBayar = DB::table('orders')->where('number',$callbackNotification['order_id'])->update([
                'payment_status' => 2
            ]);
    
            return response()->json([
                'message' => 'Sukses melakukan pembayaran'
            ], 200);
        }
    }
}
