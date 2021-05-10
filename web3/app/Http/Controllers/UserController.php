<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function infoPage(){
        return view('user.info');
    }
    public function infoUpdate(UserRequest $request){
//        $validatedData=$request->validate([
//            'name'=>'required|min:4|max:32',
//            'email'=>'required|email',
//        ],[
//            'name.required'=>'username empty',
//            'name.min'=>'username less than 4',
//            'name.max'=>'username more than 32'
//        ]);
        $name=$request->input('name');
        $email=$request->input('email');
        if (empty($name)||empty($email))
        {
            return back()->withErrors('can not be empty');
        }
        $uid=auth()->id();
        $res=DB::table("users")
            ->where("id",$uid)
            ->update(["name"=>$name,"email"=>$email]);
        if($res){
            return back()->with(['success'=>'updated']);
        }else{
            return back()->withErrors('fail to update');
        }
    }
    public function avatarPage(){
        return view('user.avatar');
    }
    public function avatarUpdate(Request $request)
    {
        $file = $request->file('avatar');
        if (empty($file)) {
            return back()->withErrors('choose file');
        }
        $path = $file->store('avatar', 'public');
        $oldAvatar = auth()->user()->avatar;
        $uid = auth()->id();
        $res = DB::table('users')
            ->where('id', $uid)
            ->update(['avatar' => $path]);
        if ($res) {
            Storage::disk('public')->delete($oldAvatar);

            return back()->with(['success' => 'updated']);
        } else {
            return back()->withErrors('fail to update');
        }

    }
    public function news()
    {
        return view('user.news');
    }
}
