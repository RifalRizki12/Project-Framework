<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboards.index');
    }

    public function check()
    {
        if (auth()->user()->role == 'admin') {
            return redirect('/dashboard');
        }
        return redirect('/ecomerce');
    }
}
