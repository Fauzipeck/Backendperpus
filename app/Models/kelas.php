<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\kelas as Authenticatable;


class kelas extends Model
{
    use HasFactory;
    protected $table = 'kelas';
    protected $primarykey = 'id_kelas';
    public $timestamps = false;
    public $fillable = [
        'nama_kelas',
        'kelompok',
        'angkatan' 
    ];
}