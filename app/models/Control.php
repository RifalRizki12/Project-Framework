<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Control extends Model
{
    protected $table = 'control';
    protected $fillable = ['nama_depan','nama_belakang','tanggal_lahir','jenis_kelamin','alamat','agama','avatar','user_id','nohp'];

    public function getAvatar()
    {
        if(!$this->avatar){
            return asset ('images/profile/control/default.png');
        }
        return asset('images/profile/control'.$this->avatar);
    }

    public function namaLengkap()
    {
        return $this->nama_depan.' '.$this->nama_belakang;
    }

    // public function user(){
    //     return $this->belongsTo(User::class);
    // }

    public function user(){
        return $this->belongsTo('App\User');
    }
}
