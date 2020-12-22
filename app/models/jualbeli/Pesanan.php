<?php

namespace App\models\jualbeli;

use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    public function user(){
        return $this->belongsTo('App\User');
    }

    public function pesanan_detail(){
        return $this->hasMany(PesananDetail::class);
    }
}
