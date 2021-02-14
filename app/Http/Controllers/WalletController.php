<?php

namespace App\Http\Controllers;

use App\Models\entries;
use App\Models\wallet;
use Illuminate\Http\Request;

class WalletController extends Controller
{
    //
    public function show_entries(wallet $wallet){
        return response()->json([
            'success'=>true,
            'message'=>'data',
            'data'=>$wallet->entries
        ],200);
    }
}
