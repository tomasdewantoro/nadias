<?php

namespace App\Http\Controllers;

use App\InformasiPenyakit;
use Illuminate\Http\Request;

class InformasiPenyakitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $informasipenyakit = InformasiPenyakit::all();
        return view ('informasiPenyakit.index', ['informasiPenyakit' => $informasipenyakit]);
       
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
        InformasiPenyakit::create($request->all());
        return redirect('/informasiPenyakit');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\InformasiPenyakit  $informasiPenyakit
     * @return \Illuminate\Http\Response
     */
    public function show(InformasiPenyakit $informasiPenyakit)
    {
        $informasipenyakit = InformasiPenyakit::all();
        return view('informasiPenyakit', ['informasiPenyakit' => $informasipenyakit]); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\InformasiPenyakit  $informasiPenyakit
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $informasiPenyakit=InformasiPenyakit::find($id); //id dalam routes
        return view('informasiPenyakit.edit', ['informasiPenyakit' => $informasiPenyakit]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\InformasiPenyakit  $informasiPenyakit
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        InformasiPenyakit::find($id)
        ->update ([
            'namaPenyakit' => $request->namaPenyakit,
            'definisiPenyakit' => $request->definisiPenyakit,
            'solusiPenyakit' => $request->solusiPenyakit,
        ]);
        return redirect('/informasiPenyakit'); //mengambil data setelah diupdate
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\InformasiPenyakit  $informasiPenyakit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        InformasiPenyakit::find($request->id)->delete();
        return redirect('/informasiPenyakit');
    }
}
