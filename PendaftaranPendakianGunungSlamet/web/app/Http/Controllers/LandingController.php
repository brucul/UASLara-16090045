<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Galeri;
use App\Aturan;
use App\Blog;
use App\Sejarah;
use App\Pendaki;
use App\Kuota;
use App\JadwalPendakian;

class LandingController extends Controller
{
    public function pendakiList()
    {
        if(request()->ajax())
        {
            return datatables()->of(Pendaki::all())
                    ->addColumn('action', function($data){
                        $button = '<button type="button" name="edit" id="'.$data->id.'" class="edit btn btn-primary btn-sm">Edit</button>';
                        $button .= '&nbsp;&nbsp;';
                        $button .= '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm">Delete</button>';
                        return $button;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return view('pages.admin.kuota');
    }

    public function show()
    {
        $kuota = Kuota::all();
        return view('pages.user.form_daftar', ['kuota' => $kuota]);
    }

    public function showPost($id)
    {
        $blog = Blog::find($id);
        return view('pages.user.post', ['blogs' => $blog]);
    }

    public function Home()
    {
        $aturan = Aturan::all();
        $galeri = Galeri::all();
        $blog = DB::table('blogs')->latest()->limit(3 )->get();
        $sejarah = Sejarah::find(1);
        return view('pages.user.home', ['rules' => $aturan, 'galleries' => $galeri, 'blogs' => $blog, 'sejarah' => $sejarah]);
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

        $kode_pendakian = 'GS'.rand();

        $jadwal = array(
            'kode_pendakian' =>  $kode_pendakian,
            'tanggal_pendakian' =>  $request->tgl,
        );

        $pendaki = array(
            'kode_pendakian' =>  $kode_pendakian,
            'nama' =>  $request->name,
            'alamat' =>  $request->address,
            'no_hp' =>  $request->telp,
            'email' =>  $request->emil,
            'jenis_kelamin' =>  $request->jk,
            'no_id' =>  $request->no_id,
            'jenis_id' =>  $request->jenis_id,
            'kebangsaan' =>  $request->kebangsaan,
            'pekerjaan' =>  $request->pekerjaan,
            'status' => 'Ketua',
        );

        JadwalPendakian::create($jadwal);
        Pendaki::create($pendaki);

        redirect('/');
    }

}
