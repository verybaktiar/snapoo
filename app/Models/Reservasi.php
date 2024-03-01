<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservasi extends Model
{
    use HasFactory;
    protected $table = 'reservasi';
    protected $fillable = ['id_reservasi','nama','email','no_hp','alamat','tanggal','waktu','subtotal','productName2'];
}
