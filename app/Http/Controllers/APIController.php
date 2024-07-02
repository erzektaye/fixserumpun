<?php

namespace App\Http\Controllers;

use App\Models\MonitoringPower;
use App\Models\MonitoringTanaman;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class APIController extends Controller
{
    public function monitoring_tanaman(Request $request)
    {
        date_default_timezone_set('Asia/Jakarta');
        $waktu = Carbon::now();
        $jwt = "bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJuYW1lIjoiQWRtaW4gS0tOIDc2NyIsImNvZGUiOjIwMCwic3RhdHVzIjoib2tlIn0.VkwlfIL--85AinDBLi8YnjZpE8vWa4OG1eQCvD1I4CE";

        $token = $request->header('Authorization');
        if($token != $jwt){
            return response()->json([
                "message" => 'Unvalid Token',
                "status" => 401,]
            );
        } else {
            request()->json()->all();
            MonitoringTanaman::create([
                'temp' => request()->suhu,
                'humidity' => request()->kelembapan,
                'soil' => request()->soil,
                'time' => $waktu,
            ]);
            return response()->json([
                "message" => 'success',
                "status" => 200,
                ]
            );
        }
    }

    public function monitoring_power(Request $request)
    {
        date_default_timezone_set('Asia/Jakarta');
        $waktu = Carbon::now();
        $jwt = "bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJuYW1lIjoiQWRtaW4gS0tOIDc2NyIsImNvZGUiOjIwMCwic3RhdHVzIjoib2tlIn0.VkwlfIL--85AinDBLi8YnjZpE8vWa4OG1eQCvD1I4CE";

        $token = $request->header('Authorization');
        if($token != $jwt){
            return response()->json([
                "message" => 'Unvalid Token',
                "status" => 401,]
            );
        } else {
            MonitoringPower::create([
                'voltage' => request()->tegangan,
                'current' => request()->arus,
                'power' => request()->daya,
                'time' => $waktu,
            ]);
            return response()->json([
                "message" => 'success',
                "status" => 200,
                ]
            );
        }
    }
}
