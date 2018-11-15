<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class anggota extends Model
{
    protected $table = 'buku';
    protected $fillalble = ['nama','kelas','asal_sekolah'];
    protected $primaryKey = 'id';
}
