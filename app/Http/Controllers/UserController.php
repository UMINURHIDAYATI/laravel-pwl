<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Gate;

class UserController extends Controller
{
    public function manageuser($id){
      $user = User::find($id);
        return view('manageuser', ['user'=>$id]);
    }
    public function add(){
        return view('adduser');
    }
    public function create(Request $request){
        User::create([
            'name' => $request->name,
            'email'=> $request->email,
            'password' => \Hash::make($request->password),
            'roles' => 'User'
        ]);
        return redirect('/manageuser');
    }
    public function update($id){
        $user = User::find($id);
        $user->name = $request->name;
        $user->name = $request->name;
        $user->name = $request->name;
        $user->save();
        return redirect('/manageuser');
    }
    public function delete($id){
        $user = User::find($id);
        $user->delete();
        return redirect('/manageuser');
    }
}