@component('componentes.header')
    Login
@endcomponent

@extends('layouts.user-acesso')
@section('body')
    <section class=" Tela-login border border-2 rounded d-flex justify-content-center align-items-center shadow p-3 mb-5 bg-body rounded"> 
        <form class="container-sm"action="{{route('user.buscar')}}" method='post'>
            @csrf
            <div class="row  form-group">
                <label for="usuario" class="col-4">Usuario: </label>
                <input placeholder="Usuario" class="col-8 form-control"type="text" name="usuario" id="">
            </div>
            @component('componentes.erro-cad',['campo'=>'usuario'])
            @endcomponent

            <div class="row my-2">
                <label for="senha" class="col-4">Senha: </label>
                <input placeholder="Senha"class="col-8 form-control"type="password" name="senha" id="">
            </div>

            @component('componentes.erro-cad',['campo'=>'senha'])
            @endcomponent

            <div class="row my-3">
                <a href="{{ route ('user.cadastro') }}" class="col-6 align-self-end">Registrar</a>
                <button class="col-6 btn btn-primary ">Enviar</button>
            </div>
        </form>
    </section>
    {{-- @component('componentes/erro-cad')

    @endcomponent --}}
@endsection