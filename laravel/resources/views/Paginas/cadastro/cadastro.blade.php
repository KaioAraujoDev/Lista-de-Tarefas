@component('componentes.header')
    Cadastro
@endcomponent
@extends('layouts.user-acesso')
@section('body')
    <section class="Tela-login border border-2 rounded d-flex justify-content-center shadow p-3 mb-5 bg-body rounded">
        <form class="container-sm" action="{{route('user.validar')}}" method="post" class="">
            @csrf
            <div class="form-group mb-2">
                <label for="user"class="form-label col-12
                ">Usuário:
               
                </label>
                <input placeholder="Usuário" type="text" class="col form-control " value="{{old('user')}}" name="user" required>
                    @component('componentes.erro-cad',['campo'=>'user'])
                    @endcomponent
            </div>
            <div class="form-group mb-3">
                <label for="senha" class="form-label col-12">
                    Senha:
                </label>
                <input placeholder="Senha" type="password" class="form-control" value="{{old('senha')}}" name="senha" required>
                    @component('componentes.erro-cad',['campo'=>'senha'])
                    @endcomponent
            </div>
            <div class="form-group mb-3">
                <label for="confirmar" class="form-label col-12">Confirmar senha: </label>
                <input placeholder="Senha"type="password" name="confirmar" value="{{old('confirmar')}}" class="form-control" required>
                    @component('componentes.erro-cad',['campo'=>'confirmar'])
                    @endcomponent
            </div>
            <div class="form-group mb-3">
                <label for="Data" class="form-label col-12">Data de nascimento: </label>
                <input type="date" name="data" value="{{old('data')}}" class="form-control" required>
                    @component('componentes.erro-cad',['campo'=>'data'])
                    @endcomponent
            </div>
            <div class="form-group mb-3">
                <label for="email" class="form-label col-12">Email:</label>
                <input type="text" placeholder="example@example.com" name="email" value="{{old('email')}}" class="form-control" required>
                    @component('componentes.erro-cad',['campo'=>'email'])
                    @endcomponent
            </div>
            <div class="row">
                    <button class="btn btn-primary">
                        Cadastrar
                        <i class="bi bi-send " id="icone-paper"></i>
                    </button>
            </div>
        </form>
    </section>
@endsection