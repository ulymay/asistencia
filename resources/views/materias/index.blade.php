@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Materias</div>

                <div class="card-body">

                @if(Auth::user()->hasRole('maestro'))
                        <table border='1' width=100%>
                            <tr>
                                <td>Nombre</td>
                                <td>Codigo</td>
                                <td>Hora</td>
                            </tr>
                            @foreach($materias as $materia)
                            <tr>
                                <td><a href="{{route('materias.edit', $materia->id)}}">{{$materia->nombre}}</a></td>
                                <td>{{$materia->codigo}}</td>
                            </tr>
                            @endforeach
                            <br>
                        </table>
                        <a class="btn btn-dark" href="{{route('materias.create')}}" role="button">Nueva Materia</a>
                        
                @else
                        <div>Acceso como alumno</div>
                @endif
                    
                </div>
            </div>
        </div>
    </div>
</div>

    

@endsection