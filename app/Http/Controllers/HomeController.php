<?php

namespace App\Http\Controllers;

use App\Models\MonitoringTanaman;
use App\Models\MonitoringPower;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $tanaman = MonitoringTanaman::select('*')->get()->last();
        $power = MonitoringPower::select('*')->get()->last();
        return view('index',compact('tanaman','power'));
    }
}
