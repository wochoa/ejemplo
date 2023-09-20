<!DOCTYPE html>
<html lang="en">

<head>
    <title>FORMATO F-3</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="<?php echo e(asset('js/jquery.js')); ?>"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" media="screen">
    <link rel="stylesheet" href="http://alxlit.name/bootstrap-chosen/bootstrap.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <script>
      $(function() {
        $('.chosen-select').chosen();
        $('.chosen-select-deselect').chosen({ allow_single_deselect: true });
      });
    </script>
     
    <style>                
        .texto{
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
            font-size: 9px;
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
            font-size: 9px;  
            font-weight: normal;  
            border: 1px solid #DDDDDD; 
        }
        /*------------------------------class = "table"------------------------------------*/

        /*------------------------------class = "primary"------------------------------------*/
        .text-center {
            text-align: center; 
        }        
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

        /*------------------------------class = "info2"------------------------------------*/
        .active {
            background-color: #F5F5F5; 
        }
        .active th {
            background-color: #F5F5F5; 
        }
        .active td {
            background-color: #F5F5F5; 
        }        
        /*------------------------------class = "info2"------------------------------------*/
        .footnotes { 
            page-break-after:always; 
        }
        
        .table-mihover>tbody>tr:hover {
            background-color: #EFDA9C
        }
        
        .chosen-container {
            width: 100% !important;
        }
        
    </style> 
          
</head>

<body>
<!------------------------------------------------------------------------------------------------------------------------------>  
<!--FORMATO F2: PROGRAMACIÓN OPERATIVA DE LA ACTIVIDAD/PROYECTO-->
    <div id="myPrintArea" class="container-fluid">
        <div>
            <h3></h3>    
        </div>       
        <?php if(Session::has('msg')): ?>
            <div class="alert alert-info">   
                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>        
                <strong>ATENCIÓN!</strong> <?php echo e(Session::get('msg')); ?>.
            </div>
        <?php endif; ?>
        <!--<p>The .table class adds basic styling (light padding-top and only horizontal dividers) to a table:</p>-->
    <!--TITULO-->
        <table class="table table-bordered" style="font-size:11px; font-family: Tahoma;">
            <thead>
                <tr bgcolor="#98CCF4">
                    <th style="text-align: center" width="100%">FORMATO F-3: CUADRO DE ASIGNACIÓN POR INSUMOS POR TAREAS/COMPONENTES</th>
                </tr>
            </thead>                        
        </table>
        
        <div style="text-align: center">
            <label style="font-size:11px; font-family: Tahoma;">01. ACTIVIDAD/PROYECTO N°01: </label>
            <input type="text" id="actividadProy" size="100%" value=" <?php echo e($actividad->actividad); ?>">
        </div>
        <h3></h3>
    <!--FIN TITULO-->
       
    <!--1. INFORMACIÓN GENERA-->    
        <table class="table table-bordered table-condensed table-mihover" style="font-size:9px; font-family: Tahoma;">    
            <thead>
                <tr class="info">
                    <th style="text-align: center" rowspan="2">IDT</th>
                    <th style="text-align: center" rowspan="2">1. TAREAS</th>
                    <th style="text-align: center" rowspan="2" colspan="2">2. INSUMOS  </th>
                    <th style="text-align: center" rowspan="2">3. UM (Insumo)</th>
                    <th style="text-align: center" rowspan="2">4. CANTID AD (Insu mo)</th>
                    <th style="text-align: center" rowspan="2">FF</th>
                    <th style="text-align: center" rowspan="2">GG</th>
                    <th style="text-align: center" rowspan="2">Sub G1</th>
                    <th style="text-align: center" rowspan="2">Sub G2</th>
                    <th style="text-align: center" rowspan="2">Esp 1</th>
                    <th style="text-align: center" rowspan="2">Esp 2</th>
                    <th style="text-align: center" rowspan="2">7. COST  O REFER  EN  CIAL</th>
                    <th style="text-align: center" rowspan="2">8. MONTO TOTAL</th>
                    <th style="text-align: center" colspan="17">9. Distribución Presupuestal de los Recursos(Programación de Devangados)</th>
                </tr>
                
                <tr class="active text-center">
                    <th><b>Ene</b></th>
                    <th><b>Feb</b></th>
                    <th><b>Mar</b></th>
                    <th><b>Total I Trimestre</b></th>                    
                    <th><b>Abr</b></th>
                    <th><b>May</b></th>
                    <th><b>Jun</b></th>
                    <th><b>Total II Trimestre</b></th>   
                    <th><b>Jul</b></th>
                    <th><b>Ago</b></th>
                    <th><b>Set</b></th>
                    <th><b>Total III Trimestre</b></th>   
                    <th><b>Oct</b></th>
                    <th><b>Nov</b></th>
                    <th><b>Dic</b></th>
                    <th><b>Total IV Trimestre</b></th>   
                    <th><b>TOTAL</b></th>   
                </tr>
            </thead>
            <?php if($insumosrow != 0): ?>
            <tbody>
        <!------------------------------------TAREA 01---------------------------------------->                      
                <tr class="text-center">
                    <td width="1%" rowspan="<?php echo e($insumosrow+1); ?>" class="active"><b>01</b></td>
                    <td width="7%" rowspan="<?php echo e($insumosrow+1); ?>" class="active"><b>T1:<?php echo e($tarea->tarea); ?></b></td>
                </tr>
                
                <?php $__currentLoopData = $insumos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $insumo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr style="text-align: center">                    
                    <td width="6%"><?php echo e($insumo->clasificador->cg_descripcion); ?></td>
                    <td>
                        <a href="#" data-toggle="modal" data-target="#<?php echo e($insumo->id); ?>" title="Editar"><span class="glyphicon glyphicon-pencil" style="font-size: 13px;"></span></a>
                        <br><br>
                        <!-------------------------Modal------------------------------------------------------------>
                        <div class="modal fade bd-example-modal-lg texto" id="<?php echo e($insumo->id); ?>" tabindex="1" role="dialog" aria-labelledby="myModalLabel">
                            <div id="editinsumo">
                            <div class="modal-dialog modal-lg" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                  <h4 class="modal-title" id="myModalLabel" style="text-align: center"><b>EDITAR: <?php echo e($insumo->clasificador->cg_descripcion); ?></b></h4>
                                </div>
                                <?php echo Form::open(['url'=>'poi/huamalies/editespecificas/'.$insumo->id, 'class'=>'form-horizontal']); ?>

                                <?php echo e(csrf_field()); ?>

                                <div class="modal-body">
                                   
                                    <?php echo Form::hidden('especifica_id_tarea', $tar, ['class'=>'form-control', 'id'=>'especifica_id_tarea']); ?>

                                    <?php echo Form::hidden('poi_actividad_proyecto_idactividad_proyecto', $act, ['class'=>'form-control', 'id'=>'poi_actividad_proyecto_idactividad_proyecto']); ?>

                                    <div class="form-group">
                                        <?php echo Form::label('Fuente Finan.', null, ['class'=>'col-sm-2 control-label']); ?>

                                        <div class="col-sm-9 input-group">
                                            <select name="especifica_fuente_financiamiento" id="fuente_financiamiento_actividad_esp" class="form-control" required>
                                                <option value> Seleccione Opción</option>  
                                                <?php if($insumo->fuente == 1): ?>
                                                    <option value="1" selected>1.RO-Recursos Ordinarios</option>   
                                                    <option value="2">2.RDR-Recursos Directamente Recudados</option>
                                                    <option value="3">3.ROOC-Recursos por Operaciones Oficiales de Crédito</option>
                                                    <option value="4">4.DyT-Donaciones y Tranferencias</option>
                                                    <option value="5">5.RD-Recursos Determinados</option>
                                                <?php elseif($insumo->fuente == 2): ?>
                                                    <option value="1">1.RO-Recursos Ordinarios</option>   
                                                    <option value="2" selected>2.RDR-Recursos Directamente Recudados</option>
                                                    <option value="3">3.ROOC-Recursos por Operaciones Oficiales de Crédito</option>
                                                    <option value="4">4.DyT-Donaciones y Tranferencias</option>
                                                    <option value="5">5.RD-Recursos Determinados</option>
                                                <?php elseif($insumo->fuente == 3): ?>
                                                    <option value="1">1.RO-Recursos Ordinarios</option>   
                                                    <option value="2">2.RDR-Recursos Directamente Recudados</option>
                                                    <option value="3" selected>3.ROOC-Recursos por Operaciones Oficiales de Crédito</option>
                                                    <option value="4">4.DyT-Donaciones y Tranferencias</option>
                                                    <option value="5">5.RD-Recursos Determinados</option>
                                                <?php elseif($insumo->fuente == 4): ?>
                                                    <option value="1">1.RO-Recursos Ordinarios</option>   
                                                    <option value="2">2.RDR-Recursos Directamente Recudados</option>
                                                    <option value="3">3.ROOC-Recursos por Operaciones Oficiales de Crédito</option>
                                                    <option value="4" selected>4.DyT-Donaciones y Tranferencias</option>
                                                    <option value="5">5.RD-Recursos Determinados</option>
                                                <?php elseif($insumo->fuente == 5): ?>
                                                    <option value="1">1.RO-Recursos Ordinarios</option>   
                                                    <option value="2">2.RDR-Recursos Directamente Recudados</option>
                                                    <option value="3">3.ROOC-Recursos por Operaciones Oficiales de Crédito</option>
                                                    <option value="4">4.DyT-Donaciones y Tranferencias</option>
                                                    <option value="5" selected>5.RD-Recursos Determinados</option>
                                                <?php endif; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group text-left">
                                        <?php echo Form::label('Específica', null, ['class'=>'col-sm-2 control-label']); ?>

                                        <div class="col-sm-9 input-group">
                                            <select name="especifica_clasificador_gastos" id="especifica_clasificador_gastos" class="chosen-select" required>
                                                <option value> Seleccione Opción</option>
                                                <?php $__currentLoopData = $gastos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gasto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if($insumo->especifica_clasificador_gastos == $gasto->id): ?>
                                                        <option value="<?php echo e($gasto->id); ?>" selected><?php echo e($gasto->clasificador); ?> - <?php echo e($gasto->nombre); ?></option>
                                                    <?php else: ?>
                                                        <option value="<?php echo e($gasto->id); ?>"><?php echo e($gasto->clasificador); ?> - <?php echo e($gasto->nombre); ?></option>
                                                    <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <?php echo Form::label('Unid. Medida', null, ['class'=>'col-sm-2 control-label']); ?>

                                        <div class="col-sm-9 input-group">
                                            <?php echo Form::text('especifica_unidad_medida', $insumo->um, ['class'=>'form-control', 'required'=>'', 'placeholder'=>'Ingrese la Unid. de Medida', 'id'=>'especifica_unidad_medida']); ?>

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <?php echo Form::label('Cant.(insumo)', null, ['class'=>'col-sm-2 control-label']); ?>

                                        <div class="col-sm-9 input-group">
                                            <?php echo Form::number('especifica_cantidad', $insumo->cantidad, ['class'=>'form-control', 'required'=>'', 'placeholder'=>'Ingrese la Cantidad(Insumo)', 'id'=>'especifica_cantidad']); ?>

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <?php echo Form::label('Costo Ref.', null, ['class'=>'col-sm-2 control-label']); ?>

                                        <div class="col-sm-9 input-group">
                                            <?php echo Form::number('especifica_costo_referencial', $insumo->costo, ['class'=>'form-control', 'required'=>'', 'placeholder'=>'Ingrese la Cantidad(Insumo)', 'id'=>'especifica_costo_referencial']); ?>

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <?php echo Form::label('Monto Total', null, ['class'=>'col-sm-2 control-label']); ?>

                                        <div class="col-sm-9 input-group">
                                            <?php echo Form::number('edit_especifica_monto_total', $insumo->monto, ['class'=>'form-control', 'id'=>'edit_especifica_monto_total', 'placeholder'=>'Ingrese el Monto para cada mes', 'readonly']); ?>

                                        </div>
                                    </div>
                                    <br>
                                    <table class="table-bordered table-condensed">
                                        <thead class="info">
                                            <tr>
                                                <th class="text-center">Enero</th>
                                                <th class="text-center">Febrero</th>
                                                <th class="text-center">Marzo</th>
                                                <th class="text-center">Abril</th>
                                                <th class="text-center">Mayo</th>
                                                <th class="text-center">Junio</th>
                                                <th class="text-center">Julio</th>
                                                <th class="text-center">Agosto</th>
                                                <th class="text-center">Setiembre</th>
                                                <th class="text-center">Octubre</th>
                                                <th class="text-center">Noviembre</th>
                                                <th class="text-center">Diciembre</th>
                                            </tr>                            
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><?php echo Form::text('edit_enero', $insumo->enero, ['class'=>'form-control suma', 'id'=>'edit_enero']); ?></td>
                                                <td><?php echo Form::text('edit_febrero', $insumo->febrero, ['class'=>'form-control suma', 'id'=>'edit_febrero']); ?></td>
                                                <td><?php echo Form::text('edit_marzo', $insumo->marzo, ['class'=>'form-control suma', 'id'=>'edit_marzo']); ?></td>
                                                <td><?php echo Form::text('edit_abril', $insumo->abril, ['class'=>'form-control suma', 'id'=>'edit_abril']); ?></td>
                                                <td><?php echo Form::text('edit_mayo', $insumo->mayo, ['class'=>'form-control suma', 'id'=>'edit_mayo']); ?></td>
                                                <td><?php echo Form::text('edit_junio', $insumo->junio, ['class'=>'form-control suma', 'id'=>'edit_junio']); ?></td>
                                                <td><?php echo Form::text('edit_julio', $insumo->julio, ['class'=>'form-control suma', 'id'=>'edit_julio']); ?></td>
                                                <td><?php echo Form::text('edit_agosto', $insumo->agosto, ['class'=>'form-control suma', 'id'=>'edit_agosto']); ?></td>
                                                <td><?php echo Form::text('edit_setiembre', $insumo->setiembre, ['class'=>'form-control suma', 'id'=>'edit_setiembre']); ?></td>
                                                <td><?php echo Form::text('edit_octubre', $insumo->octubre, ['class'=>'form-control suma', 'id'=>'edit_octubre']); ?></td>
                                                <td><?php echo Form::text('edit_noviembre', $insumo->noviembre, ['class'=>'form-control suma', 'id'=>'edit_noviembre']); ?></td>
                                                <td><?php echo Form::text('edit_diciembre', $insumo->diciembre, ['class'=>'form-control suma', 'id'=>'edit_diciembre']); ?></td>
                                            </tr>
                                        </tbody>                        
                                    </table>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-danger pull-left" data-dismiss="modal" name="cancel">Cancelar</button>
                                  <button type="submit" class="btn btn-primary">Guardar</button>
                                </div>
                                <?php echo Form::close(); ?>

                              </div>
                            </div>
                            </div>
                        </div>
                        <!-------------------------Fin Modal------------------------------------------------------------> <?php echo Form::open(['class'=>'form-horizontal']); ?>   
                        <?php echo e(csrf_field()); ?>

                            <a href="<?php echo e(url('poi/huamalies/deleteespecificas/'.$act.'/'.$tar.'/'.$insumo->id)); ?>" title="Eliminar"><span class="glyphicon glyphicon-trash del" style="font-size: 13px;"></span></a>
                        <?php echo Form::close(); ?>

                    </td>
                    <td width="4%" ><?php echo e($insumo->um); ?></td>
                    <td width="4%" class="active"><?php echo e($insumo->cantidad); ?></td>
                    <td width="2%" ><?php echo e($insumo->fuente); ?></td>
                    <td width="10%" colspan="5"><?php echo e($insumo->clasificador->cg_clasificador); ?></td>
                    <td width="4%" class="active"><?php echo e($insumo->costo); ?></td>
                    <td width="4%" class="active"><?php echo e($insumo->monto); ?></td>
                    <?php if($insumo->enero != 0): ?>
                        <td width="3%" ><?php echo e($insumo->enero); ?></td>
                    <?php else: ?>
                        <td width="3%" ></td>
                    <?php endif; ?>
                    <?php if($insumo->febrero != 0): ?>   
                        <td width="3%" ><?php echo e($insumo->febrero); ?></td>
                    <?php else: ?>
                        <td width="3%" ></td>
                    <?php endif; ?>
                    <?php if($insumo->marzo != 0): ?>   
                        <td width="3%" ><?php echo e($insumo->marzo); ?></td>
                    <?php else: ?>
                        <td width="3%" ></td>
                    <?php endif; ?>                    
                    <td width="4%" class="active"><?php echo e($insumo->tri1); ?></td> 
                    <?php if($insumo->abril != 0): ?>
                        <td width="3%" ><?php echo e($insumo->abril); ?></td>
                    <?php else: ?>
                        <td width="3%" ></td>
                    <?php endif; ?>
                    <?php if($insumo->mayo != 0): ?>   
                        <td width="3%" ><?php echo e($insumo->mayo); ?></td>
                    <?php else: ?>
                        <td width="3%" ></td>
                    <?php endif; ?>
                    <?php if($insumo->junio != 0): ?>   
                        <td width="3%" ><?php echo e($insumo->junio); ?></td>
                    <?php else: ?>
                        <td width="3%" ></td>
                    <?php endif; ?>  
                    <td width="4%" class="active"><?php echo e($insumo->tri2); ?></td> 
                    <?php if($insumo->julio != 0): ?>
                        <td width="3%" ><?php echo e($insumo->julio); ?></td>
                    <?php else: ?>
                        <td width="3%" ></td>
                    <?php endif; ?>
                    <?php if($insumo->agosto != 0): ?>   
                        <td width="3%" ><?php echo e($insumo->agosto); ?></td>
                    <?php else: ?>
                        <td width="3%" ></td>
                    <?php endif; ?>
                    <?php if($insumo->setiembre != 0): ?>   
                        <td width="3%" ><?php echo e($insumo->setiembre); ?></td>
                    <?php else: ?>
                        <td width="3%" ></td>
                    <?php endif; ?>  
                    <td width="4%" class="active"><?php echo e($insumo->tri3); ?></td> 
                    <?php if($insumo->octubre != 0): ?>
                        <td width="3%" ><?php echo e($insumo->octubre); ?></td>
                    <?php else: ?>
                        <td width="3%" ></td>
                    <?php endif; ?>
                    <?php if($insumo->noviembre != 0): ?>   
                        <td width="3%" ><?php echo e($insumo->noviembre); ?></td>
                    <?php else: ?>
                        <td width="3%" ></td>
                    <?php endif; ?>
                    <?php if($insumo->diciembre != 0): ?>   
                        <td width="3%" ><?php echo e($insumo->diciembre); ?></td>
                    <?php else: ?>
                        <td width="3%" ></td>
                    <?php endif; ?>  
                    <td width="4%" class="active"><?php echo e($insumo->tri4); ?></td>         
                    <td width="6%" class="active"><?php echo e($insumo->monto); ?></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   
                                
                <tr style="text-align: center">
                    <td colspan="13"><b>TOTAL TAREA 01</b></td>
                    <td class="info"><b><?php echo e($insact->tartotal); ?></b></td>
                    <td class="active"><?php echo e($insact->tarenero); ?></td>
                    <td class="active"><?php echo e($insact->tarfebrero); ?></td>
                    <td class="active"><?php echo e($insact->tarmarzo); ?></td>
                    <td class="active"><b><?php echo e($insact->tartri1); ?></b></td>
                    <td class="active"><?php echo e($insact->tarabril); ?></td>
                    <td class="active"><?php echo e($insact->tarmayo); ?></td>
                    <td class="active"><?php echo e($insact->tarjunio); ?></td>
                    <td class="active"><b><?php echo e($insact->tartri2); ?></b></td>
                    <td class="active"><?php echo e($insact->tarjulio); ?></td>
                    <td class="active"><?php echo e($insact->taragosto); ?></td>
                    <td class="active"><?php echo e($insact->tarsetiembre); ?></td>
                    <td class="active"><b><?php echo e($insact->tartri3); ?></b></td>
                    <td class="active"><?php echo e($insact->taroctubre); ?></td>
                    <td class="active"><?php echo e($insact->tarnoviembre); ?></td>
                    <td class="active"><?php echo e($insact->tardiciembre); ?></td>
                    <td class="active"><b><?php echo e($insact->tartri4); ?></b></td>
                    <td class="info"><b><?php echo e($insact->tartotal); ?></b></td>
                </tr>
        <!--------------------------------FIN TAREA 01---------------------------------------->
            </tbody> 
            <?php endif; ?>           
        </table>    
    </div>    
<!--FIN FORMATO F2: PROGRAMACIÓN OPERATIVA DE LA ACTIVIDAD/PROYECTO-->
    <div class="col-xs-12">
        <a href="<?php echo e(url('poi/huamalies/ver/'.$act)); ?>" class="btn btn-primary"><i class="glyphicon glyphicon-fast-backward"></i> Atras</a> 
        <button class="btn btn-success pull-right" data-toggle="modal" data-target="#adinsumo"><i class="glyphicon glyphicon-plus"></i> Insumos</button>
        <!-------------------------Modal------------------------------------------------------------>
        <div class="modal fade bd-example-modal-lg texto" id="adinsumo" tabindex="1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="myModalLabel" style="text-align: center"><b>Tarea: <?php echo e($tarea->tarea); ?></b></h4>
                </div>
                <?php echo Form::open(['url'=>'poi/huamalies/especificas', 'class'=>'form-horizontal']); ?>

                <div class="modal-body">
                    <?php echo Form::hidden('especifica_id_tarea', $tar, ['class'=>'form-control', 'id'=>'especifica_id_tarea']); ?>

                    <?php echo Form::hidden('poi_actividad_proyecto_idactividad_proyecto', $act, ['class'=>'form-control', 'id'=>'poi_actividad_proyecto_idactividad_proyecto']); ?>

                    <div class="form-group">
                        <?php echo Form::label('Fuente Finan.', null, ['class'=>'col-sm-2 control-label']); ?>

                        <div class="col-sm-9 input-group">
                            <select name="especifica_fuente_financiamiento" id="fuente_financiamiento_actividad_esp" class="form-control" required>
                                <option value> Seleccione Opción</option>
                                <option value="1">1.RO-Recursos Ordinarios</option>
                                <option value="2">2.RDR-Recursos Directamente Recudados</option>
                                <option value="3">3.ROOC-Recursos por Operaciones Oficiales de Crédito</option>
                                <option value="4">4.DyT-Donaciones y Tranferencias</option>
                                <option value="5">5.RD-Recursos Determinados</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group text-left">
                        <?php echo Form::label('Específica', null, ['class'=>'col-sm-2 control-label']); ?>

                        <div class="col-sm-9 input-group">
                            <select name="especifica_clasificador_gastos" id="especifica_clasificador_gastos" class="chosen-select" required>
                                <option value> Seleccione Opción</option>
                                <?php $__currentLoopData = $gastos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gasto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($gasto->id); ?>"><?php echo e($gasto->clasificador); ?> - <?php echo e($gasto->nombre); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <?php echo Form::label('Unid. Medida', null, ['class'=>'col-sm-2 control-label']); ?>

                        <div class="col-sm-9 input-group">
                            <?php echo Form::text('especifica_unidad_medida', null, ['class'=>'form-control', 'required'=>'', 'placeholder'=>'Ingrese la Unid. de Medida', 'id'=>'especifica_unidad_medida']); ?>

                        </div>
                    </div>
                    <div class="form-group">
                        <?php echo Form::label('Cant.(insumo)', null, ['class'=>'col-sm-2 control-label']); ?>

                        <div class="col-sm-9 input-group">
                            <?php echo Form::number('especifica_cantidad', null, ['class'=>'form-control', 'required'=>'', 'placeholder'=>'Ingrese la Cantidad(Insumo)', 'id'=>'especifica_cantidad']); ?>

                        </div>
                    </div>
                    <div class="form-group">
                        <?php echo Form::label('Costo Ref.', null, ['class'=>'col-sm-2 control-label']); ?>

                        <div class="col-sm-9 input-group">
                            <?php echo Form::number('especifica_costo_referencial', null, ['class'=>'form-control', 'required'=>'', 'placeholder'=>'Ingrese la Cantidad(Insumo)', 'id'=>'especifica_costo_referencial']); ?>

                        </div>
                    </div>
                    <div class="form-group">
                        <?php echo Form::label('Monto Total',null, ['class'=>'col-sm-2 control-label']); ?>

                        <div class="col-sm-9 input-group">
                            <?php echo Form::number('especifica_monto_total', '', ['class'=>'form-control', 'id'=>'especifica_monto_total', 'placeholder'=>'Ingrese el Monto para cada mes', 'readonly']); ?>

                            <div class="hide alert alert-danger">La cantidad debe de ser mayor a 0</div>
                        </div>
                    </div>
                    <br>
                    <table class="table-bordered table-condensed">
                        <thead class="info">
                            <tr>
                                <th class="text-center">Enero</th>
                                <th class="text-center">Febrero</th>
                                <th class="text-center">Marzo</th>
                                <th class="text-center">Abril</th>
                                <th class="text-center">Mayo</th>
                                <th class="text-center">Junio</th>
                                <th class="text-center">Julio</th>
                                <th class="text-center">Agosto</th>
                                <th class="text-center">Setiembre</th>
                                <th class="text-center">Octubre</th>
                                <th class="text-center">Noviembre</th>
                                <th class="text-center">Diciembre</th>
                            </tr>                            
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php echo Form::text('esp_enero', '0', ['class'=>'form-control suma2', 'id'=>'esp_enero']); ?></td>
                                <td><?php echo Form::text('esp_febrero', '0', ['class'=>'form-control suma2', 'id'=>'esp_febrero']); ?></td>
                                <td><?php echo Form::text('esp_marzo', '0', ['class'=>'form-control suma2', 'id'=>'esp_marzo']); ?></td>
                                <td><?php echo Form::text('esp_abril', '0', ['class'=>'form-control suma2', 'id'=>'esp_abril']); ?></td>
                                <td><?php echo Form::text('esp_mayo', '0', ['class'=>'form-control suma2', 'id'=>'esp_mayo']); ?></td>
                                <td><?php echo Form::text('esp_junio', '0', ['class'=>'form-control suma2', 'id'=>'esp_junio']); ?></td>
                                <td><?php echo Form::text('esp_julio', '0', ['class'=>'form-control suma2', 'id'=>'esp_julio']); ?></td>
                                <td><?php echo Form::text('esp_agosto', '0', ['class'=>'form-control suma2', 'id'=>'esp_agosto']); ?></td>
                                <td><?php echo Form::text('esp_setiembre', '0', ['class'=>'form-control suma2', 'id'=>'esp_setiembre']); ?></td>
                                <td><?php echo Form::text('esp_octubre', '0', ['class'=>'form-control suma2', 'id'=>'esp_octubre']); ?></td>
                                <td><?php echo Form::text('esp_noviembre', '0', ['class'=>'form-control suma2', 'id'=>'esp_noviembre']); ?></td>
                                <td><?php echo Form::text('esp_diciembre', '0', ['class'=>'form-control suma2', 'id'=>'esp_diciembre']); ?></td>
                            </tr>
                        </tbody>                        
                    </table>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger pull-left" data-dismiss="modal" name="cancel">Cancelar</button>
                  <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
                <?php echo Form::close(); ?>

              </div>
            </div>
        </div>
        <!-------------------------Fin Modal------------------------------------------------------------>       
    </div>
<!------------------------------------------------------------------------------------------------------------------------------->   
<script src="<?php echo e(asset('plugins/select2/select2.full.min.js')); ?>"></script>
<script src="http://harvesthq.github.io/chosen/chosen.jquery.js"></script>
<script>   
    $(document).ready(function() {
        $(".del").click(function(event) {
            if (!confirm("¿Realmente desea Eliminar?"))
                event.preventDefault();
        })
    });
    
    $(".select2-container").select2();
    
    $('#adinsumo').find('form').submit(function (event) {
	    selector = "#especifica_monto_total";
        input =$(selector);
        if((input.val()>0)){}
        else {
            input.next().removeClass('hide');
            event.preventDefault();
        }
    })
        
    $('document').ready(function(){
        $('.suma').keyup(function(){
            var valortotal = $(this).parent().parent().parent().parent().parent();
           // alert(123);
            var value = (parseFloat(valortotal.find('#edit_enero').val()) + parseFloat(valortotal.find('#edit_febrero').val()) + parseFloat(valortotal.find('#edit_marzo').val()) + parseFloat(valortotal.find('#edit_abril').val()) + parseFloat(valortotal.find('#edit_mayo').val()) + parseFloat(valortotal.find('#edit_junio').val()) + parseFloat(valortotal.find('#edit_julio').val()) + parseFloat(valortotal.find('#edit_agosto').val()) + parseFloat(valortotal.find('#edit_setiembre').val()) + parseFloat(valortotal.find('#edit_octubre').val()) + parseFloat(valortotal.find('#edit_noviembre').val()) + parseFloat(valortotal.find('#edit_diciembre').val()));            
            valortotal.find('#edit_especifica_monto_total').val( value.toFixed(2) );
        });
    });  
    
    $('document').ready(function(){
        $('.suma2').keyup(function(){
            var value = (parseFloat($('#esp_enero').val()) + parseFloat($('#esp_febrero').val()) + parseFloat($('#esp_marzo').val()) + parseFloat($('#esp_abril').val()) + parseFloat($('#esp_mayo').val()) + parseFloat($('#esp_junio').val()) + parseFloat($('#esp_julio').val()) + parseFloat($('#esp_agosto').val()) + parseFloat($('#esp_setiembre').val()) + parseFloat($('#esp_octubre').val()) + parseFloat($('#esp_noviembre').val()) + parseFloat($('#esp_diciembre').val()));            
            $("#especifica_monto_total").val( value.toFixed(2) );
        });
    });     
    
    $(document).ready(function() {
      $(".js-example-basic-single").select2();
    });
</script> 
</body>


</html><?php /**PATH C:\xampp\htdocs\sgd\resources\views\poi\huamalies\insumos.blade.php ENDPATH**/ ?>