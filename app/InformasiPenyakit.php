<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InformasiPenyakit extends Model
{
    protected $table = 'informasipenyakits';
    protected $fillable = ['namaPenyakit','definisiPenyakit','solusiPenyakit'];
}
