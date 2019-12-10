@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Materias</div>

                <div class="card-body">

                @if(Auth::user()->hasRole('maestro'))
                    <form action="" method="post">
    
                        <input type="text" name="nombre" id="">

                        <input type="submit" value="Enviar" name="enviar">
    
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