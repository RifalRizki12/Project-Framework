<?php

use Illuminate\Database\Seeder;
use App\models\jualbeli\Barang;

class BarangTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Barang::create([
            'user_id' => 14,
            'nama_barang' => 'Macbook Pro 13 2017',
            'keterangan' => 'Seri komputer jinjing Macintosh yang diproduksi oleh Apple',
            'harga' => 18500000,
            'stok' => 5
        ]);

        Barang::create([
            'user_id' => 14,
            'nama_barang' => 'Asus Rog Slim',
            'keterangan' => 'Sebuah brand perangkat keras notebook khusus gaming dari ASUS',
            'harga' => 10500000,
            'stok' => 15
        ]);
    }
}
