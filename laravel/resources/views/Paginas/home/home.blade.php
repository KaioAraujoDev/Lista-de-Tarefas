@component('componentes.header')
    Home
@endcomponent
@extends('layouts.home')
@section('body')
<form action="" method="GET">
    <div class="input-group">
        <input type="text" name="tarefa" id="" class="input-task input-group-text">
        <button class="btn bg-light"><i class="bi bi-plus"></i></button>
    </div>
    
    
</form>

@endsection