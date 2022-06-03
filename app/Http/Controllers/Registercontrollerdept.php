<?php

namespace App\Http\Controllers;
use App\Models\departamento;
use App\Http\Requests\RegisterRequestD;
use Faker\Guesser\Name;
use Illuminate\Http\Request;
use App\Http\Controllers;

class Registercontrollerdept extends Controller
{
    //

    public function show(){
        return view('paciente.departamento');
        }

        protected $reg = 'departamento';
        public function departamento(RegisterRequestD $request){
            // $user=User::created($request->validated());
            
            //$reg = departamento::create(request(['name']));
            //return redirect('/login')->with('success','Cuenta creada satisfactoriamente');
             $reg=new departamento();
             $reg->nombre=$request->get('name');
             
             $reg->save();
             return redirect('/')->with('success','Departamento creado satisfactoriamente');
             //return view('index');
         }

         
}
