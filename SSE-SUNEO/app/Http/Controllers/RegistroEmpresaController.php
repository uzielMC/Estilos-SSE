<?php

namespace App\Http\Controllers;

use App\Models\User as User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class RegistroEmpresaController extends Controller
{
    public function view(){
        return view('Registro_Empresas.Ingreso_perfil_de_la_empresa');
    }

    public function create(Request $request){
        
        $user_empresa = new User;
        $user_empresa->fill([
            'correo' => $request->correo,
            'password' => Crypt::encryptString($request->password),
            'remember_token' => $request->_token
        ])->save();

        return redirect('/');
    }
}
