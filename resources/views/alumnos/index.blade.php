@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Alumnos</div>

                <div class="card-body">

                @if(Auth::user()->hasRole('maestro'))
                        <table border='1' width=100%>
                            <tr>
                                <td>Nombre</td>
                                <td>Email</td>
                            </tr>
                            @foreach($alumnos as $alumno)
                            <tr>
                                <td><a href="{{route('alumnos.edit', $alumno->id)}}">{{$alumno->nombre}}</a></td>
                                <td>{{$alumno->email}}</td>
                            </tr>
                            @endforeach
                            <br>
                        </table>
                        <a class="btn btn-dark" href="{{route('alumnos.create')}}" role="button">Agregar Alumno</a>
                @else
                        <div>Acceso como alumno</div>
                @endif
                    
                </div>
            </div>
        </div>
    </div>
</div>

    

@endsection