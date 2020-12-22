<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','role',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function pembeli(){
        return $this->hasMany('App\models\Pembeli');
    }

    public function control(){
        return $this->hasMany('App\models\Control');
    }

    public function pesanan(){
        return $this->hasMany('App\models\jualbeli\Pesanan');
    }

    public function barang()
    {
        return $this->hasMany('App\models\jualbeli\Barang');
    }
}