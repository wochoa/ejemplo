<?php $__env->startSection('titulo'); ?>
    Nuevo|Bloques
<?php $__env->stopSection(); ?>


<?php $__env->startSection('contenido'); ?>
    <div class="container">
        <div class="row">
            
            <div class="col-sm-12">
            <!--tapmenu-->
            <div class="container">
              
              <ul class="nav nav-tabs">
                <li class="active"><a href="bloques">Explorar Bloqueos</a></li>
                <li><a href="bloques/create">Nuevo Bloqueo</a></li>
              </ul>
            </div>
            <!--fintapmenu-->
                   
             <!--PANEL Registro-->
            <div class="panel-group">
               <div class="panel panel-primary">
                   <div class="panel-heading">BLOQUEOS::[Búsqueda Datos]</div>
                   <div class="panel-body">
                      <!--CUERPO-->
                      <?php echo e(Form::open(array('action' => 'Tramite\BloqueController@store', 'class' => 'form-horizontal'))); ?>

                      <?php echo e(csrf_field()); ?>

                      <!--<form class="form-horizontal">-->
                          <div class="form-group">
                             <?php echo e(Form::label('Código de Bloqueo: ', '', ['class' =>  'col-sm-3 control-label', 'for'=>'FormGroup'])); ?>

                             <!--<label class="col-sm-3 control-label" for="FormGroup">Código de Bloqueo</label>-->
                             <div class="col-sm-6">
                                 <?php echo e(Form::text('', '', ['class' => 'form-control'])); ?>

                                 <!--<input type="text" class="form-control" id="FormGroup">-->
                             </div>
                          </div>
                          <div class="form-group">
                             <?php echo e(Form::label('Tipo: ', '', ['class' =>  'col-sm-3 control-label', 'for'=>'FormGroup'])); ?>

                             <!--<label class="col-sm-3 control-label" for="FormGroup">Tipo</label>-->
                             <div class="col-sm-6">
                                <?php echo e(Form::select('', [
                                   '-1' => '--Seleccione Opcion--',
                                   '1' => 'SOLO MOSTRAR MENSAJES',
                                   '2' => 'BLOQUEAR Y MOSTRAR MENSAJES',
                                   '3' => 'NO BLOQUEAR'],
                                   null, ['class' => 'form-control'])); ?>

                             </div>
                          </div>
                          <div class="form-group">
                            <?php echo e(Form::label('Unidad Org: ', '', ['class'=>'col-sm-3 control-label'])); ?>

                            <div class="col-sm-1">                                
                                <!--<input class="form-control"  id="text3">-->
                                <?php echo e(Form::text('', '', ['id'=>'text3', 'class'=>'form-control', 'readonly'=>'true'])); ?>                               
                            </div>
                            <div class="col-sm-5">
                               <!--jueves-->
                                <select class="form-control" placeholder="Buscar..."  name="searchText2" id="select1" onChange="IdUnidadOrg()">
                                   <option value="-1">--Seleccione opción--</option>
                                   <?php $__currentLoopData = $unidadOrganicas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $unidadOrganica): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                   <option value="<?php echo e($unidadOrganica->iddependencia); ?>"><?php echo e($unidadOrganica->depe_nombre); ?></option>
                                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <!--jueves-->                              
                            </div>
                          </div>
                          <?php echo $__env->make('tramite.administracion.bloques.search', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>                       
                      <?php echo e(Form::close()); ?>

                      <!--FINCUERPO--> 
                   </div>
               </div> 
            </div>
            <!--FINPANEL Registro-->  
            </div>
        </div>
    </div>
<script type="text/javascript">
    function IdUnidadOrg()
    {
       var seleccion=document.getElementById('select1');
       document.getElementById('text3').value=seleccion.options[seleccion.selectedIndex].value;        
    }                  
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sgd\resources\views\tramite\administracion\bloques.blade.php ENDPATH**/ ?>