<?php

namespace App\models\jualbeli;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $fillable = ['nama_barang','harga','stok','gambar','user_id','keterangan'];

    // public function gambar()
    // {
    //     if ($this->gambar) {
    //         return $this->gambar;
    //     }else{
    //         return asset('roti-bakar.jpg');
    //     }

    // }

    public function pesanan_detail(){
        return $this->hasMany(PesananDetail::class);
    }
    
    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
