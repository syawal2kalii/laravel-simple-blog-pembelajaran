<?php

namespace App\Http\Controllers;

use App\Article;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users=User::all();
        return view('list-users',compact('users'));
    }

    public function allusers(User $user){
        return dd($user);
//        return dd($user->name)    ;
    }

}
