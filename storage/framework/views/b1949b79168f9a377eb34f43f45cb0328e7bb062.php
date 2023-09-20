<?php $__env->startSection('titulo'); ?>
    Nuevo|Actividad
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenido'); ?> 
    
    <div style="page-break-before: always; page-break-after: always; page-break-inside:always;">
        
<!--FORMATO F2: PROGRAMACIÓN OPERATIVA DE LA ACTIVIDAD/PROYECTO-->
    <div id="myPrintArea" class="container">
    <?php echo Form::open(['url'=>'poi/huamalies/show', 'method'=>'GET', 'class'=>'form-horizontal']); ?>

    <div class="row"> 
        <div class="container">            
            <table class="table-act">
                <thead width="100%" style="border-style: hidden;">
                    <tr>
                        <th width="10%"></th>
                        <th width="30%">Unidad Ejecutora:</th>
                        <th width="30%">Unidad Orgánica:</th>
                        <th width="10%"></th>
                        <th width="10%"></th>
                    </tr>
                </thead>
                <tbody style="border-style: hidden;">
                    <tr>
                        <td></td>
                        <td>
                            <select name="unidad_ejecutora" id="unidad_ejecutora" class="form-control select2 input-sm">
                                <option value>Seleccione una Opción</option>
                                <?php $__currentLoopData = $ejecutoras; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ejecutora): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($request->unidad_ejecutora == $ejecutora->id): ?>
                                        <option value="<?php echo e($ejecutora->id); ?>" selected><?php echo e($ejecutora->id); ?>. <?php echo e($ejecutora->nombre); ?></option>
                                    <?php else: ?>
                                        <option value="<?php echo e($ejecutora->id); ?>"><?php echo e($ejecutora->id); ?>. <?php echo e($ejecutora->nombre); ?></option>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </td>
                        <td>
                            <select name="unidad_org" id="unidad_org" class="form-control select2">
                                <option value>Seleccione 1ro una Ejecutora</option>
                                <?php $__currentLoopData = $organicas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $organica): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($request->unidad_org == $organica->id): ?>
                                        <option value="<?php echo e($organica->id); ?>" selected><?php echo e($organica->id); ?>. <?php echo e($organica->nombre); ?></option>
                                    <?php else: ?>
                                        <option value="<?php echo e($organica->id); ?>"><?php echo e($organica->id); ?>. <?php echo e($organica->nombre); ?></option>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </td>
                        <td>
                           <?php echo Form::button('<span class="glyphicon glyphicon-search"> Buscar</span>',
                            array('class'=>'btn btn-primary', 'type'=>'submit', 'style'=>'font-size: 12px;', 'id'=>'target')); ?>

                        </td>
                        <td></td>
                    </tr>
                </tbody>
            </table>        
        </div>
    </div>
        <!--<p>The .table class adds basic styling (light padding-top and only horizontal dividers) to a table:</p>-->
    <!--TITULO-->
    <div id="tabla">
        <table class="table table-bordered">
            <thead>
                <tr bgcolor="#98CCF4">
                    <th style="text-align: center" width="100%">UNIDAD EJEUTORA: <?php echo e($request->unidad_ejecutora); ?></th>
                </tr>
            </thead>            
        </table>
    <!--FIN TITULO-->
    <!--1. INFORMACIÓN GENERA-->    
        <table class="table table-bordered table-mihoverreporte" id="example1">    
            <thead>
                <tr class="info">
                    <th class="text-center">ID</th>
                    <th class="text-center">NOMBRE ACT.</th>
                    <th class="text-center">FUENTE FINAN.</th>
                    <th class="text-center">FUNCION</th>
                    <th class="text-center">DIV. FUNCIONAL</th>
                    <th class="text-center">GRUP. FUNCIONAL</th>
                    <th class="text-center">CAT. PRES.</th>
                    <th class="text-center">PRODUCTO</th>
                    <th class="text-center">ACTIVIDAD</th>
                    <th class="text-center">VER F2</th>
                    <th class="text-center">VER F3</th>
                    <th class="text-center">IMPRIMIR</th>
                    <th class="text-center">IMPRIMIR</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $actividades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $actividad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($actividad->id); ?></td>
                    <td><?php echo e($actividad->nombre); ?></td>
                    <td><?php echo e($actividad->fuente); ?></td>
                    <td><?php echo e($actividad->funcion); ?></td>
                    <td><?php echo e($actividad->division); ?></td>
                    <td><?php echo e($actividad->grupo); ?></td>
                    <td><?php echo e($actividad->categoria); ?></td>
                    <td><?php echo e($actividad->producto); ?></td>
                    <td><?php echo e($actividad->actividad); ?></td>                    
                    <td>
                        <a href="#" data-id="<?php echo e($actividad->id); ?>" class="btn btn-default btn-xs ver"><span class="glyphicon glyphicon-eye-open"></span> F2</a>
                    </td>  
                    <td>
                        <a href="#" data-id="<?php echo e($actividad->id); ?>" class="btn btn-default btn-xs verf3"><span class="glyphicon glyphicon-eye-open"></span> F3</a>
                    </td>  
                    <td>
                        <a href="#" class="btn btn-danger btn-xs print" data-id="<?php echo e($actividad->id); ?>"><span class="glyphicon glyphicon-print"></span> F2</a>
                    </td>
                    <td>
                        <a href="#" class="btn btn-default btn-success btn-xs printf3" data-id="<?php echo e($actividad->id); ?>"><span class="glyphicon glyphicon-print"></span> F3</a>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
    <!--FIN 1. INFORMACIÓN GENERA-->     
    <?php echo Form::close(); ?>     
    
    </div>    
    </div>
<script src="<?php echo e(asset('js/jquery.dataTables.min.js')); ?>"></script>
<script>
    
    $(document).ready(function() {
        $(".del").click(function(event) {
            if (!confirm("¿Realmente desea Eliminar?"))
                event.preventDefault();
        })
    });
    
    $(document).ready(function() {
        var ghj={
            "language":
            {
                "sProcessing":     "Procesando...",
                "sLengthMenu":     "Mostrar _MENU_ registros",
                "sZeroRecords":    "No se encontraron resultados",
                "sEmptyTable":     "Ningún dato disponible en esta tabla",
                "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
                "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                "sInfoPostFix":    "",
                "sSearch":         "Buscar:",
                "sUrl":            "",
                "sInfoThousands":  ",",
                "sLoadingRecords": "Cargando...",
                "oPaginate": {
                    "sFirst":    "Primero",
                    "sLast":     "Último",
                    "sNext":     "Siguiente",
                    "sPrevious": "Anterior"
                },
                "oAria": {
                    "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                    "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                }
            }
        }
        var table = $('#example1').DataTable(ghj);
    } );

    $(document).ready(function () { 
        (function ($) { 
            $('#filtrar').keyup(function () { 
                var rex = new RegExp($(this).val(), 'i');
                $('.buscar tr').hide();
                $('.buscar tr').filter(function () {
                    return rex.test($(this).text());
                }).show(); 
            }) 
        }(jQuery)); 
    });
        
    $("#unidad_ejecutora").on("change", function(event){
        $("#unidad_org").empty();			
        $.get("uniorganica/" + $(this).val(), function(response, state){
            //console.log(response.length);
            $("#unidad_org").append("<option value=''>Seleccione Opción</option>");
            $.each( response, function(key, value){
                $("#unidad_org").append("<option value='" + value.id +"'>" + value.id + ". "+ value.nombre + "</option>");
            });
        });
	});
    
    $('#example1').on('click', '.ver', function (e) {
        e.preventDefault();
        rute = '<?php echo e(url('poi/anteproyecto/f2/%s')); ?>';
        window.open(rute.replace(/%s/g, $(this).data('id')));
    });
    
    /*$('#example1').on('click', '.ver', function (e) {
        e.preventDefault();
        rute = '<?php echo e(url('poi/huamalies/ver/%s')); ?>';
        window.open(rute.replace(/%s/g, $(this).data('id')));
    });*/
    
    $('#example1').on('click', '.verf3', function (e) {
        e.preventDefault();
        rute = '<?php echo e(url('poi/anteproyecto/f3/%s')); ?>';
        window.open(rute.replace(/%s/g, $(this).data('id')));
    });
    
    $('#example1').on('click', '.print', function (e) {
        e.preventDefault();
        rute = '<?php echo e(url('poi/anteproyecto/imprimirf2/%s')); ?>';
        window.open(rute.replace(/%s/g, $(this).data('id')));
    });
    
    $('#example1').on('click', '.printf3', function (e) {
        e.preventDefault();
        rute = '<?php echo e(url('poi/anteproyecto/imprimirf3/%s')); ?>';
        window.open(rute.replace(/%s/g, $(this).data('id')));
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.plantillaPoi', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sgd\resources\views\poi\huamalies\inicio.blade.php ENDPATH**/ ?>