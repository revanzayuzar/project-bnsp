<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;

    protected $fillable = [
        'foto',
        'nama',
        'nik',
        'jenis_kelamin',
        'tempat_lahir',
        'tanggal_lahir',
        'alamat',
        'email',
        'nomor_telepon',
        'status_pegawai',
        'jabatan',
        'gaji',
        'pendidikan_terakhir',
        'status_perkawinan',
        'jumlah_anak',
    ];
}
