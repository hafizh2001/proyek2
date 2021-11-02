<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function getAll(){
        $user=User::All();
        return view('detailUserChild',['user'=>$user]);
    }
}
