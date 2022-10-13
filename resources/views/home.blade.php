@include('layouts.app')
<div class ="min-h-screen -my-12 bg-[url('/public/background.png')]  ">
<?php use App\Http\Controllers\TodosController;?>

 <x-guest-layout>
 <div id="MyClockDisplay" class="clock" onload="showTime()"></div>

    
 <?php
$apiKey = "39ff7f41625e6c64f5f90616924d959a";
$cityId = "3469968";
$googleApiUrl = "https://api.openweathermap.org/data/2.5/weather?id=" . $cityId . "&lang=en&units=metric&APPID=" . $apiKey;

$ch = curl_init();

curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $googleApiUrl);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_VERBOSE, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec($ch);

curl_close($ch);
$data = json_decode($response);
$currentTime = time();
?>
<html>
<body>
    <div class="report-container">
        <h2><?php echo $data->name; ?> Condições Climáticas</h2>
        <div class="time">
            <div><?php echo ucwords($data->weather[0]->description); ?></div>
        </div>
        <div class="weather-forecast">
            <img
                src="https://openweathermap.org/img/w/<?php echo $data->weather[0]->icon; ?>.png"
                class="weather-icon" /> <?php echo $data->main->temp_max; ?>°C<span
                class="min-temperature"><?php echo $data->main->temp_min; ?>°C</span>
        </div>
        <div class="time">
            <div>Humidity: <?php echo $data->main->humidity; ?> %</div>
            <div>Wind: <?php echo $data->wind->speed; ?> km/h</div>
        </div>
    </div>
</body>
</html>
<div class="container">
    <div class="row justify-content-left">
        <div class="col-md-8 my-10 inline">
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
                                        @if ($todo->created_at)
                                            <td>{{$todo->created_at->format('D - d/m/Y - H:i:s')}}</td>
                                        @else
                                            <td>xxxxxxxxxxxxx</td> 
                                        @endif
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

<div class="my-25">
    <?php echo TodosController::calendar(); ?>
</div>
</x-guest-layout>

