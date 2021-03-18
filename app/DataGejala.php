<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataGejala extends Model
{
    protected $table = 'datagejalas';
    protected $fillable = ['namaGejala'];
}
