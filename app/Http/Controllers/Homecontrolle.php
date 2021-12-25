<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
class Homecontrolle extends Controller
{
    //
    public function index(){
        $role = Auth::User()->role;
        
        if($role == '0'){
            return view("dashboard");
        }
        else{
            return view("admindashboard");
        }
        
       
    }
}
