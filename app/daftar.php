<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class daftar extends Model
{
    protected $table = 'perpustakaan';
    protected $fillalble = ['judul_buku','pengarang','penerbit','tahun_penerbit'];
    protected $primaryKey = 'id';
}
