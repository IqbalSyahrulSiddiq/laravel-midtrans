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

        $callbackNotification['order_id'] = $request->order_id;

        $updateStatusBayar = DB::table('order')->where('number',$callbackNotification['order_id'])->update([
            'payment_status' => 2
        ]);

        return response()->json([
            'message' => 'Sukses melakukan pembayaran'
        ], 200); 

    }
}
