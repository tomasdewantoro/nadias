<?php

namespace App\Http\Controllers;

use App\Dashboards;
use App\DataGejala;
use App\DataPenyakit;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $datagejala=DataGejala::count();
        $datapenyakit=DataPenyakit::count();
        return view('dashboard', compact('datagejala', 'datapenyakit'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Dashboards  $dashboards
     * @return \Illuminate\Http\Response
     */
    public function show(Dashboards $dashboards)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dashboards  $dashboards
     * @return \Illuminate\Http\Response
     */
    public function edit(Dashboards $dashboards)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dashboards  $dashboards
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dashboards $dashboards)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dashboards  $dashboards
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dashboards $dashboards)
    {
        //
    }
}
