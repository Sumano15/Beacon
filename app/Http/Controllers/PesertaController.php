<?php

namespace App\Http\Controllers;

use App\Models\peserta;
use App\Models\tim;
use Illuminate\Http\Request;

class PesertaController extends Controller
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
        $payment_path = null;
        if($request->hasFile('payment_script')){
            $payment = uniqid() . '.' .$request->payment_script->extension();
            $request->payment_script->move(public_path('buktibayar'), $payment);
            $payment_path = public_path('buktibayar/' . $payment);
        }else{
            return back()->with('error', 'File Required');
        }
        $model = new tim;
        $model->nama_tim = $request->nama_tim;
        $model->asal_sekolah = $request->asal_sekolah;
        $model->asal_kota = $request->asal_kota;
        $model->password = $request->password;
        $model->bukti_transfer = $payment_path;
        $model->nama_akun_bank = $request->account_name;
        $model->nama_bank = $request->bank_name;
        $model->norek = $request->bank_account;
        $model->coin = 5000;
        $model->save();
        // dd($request->member_fullname);
        // dd($request->member_photo[1]);

        foreach ($request->member_fullname as $key => $fullname) {
            $photo_path = null;
            $kartu_pelajar_path = null;
            if($request->hasFile('member_photo.' . $key)){
                if( $request->hasFile('member_student_card.' . $key)){
                    $kartu_pelajar = uniqid() . '.' . $request->member_student_card[$key]->extension();
                    $request->member_student_card[$key]->move(public_path('kartupelajar'), $kartu_pelajar);
                    $kartu_pelajar_path = public_path('kartupelajar/' . $kartu_pelajar);
                }
                $photo = uniqid() . '.' . $request->member_photo[$key]->extension();
                $request->member_photo[$key]->move(public_path('memberfoto'), $photo);
                $photo_path = public_path('memberfoto/' . $photo);
            }
            peserta::create([
                'nama' => $fullname,
                'no_tlep' => $request->member_phone_number[$key],
                'id_line' => $request->member_id_line[$key],
                'instagram' => $request->member_instagram[$key],
                'email' => $request->member_email[$key],
                'foto' => $photo_path,
                'kartu_pelajar' => $kartu_pelajar_path,
                'tim_id' => $model->id
            ]);
            // if($key == 2){
            //     dd($request);
            // }
            // $peserta = new peserta;
            // $peserta->nama = $fullname;
            // $peserta->no_tlep = $request->member_phone_number[$key];
            // $peserta->id_line = $request->member_id_line[$key];
            // $peserta->instagram = $request->member_instagram[$key];
            // $peserta->email = $request->member_email[$key];
            // $peserta->foto = $photo_path;
            // $peserta->kartu_pelajar = $kartu_pelajar_path;
            // // dd($model->id);
            // $peserta->tim_id = $model->id;
            // $peserta->save();
        }
        return redirect('/')->with('success', 'Form Uploaded Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\peserta  $peserta
     * @return \Illuminate\Http\Response
     */
    public function show(peserta $peserta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\peserta  $peserta
     * @return \Illuminate\Http\Response
     */
    public function edit(peserta $peserta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\peserta  $peserta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, peserta $peserta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\peserta  $peserta
     * @return \Illuminate\Http\Response
     */
    public function destroy(peserta $peserta)
    {
        //
    }
}
