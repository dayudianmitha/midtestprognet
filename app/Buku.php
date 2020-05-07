<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
    protected $table = "tb_buku";
    protected $primarykey = "id";
    protected $fillable = [
        'judul_buku','kategori','penulis', 'penerbit', 'tahun'
    ];
}
