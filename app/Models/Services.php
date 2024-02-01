<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    use HasFactory;


    protected $table = "services";
    protected $fillable = ['nama_service', 'harga', 'keterangan'];
    protected $primarykey = 'id_services';
}
