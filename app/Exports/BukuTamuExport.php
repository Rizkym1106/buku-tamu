<?php

namespace App\Exports;

use App\Models\BukuTamu;
use Maatwebsite\Excel\Concerns\FromCollection;

class BukuTamuExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return BukuTamu::all();
    }
}
