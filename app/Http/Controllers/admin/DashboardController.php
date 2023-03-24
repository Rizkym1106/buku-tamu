<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\pertanyaan;
use App\Models\respon;
use App\Models\ReviewRespon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.dashboard.index');
    }

    public function homepage()
    {
        return view('home.home.index');
    }
    
    public function profil()
    {
        return view('home.profil.index');
    }

    public function contact()
    {
        return view('home.contact.index');
    }

    public function survey()
    {
        return view('admin.dashboard.survey');
    }

    public function pertanyaan() {
        $data = [
            'pertanyaans' => pertanyaan::all(),
            'respons' => respon::all(),
        ];
        return view('admin.dashboard.pertanyaan', $data);
    }

    public function hasil(Request $request) {

        foreach($request->pertanyaan as $key => $value) {
            $data = new ReviewRespon;
            $data->pertanyaan_id = $value;
            $data->respon_id = $request['respon'][$key];
            $data->save();
        }
        return redirect()->route('dashboard.homepage');
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
