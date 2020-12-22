<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Pembeli extends Model
{
    protected $table = 'pembeli';
    protected $fillable = ['nama_depan','nama_belakang','jenis_kelamin','alamat','agama','avatar','user_id','nohp'];

    public function getAvatar()
    {
        if(!$this->avatar){
            return asset ('images/default.png');
        }
        return asset('images/'.$this->avatar);
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}
