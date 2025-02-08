<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'nip',
        'nama',
        'tp_lahir',
        'alamat',
        'tg_lahir',
        'jenis_kl',
        'gol',
        'eselon',
        'jabatan',
        'tp_tugas',
        'agama',
        'unit_kerja',
        'no_hp',
        'npwp',
    ];
}
