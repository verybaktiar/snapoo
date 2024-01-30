<?php

namespace App\Imports;

use App\Models\Pelanggan;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;

class PelangganImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Pelanggan([
            'nama'     => $row[0],
            'email'    => $row[1],
            'no_telp'    => $row[2],
            'harga'    => $row[3],
            'produk'    => $row[4],
           
        ]);
    }
}
