<?php

namespace App\Http\Controllers\admin;
use File;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bukutamu;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\BukuTamuExport;

class BukuTamuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bukuTamu = Bukutamu::all();

        $data = [
            'bukuTamu' => $bukuTamu
        ];
        return view('admin.manajemen_buku_tamu.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function bukutamuexport(){
        return Excel::download(new BukuTamuExport, 'bukutamu.xlsx');
    }

    public function create()
    {
        return view('admin.manajemen_buku_tamu.create');
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
            'nama' => 'required|min:3|max:20',
            'alamat' => 'required',
            'instansi' => 'required',
            'email' => 'required|email',
            'telfon' => 'required',
            'foto' => 'required|mimes:jpeg,png,jpg'
        ], [
            'nama.required' => 'Nama Harus Diisi',
            'nama.min' => 'Nama Minimal 3 Karakter',
            'nama.max' => 'Nama Maksimal 20 Karakter',
            'instansi.required' => 'Instansi Harus Diisi',
            'email.required' => 'Email Harus Diisi',
            'telfon.required' => 'Nomor Telfon Harus Diisi',
            'foto.required' => 'Foto Harus diupload'
        ]);

        $bukuTamu= new Bukutamu;
        $bukuTamu->nama = $request->nama;
        $bukuTamu->alamat = $request->alamat;
        $bukuTamu->instansi = $request->instansi;
        $bukuTamu->email = $request->email;
        $bukuTamu->telfon = $request->telfon;

        if($request->foto){
            $namaFile = 'Foto'.'__'.time().'__'.$request->foto->getClientOriginalName();
            $path = 'public/buku_tamu';
            $request->foto->storeAs($path, $namaFile);
            $bukuTamu->foto = $namaFile;
        }

        $bukuTamu->save();

        return redirect()->route('manajemen_buku_tamu.index');
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
        $data=[
            'pertanyaan' => $pertanyaan
        ];
        return view('edit', $data);
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
        $bukuTamu = Bukutamu::findOrFail($id);
        if ($bukuTamu->foto){
            File::delete('storage/buku_tamu/'.$bukuTamu->foto);
        }
        $bukuTamu->delete();

        return redirect()->route('manajemen_buku_tamu.index');
    }
}
