<?php $__env->startSection('titulo'); ?>
    REPROGRAMACION
<?php $__env->stopSection(); ?>

<?php $__env->startSection('estilo'); ?>
<?php echo \Illuminate\View\Factory::parentPlaceholder('estilo'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('contenido'); ?>
        
        <!--TABLA-->
        <div class="container-fluid">
            <div class="panel-group">
                <div class="panel panel-primary">
                   <div class="panel-heading">REPROGRAMACION BUSQUEDA</div>
                    <div class="panel-body">
                        <div class="box" style="overflow-x:scroll;">
                            <div class="box-body">
                                            <button onclick="javascript:window.location.reload();">Actualizar</button>  
                                <table class="table table-striped">
                                    <h4> ANULACIONES </h4>
                                    <thead>                                  
                                        <tr class="info">                                      
                                            <!--<th>ID_TAREA</th>
                                            <th>TAREA</th>
                                            <th>ENERO</th>                                                                 
                                            <th>FEBRERO</th>                                                                 
                                            <th>MARZO</th>                                                                 
                                            <th>ABRIL</th>                                                                 
                                            <th>MAYO</th>                                                                 
                                            <th>JUNIO</th>                                                                 
                                            <th>JULIO</th>                                                                 
                                            <th>AGOSTO</th>                                                                 
                                            <th>SETIEMBRE</th>                                                                 
                                            <th>OCTUBRE</th>                                                                 
                                            <th>NOVIEMBRE</th>                                                                 
                                            <th>DICIEMBRE</th> 
                                            <th>COD. POI</th> 
                                            <th>MONTO</th> 
                                            <th>CLASIFICADOR</th> 
                                            <th>FUN_PROG</th> 
                                            <th>ACT_PROY</th> 
                                            <th>REP_TAR_TIPO</th>-->
											<th>Unidad Orgánica Origen / <br /> Act/Proy Origen</th>
											<th>Est. Func. Prog. Origen / <br />Clasificador Origen</th>
											<th>FF</th>
											<th>Monto</th>
											<th>Unidad Orgánica Destino / <br /> Actividad Destino</th>
											<th>>Est. Func. Prog. Destino / Clasificador Destino</th>
											<th>Operación</th>
											<th>Acciones</th>
											<th>Estado Aprobación</th>											
                                        </tr>                                        
                                    </thead>                                    
                                                
                                    <tbody>
                                        <?php $__currentLoopData = $reprogramacion; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reprogramacio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>       
                                            <!--<td>{ { $reprogramacio->id_reprogramacion_tarea }}</td>        
                                            <td>{ { $reprogramacio->tarea }}</td>        
                                            <td>{ { $reprogramacio->rep_tar_met_fin_ene}}</td>    
                                            <td>{ { $reprogramacio->rep_tar_met_fin_feb}}</td>    
                                            <td>{ { $reprogramacio->rep_tar_met_fin_mar}}</td>    
                                            <td>{ { $reprogramacio->rep_tar_met_fin_abr}}</td>    
                                            <td>{ { $reprogramacio->rep_tar_met_fin_may}}</td>    
                                            <td>{ { $reprogramacio->rep_tar_met_fin_jun}}</td>    
                                            <td>{ { $reprogramacio->rep_tar_met_fin_jul}}</td>    
                                            <td>{ { $reprogramacio->rep_tar_met_fin_ago}}</td>    
                                            <td>{ { $reprogramacio->rep_tar_met_fin_set}}</td>    
                                            <td>{ { $reprogramacio->rep_tar_met_fin_oct}}</td>    
                                            <td>{ { $reprogramacio->rep_tar_met_fin_nov}}</td>    
                                            <td>{ { $reprogramacio->rep_tar_met_fin_dic}}</td>    
                                            <td>{ { $reprogramacio->rep_ap_numero}}</td>    
                                            <td>{ { $reprogramacio->rep_tar_monto}}</td>    
                                            <td>{ { $reprogramacio->rep_tar_clasificador}}</td>    
                                            <td>{ { $reprogramacio->rep_tar_id_est_func_prog}}</td>    
                                            <td>{ { $reprogramacio->act_proy}}</td>    
                                            <td>{ { $reprogramacio->rep_tar_tipo}}</td>-->
											<td><?php echo e($reprogramacio->unidad_origen); ?> / <br /><?php echo e($reprogramacio->act_proy_origen_desc); ?></td>
											<td><?php echo e($reprogramacio->cadena_pres_origen); ?> / <br /> <?php echo e($reprogramacio->cg_descripcion); ?></td>
											<td><?php echo e($reprogramacio->ff); ?></td>
                                            <td><?php echo e($reprogramacio->ppm_monto_n); ?></td>    
                                            <td><?php echo e($reprogramacio->unidad_destino); ?> / <br /><?php echo e($reprogramacio->act_proy_dest_desc); ?></td>    
                                            <td><?php echo e($reprogramacio->cadena_pres); ?>  / <br /> <?php echo e($reprogramacio->cg_descripcion_destino); ?></td>    
                                            <td><?php echo e($reprogramacio->ppm_tipo_modificacion); ?></td>
											<td><!--ELIMINAR-->
												<?php if( $reprogramacio->ppm_aprobacion_sectorista != 1 ): ?>
													<?php echo e(Form::open([ 'method'  => 'delete', 'route' => ['reprogramar_index.destroy', $reprogramacio->ppm_id]])); ?>

														<?php echo e(csrf_field()); ?>

														<?php echo e(method_field('DELETE')); ?>

														 
														<?php echo e(Form::button('<span class="glyphicon glyphicon-remove"></span>',array('class'=>'btn btn-danger del','type'=>'submit'))); ?>

													<?php echo e(Form::close()); ?>

												<?php endif; ?>
													</td>		
											<td><?php echo e($reprogramacio->estado_aprobacion_sectorista); ?></td>											
                                        </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>                                    
                                </table> 
								
								<table class="table table-striped">
                                    <h4> CRÉDITOS </h4>
                                    <thead>                                  
                                        <tr class="info">                                      
                                            <!--<th>ID_TAREA</th>
                                            <th>TAREA</th>
                                            <th>ENERO</th>                                                                 
                                            <th>FEBRERO</th>                                                                 
                                            <th>MARZO</th>                                                                 
                                            <th>ABRIL</th>                                                                 
                                            <th>MAYO</th>                                                                 
                                            <th>JUNIO</th>                                                                 
                                            <th>JULIO</th>                                                                 
                                            <th>AGOSTO</th>                                                                 
                                            <th>SETIEMBRE</th>                                                                 
                                            <th>OCTUBRE</th>                                                                 
                                            <th>NOVIEMBRE</th>                                                                 
                                            <th>DICIEMBRE</th> 
                                            <th>COD. POI</th> 
                                            <th>MONTO</th> 
                                            <th>CLASIFICADOR</th> 
                                            <th>FUN_PROG</th> 
                                            <th>ACT_PROY</th> 
                                            <th>REP_TAR_TIPO</th>-->
											<th>Unidad Orgánica Origen / <br /> Act/Proy Origen</th>
											<th>Est. Func. Prog. Origen / <br />Clasificador Origen</th>
											<th>FF</th>
											<th>Monto</th>
											<th>Unidad Orgánica Destino / <br /> Actividad Destino</th>
											<th>Est. Func. Prog. Destino / <br /> Clasificador Destino</th>
											<th>Operación</th>
											<th>Acciones</th> 
											<th>Estado Aprobación</th>	
                                        </tr>                                        
                                    </thead>                                    
                                                
                                    <tbody>
                                        <?php $__currentLoopData = $reprogramacion_habilitante; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reprogramacion_habilita): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>       
                                            <!--<td>{ { $reprogramacio->id_reprogramacion_tarea }}</td>        
                                            <td>{ { $reprogramacio->tarea }}</td>        
                                            <td>{ { $reprogramacio->rep_tar_met_fin_ene}}</td>    
                                            <td>{ { $reprogramacio->rep_tar_met_fin_feb}}</td>    
                                            <td>{ { $reprogramacio->rep_tar_met_fin_mar}}</td>    
                                            <td>{ { $reprogramacio->rep_tar_met_fin_abr}}</td>    
                                            <td>{ { $reprogramacio->rep_tar_met_fin_may}}</td>    
                                            <td>{ { $reprogramacio->rep_tar_met_fin_jun}}</td>    
                                            <td>{ { $reprogramacio->rep_tar_met_fin_jul}}</td>    
                                            <td>{ { $reprogramacio->rep_tar_met_fin_ago}}</td>    
                                            <td>{ { $reprogramacio->rep_tar_met_fin_set}}</td>    
                                            <td>{ { $reprogramacio->rep_tar_met_fin_oct}}</td>    
                                            <td>{ { $reprogramacio->rep_tar_met_fin_nov}}</td>    
                                            <td>{ { $reprogramacio->rep_tar_met_fin_dic}}</td>    
                                            <td>{ { $reprogramacio->rep_ap_numero}}</td>    
                                            <td>{ { $reprogramacio->rep_tar_monto}}</td>    
                                            <td>{ { $reprogramacio->rep_tar_clasificador}}</td>    
                                            <td>{ { $reprogramacio->rep_tar_id_est_func_prog}}</td>    
                                            <td>{ { $reprogramacio->act_proy}}</td>    
                                            <td>{ { $reprogramacio->rep_tar_tipo}}</td>-->
											<td><?php echo e($reprogramacion_habilita->unidad_origen); ?> / <br /><?php echo e($reprogramacion_habilita->act_proy_origen_desc); ?></td>
											<td><?php echo e($reprogramacion_habilita->cadena_pres_origen); ?> / <br /> <?php echo e(utf8_encode($reprogramacion_habilita->cg_descripcion)); ?></td>  
											<td><?php echo e($reprogramacion_habilita->ff); ?></td>  											
                                            <td><?php echo e($reprogramacion_habilita->ppm_monto_p); ?></td>    
                                            <td><?php echo e($reprogramacion_habilita->unidad_destino); ?> / <br /><?php echo e($reprogramacion_habilita->act_proy_desc); ?></td>    
                                            <td><?php echo e($reprogramacion_habilita->cadena_pres); ?> / <br /> <?php echo e($reprogramacion_habilita->cg_descripcion_destino); ?></td>    
                                            <td><?php echo e($reprogramacion_habilita->ppm_tipo_modificacion); ?></td>
											<td><!--ELIMINAR-->
												<?php if( $reprogramacion_habilita->ppm_aprobacion_sectorista != 1 ): ?>
													<?php echo e(Form::open([ 'method'  => 'delete', 'route' => ['reprogramar_index.destroy', $reprogramacion_habilita->ppm_id]])); ?>

														<?php echo e(csrf_field()); ?>

														<?php echo e(method_field('DELETE')); ?>

														 
														<?php echo e(Form::button('<span class="glyphicon glyphicon-remove"></span>',array('class'=>'btn btn-danger del','type'=>'submit'))); ?>

													<?php echo e(Form::close()); ?>

												<?php endif; ?>
											</td>	
											<td><?php echo e($reprogramacion_habilita->estado_aprobacion_sectorista); ?></td>											
                                        </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>                                    
                                </table> 
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
            
        </div>       
        <!--FIN TABLA -->
		<style>
			.jumbotron, header{
				display:none;
			}
		</style>
       <script>
			//$(".jumbotron").hide();
	   </script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('javascrip'); ?>
<?php echo \Illuminate\View\Factory::parentPlaceholder('javascrip'); ?>

<?php $__env->stopSection(); ?>                                                             

<?php echo $__env->make('layouts.plantillaPoi', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sgd\resources\views\poi\poiReprogramacion.blade.php ENDPATH**/ ?>