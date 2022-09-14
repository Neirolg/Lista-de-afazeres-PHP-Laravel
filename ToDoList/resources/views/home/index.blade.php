@extends('layouts.app')
@section('title', $viewData["title"])
@section('content')

<html>
<div style='text-align:center'>
    <fieldset>
        <form method="post" action="">
        LOGIN<br><br>
        <input type="text" name="usuario" id="usuario" placeholder="usuario"><br><br>
        <input type="password" name="senha" id="senha" placeholder="senha"><br><br>
        <input type="submit" value="Entrar"><br><br>
        Ainda não é cadastrado? <br>
        Cadastre-se aqui<br><br>
        <input type="submit" value="Novo Cadastro">
        </form>
    </fieldset>
</html>



@endsection