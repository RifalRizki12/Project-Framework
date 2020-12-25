<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\jualbeli\Barang;
use App\models\jualbeli\Pesanan;
use App\models\jualbeli\PesananDetail;
use Auth;
use Alert;
use Carbon\Carbon;

class ShopController extends Controller
{
    public function index()
    {
    	$barangs = Barang::all();
    	return view('ecomerce.shop',compact(['barangs']));
    }

    public function detail($id)
    {
        $barang = Barang::where('id', $id)->first();

        return view('ecomerce.detail', compact(['barang']));
    }

    public function pesan(Request $request, $id)
    {
        $barang = Barang::where('id', $id)->first();
        $tanggal =Carbon::now();

        //validasi apakah pesanan melebihi stok
        if ($request->jumlah_pesan > $barang->stok) {

            alert()->warning('Pesanan Melebihi Stok', 'Warning');
            return redirect('/detail/'.$id);
        }if ($request->jumlah_pesan <= '0') {
            alert()->error('Jumlah Pesanan Harus Diisi', 'Error');
            return redirect('/detail/'.$id);
        }

        //cek validasi
        $cek_pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();

        //simpan database pesanan
        if (empty($cek_pesanan)) {
            $pesanan = new Pesanan;
            $pesanan->user_id = Auth::user()->id;
            $pesanan->tanggal = $tanggal;
            $pesanan->status = 0;
            $pesanan->jumlah_harga = 0;
            $pesanan->save();
        }

        // simpan database pesanan_detail
        $pesanan_baru = Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();

        //cek pesanan_detail
        $cek_pesanan_detail = PesananDetail::where('barang_id',$barang->id)->where('pesanan_id', $pesanan_baru->id)->first();
        if (empty($cek_pesanan_detail)) {
            $pesanan_detail = new PesananDetail;
            $pesanan_detail->barang_id = $barang->id;
            $pesanan_detail->pesanan_id = $pesanan_baru->id;
            $pesanan_detail->jumlah = $request->jumlah_pesan;
            $pesanan_detail->jumlah_harga = $barang->harga*$request->jumlah_pesan;
            $pesanan_detail->save();   
        }else{
            $pesanan_detail = PesananDetail::where('barang_id',$barang->id)->where('pesanan_id', $pesanan_baru->id)->first();
            $pesanan_detail->jumlah = $pesanan_detail->jumlah+$request->jumlah_pesan;

            //harga sekarang
            $harga_pesanan_detail_baru = $barang->harga*$request->jumlah_pesan;
            $pesanan_detail->jumlah_harga = $pesanan_detail->jumlah_harga + $harga_pesanan_detail_baru;
            $pesanan_detail->update(); 
        }

        //jumlah total
        $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();
        $pesanan->jumlah_harga = $pesanan->jumlah_harga+$barang->harga*$request->jumlah_pesan;
        $pesanan->update();
        
        alert()->success('Pesanan Masuk Dalam Keranjang', 'Sukses');
        return redirect('shop');
    }

    public function check_out()
    {
        $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();
        if (!empty($pesanan)) {
            $pesanan_details = PesananDetail::where('pesanan_id', $pesanan->id)->get();
            
        }

        return view('ecomerce.check_out', compact(['pesanan', 'pesanan_details']));
    }

    public function delete($id)
    {
        $pesanan_detail = PesananDetail::where('id',$id)->first();

        $pesanan = Pesanan::where('id', $pesanan_detail->pesanan_id)->first();
        $pesanan->jumlah_harga = $pesanan->jumlah_harga-$pesanan_detail->jumlah_harga;
        $pesanan->update();

        $pesanan_detail->delete();
        $pesanan->delete();

        alert()->warning('Pesanan Sukses Dihapus', 'Sukses');
        return redirect('check-out');
    }

    public function konfirmasi()
    {
        $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();
        $pesanan_id = $pesanan->id;

        $pesanan->status = 1;
        $pesanan->update();

        $pesanan_details = PesananDetail::where('pesanan_id', $pesanan_id)->get();
        foreach ($pesanan_details as $pesanan_detail) {
            $barang = Barang::where('id', $pesanan_detail->barang_id)->first();
            $barang->stok = $barang->stok-$pesanan_detail->jumlah;
            $barang->update();
        }

        alert()->success('Pesanan Sukses', 'Sukses');
        return redirect('shop');
    }
}
