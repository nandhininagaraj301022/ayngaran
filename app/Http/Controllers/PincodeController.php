<?php

namespace App\Http\Controllers;

use Illuminate\Http\Client\ResponseSequence;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PincodeController extends Controller
{
    public function pincode_generate($pincode)
    {
        $areas = DB::table('pincodes')->where('pincode', $pincode)->select('id', 'area')->get();
        $state = DB::table('pincodes')->where('pincode', $pincode)->select('id', 'state')->distinct()->first();
        $city = DB::table('pincodes')->where('pincode', $pincode)->select('id', 'city')->distinct()->first();
        return response()->json(['status' => true, 'data' => $areas, 'state' => $state, 'city' => $city], 200);
    }
}
