@extends('Shared/Layout')

@section('title', 'Page Title')

<!-- @section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection -->

@section('content')

<h3 class="title"> Crie uma conta </h3>

<div class="form-group">
    <input type="text" class="input-material" placeholder="Nome de usuário">
</div>
<div class="form-group">
    <input type="text" class="input-material" placeholder="Senha (4 characters)">
</div>
<div class="form-group">
    <input type="text" class="input-material" placeholder="Confirme sua senha">
</div>
<div class="form-group">
    <input type="text" class="input-material" placeholder="E-mail">
</div>
<a id="login" href="index.html" class="btn btn-primary">Me cadastrar</a>

@endsection

