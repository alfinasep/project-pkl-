<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class riwayat extends Model
{
    protected $table = 'bio';
    protected $fillalble = ['nama','tempat','tanggal_lahir','hoby','foto','file'];
    protected $primaryKey = 'id';
}
