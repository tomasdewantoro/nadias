<?php

namespace App\Http\Controllers;

use App\DataGejala;
use Illuminate\Http\Request;

class DataGejalaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datagejala = DataGejala::all();
        return view ('dataGejala.index', ['dataGejala' => $datagejala]);
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
        DataGejala::create($request->all());
        return redirect('/dataGejala')->with('status', 'Data Gejala Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DataGejala  $dataGejala
     * @return \Illuminate\Http\Response
     */
    public function show(DataGejala $dataGejala)
    {
        return view('dataGejala', ['dataGejala' => $datagejala]); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DataGejala  $dataGejala
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dataGejala=DataGejala::find($id); //id dalam routes
        return view('dataGejala.edit', ['dataGejala' => $dataGejala]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DataGejala  $dataGejala
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        DataGejala::find($id)
        ->update ([
            'namaGejala' => $request->namaGejala
        ]);
        return redirect('/dataGejala'); //mengambil data setelah diupdate
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DataGejala  $dataGejala
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        DataGejala::find($request->id)->delete();
        return redirect('/dataGejala');
    }
}
