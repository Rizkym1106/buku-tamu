<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReviewRespon extends Model
{
    use HasFactory;

    public function respon() {
        return $this->belongsTo(respon::class ,'respon_id');
    }

    public function pertanyaan() {
        return $this->belongsTo(pertanyaan::class ,'pertanyaan_id');
    }

    public function buku_tamu() {
        return $this->belongsTo(BukuTamu::class, 'buku_tamu_id');
    }
}
