<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function infoPage(){
        dd('info');
    }
    public function infoUpdate(){
        dd('info update');
    }
    public function avatarPage(){
        dd('avatar');
    }
    public function avatarUpdate(){
        dd('avatarupdate');
    }
    public function news()
    {
        dd('my all news');
    }
}
