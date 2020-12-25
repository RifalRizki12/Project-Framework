<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\models\Pembeli;
use App\models\Control;
use Auth;

class ProfileController extends Controller
{
    public function index()
    {
        $user = User::where('id', Auth::user()->id)->first();
        $pembeli = Pembeli::where('user_id', $user->id)->get();

        return view('ecomerce.profile.index',compact(['user','pembeli']));
    }


}
