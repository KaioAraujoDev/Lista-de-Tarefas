<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;

class CadastroUser extends Controller
{
    public function validar(Request $request){

        
         $request->validate(
            [
                'user'=>'required|min:5|max:50|unique:user',
                'senha'=>'required|min:5|max:50',
                'confirmar'=>'required|same:senha|min:5|max:50|',
                'data'=>'required|date|before_or_equal:today',
                'email'=>'email|min:5|max:75'
            ],
            [
                'user.required'=>'O usuário deve ser preenchido',
                'user.min'=>'O usuário deve possuir no mínimo 5 caracteres',
                'user.max'=>'O usuário deve possuir no máximo 50 caracteres',
                'user.unique'=>'Este nome de usuário ja existe',

                'senha.required'=>'A senha deve ser preenchida',
                'senha.min'=>'A senha deve ter no mínimo 5 caracteres',
                'senha.max'=>'A senha deve ter no máximo 50 caracteres',

                'confirmar.required'=>'Confirmar deve ser preenchido',
                'confirmar.min'=>'Confirmar deve ter no mínimo 5 caracteres',
                'confirmar.max'=>'Confirmar deve ter no máximo 50 caracteres',
                'confirmar.same'=>'Confirmar deve ser igual ao campo senha',

                'data.required'=>'Confirmar deve ser preenchido',
                'data.date'=>'A data não possui um formato válido',
                'data.before_or_equal'=>'Data inválida',

                'email.email'=>'O email não possui um formato válido',
                'email.min'=>'O email deve possuir no mínimo 5 caracteres',
                'email.max'=>'O email deve possuir no máximo 50 caracteres'
            ]
        );
        
        //armazenando valores da requisição para o transporte de rotas
        $user  = $request->user;
        $senha = $request->senha;
        $data  = $request->data;
        $email = $request->email;

    
        //return redirect()->route('user.cadastrar');
        CadastroUser::cadastrar($user,$senha,$data,$email);

        return redirect()->route('user.sucesso');
    }

    public function cadastrar($user,$senha,$data,$email){
     
        //armazenando valores dentro da model e inserindo dentro da banco de dados
        //   user::create([
        //          'user'=>$user,
        //          'password'=>$senha,
        //          'data_nascimento'=>$data,
        //          'email'=>$email
        //      ]);

          //user::save(); 
        
    }
}
