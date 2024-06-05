<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;
    protected $fillable= ['kode','nama','tempat_lahir','tanggal_lahir','jenis_kelamin','email','alamat','kelurahan_id'];
}
