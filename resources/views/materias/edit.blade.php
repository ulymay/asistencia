@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Materias</div>

                <div class="card-body">

                @if(Auth::user()->hasRole('maestro'))
                    <form action="/materias/{{$materia->id}}" method="post">
    
    <table>
        <tr>
            <td>Nombre: </td>
            <td>
                <input type="text" name="nombre" id="" value="{{$materia->nombre}}">

                {{csrf_field()}}

                <input type="hidden" name="_method" value="PUT">
            </td>
        </tr>

        <tr>
            <td>Codigo: </td>
            <td>
            <input type="text" name="codigo" id="" value="{{$materia->codigo}}">
            </td>
        </tr>
        
        <tr>
            <td>
                <input type="submit" value="Actualizar" name="enviar">
            </td>
            <td>
                <input type="reset" value="Borrar campos" name="Borrar">
            </td>
        </tr>
    </table>
    
    </form>

    <form action="/materias/{{$materia->id}}" method="post">

    {{csrf_field()}}

    <input type="hidden" name="_method" value="DELETE">

    <input type="submit" value="Eliminar registro">

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