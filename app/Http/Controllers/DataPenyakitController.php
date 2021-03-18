<?php

namespace App\Http\Controllers;

use App\DataPenyakit;
use Illuminate\Http\Request;

class DataPenyakitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datapenyakit = DataPenyakit::all();
        return view ('dataPenyakit.index', ['dataPenyakit' => $datapenyakit]);
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
        DataPenyakit::create($request->all());
        return redirect('/dataPenyakit');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DataPenyakit  $dataPenyakit
     * @return \Illuminate\Http\Response
     */
    public function show(DataPenyakit $dataPenyakit)
    {
        return view('dataPenyakit', ['dataPenyakit' => $datapenyakit]); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DataPenyakit  $dataPenyakit
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dataPenyakit=DataPenyakit::find($id); //id dalam routes
        return view('dataPenyakit.edit', ['dataPenyakit' => $dataPenyakit]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DataPenyakit  $dataPenyakit
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        DataPenyakit::find($id)
        ->update ([
            'namaPenyakit' => $request->namaPenyakit,
            'solusiPenyakit' => $request->solusiPenyakit,
        ]);
        return redirect('/dataPenyakit'); //mengambil data setelah diupdate
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DataPenyakit  $dataPenyakit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        DataPenyakit::find($request->id)->delete();
        return redirect('/dataPenyakit');
    }
}
