<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\BukuTamu;
use App\Models\ReviewRespon;
use Illuminate\Http\Request;

class SurveyKepuasanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */ 
    public function index()
    {
        $respon = ReviewRespon::with('respon')->with('pertanyaan')->with('buku_tamu')->get();
        $data = [
            'hasil' => $respon
        ];
        // dd($data);
        return view('admin.survey_kepuasan_tamu.index', $data);
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
        // dd($request);
        $data = new BukuTamu;

        $data->nama = $request->nama;
        $data->alamat = $request->alamat;
        $data->waktu_kedatangan = $request->waktu_kedatangan;
        $data->telfon = $request->telfon;

        if(isset($request->foto)) {
            $namaFile = 'foto_'.time().$request->foto->getClientOriginalName();
            $path = 'public/buku_tamu';
            $request->foto->storeAs($path, $namaFile);
            $data->foto = $namaFile;
        }

        $data->save();
        return redirect()->route('dashboard.pertanyaan', ['id' => $data->id]);
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
    public function edit($id)
    {
        //
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
        //
    }
}
