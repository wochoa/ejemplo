@extends('layouts.tema')

@section('content')
<div class="container-fluid">

    <div class="row">
        <div class="col-md-12 ">

            
            <div class="panel panel-danger mt-2">

                <div class="panel-heading panel-success text-center">Listado de Trámites presentados</div>

                <div class="panel-body">
                    
                    <div class="row">
                    
                     <div class="table-responsive">
                        <table class="table table-bordered table-hover table-sm" style="width: 100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>DETALLES DOCUMENTO</th>
                                    <th>FIRMANTE</th>
                                    <th>DEPENDENCIA TRAMITE</th>
                                    <th>MOTIVO OBS</th>
                                    <th>FECHA OBS</th>
                                    <th nowrap>Link para subsanar</th>
                                </tr>
                            </thead>
                            <tbody>
                                    @foreach($externo as $ext)
                                    <tr>
                                        <td><small>{{$ext->id}}</small></td>
                                        
                                        <td><small><b>Documento:</b> {{$ext->tdoc_descripcion}} {{$ext->docu_numero_doc}}-{{$ext->docu_siglas_doc}}</small> <br>
                                            <small><b>Folios:</b>{{$ext->docu_folios}}</small> <br>
                                            <small><b>Asunto:</b>{{$ext->docu_asunto}}</small> <br>
                                            <small><b>Fecha trámite:</b>{{$ext->docu_fecha_doc}}</small>
                                        
                                        </td>
                                        <td>
                                            <small>
                                            {{$ext->docu_firma}} <br>
                                            <small><b>DNI/RUC:</b>
                                                @if($ext->docu_dni)
                                                    {{$ext->docu_dni}}
                                                    @else
                                                    {{$ext->docu_ruc}}
                                                    @endif
                                                </small><br>
                                            <span class="badge bg-primary text-sm"><small>{{$ext->docu_telef}}</small></span><br>
                                            <span class="badge bg-info text-sm"><small>{{$ext->docu_emailorigen}}</small></span>
                                            </small>
                                        </td>
                                        <td>
                                            <small>
                                                {{$ext->depe_nombre}} 
                                            </small>
                                        </td>
                                        <td>
                                            @if($ext->docu_motivo_archivamiento)
                                            <small>
                                            {{$ext->docu_motivo_archivamiento}} 
                                            </small>

                                            @else
                                                @if($ext->docu_estado!=1)

                                                    <p class="text-center">
                                                        <span class="badge bg-success text-sm"><small>No presenta observación</small></span>
                                                    </p>

                                                @endif
                                            @endif
                                           
                                        </td>
                                        
                                        <td nowrap>
                                            @if($ext->observ_at)
                                            <small><b>F.observación:</b>
                                                {{$ext->observ_at}}  
                                            </small><br>
                                            @endif
                                            @if($ext->subs_at)
                                            <small><b>F.subsanación:</b>
                                                {{$ext->subs_at}}  
                                            </small>
                                            @endif
                                        </td>
                                        <td>
                                            

                                            @switch($ext->docu_estado)
                                                @case(0)

                                                    <p><small>Pendiente de verificación y recepción por el/la responsable de Mesa de Partes Virtual</small></p>
                                                    
                                                    @break
                                                @case(1)

                                                <small><a href="/registro/mesa-partes-virtual/{{$ext->id_dependencia}}/{{$ext->docu_token}}"target="_blank" class="btn btn-danger btn-sm">Subsanar</a></small> <br>
                                                    
                                                    @break
                                                
                                                @case(2)

                                                <p><small><strong>Reg. Doc:</strong> <a href="/tramite/buscar/buscarModal/{{$ext->iddocumento}}">{{$ext->iddocumento}} </a><br>
                                                    <strong>Reg. Exp:</strong> <a href="/tramite/buscar/buscarExpedienteModal/{{$ext->docu_idexma}}" target="_blank">{{$ext->docu_idexma}} </a> </small></p>
                                                    
                                                    @break
                                                @case(3)

                                                    <p><small><b>Usted ha subsanado</b>, sin embargo, está pendiente de verificación y recepción por el/la responsable de Mesa de Partes Virtual</small></p>
                                                    
                                                    @break
                                               
                                                    
                                            @endswitch

                                        </td>
                                    </tr>
                                    @endforeach
                            </tbody>
                        </table>
                        {{-- {{ $externo->links() }} --}}
                     </div>
                        

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
