@extends('layouts.layout')
@section('content')
    <div class="row">
        <section class="content">
            <div class="col-md-6 col-md-offset-3">
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Error!</strong> Revise los campos obligatorios.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if(Session::has('success'))
                    <div class="alert alert-info">
                        {{Session::get('success')}}
                    </div>
                @endif

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Crear Pedido</h3>
                    </div>
                    <div class="panel-body">
                        <div class="table-container centered">
                            <form method="POST" action="{{ route('pedido.store') }}" role="form">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            {{--<input type="text" name="persona_id" id="persona_id" class="form-control input-sm" placeholder="Persona">--}}
                                            <select name="persona_id" id="persona_id" class="form-control input-sm">
                                                @foreach($personas as $persona)
                                                    <option value="{{$persona->id}}">
                                                        {{$persona->nombre}} {{$persona->apellido}}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            {{--<input type="text" name="vianda_id" id="vianda_id"
                                                   class="form-control input-sm" placeholder="Vianda">--}}
                                            <select name="vianda_id" id="vianda_id" class="form-control input-sm">
                                                @foreach($viandas as $vianda)
                                                    <option value="{{$vianda->id}}">
                                                        {{$vianda->nombre}}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <input type="date" name="fecha_solicitud" id="fecha_solicitud"
                                                   class="form-control input-sm" placeholder="Fecha solicitud">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <input type="date" name="fecha_entrega" id="fecha_entrega"
                                                   class="form-control input-sm" placeholder="Fecha entrega">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <input type="submit" value="Guardar" class="btn btn-success btn-block">
                                        <a href="{{ route('pedido.index') }}" class="btn btn-info btn-block">Atrás</a>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </section>
@endsection