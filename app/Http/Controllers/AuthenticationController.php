<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Eksternal;
use App\User;
use App\SuperAdmin;
use Auth;



class AuthenticationController extends Controller
{
 
    public function index()
    {
        if(Auth::check()){
            return redirect()->route
        }
    }
        //
}

