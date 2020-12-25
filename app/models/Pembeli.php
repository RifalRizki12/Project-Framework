<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Pembeli extends Model
{
    protected $table = 'pembeli';
    protected $fillable = ['nama_depan','nama_belakang','tanggal_lahir','jenis_kelamin','alamat','agama','avatar','user_id','nohp'];

    public function getAvatar()
    {
        if(!$this->avatar){
            return asset ('images/profile/pembeli/default.png');
        }
        return asset('images/profile/pembeli/'.$this->avatar);
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}
