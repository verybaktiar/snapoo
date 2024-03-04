<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    use HasFactory;


    protected $table = "services";
    protected $fillable = ['id_services','nama_service', 'harga', 'keterangan'];
    protected $primaryKey = 'id_services';
}
