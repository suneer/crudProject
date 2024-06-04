<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
       
            $users= User::orderBy('id', 'ASC')->paginate(3);
            
            return view ('welcome',compact('users'));
    
        

    }
}
