<?php

namespace App\Http\Controllers;

use App\Models\tim;
use Illuminate\Http\Request;

class TimController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new tim;

        return view('Front.daftar',compact(
            'model'
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model = new tim;
       
        $model->nama_tim = $request->nama_tim;
        $model->asal_sekolah = $request->asal_sekolah;
        $model->asal_kota = $request->asal_kota;
        $model->password = $request->password;
        $model->save();

        return view('Front.daftarPeserta');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tim  $tim
     * @return \Illuminate\Http\Response
     */
    public function show(tim $tim)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tim  $tim
     * @return \Illuminate\Http\Response
     */
    public function edit(tim $tim)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tim  $tim
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tim $tim)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tim  $tim
     * @return \Illuminate\Http\Response
     */
    public function destroy(tim $tim)
    {
        //
    }
}
