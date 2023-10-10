@extends('adminlte::page')

@section('title', 'Productos')

@section('content_header')
    <h1>Productos</h1>
@stop

@section('content')

<div class="card">
    <div class="card-header">
        <h6>Formulario para Producto</h6>
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
                        <label for="ipt-rol">Codigo Producto:</label>
                        <input type="text" name="codigo" id="ipt-rol" class="form-control" maxlength="50">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="ipt-rol">Nombre Producto:</label>
                        <input type="text" name="nombre" id="ipt-rol" class="form-control" maxlength="50">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="ipt-rol">Precio de Compra:</label>
                        <input type="text" name="precio" id="ipt-rol" class="form-control" maxlength="50">
                    </div>
                </div>
                 <div class="col-md-6">
                    <div class="form-group">
                        <label for="ipt-rol">Precio de Venta:</label>
                        <input type="text" name="precio" id="ipt-rol" class="form-control" maxlength="50">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="ipt-rol">Descripcion:</label>
                        <input type="int" name="descripcion" id="ipt-rol" class="form-control" maxlength="50">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="slt-rol">Estado:</label>
                        <select name="estado" id="slt-estado" class="form-control">
                            <option value="0">Seleccione un estado</option>
                            <option value="A">Disponible</option>
                            <option value="A">Agotado</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="ipt-rol">Proveedor:</label>
                        <input type="text" name="name" id="ipt-rol" class="form-control" maxlength="50">
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
                                <th>Codigo Producto</th>
                                <th>Nombre Producto</th>
                                <th>Precio de Compra</th>
                                <th>Precio de venta</th>
                                <th>Descripcion</th>
                                <th>Estado</th>
                                <th>Proveedor</th>
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