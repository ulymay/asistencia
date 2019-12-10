@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Maestros</div>

                <div class="card-body">

                @if(Auth::user()->hasRole('maestro'))
                <form action="/maestros/" method="post">
    
    <table>
        <tr>
            <td>Nombre: </td>
            <td>
                <input type="text" name="nombre" id="">

                {{csrf_field()}}
            </td>
        </tr>

        <tr>
            <td>Email: </td>
            <td>
            <input type="text" name="email" id="">
            </td>
        </tr>

        <tr>
            <td>
                <input type="submit" value="Enviar" name="enviar">
            </td>
            <td>
                <input type="reset" value="Borrar" name="Borrar">
            </td>
        </tr>
    </table>
        

        
    
    </form>
                @else
                        <div>Acceso como alumno</div>
                @endif
                    
                </div>
            </div>
        </div>
    </div>
</div>

    

@endsection