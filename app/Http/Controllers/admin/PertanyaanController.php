<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\pertanyaan;
use Illuminate\Http\Request;

class PertanyaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pertanyaan = pertanyaan::all();
        
        $data = [
            'pertanyaan' => $pertanyaan
        ];
        return view('admin.pertanyaan.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pertanyaan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'pertanyaan' => 'required',
            'keterangan' => 'required',
        ]);

        $pertanyaan= new pertanyaan;
        $pertanyaan->pertanyaan = $request->pertanyaan;
        $pertanyaan->keterangan = $request->keterangan;

        $pertanyaan->save();

        return redirect()->route('pertanyaan.index');
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
        $data = [
            'datas' => pertanyaan::where('id', $id)->first(),
        ];
        return view('admin.pertanyaan.edit', $data);
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
        $this->validate($request, [
            'pertanyaan' => 'required',
            'keterangan' => 'required',
        ]);

        $pertanyaan = pertanyaan::where('id', $id)->first();

        $pertanyaan->pertanyaan = $request->pertanyaan;
        $pertanyaan->keterangan = $request->keterangan;

        $pertanyaan->save();

        return redirect()->route('pertanyaan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pertanyaan = Pertanyaan::findOrFail($id);
        $pertanyaan->delete();

        return redirect()->route('pertanyaan.index');
    }
}
