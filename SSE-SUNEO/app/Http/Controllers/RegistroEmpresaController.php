<?php

namespace App\Http\Controllers;

use App\Models\User_empresas as User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class RegistroEmpresaController extends Controller
{
    //
    public function view_perfil_empresa(){
        return view('Registro_Empresas.Ingreso_perfil_de_la_empresa');
    }

    public function view_encuesta_satisfaccion(){
        return view('Registro_Empresas.Ingreso_encuesta_de_satisfaccion');
    }

    public function create(Request $request){
        
        $user_empresa = new User;
        $user_empresa->fill([
            'user' => $request->user,
            'correo' => $request->correo,
            'password' => Crypt::encryptString($request->password),
            'remember_token' => $request->_token
        ])->save();

        return redirect('/Empresas/encuesta-de-satisfaccion');
    }

    public function stored_encuesta(Request $request){
        return $request->all();
    }
}
