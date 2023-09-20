<!DOCTYPE html>
<html lang="en">

<head>
    <title>COMPARAR PRECIOS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" media="screen">
    <style>
        table, th, td {
            font-size:11px;
            font-family: Tahoma;
        }
        
        /*------------------------------class = "table"------------------------------------*/
        table{
            border-collapse: collapse;
            text-align: left;
            width: 100%;  
            font-family: Tahoma;  
            background: #fff;
            border: 1px solid #DDDDDD; 
            margin-bottom: 10px;
        }

        table thead th {    
            color: #333333;  
            padding-top: 2px;
            padding-bottom: 2px;
            padding-left: 3px;
            padding-right: 3px;
            font-size: 11px;
            font-weight: bold;
            border-bottom: 2px solid #DDDDDD;  
            border-left: 1px solid #DDDDDD;  
        }

        table tbody td {
            color: #333333;    
            padding-top: 2px;
            padding-bottom: 2px;
            padding-left: 3px;
            padding-right: 3px;
            font-size: 11px;  
            font-weight: normal;  
            border: 1px solid #DDDDDD; 
        }
        /*------------------------------class = "table"------------------------------------*/

        /*------------------------------class = "primary"------------------------------------*/
        .info {
            background-color: #D9EDF7; 
        }

        .info th {
            background-color: #D9EDF7; 
        }

        .info td {
            background-color: #D9EDF7; 
        }
        /*------------------------------class = "primary"------------------------------------*/

        /*------------------------------class = "info"------------------------------------*/
        .active {
            background-color: #F5F5F5; 
        }

        .active th {
            background-color: #F5F5F5; 
        }

        .active td {
            background-color: #F5F5F5; 
        }
        /*------------------------------class = "info"------------------------------------*/
        .footnotes { 
            page-break-after:always; 
        }
    </style>
    
    <?php echo $__env->make('tramite.stylesheet', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('tramite.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body>
    <?php echo Form::open(array('url'=>'poi/comparar','method'=>'GET','autocomplete'=>'off','role'=>'search','class'=>'form-horizontal')); ?>

<!----------------------------------------------------------------------------------------------------------------->
    <!--TITULO-->
    <div class="content col-sm-10 col-sm-offset-1">   
        <table class="table table-bordered">
            <thead>
                <tr bgcolor="#98CCF4">
                    <th style="text-align: center" width="100%">COMPARAR GASTOS: RESUMEN DE PROGRAMACIÓN POR UNIDAD EJECUTORA</th>
                </tr>
            </thead>            
        </table>
    <!--FIN TITULO-->
        
        <div class="form-group">
            <label for="ex_ofi_codigo" class="col-sm-3">Unidad Ejecutora:</label>
            <div class="col-sm-8">
                <select class="form-control select2" id="ex_ofi_codigo" name="ex_ofi_codigo">
                    <option> ----- Seleccione una Unidad Orgánica ----- </option>
                    <?php $__currentLoopData = $oficina; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($sel->id); ?>"> <?php echo e($sel->id); ?>.- <?php echo e($sel->nombre); ?> </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                
                </select>            
            </div>
        </div>
           
        <div class="form-group">
            <label for="cg_clasificador" class="col-sm-2">Clasificador:</label>
            <div class="col-sm-8">
                <select class="form-control select2" id="cg_clasificador" name="cg_clasificador">
                    <option> ----- Seleccione un Clasificador ----- </option>
                </select>
            </div>
            <div class="col-sm-1">
                <?php echo Form::button('<span class="glyphicon glyphicon-search"> Buscar</span>',
                array('class'=>'btn btn-primary', 'type'=>'submit', 'style'=>'font-size: 10px;')); ?>

            </div>
        </div>   

    <!--1. INFORMACIÓN GENERA-->    
        <?php $__currentLoopData = $poi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <table class="table table-bordered table-condensed">    
            <thead>
                <tr class="info">
                    <th style="text-align:center">N°</th>
                    <th style="text-align:center" colspan="3">Unidad Ejecutora: <?php echo e($p->codOfi); ?> - <?php echo e($p->nomOfi); ?></th>
                    <th style="text-align:center">Poi</th>
                    <th style="text-align:center">Pia</th>
                </tr>
            </thead>
            <tbody>                
                <?php ($cont=1); ?>
                <?php $__currentLoopData = $total; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td style="text-align:center"><b><?php echo e($cont); ?></b></td>
                    <td style="text-align:right"><b>Cadena: </b></td>
                    <td><?php echo e($t->clas); ?>-<?php echo e($t->cod); ?>-<?php echo e($t->prod); ?>-<?php echo e($t->act); ?>-<?php echo e($t->func); ?>-<?php echo e($t->div); ?>-<?php echo e($t->grup); ?>-<?php echo e($t->final); ?>-<?php echo e($t->met); ?>-<?php echo e($t->fuen); ?></td>
                    <td style="text-align:center" class="active"><b>Total</b></td>
                    <?php if( $t->totalpoi == $t->totalpia): ?>
                        <td class="success" style="text-align:right"><b><?php echo e(number_format($t->totalpoi, 2, '.', ', ')); ?></b></td>
                        <td class="success" style="text-align:right"><b><?php echo e(number_format($t->totalpia, 2, '.', ', ')); ?></b>
                    <?php else: ?>
                        <td class="danger" style="text-align:right"><b><?php echo e(number_format($t->totalpoi, 2, '.', ', ')); ?></b></td>
                        <td class="danger" style="text-align:right"><b><?php echo e(number_format($t->totalpia, 2, '.', ', ')); ?></b>
                    <?php endif; ?>
                </tr>
                <?php ($cont++); ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
            </tbody>
        </table>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
    <!--FIN 1. INFORMACIÓN GENERA--> 
    
    <script>        
        $("#ex_ofi_codigo").change(function(){
            var id = $("#ex_ofi_codigo").val();
            $.ajax({
                url:  "comparar/"+id+"/clasificador",
                type: "GET",
                success: function(json){   
                    var select = '<option value>--Seleccione opción--</option>';                    
                    var option = '';
                    obj = json['clasificador']; 
                    $.each( obj, function( key, value ) {
                        option = option + '<option value="'+value['id']+'">'+value['id']+'</option>';
                    });                     
                    select = select + option;
                    $( "#cg_clasificador" ).html( select );                    
                }
            })
        });
    </script>
    </div>
    <?php echo e(Form::close()); ?>

</body>
    
</html>
<!----------------------------------------------------------------------------------------------------------------->
                <?php /**PATH C:\xampp\htdocs\sgd\resources\views\poi\comparar.blade.php ENDPATH**/ ?>