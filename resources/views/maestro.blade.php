@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(Auth::user()->hasRole('maestro'))
                    <table border='1' width=100%>
                            <tr>
                                <td>Nombre</td>
                                <td>Email</td>
                                <td>Clase</td>
                                <td>Hora</td>
                                <td>Materia</td>
                                <td>Aula</td>
                                <td>Hora Actual</td>
                                <td>Iniciar</td>
                                <td>Asistencia</td>
                            </tr>
                            @foreach($maestros as $maestro)
                            @foreach($maestro->clases as $clase)
                            <tr>
                                <td>{{$maestro->name}}</td>
                                <td>{{$maestro->email}}</td>
                                <td>{{$clase->codigo}}</td>
                                <td>{{$clase->hora}}</td>
                                <td>{{$clase->materia}}</td>
                                <td>{{$clase->aula}}</td>
                                <td>{{$date}}</td>
                                
                                @if($date <= $clase->hmaxmaestro && $date >= $clase->hora)
                                <td>Puedes Registrarte</td>
                                <!-- <td><a class="btn btn-dark" href="" role="button">Registrar</a></td> -->
                                <td><button class="btn btn-dark" type="button" onclick="{{ App\Asistencia::create(['maestro'=>$maestro->name, 'asistio'=>'1', 'clase'=>$clase->materia, 'hora_asist'=>$date])}}; this.disabled=true">Button</button></td>
                                @else
                                <td>No puedes</td>
                                <td><a class="btn btn-dark" href="" role="button">No Ahora</a></td>
                                @endif
                                
                                
                            </tr>
                            @endforeach
                            @endforeach
                            <br>
                        </table>
                    @else
                        <div>Acceso como alumno</div>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
