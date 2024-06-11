<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthCheckController extends Controller{
    public function check()
    {
        if (Auth::id()) {
            $usertype = Auth()->user()->usertype;
            if ($usertype == 'user') {
                return view('user.index');
            } 
            else if ($usertype == 'admin') {
                return view('admin.index');
            } 
            else {
                return redirect()->back();
            }
        }
    }
   
}