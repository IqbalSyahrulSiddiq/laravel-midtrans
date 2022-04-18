<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MidtransController extends Controller
{
    public function callbackNotification(Request $request)
    {
        $pesanSuccess = 'Request berhasil';
        
        return response()->json([
            'data' => $pesanSuccess,
            'message' => 'Sukses melakukan request'
        ], 200);
    }
}
