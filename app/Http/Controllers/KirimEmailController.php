<?php

namespace App\Http\Controllers;

use App\Mail\KirimEmail;
use App\Models\BukuTamu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class KirimEmailController extends Controller
{
    public function index($id)
    {
        //dd($email);
        $data = BukuTamu::where('id', $id)->first();
        $data_email = [
            'subject' => 'Survey Kepuasan Tamu',
            'sender_name' => 'kementerianlhksulewesi@gmail.com',
            'urlpertanyaan' => route('dashboard.pertanyaan', ['id' => $data->id]),
            'datas' => $data,
        ];

        Mail::to($data->email)->send(new KirimEmail($data_email,));

        return redirect()->route('manajemen_buku_tamu.index');
    }
}
