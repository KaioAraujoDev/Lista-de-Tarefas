@component('componentes.header')
    Cadastro
@endcomponent
@extends('layouts.user-acesso')
@section('body')
@php
    header("refresh:5;http://127.0.0.1:8000/home");
@endphp

<div class="rounded display-2 sucesso container bg-success bg-gradient mt-5 text-white shadow p-3 mb-5 card">
<i class="i-sucesso bi bi-check-circle-fill"></i><p id="Text-success">Cadastro realizado com sucesso</p>
</div>
<section class="card bg-light bg-gradient fs-5 mb-2 shadow" id="tempo">
    <p>Você será redirecionado para a pagina principal em:</p>
    <div id="tempo-cad" class="text-center">
    </div>
    <p>Segundos</p>
</section>

<script>
    //quando a janela for aberta esta função sera chamada
    window.onload = function(){
        let duracao = 5;//duração de 5 segundos 
        let display = document.querySelector('#tempo-cad');
        //display.innerText=duracao;

        startTimer(duracao,display);

        function startTimer(duracao,display){
            setInterval(() => {
                if(duracao > 0){
                     display.innerHTML=duracao;
                     duracao-=1;
                }
            },1000);
        };
    }
</script>
@endsection