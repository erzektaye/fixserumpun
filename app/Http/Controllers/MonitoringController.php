<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MonitoringPower;
use App\Models\MonitoringTanaman;

class MonitoringController extends Controller
{
    public function tanaman() {
        $tanaman = MonitoringTanaman::select('*')->get()->last();
        $tabtanaman = MonitoringTanaman::selectRaw('DATE(created_at) as tanggal,CONCAT(LPAD(HOUR(created_at), 2, "0"), ":", LPAD(MINUTE(created_at), 2, "0")) as waktu, AVG(temp) as avg_suhu, AVG(humidity) as avg_humidity, AVG(soil) as avg_soil')
                ->groupBy('tanggal', 'waktu')
                ->orderBy('tanggal', 'desc')
                ->orderBy('waktu', 'desc')->paginate(10);
        return view('admin.tanaman',compact('tanaman','tabtanaman'));
    }
    public function power() {
        $power = MonitoringPower::select('*')->get()->last();
        $tabpower= MonitoringPower::selectRaw('DATE(created_at) as tanggal, CONCAT(LPAD(HOUR(created_at), 2, "0"), ":", LPAD(MINUTE(created_at), 2, "0")) as waktu, AVG(voltage) as avg_tegangan, AVG(current) as avg_arus, AVG(power) as avg_daya')
                ->groupBy('tanggal', 'waktu')
                ->orderBy('tanggal', 'desc')
                ->orderBy('waktu', 'desc')->paginate(10);
        return view('admin.power',compact('power','tabpower'));

    }
}
