<?php

namespace App\Http\Controllers;

use App\Models\MonitoringTanaman;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $data = MonitoringTanaman::select('*')->get()->last();
        return view('index',compact('data'));
    }
}
