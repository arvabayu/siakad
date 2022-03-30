<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Mahasiswa as Authenticatable;
use Illuminate\Notifications\Notifiable;

class mahasiswa extends Model
{
    protected $table='mahasiswa'; 
    protected $primaryKey = 'id_mahasiswa'; 

    protected $fillable = [
        'Nim',
        'Nama',
        'Kelas',
        'Jurusan',
        ];

}
