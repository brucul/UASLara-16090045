<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;
use App\Pendaki;

class PendakiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
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
        $rules = array(
            'nama' =>  'required',
            'alamat' =>  'required',
            'no_hp' =>  'required',
            'email' =>  'required',
            'jk'    =>  'required',
            'no_id' =>  'required',
            'jenis_id' =>  'required',
            'kebangsaan' =>  'required',
            'pekerjaan' =>  'required',
        );

        $error = Validator::make($request->all(), $rules);

        if($error->fails())
        {
            return response()->json(['errors' => $error->errors()->all()]);
        }


        $form_data = array(
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'email' => $request->email,
            'jk' => $request->jk,
            'no_id' => $request->no_id,
            'jenis_id' => $request->jenis_id,
            'kebangsaan' => $request->kebangsaan,
            'pekerjaan' => $request->pekerjaan,
            'status' => 'Anggota',
        );

        Pendaki::create($form_data);

        return response()->json(['success' => 'Data Added successfully.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $kode = $request->kode;
        $id_kode = DB::table('jadwal_pendakian')->where('kode_pendakian', $kode)->value('id');
        $jadwal = DB::table('jadwal_pendakian')->find($id_kode);
        $pendaki = DB::table('pendaki')->where('kode_pendakian', $kode)->get();
        $tarif = DB::table('pendaki')->where('kode_pendakian', $kode)->sum('biaya');
        return view('pages.user.detail', ['pendaki' => $pendaki, 'jadwal' => $jadwal, 'tarif' => $tarif]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(request()->ajax())
        {
            $data = Pendaki::findOrFail($id);
            return response()->json(['data' => $data]);
        }
    }       

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Pendaki::findOrFail($id);
        $data->delete();
        //DB::table('kuota')
            //->where('id', $id)
            //->update(['deleted' => '1']);
            
        return response()->json(['success' => 'Data is successfully updated']);
    }
}
