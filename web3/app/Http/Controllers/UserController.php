<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function infoPage(){
        return view('user.info');
    }
    public function infoUpdate(){
        dd('info update');
    }
    public function avatarPage(){
        return view('user.avatar');
    }
    public function avatarUpdate(){
        dd('avatarupdate');
    }
    public function news()
    {
        return view('user.news');
    }
}
