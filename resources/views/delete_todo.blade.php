@include('layouts.app')

<x-guest-layout>
<div class ="min-h-screen -my-12 bg-[url('/public/background.png')]  ">
    <div class="container">
        <div class="row justify-content-center ">
            <div class="col-md-8 my-10">
                <div class="card">
                    <h1 class="font-bold text-5xl py-3 text-sky-700 text-center mb-2">Apague sua tarefa</h1>
                </div>
                    <h5 class="card-header bg-gray-200">
                        <a href="{{ route('todo.index') }}" class="btn btn-sm btn-outline-primary"><i class="fa fa-arrow-left"></i> Voltar</a>
                    </h5>

                    <div class="card-body bg-gray-100 shadow-md">

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        @if(session()->has('success'))
                            <div class="alert alert-success">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                {{ session()->get('success') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('todo.update', $todo->id) }}">
                            @csrf
                            @method('DELETE')
                            <div class="form-group row -mb-5">
                                <div class="col-md-12 text-lg">
                                    <h3>
                                        Você tem certeza que quer deletar esta tarefa?
                                    </h3>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4 text-right">
                                    <button type="submit" class="btn btn-outline-danger">
                                        Sim
                                    </button>
                                    <a href="{{ route('todo.index') }}" class="btn btn-outline-primary">Não</a>
                                </div>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</x-guest-layout>