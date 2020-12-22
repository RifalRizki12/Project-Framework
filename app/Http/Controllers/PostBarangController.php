<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\jualbeli\Barang;

class PostBarangController extends Controller
{
    public function index(Request $request)
    {
        $data_barang = Barang::orderBy('created_at', 'DESC')->get(); // 2
        // CODE DIATAS SAMA DENGAN > select * from `products` order by `created_at` desc 
        return view('postsBarang.index', compact('data_barang')); // 3
    }

    public function create(Request $request)
    {
        //MELAKUKAN VALIDASI DATA YANG DIKIRIM DARI FORM INPUTAN
        $this->validate($request, [
            'nama_barang' => 'required|string|max:100',
            'keterangan' => 'required|string',
            'harga' => 'required|integer',
            'stok' => 'required|integer',
            'gambar' => 'mimes:jpg,png,jpeg'
        ]);
        
        $barang = Barang::create([
    		'nama_barang' => $request->nama_barang,
    		'keterangan' => $request->keterangan,
            'user_id' => auth()->user()->id,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'gambar' => $request->gambar,
            
    	]);

        if($request->hasFile('gambar')){
            $request->file('gambar')->move('images/',$request->file('gambar')->getClientOriginalName());
            $barang->gambar = $request->file('gambar')->getClientOriginalName();
            $barang->save();
        }

        return redirect('/postsBarang')->with('sukses','data berhasil diinput');
    }

    public function delete($id)
    {
        $barang = Barang::where('id',$id)->first();

        $barang->delete();
        return redirect('/postsBarang')->with('sukses','data berhasil dihapus');
    }

    public function edit($id)
    {
        $barang = \App\models\jualbeli\Barang::find($id);
        return view('/postsBarang/edit',['barang'=>$barang]);
    }

    public function update(Request $request,$id)
    {
        
        $this->validate($request,[
            'avatar' => 'mimes:jpg,png,jpeg'
        ]);
        

        $barang = \App\models\jualbeli\Barang::find($id);
        $data=$request->all();
        // unset($data['email']);
        $barang->update($data);
        if($request->hasFile('gambar')){
            $request->file('gambar')->move('images/',$request->file('gambar')->getClientOriginalName());
            $barang->gambar = $request->file('gambar')->getClientOriginalName();
            $barang->save();
        }
        return redirect('/postsBarang')->with('sukses','Data berhasil di update');
    }

}
