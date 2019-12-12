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
                                <td>Clase</td>
                            </tr>
                            <tr>
                                <td>{{$maestro->name}}</a></td>
                                <td>{{$maestro->email}}</td>
                                <td></td>
                                
                                <td></td>
                            </tr>
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