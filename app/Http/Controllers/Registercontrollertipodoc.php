<?php
namespace App\Http\Controllers;
use App\Models\departamento;
use App\Http\Requests\RegisterRequestT;
use Faker\Guesser\Name;
use Illuminate\Http\Request;
use App\Http\Controllers;
use App\Models\tipodocumento;

class Registercontrollertipodoc extends Controller
{
    //
    public function show(){
        return view('paciente.tipodocumento');
        }

        protected $reg = 'documentos';

        public function tipodocumento(RegisterRequestT $request){
         
            $reg=new tipodocumento();
            $reg->nombredocumento=$request->get('tipodoc');
          
            $reg->save();
            return redirect('/')->with('success','Cuenta creada satisfactoriamente');
            //return view('index');
        }






  

}
