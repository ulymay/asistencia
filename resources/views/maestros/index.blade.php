@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Maestros</div>

                <div class="card-body">

                @if(Auth::user()->hasRole('maestro'))
                        <table border='1' width=100%>
                            <tr>
                                <td>Nombre</td>
                                <td>Email</td>
                            </tr>
                            @foreach($maestros as $maestro)
                            <tr>
                                <td><a href="{{route('maestros.edit', $maestro->id)}}">{{$maestro->nombre}}</a></td>
                                <td>{{$maestro->email}}</td>
                            </tr>
                            @endforeach
                            <br>
                        </table>
                        <a class="btn btn-dark" href="{{route('maestros.create')}}" role="button">Agregar Maestro</a>
                        
                @else
                        <div>Acceso como alumno</div>
                @endif
                    
                </div>
            </div>
        </div>
    </div>
</div>

    

@endsection