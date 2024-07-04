<?php

namespace App\Http\Controllers;

use App\Models\MonitoringTanaman;
use App\Models\MonitoringPower;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tanaman = MonitoringTanaman::select('*')->get()->last();
        $power = MonitoringPower::select('*')->get()->last();
        $tabpower= MonitoringPower::selectRaw('DATE(created_at) as tanggal, AVG(voltage) as avg_tegangan, AVG(current) as avg_arus, AVG(power) as avg_daya')
        ->groupBy('tanggal')
        ->orderBy('tanggal', 'desc')->paginate(10);
        $tabtanaman = MonitoringTanaman::selectRaw('DATE(created_at) as tanggal, AVG(temp) as avg_suhu, AVG(humidity) as avg_humidity, AVG(soil) as avg_soil')
        ->groupBy('tanggal')
        ->orderBy('tanggal', 'desc')->paginate(10);
        return view('admin.dashboard',compact('tanaman','power','tabtanaman','tabpower'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
