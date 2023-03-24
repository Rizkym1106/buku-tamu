<?php

namespace App\Http\Controllers;

use App\Mail\KirimEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class KirimEmailController extends Controller
{
    public function index($email)
    {
        //dd($email);
        $data_email = [
            'subject' => 'Survey Kepuasan Tamu',
            'sender_name' => 'kementerianlhksulewesi@gmail.com',
            'urlpertanyaan' => route('dashboard.pertanyaan'),
        ];

        Mail::to($email)->send(new KirimEmail($data_email,));

        return redirect()->route('manajemen_buku_tamu.index');
    }
}
