<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" />
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet" />
    <title>@yield('title', 'ToDoList')</title>
</head>

<nav class="navbar navbar-expand-lg navbar-dark bg-sky-700 py-4">
    <div class="container">
        <a class="navbar-brand" href="{{ route('dashboard') }}">@yield('title', 'To Do List')</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">

            @guest
            <div class="navbar-nav ms-auto">
                <a class="nav-link active" href="/register">Sign in</a>

                @endguest

                @auth
                <div class="navbar-nav ms-auto">
                    <a class="nav-link active" href="/dashboard">Dashboard</a>
                    <form action="/logout" method="POST">

                        @csrf
                        
                            <a href="/logout" class="nav-link active" onclick="event.preventDefault(); this.closest('form').submit();">Sair</a>
                     
                    </form>
                    @endauth
                    <div class="navbar-nav ms-auto">
                        <a class="nav-link active" href="/about">About</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>