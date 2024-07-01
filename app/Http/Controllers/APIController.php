<?php

namespace App\Http\Controllers;

use App\Models\MonitoringPower;
use App\Models\MonitoringTanaman;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class APIController extends Controller
{
    public function monitoring_tanaman()
    {
        date_default_timezone_set('Asia/Jakarta');
        $tgl = Carbon::now();

        $data = MonitoringTanaman::create([
            'suhu' => request()->suhu,
            'kelembapan' => request()->kelembapan,
            'tgl' => $tgl,
        ]);
        if($data){
            return response()->json([
                'status' => '200',
                'message' => 'oke',
            ]);
        }
    }
    public function monitoring_power()
    {
        date_default_timezone_set('Asia/Jakarta');
        $tgl = Carbon::now();

        $data = MonitoringPower::create([
            'tegangan' => request()->tegangan,
            'arus' => request()->arus,
            'kapasitas' => request()->baterai,
            'tgl' => $tgl,
        ]);
        if($data){
            return response()->json([
                'status' => '200',
                'message' => 'oke',
            ]);
        }
    }
}
