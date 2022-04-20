<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;

class user_controller extends Controller
{
    public function buscar(Request $request){
        $userRequest=$request->usuario;
        $senhaRequest=$request->senha;

        $request->validate(
            [
                'usuario'=>'required|min:5|max:50',
                'senha'=>'required|min:5|max:50',
            ],
            [
                'usuario.required'=>'O usuário deve ser preenchido',
                'usuario.min'=>'O usuário deve possuir no mínimo 5 caracteres',
                'usuario.max'=>'O usuário deve possuir no máximo 50 caracteres',

                'senha.required'=>'A senha deve ser preenchida',
                'senha.min'=>'A senha deve ter no mínimo 5 caracteres',
                'senha.max'=>'A senha deve ter no máximo 50 caracteres',
            ]
        );
        //Busca pelo usuário existente
        $userExiste=
        user::where('user','=',$userRequest)
        ->where('password','=',$senhaRequest)
        ->get();
        
        //caso exista o usuário será redirecionado para a rota home
        //senão o usuário será redirecionado para a rota anterior
         if(count($userExiste)>=1){
                return view('Paginas.home.home');
         }else{
                return back()->withInput();
         }

        return view('Paginas.login.login');
    }
}
