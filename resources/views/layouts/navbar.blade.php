<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" />
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet" />
    <title>{{('To Do List')}}</title>
</head>

<nav class="navbar navbar-expand-lg navbar-dark bg-sky-700  py-2">
    <div class="container">
        <a class="navbar-brand font-extrabold font-serif " href="{{ route('home') }}"><img src="{{ asset('/logo/todolist-branco-sem-caderno.png') }}" /></a>
        <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto text-lg font-semibold ">
                <a class="nav-link active" href="/register">Cadastrar</a>                
            <div class="navbar-nav ms-auto">
                <a class="nav-link active" href="/about">Sobre</a>
            </div>
            </div>
        </div>
    </div>
</nav>