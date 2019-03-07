<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modelkategori extends Model
{
    protected $table = 'tb_kategori';
    protected $fillable = [
        'kategory',
        'deskripsi',
        'tanggal'
    ];
}
