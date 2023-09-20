@extends('layouts.proyectos.plantilla_proyectos')
@section('content')
    <div class="form-body" id="doc_lista" style="text-align: left;">
		<div class="form-group col-xs-12 col-sm-12 col-lg-12">
			<a href="{{ route('proyectos.herramientas.documento.nuevoDoc',[$anio]) }}" class="btn btn-primary">Nuevo Documento</a>
            <a href="{{ route('proyectos.herramientas.documento.nuevoContrato',[$anio]) }}" class="btn btn-primary">Nuevo Contrato</a>
            <a href="{{ route('proyectos.herramientas.documento.nuevoReporte',[$anio]) }}" class="btn btn-info">Reporte</a>
        </div>
		<div class="form-group col-xs-12 col-sm-12 col-lg-12" id="datatable">
			<table class="table table-striped" id="cadenas-table">
                <thead>
                <tr>
                    <th>EXP SISGEDO</th>
                    <th>ASUNTO</th>
                    <th>FECHA DOCUMENTO</th>
					<th>ACCION</th>
                </tr>
                </thead>
            </table>
        </div>
    </div>
@endsection
@push('scripts')
<script>
	$(function() {
        table=$('#cadenas-table');
        table.DataTable({
            processing: true,
            serverSide: false,
			ajax: '{{ route('proyectos.herramientas.documento.listardoc') }}?listar=1&anio={{$anio}}',
			columns: [
                { data: 'td_expeSISGEDO', name: 'tools_document.td_expeSISGEDO' },
                { data: 'td_asunto_txt', name: 'tools_document.td_asunto_txt'},
                { data: 'td_fecha', name: 'tools_document.td_fecha'},
                { data: 'action', name: 'action', orderable: false, searchable: false}
            ],
            displayLength: 25,
            language: {
                lengthMenu: "Mostrando _MENU_ Documentos por pagina.",
                zeroRecords: "No hay Documentos cargados en este momento (Intente modificando los filtros).",
                info: "Mostrando del _START_ al _END_ de _TOTAL_ Documentos",
                infoEmpty: "No se encontaron Documentos",
                infoFiltered: "(Filtrado de un total de _MAX_ Documentos)"
            },
            order: [[ 2, 'desc' ]]
        });
	});
	
	$('#datatable').on("click",'.print',function(event){
		event.preventDefault();
		window.open('{{route('proyectos.herramientas.documento.printer',[$anio])}}?id='+$(this).data('data'), 'Popup', "height=700,width=1050,scrollTo,resizable=1,scrollbars=1,location=0");
	});
	$('#datatable').on("click",'.edit',function(event){
		window.location.href = '{{route('proyectos.herramientas.documento.nuevoDoc',[$anio])}}?id='+$(this).data('data');
	});
    $('#datatable').on("click",'.delete',function(event){
        var cnf = confirm('esta serguro que desea eliminar el documento?');
        if (cnf) {

        };
    });
</script>
@endpush

