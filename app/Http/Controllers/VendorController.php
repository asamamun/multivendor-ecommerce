<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VendorController extends Controller
{
    public function display(){
        return view('vendor.dashboard');
    }
}
