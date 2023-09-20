<?php $__env->startSection('titulo'); ?>
    Nuevo| Unidades Orgánicas
<?php $__env->stopSection(); ?>


<?php $__env->startSection('contenido'); ?>
    <div class="container">
        <div class="row">
            
            <div class="col-sm-12">
            <!--tapmenu-->
            <div class="container">
              
              <ul class="nav nav-tabs">
                <li class="active"><a href="unidadorganica">Explorar Unidades Orgánicas</a></li>
                <li><a href="unidadorganica/create">Nuevo Unidades Orgánicas</a></li> 
              </ul>
            </div>
            <!--fintapmenu-->
                   
            
                      <!--PANEL Registro-->
            <div class="panel-group">
               <div class="panel panel-primary">
                   <div class="panel-heading">UNIDAD ORGÁNICA::[Búsqueda Datos]</div>
                   <div class="panel-body">
                      <!--CUERPO-->
                      <div class="col-md-12">
                         
                      <form class="form-horizontal">
                        
                          <!--<?php echo $__env->make('tramite.administracion.unidad-organica.search', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>-->
                           
                         <!--tabla-->
                        <div class="box">

                                <!-- /.tabla -->
                                <div class="box-body">
                                  <table class="table table-bordered" >
                                <thead>
                                    <tr>
                                      <th>CÓDIGO</th>
                                      <th>NOMBRE</th>
                                      <th>ABREVIADO</th>
                                      <th>SIGLAS</th>
                                      <th>REPRESENTANTE</th>
                                      <th>DEPENDENCIA</th>
                                      <th style="width: 10px"></th>
                                      <th style="width: 10px"></th>
                                    </tr>
                                </thead>

                                <tbody> 
                                    <?php $__currentLoopData = $creditos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $credito): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($credito->idcredito); ?></td>
                                    <td><?php echo e($credito->numero_credito); ?></td>
                                    <td><?php echo e($credito->usuario); ?></td>
                                    <td><?php echo e($credito->monto); ?></td>
                                    <td><?php echo e($credito->estado); ?></td>
                                    <td></td>
                                    <td>
                                        <a href="../public/unidadorganica/<?php echo e($credito->idcredito); ?>/edit" type="button" class="btn btn-info"><span class="glyphicon glyphicon-pencil"></span></a>
                                    </td>
                                    <td>
                                        <form action="../public/unidadorganica/<?php echo e($credito->idcredito); ?>" method="POST">
                                          <?php echo e(csrf_field()); ?>

                                          <?php echo e(method_field('DELETE')); ?>

                                             <button class="btn btn-danger del" type="submit"><span class="glyphicon glyphicon-remove"></span></button>
                                        </form>
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                                  </table>
                                </div> 
                        </div>
                                    
                        <!--fintabla-->
                          
                      </form>
                      <!--FINCUERPO 
                      <?php echo e($dependencias->appends($request)->render()); ?>-->
                       </div>
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
<?php echo $__env->make('layouts.plantillaPoi', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sgd\resources\views\poi\seguimiento\formularios\poiSeguimientoAct.blade.php ENDPATH**/ ?>