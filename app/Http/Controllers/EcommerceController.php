<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\jualbeli\Barang;

class EcommerceController extends Controller
{
    public function index()
    {
    	$posts = Barang::all();
    	return view('ecomerce.index',compact(['posts']));
    }
    
}
