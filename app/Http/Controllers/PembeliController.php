<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Pembeli;
use App\models\jualbeli\Pesanan;
use Auth;
use App\User;
use Alert;

class PembeliController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('cari')) {
            $data_pembeli = \App\models\Pembeli::where('nama_depan','LIKE','%'.$request->cari.'%')->get();
        }else{
            $data_pembeli = \App\models\Pembeli::all();
        }
        return view('pembeli.index',['data_pembeli' => $data_pembeli]);
    }

    public function create(Request $request)
    {
        $this->validate($request,[
            'email' => 'required|email|unique:users',
            'avatar' => 'mimes:jpg,png,jpeg'
            
        ]);
        
        //insert ke tabel Users
        $user = new \App\User;
        $user->role = 'pembeli';
        $user->name = $request->nama_depan;
        $user->email = $request->email;
        $user->password = bcrypt('12345678');
        $user->remember_token = str_random(60);
        $user->save();
        
        //insert ke tabel pembeli
        $request->request->add(['user_id' => $user->id ]);
        $pembeli = \App\models\Pembeli::create($request->all());
        if($request->hasFile('avatar')){
            $request->file('avatar')->move('images/profile/pembeli/',$request->file('avatar')->getClientOriginalName());
            $pembeli->avatar = $request->file('avatar')->getClientOriginalName();
            $pembeli->save();
        }

        return redirect('/pembeli')->with('sukses','data berhasil diinput');
    }

    public function edit($id)
    {
        $pembeli = \App\models\Pembeli::find($id);
        return view('/pembeli/edit',['pembeli'=>$pembeli]);
    }

    public function update(Request $request,$id)
    {
        
        $this->validate($request,[
            'avatar' => 'mimes:jpg,png,jpeg'
        ]);
        

        $pembeli = \App\models\Pembeli::find($id);
        // \App\User::find($pembeli->user_id)->update(['email'=>$request->email, 'password'=>bcrypt($request->password)]);
        $data=$request->all();
        // unset($data['email']);
        $pembeli->update($data);
        if($request->hasFile('avatar')){
            $request->file('avatar')->move('images/profile/pembeli',$request->file('avatar')->getClientOriginalName());
            $pembeli->avatar = $request->file('avatar')->getClientOriginalName();
            $pembeli->save();
        }
        return redirect('/pembeli')->with('sukses','Data berhasil di update');
    }

    public function change($id)
    {
        $pembeli = \App\models\Pembeli::find($id);
        return view('/pembeli/change',['pembeli'=>$pembeli]);
    }

    public function updatepass(Request $request,$id)
    {
        $pembeli = \App\models\Pembeli::find($id);
        \App\User::find($pembeli->user_id)->update(['email'=>$request->email, 'password'=>bcrypt($request->password)]);
        $data=$request->all();
        // unset($data['email']);
        $pembeli->update($data);

        return redirect('/pembeli')->with('sukses','Email Dan Password Berhasil Diupdate');
    }

    public function delete($id)
    {
        $pembeli = Pembeli::where('id',$id)->first();
        $user = \App\User::find($pembeli->user_id);

        $pembeli->delete();
        $user->delete();
        return redirect('/pembeli')->with('sukses','data berhasil dihapus');
    }

    public function profile($id)
    {
        $pembeli = Pembeli::where('id',$id)->first();

        return view('pembeli.profile',compact(['pembeli']));
    }
}
