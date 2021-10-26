<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suratmasuk extends Model
{
    protected $table = 'suratmasuk';
    protected $fillable = ['no_surat','kode','filemasuk', 'isi'];

    //function relasi ke disposisi
    // public function disposisi()
    // {
    //     return $this->hasMany('App\Disposisi');
    // }

    // //function relasi ke user
    // public function users()
    // {
    //     return $this->belongsTo('App\User');
    // }

}
