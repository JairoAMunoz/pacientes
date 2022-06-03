<?php

namespace App\Http\Controllers;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Faker\Guesser\Name;
use Illuminate\Http\Request;

class Registercontroller extends Controller
{
    //
public function show(){
return view('auth.register');
}

public function register(RegisterRequest $request){
   // $user=User::created($request->validated());
    //return redirect('/login')->with('success','Cuenta creada satisfactoriamente');
    $reg=new User;
    $reg->name=$request->get('name');
    $reg->password=$request->get('password');
    $reg->save();
    return redirect('/')->with('success','Cuenta creada satisfactoriamente');
    //return view('index');
}

}
