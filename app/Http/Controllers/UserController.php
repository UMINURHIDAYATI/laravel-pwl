<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Gate;
use PDF;

class UserController extends Controller
{
    public function manageuser(){
      $user = User::All();
      return view('manageuser', ['user'=>$user]);
  }
  public function add(){
    return view('adduser');
}
public function edit($id)
{
    $user = User::find($id);
    return view('edituser',['user'=>$user]);
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
public function update($id, Request $request)
{
    $user = User::find($id);
    $user->name = $request->name;
    //$user->email = $request->email;
    $user->roles = $request->roles;
    if($user->imageurl &&file_exists(storage_path('app/public/' . $user->imageurl)))
    {
        \Storage::delete('public/'.$user->imageurl);
    }
    $image = $request->file('image')->store('images', 'public');
    $user->imageurl = $image;
    $user->save();
    return redirect('/manageuser');
}
public function delete($id){
    $user = User::find($id);
    $user->delete();
    return redirect('/manageuser');
}
public function cetak_pdf(){
    $user = User::all();
    $pdf = PDF::loadview('user_pdf',['user'=>$user]);
    return $pdf->stream();
}
}