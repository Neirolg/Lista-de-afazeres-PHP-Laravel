@include('layouts.app')
<div class ="min-h-screen -my-12 bg-[url('/public/background.png')]  ">
<?php use App\Http\Controllers\TodosController;
echo TodosController::calendar(); ?>
 <x-guest-layout>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 my-10">
            <div class="card">
            <h1 class="font-bold text-5xl py-3 text-sky-700 text-center mb-2">Suas tarefas</h1>
                <h5 class="card-header">
                    <a href="{{ route('todo.create') }}" class="btn btn-sm btn-outline-primary">Adicionar Tarefa</a>
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
                        <thead>
                          <tr>
                            <th scope="col">Tarefas</th>
                            <th scope="col">Criada em</th>
                            <th scope="col">Editar ou Excluir</th>
                          </tr>
                        </thead>
                        <tbody>
                            @forelse ($todos as $todo)
                                <tr>
                                    @if ($todo->completed)
                                        <td scope="row"><a href="{{ route('todo.edit', $todo->id) }}" style="color: black"><s>{{ $todo->title }}</s></a></td>
                                        <td>{{$todo->created_at->format('D - d/m/Y - H:i:s')}}</td>
                                    @else
                                        <td scope="row"><a href="{{ route('todo.edit', $todo->id) }}" style="color: black">{{ $todo->title }}</a></td>
                                 
                                        <td>{{$todo->created_at->format('D - d/m/Y - H:i:s')}}</td>
                                    @endif
                                    <td>
                                        <a href="{{ route('todo.edit', $todo->id) }}" class="btn btn-sm btn-outline-success"><i class="fa fa-pencil-square-o"></i></a>
                                        <a href="{{ route('todo.show', $todo->id) }}" class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    No Items Added!
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

</x-guest-layout>
