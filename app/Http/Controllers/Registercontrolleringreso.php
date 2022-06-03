<?php

namespace App\Http\Controllers;
use App\Models\registro;
use App\Http\Requests\RegisterRequestP;
use Faker\Guesser\Name;
use Illuminate\Http\Request;
use App\Http\Controllers;


class Registercontrolleringreso extends Controller
{
    

    public function show(){
        return view('ingreso.ingreso');
        }

        protected $reg = 'paciente';

        public function ingreso(RegisterRequestP $request){
         
            $reg=new registro();
            $reg->documento=$request->get('numdoc');
            $reg->nombre1=$request->get('nombre1');
            $reg->nombre2=$request->get('nombre2');
            $reg->save();
            return redirect('/')->with('success','Cuenta creada satisfactoriamente');
            //return view('index');
        }



}
