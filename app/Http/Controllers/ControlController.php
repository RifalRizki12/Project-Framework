<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Control;

class ControlController extends Controller
{
    public function index(Request $request)
    {

        if ($request->has('cari')) {
            $data_control = \App\models\Control::where('nama_depan','LIKE','%'.$request->cari.'%')->get();
        }else{
            $data_control = \App\models\Control::all();
        }
        return view('control.index',compact(['data_control']));
        // return view('control.index',['data_control' => $data_control,'control'=>$control]);
    }

    public function create(Request $request)
    {
        $this->validate($request,[
            'email' => 'required|email|unique:users',
            'avatar' => 'mimes:jpg,png,jpeg'
            
        ]);
        
        //insert ke tabel Users
        $user = new \App\User;
        $user->role = 'admin';
        $user->name = $request->nama_depan;
        $user->email = $request->email;
        $user->password = bcrypt('12345678');
        $user->remember_token = str_random(60);
        $user->save();
        
        //insert ke tabel siswa
        $request->request->add(['user_id' => $user->id ]);
        $control = \App\models\Control::create($request->all());
        if($request->hasFile('avatar')){
            $request->file('avatar')->move('images/profile/control/',$request->file('avatar')->getClientOriginalName());
            $control->avatar = $request->file('avatar')->getClientOriginalName();
            $control->save();
        }

        return redirect('/control')->with('sukses','data berhasil diinput');
    }

    public function delete($id)
    {
        $control = Control::where('id',$id)->first();
        $user = \App\User::find($control->user_id);

        $control->delete();
        $user->delete();
        return redirect('/control')->with('sukses','data berhasil dihapus');
    }

    public function edit($id)
    {
        $control = \App\models\Control::find($id);
        return view('/control/edit',['control'=>$control]);
    }

    public function update(Request $request,$id)
    {
        
        $this->validate($request,[
            'avatar' => 'mimes:jpg,png,jpeg'
        ]);
        

        $control = \App\models\Control::find($id);
        \App\User::find($control->user_id)->update(['email'=>$request->email, 'password'=>bcrypt($request->password)]);
        $data=$request->all();
        // unset($data['email']);
        $control->update($data);
        if($request->hasFile('avatar')){
            $request->file('avatar')->move('images/profile/control/',$request->file('avatar')->getClientOriginalName());
            $pembeli->avatar = $request->file('avatar')->getClientOriginalName();
            $pembeli->save();
        }
        return redirect('/control')->with('sukses','Data berhasil di update');
    }

    public function change($id)
    {
        $control = \App\models\Control::find($id);
        return view('/control/change',['control'=>$control]);
    }

    public function updatepass(Request $request,$id)
    {
        $control = \App\models\Control::find($id);
        \App\User::find($control->user_id)->update(['email'=>$request->email, 'password'=>bcrypt($request->password)]);
        $data=$request->all();
        // unset($data['email']);
        $control->update($data);

        return redirect('/control')->with('sukses','Email Dan Password Berhasil Diupdate');
    }

    public function profile($id)
    {
        $control = Control::where('id',$id)->first();

        return view('control.profile',compact(['control']));
    }

}
