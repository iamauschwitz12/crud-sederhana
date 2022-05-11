<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Model_Gso23a extends Model
{
  protected $table = "gso23a";
  protected $fillable = ['nama','jenis_kelamin','agama','email','asal_sekolah','image'];
}
