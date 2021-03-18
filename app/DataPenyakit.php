<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataPenyakit extends Model
{
    protected $table = 'datapenyakits';
    protected $fillable = ['namaPenyakit', 'solusiPenyakit'];
}
