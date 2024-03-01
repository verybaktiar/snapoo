<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $table = "produks";
    protected $primaryKey = "id_produk";
    protected $fillable = ['id_produk','nama_paket', 'harga', 'deskripsi', 'gambar', 'slot'];
}
