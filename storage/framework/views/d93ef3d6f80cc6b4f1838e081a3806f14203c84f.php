<?php $__env->startSection('titulo'); ?>
    Nuevo| Clasificaciión
<?php $__env->stopSection(); ?>


<?php $__env->startSection('contenido'); ?>
    <div class="container">
        <div class="row">
            
            <div class="col-sm-12">
            <!--tapmenu-->
            <div class="container">
              
              <ul class="nav nav-tabs">
                <li><a href="../unidadorganica">Explorar clasificaciones de directorio</a></li>
                <li class="active"><a href="../unidadorganica/create">Nuevo Unidades Orgánicas</a></li> 
              </ul>
            </div>
            <!--fintapmenu-->
              <?php echo e(Form::open(array('action' => 'Directorio\ClasificacionController@store', 'class' => 'form-horizontal', 'method' =>'POST'))); ?>

              <?php echo e(csrf_field()); ?>      
             <!--PANEL Registro-->
            <div class="panel-group">
               <div class="panel panel-primary">
                   <div class="panel-heading">DATOS DE LA CLASIFICACIÓN DEL DIRECTORIO</div>
                   <div class="panel-body">
                      <!--CUERPO-->
                          
                         <div class="form-group">
                            <?php echo e(Form::label('Descripción', '', ['class'=>'col-sm-3 control-label', 'for'=>'depe_nombre'])); ?>

                             <div class="col-sm-7">
                            <?php echo e(Form::text('cla_descripcion','', ['class' => 'form-control mayuscula','id' =>'cla_descripcion', 'placeholder'=>'Máximo 40 caracteres', 'required'=>'required', 'maxlength'=>'40' ])); ?>

                             </div>
                          </div>                           
						<div class="form-group">
                            <?php echo e(Form::label('', '', ['class'=>'col-sm-3 control-label', 'for'=>'FormGroup'])); ?>

                             <div class="col-sm-7">
                             <?php echo e(Form::button('<span class="glyphicon glyphicon-ok-circle"> Registrar</span>',array('class'=>'btn btn-primary','type'=>'submit'))); ?>

                             </div>
                          </div>  
                      
                      <!--FINCUERPO--> 
                   </div>
               </div> 
            </div>
            <!--FINPANEL Registro--> 
               <?php echo e(Form::close()); ?> 
              <!--</form> -->
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sgd\resources\views\directorio\clasificacion\nuevo-clasificacion.blade.php ENDPATH**/ ?>