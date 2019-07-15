<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\JadwalPendakian;
use App\Pendaki;
use App\Kuota;
use Validator;

class DaftarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $kodenya = $request->hidden_kode;
        if(request()->ajax())
        {
            return datatables()->of(DB::table('pendaki')->where('kode_pendakian', $kodenya))
                    ->addColumn('action', function($data){
                        $button = '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm">Delete</button>';
                        return $button;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return view('pages.user.form_daftar_2');
    }

    public function listKuota()
    {
        $kuota = Kuota::all();
        return view('pages.user.form_daftar_1', ['kuota' => $kuota]);
    }

    public function anggota()
    {
        $pendaki = Pendaki::all();
        return view('pages.user.form_daftar_2', ['pendaki' => $pendaki]);
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

    public function createStep1(Request $request){
        $daftar = $request->session()->get('daftar');
        return view('pages.user.form_daftar_1',compact('daftar', $daftar));
    }

    public function postCreateStep1(Request $request){
        $validatedData = $request->validate([
            'tgl' => 'required',
        ]);

        if(empty($request->session()->get('daftar'))){
            $daftar = new JadwalPendakian();
            $daftar->fill($validatedData);
            $request->session()->put('daftar', $daftar);
        }else{
            $daftar = $request->session()->get('daftar');
            $daftar->fill($validatedData);
            $request->session()->put('daftar', $daftar);
        }

        return redirect('/products/create-step2');
    }

    public function inputJadwal(Request $request){
        $rules = array(
            'tgl' => 'required',
            'name' => 'required',
            'address' => 'required',
            'telp' => 'required',
            'email' => 'required',
            'jk' => 'required',
            'no_id' => 'required',
            'jenis_id' => 'required',
            'kebangsaan' => 'required',
            'pekerjaan' => 'required',
        );

        $error = Validator::make($request->all(), $rules);
        if($error->fails()) {
            return response()->json(['errors' => $error->errors()->all()]);
        }

        //$kode_pendakian = 'GS'.time();

        $jadwal = array(
            'kode_pendakian' =>  $request->kode,
            'tanggal_pendakian' =>  $request->tgl,
        );

        $tarif = 0;
        if ($request->kebangsaan == 'Lokal') {
            $tarif = 20000;
        }else{
            $tarif = 100000;
        }

        $pendaki = array(
            'kode_pendakian' =>  $request->kode,
            'nama' =>  $request->name,
            'alamat' =>  $request->address,
            'no_hp' =>  $request->telp,
            'email' =>  $request->email,
            'jenis_kelamin' =>  $request->jk,
            'no_id' =>  $request->no_id,
            'jenis_id' =>  $request->jenis_id,
            'kebangsaan' =>  $request->kebangsaan,
            'pekerjaan' =>  $request->pekerjaan,
            'status' => 'Ketua',
            'biaya'=> $tarif,
        );

        JadwalPendakian::create($jadwal);
        Pendaki::create($pendaki);

        //$kuota = DB::table('kuota')->where('tanggal', $request->tgl)->value('kuota');
        //Kuota::where('tanggal', $request->tgl)->update(['kuota' => $kuota-1]);

        return redirect('/form-2')->with('kode', $request->kode);
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
            'nama' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'email' => 'required',
            'jk' => 'required',
            'no_id' => 'required',
            'jenis_id' => 'required',
            'kebangsaan' => 'required',
            'pekerjaan' => 'required',
        );

        $error = Validator::make($request->all(), $rules);
        if($error->fails()) {
            return response()->json(['errors' => $error->errors()->all()]);
        }

        $tarif = 0;
        if ($request->kebangsaan == 'Lokal') {
            $tarif = 20000;
        }else{
            $tarif = 100000;
        }

        $pendaki = array(
            'kode_pendakian' =>  $request->hidden_kode,
            'nama' =>  $request->nama,
            'alamat' =>  $request->alamat,
            'no_hp' =>  $request->no_hp,
            'email' =>  $request->email,
            'jenis_kelamin' =>  $request->jk,
            'no_id' =>  $request->no_id,
            'jenis_id' =>  $request->jenis_id,
            'kebangsaan' =>  $request->kebangsaan,
            'pekerjaan' =>  $request->pekerjaan,
            'status' => 'Anggota',
            'biaya'=> $tarif,
        );

        Pendaki::create($pendaki);

        //$kuota = DB::table('kuota')->where('tanggal', $request->tgl)->value('kuota');
        //Kuota::where('tanggal', $request->tgl)->update(['kuota' => $kuota-1]);

        return response()->json(['success' => 'Data Added successfully.']);
    }

    public function finish(Request $request){
        $kode = $request->kode_pendakian;
        $kuota = DB::table('kuota')->where('tanggal', $request->tgl)->value('kuota');
        $tanggal = DB::table('jadwal_pendakian')->where('kode_pendakian', $kode)->value('tanggal_pendakian');
        $jumlah_pendaki = DB::table('jadwal_pendakian')->where('kode_pendakian', $kode)->count();
        Kuota::where('tanggal', $tanggal)->update(['kuota' => $kuota-$jumlah_pendaki]);
        return redirect('/form-finish')->with('id', $kode);
    }

    public function finishDaftar(){
        return view('pages.user.form_finish');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    

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
        //
    }
}
