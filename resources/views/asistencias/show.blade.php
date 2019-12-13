@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Asistencias</div>

                <div class="card-body">

                @if(Auth::user()->hasRole('maestro'))
                        <table border='1' width=100%>
                            <tr>
                                <td>Maestro</td>
                                <td>Asistio</td>
                                <td>Clase</td>
                                <td>Hora de Checado</td>
                            </tr>
                            @foreach ($asistencias as $asistencia)
                            @if($asistencia->maestro == $maestro->name)
                            <tr>
                                <td>{{$asistencia->maestro}}</td>
                                <td>{{$asistencia->asistio}}</td>
                                <td>{{$asistencia->clase}}</td>
                                <td>{{$asistencia->hora_asist}}</td>
                            </tr>
                            @endif
                            @endforeach 

                            <br>
                        </table>
                        <a class="btn btn-dark" href="{{route('home')}}" role="button">Return</a>
                        
                @else
                        <div>Acceso como alumno</div>
                @endif
                    
                </div>
            </div>
        </div>
    </div>
</div>

    

@endsection