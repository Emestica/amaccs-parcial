@extends('adminlte::page')

@section('title', 'Cobro')

@section('content_header')
    <h1>Cobro</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">
        <h6>Formulario de Cobros.</h6>
    </div>
    <div class="card-body">
        <form action="" method="post">

            @csrf

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="ipt-rol">Usuario:</label>
                        <input type="text" name="user" id="user" class="form-control" maxlength="50" value="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="slt-rol">Metodo de pago</label>
                        <select name="estado" id="estado" class="form-control">
                            <option value="0">Seleccione un metodo de pago</option>
                            <option value="A">Efectivo</option>
                            <option value="D">Tarjeta</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="ipt-rol">Productos: </label>
                        <input type="text" name="pass" id="pass" class="form-control" maxlength="50">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-group">
                            <label for="ipt-rol">Fecha de Creación:</label>
                            <input type="datetime-local" name="fechaCreate" id="fechaCreate" class="form-control" maxlength="50" value="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <div class="form-group">
                            <label for="ipt-rol">Fecha de Modificación:</label>
                            <input type="datetime-local" name="fechaMod" id="fechaMod" class="form-control" maxlength="50" value="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary" style="float: right;">Guardar</button>
            </div>
        </form>
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
                                <th>Usuario</th>
                                <th>Fecha Creacion</th>
                                <th>Fecha Modificación</th>
                                <th>Estado</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection