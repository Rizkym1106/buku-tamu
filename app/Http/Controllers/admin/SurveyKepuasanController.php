<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\BukuTamu;
use App\Models\ReviewRespon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

        $this->validate($request, [
            'nama' => 'required|min:3|max:20',
            'alamat' => 'required',
            'instansi' => 'required',
            'email' => 'required|email',
            'telfon' => 'required',
            // 'foto' => 'required|mimes:jpeg,png,jpg'
        ], [
            'nama.required' => 'Nama Harus Diisi',
            'nama.min' => 'Nama Minimal 3 Karakter',
            'nama.max' => 'Nama Maksimal 20 Karakter',
            'instansi.required' => 'Instansi Harus Diisi',
            'email.required' => 'Email Harus Diisi',
            'telfon.required' => 'Nomor Telfon Harus Diisi',
            // 'foto.required' => 'Foto Harus diupload'
        ]);

        $bukuTamu= new Bukutamu;
        $bukuTamu->nama = $request->nama;
        $bukuTamu->alamat = $request->alamat;
        $bukuTamu->instansi = $request->instansi;
        $bukuTamu->email = $request->email;
        $bukuTamu->telfon = $request->telfon;

        // if(isset($request->foto)) {
        //     $namaFile = 'foto_'.time().$request->foto->getClientOriginalName();
        //     $path = 'public/buku_tamu';
        //     $request->foto->storeAs($path, $namaFile);
        //     $bukuTamu->foto = $namaFile;
        // }

        if($request->image != null){
            $img = $request->image;
            $Path = '/public/buku_tamu/';
            
            $image_parts = explode(";base64,", $img);
            $image_type_aux = explode("image/", $image_parts[0]);
            $image_type = $image_type_aux[1];
            
            $image_base64 = base64_decode($image_parts[1]);
            $fileName = uniqid() . '.png';
            
            $file = $Path . $fileName;
            Storage::put($file, $image_base64);
            $bukuTamu->foto = $fileName;
        }
        

        $bukuTamu->save();
        return redirect()->route('dashboard.homepage');
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
