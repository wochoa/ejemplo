<?php $__env->startSection('titulo'); ?>
    Nuevo|Clasificación del directorio
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenido'); ?>
    <div class="container">
        <div class="row">
            
            <div class="col-sm-12">
            <!--tapmenu-->
            <div class="container">
              
              <ul class="nav nav-tabs">
                <li class="active"><a href="dependencias">Explorar Clasificación del directorio</a></li>
                <li><?php echo e(link_to_action('Directorio\ClasificacionController@create', 'Nuevo' )); ?></li>
              </ul>
            </div>
            <!--fintapmenu--> 
                   
             <!--PANEL Registro-->
            <div class="panel-group">
               <div class="panel panel-primary">
                   <div class="panel-heading">CLASIFICACIONES::[Búsqueda Datos]</div>
                   <div class="panel-body">
                      <!--CUERPO-->
                    <!--tabla-->
                        <div class="box">
                            <div class="box-body">
							<?php echo e($mensaje); ?>

								  <table class="table table-bordered" >
                                <thead>
                                    <tr>
                                      <th>CODIGO</th>
                                      <th>NOMBRE DE LA CLASIFICACIÓN</th>
                                      <th style="width: 10px"></th>
                                      <th style="width: 10px"></th>
                                    </tr>
                                </thead>

                                <tbody> 
                                <?php $__currentLoopData = $clasificaciones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $clasificacion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($clasificacion->cla_id); ?></td>
                                    <td><?php echo e($clasificacion->cla_descripcion); ?></td>
                                    <td><!--EDITAR-->
                                        <?php echo e(Html :: linkAction('Directorio\ClasificacionController@edit', '', array ($clasificacion->cla_id),array('class'=>'btn btn-info glyphicon glyphicon-pencil','type'=>'button'))); ?>

                                    </td>
                                    <td><!--ELIMINAR-->
                                        <?php echo e(Form::open([ 'method'  => 'delete', 'route' => ['dependencias.destroy', $clasificacion->cla_id]])); ?>

                                          <?php echo e(csrf_field()); ?>

                                          <?php echo e(method_field('DELETE')); ?>

                                             
                                        <?php echo e(Form::button('<span class="glyphicon glyphicon-remove"></span>',array('class'=>'btn btn-danger del','type'=>'submit'))); ?>

                                        <?php echo e(Form::close()); ?>

                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                                  </table>
                                </div> 
                        </div>
                        <!--PAGINACION ↓↓-->
                        <?php echo e($clasificaciones->appends($request)->render()); ?>                
                        <!--fintabla-->
                      <!--FINCUERPO--> 
                   </div>
               </div> 
            </div>
            <!--FINPANEL Registro-->  
            </div>
        </div>
    </div>
<!--ALERTA DIALOGO-->
<script>
    $(document).ready(function(){
        $(".del").click(function(event){
            if(!confirm("¿Realmente desea Eliminar?"))
                event.preventDefault();
        })

    });
    
</script>

<!--FIN ALERTA DIALOGO-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sgd\resources\views\directorio\clasificacion.blade.php ENDPATH**/ ?>