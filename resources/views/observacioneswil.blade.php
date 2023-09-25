@extends('layouts.tema')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="panel panel-default mt-5" style="background-color: #efefef !important;">
                        <div class="panel-heading text-center text-light" style="background: #9E0B2666 !important;"><h4>Consulta de trámites</h4></div>
                        <!-- <div class="panel-heading">Consulta de documento</div> -->
                        <div class="panel-body">
                            <p class="text-center">Esta sección es para buscar documentos y ver su estado situacional, para ello debe ingresar el correo, dni/ruc y códio que se proporcionó al momento de tramitar.</p>
                            <form action="{{route('bus_documentos_observados')}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="">Ingrese su correo</label>
                                    
                                    <input type="email" placeholder="Ingrese su correo que proporcionó" class="form-control form-control-sm" name="correo">
                                </div>
                                <div class="form-group">
                                    <label for="">Ingrese DNI/RUC</label>
                                    <input type="text" placeholder="Ingrese su Dni/Ruc que proporcionó" class="form-control form-control-sm" name="dni">
                                </div>
                                <div class="form-group">
                                    <label for="">Ingrese el Código.</label>
                                    <input type="number" placeholder="Ingrese el código propocionado por el sistema" class="form-control form-control-sm" name="codigo">
                                </div>
                                <div class="form-group text-center">
                                    <button type="submit" class="btn btn-primary LoginButton">Consultar</button>
                                </div>
                            </form>
                        </div>
                </div>
            </div>
    </div>

</div>
@endsection
