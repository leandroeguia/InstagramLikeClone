<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\USer;

class ProfilesController extends Controller
{
    public function index($user)
    {
        //dd($user);
        $user = User::find($user);
        return view('home',[
            'user'=> $user,
        ]);
    }
}
