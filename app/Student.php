<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //agar mass assignment diperbolehkan
    //bisa pakai fillable atau guarded
    protected $fillable = ['nama', 'nrp', 'email', 'jurusan']; //contoh fillable
    // protected $guarded = ['id']; //contoh guarded
}
