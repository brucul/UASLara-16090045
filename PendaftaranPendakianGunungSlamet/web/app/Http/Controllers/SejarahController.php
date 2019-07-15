<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sejarah;
use Validator;

class SejarahController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.admin.sejarah');
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
    public function edit()
    {
        if (Sejarah::all()->count() < 1) {
            $form_data = array(
                'konten'     =>   'Isi sejarah disini'
            );
            Sejarah::create($form_data);
            $sejarah = Sejarah::find(1);
            return view('pages.admin.sejarah', ['sejarah' => $sejarah]);
        } else {
            $sejarah = Sejarah::find(1);
            return view('pages.admin.sejarah', ['sejarah' => $sejarah]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $rules = array(
            'konten'     =>  'required'
        );

        $error = Validator::make($request->all(), $rules);

        if($error->fails())
        {
            return response()->json(['errors' => $error->errors()->all()]);
        }

        $form_data = array(
            'konten'     =>   $request->konten
        );
        Sejarah::whereId(1)->update($form_data);
        return redirect()->route('sejarah')->with('success','Posted successfully!');
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
