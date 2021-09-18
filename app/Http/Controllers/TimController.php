<?php

namespace App\Http\Controllers;

use App\Models\tim;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class TimController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = tim::all();
        return view('Back.index',compact(
            'datas'
        ));
    }

    public function confirmed()
    {
        $datas = tim::where('status',1)->get();
        return view('Back.confirmed',compact(
            'datas'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new tim;

        return view('register.index',compact(
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
        $validated = $request->validate([
            'nama_tim' => 'required|unique:App\Models\User,team_name',
            'asal_sekolah' => 'required',
            'asal_kota' => 'required',
            'password' => 'required'
        ]);
        $model = new tim;
       
        $model->nama_tim = $request->nama_tim;
        $model->asal_sekolah = $request->asal_sekolah;
        $model->asal_kota = $request->asal_kota;
        $model->password = Hash::make($request->password);
        // $model->save();

        return view('register-members.index',compact('model'));
    }

    /**
     * Update Status on tims Table
     * @param int $tid 
     * @return \Illuminate\Http\Response
     */
    public function confirm($tid)
    {
        
        // DD($tim);
        return back();
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

    public function update_min_coin(Request $request)
    {
        $tim = tim::findOrFail($request->id);
        $tmp = $tim->coin;
        $tim->coin = $tmp - $request->coin;
        $tim->save();
        return back()->with('succes', 'Your data has been updated');
    }

    public function update_plus_coin(Request $request)
    {
        $tim = tim::findOrFail($request->id);
        $tmp = $tim->coin;
        $tim->coin = $tmp + $request->coin;
        $tim->save();
        return back()->with('succes', 'Your data has been updated');
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
