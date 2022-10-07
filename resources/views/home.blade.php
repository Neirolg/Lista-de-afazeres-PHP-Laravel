@include('navigation-menu')

<x-guest-layout>
<div class ="min-h-screen bg-[url('/public/fundo.png')]">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                <h1 class="font-bold text-5xl py-3 text-sky-700 text-center mb-2">Suas Tarefas</h1>
                    </div>
                    <h5 class="card-header">
                        <a href="{{ route('todo.create') }}" class="btn btn-sm btn-outline-primary">Adicionar tarefa</a>
                    </h5>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

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

                        <table class="table table-borderless table-hover">
                            <tbody>
                                @forelse ($todos as $todo)
                                    <tr>
                                        @if ($todo->completed)
                                            <td scope="row"><a href="{{ route('todo.edit', $todo->id) }}" style="color: black"><s>{{ $todo->title }}</s></a></td>
                                        @else
                                            <td scope="row"><a href="{{ route('todo.edit', $todo->id) }}" style="color: black">{{ $todo->title }}</a></td>
                                        @endif
                                        <td>
                                            <a href="{{ route('todo.edit', $todo->id) }}" class="btn btn-sm btn-outline-success"><i class="fa fa-pencil-square-o"></i> Editar</a>
                                            <a href="{{ route('todo.show', $todo->id) }}" class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i> Excluir</a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        Nenhuma tarefa
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</x-guest-layout>