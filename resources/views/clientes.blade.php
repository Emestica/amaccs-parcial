@extends('adminlte::page')

@section('title', 'Clientes')

@section('content_header')
    <h1>Clientes</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">
        <h6>Formulario para Clientes</h6>
    </div>

    <div class="card-body">

        @if ($errors -> any())
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>

                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif


        <form action="{{ url('productos') }}" method="post">

            @csrf

           <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="ipt-nombre">Nombres:</label>
                        <input type="text" name="nombre" id="ipt-nombre" class="form-control" maxlength="150">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="ipt-apellidos">Apellidos:</label>
                        <input type="text" name="apellidos" id="ipt-apellidos" class="form-control" maxlength="150">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="ipt-edad">Edad:</label>
                        <input type="number" name="edad" id="ipt-edad" class="form-control" min="0">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="ipt-fecha-nacimiento">Fecha de nacimiento:</label>
                        <input type="date" name="ipt-fecha-nacimiento" id="ipt-fecha-nacimiento" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="ipt-correo">Correo:</label>
                        <input type="text" name="correo" id="ipt-correo" class="form-control" maxlength="150">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="ipt-direccion">Direccion:</label>
                        <textarea name="direccion" id="ipt-direccion" rows="3" class="form-control" style="resize: none;"></textarea>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="slt-estado">Estado:</label>
                        <select name="estado" id="slt-estado" class="form-control">
                            <option value="0">Seleccione un estado</option>
                            <option value="A">Activo</option>
                            <option value="A">Inactivo</option>
                        </select>
                    </div>
                </div>
            </div>
            
        </form>
    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-primary" style="float: right;">Guardar</button>
    </div>
</div>
<hr>
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive-sm">
                    <table class="table table-hover table-sm">
                        <thead class="thead-dark">
                            <tr>
                                <th>#</th>
                                <th>Nombres</th>
                                <th>Apellidos</th>
                                <th>Edad</th>
                                <th>Fecha Nacimiento</th>
                                <th>Estado</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection