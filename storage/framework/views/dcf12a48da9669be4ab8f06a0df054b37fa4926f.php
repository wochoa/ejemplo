<?php $__env->startSection('titulo'); ?>
    Nuevo| Presupuesto Modificado
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contenido'); ?>
<div class="container-fluid">
  <?php echo Form::open(array('url' => 'poi/presupuestomod', 'class' => 'form-horizontal', 'method' =>'POST')); ?> 
   <?php echo e(csrf_field()); ?>

    <!--PANEL Registro-->
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-10 col-lg-8 col-md-offset-1 col-lg-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">MODIFICAR PRESUPUESTO::[Nuevo Registro]</div>
                <div class="panel-body">
                    <!--CUERPO-->
                    <div class="form-group">
                        <?php echo e(Form::label('Unidad Ejecutora:* ', '', ['class' => 'col-sm-3 control-label'])); ?>

                        <div class="col-sm-6">                            
                            <select class="form-control" name="unidad_ejecutora" id="unidad_ejecutora">
                                <?php $__currentLoopData = $unidades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $unidad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($unidad->codigo); ?>"><?php echo e($unidad->nombre); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>                            
                        </div>
                    </div>
                    <div class="form-group">
                        <?php echo e(Form::label('POI:* ', '', ['class' => 'col-sm-3 control-label'])); ?>

                        <div class="col-sm-6">
                            <select class="form-control" name="poi" id="poi">
                                <?php $__currentLoopData = $pois; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $poi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($poi->poi_codigo); ?>" selected><?php echo e($poi->ofi_nombre); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <?php echo e(Form::label('Estructura Funcional:* ', '', ['class' => 'col-sm-3 control-label'])); ?>

                        <div class="col-sm-6">
                            <select class="form-control" name="estructura_funcional_prog_pres" id="estructura_funcional_prog_pres">
                                <option value>--- Seleccione Opción ---</option>
                                <?php $__currentLoopData = $estructuras; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $estructura): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($estructura->codigo); ?>"><?php echo e($estructura->est1.'.'.$estructura->est2.'.'.$estructura->est3.'.'.$estructura->est4.'.'.$estructura->est5.'.'.$estructura->est6.'.'.$estructura->est7.'.'.$estructura->est8); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <?php echo e(Form::label('Clasificador Gasto:* ', '', ['class' => 'col-sm-3 control-label'])); ?>

                        <div class="col-sm-6">
                            <select class="form-control autocompletable" name="clasificador_gasto" id="clasificador_gasto">
                                <option value>--- Seleccione Opción ---</option>
                                <?php $__currentLoopData = $clasificador; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $clasificado): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($clasificado->codigo); ?>"><?php echo e($clasificado->clasificador.'-'.$clasificado->descripcion); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <?php echo e(Form::label('Monto:* ', '', ['class' => 'col-sm-3 control-label'])); ?>

                        <div class="col-sm-6">
                            <?php echo e(form::number('pres_mod_monto', '', ['class' =>'form-control', 'id'  =>'pres_mod_monto'])); ?>

                        </div>
                    </div>
                    <div class="form-group">
                        <?php echo e(Form::label('Fuente Financiamiento:* ', '', ['class' => 'col-sm-3 control-label'])); ?>

                        <div class="col-sm-6">
                            <select class="form-control" name="poi_pres_fuente_financiamiento" id="poi_pres_fuente_financiamiento">
                                <option value>--- Seleccione Opción ---</option>
                                <option value="1"> 1</option>
                                <option value="2"> 2</option>
                                <option value="3"> 3</option>
                                <option value="4"> 4</option>
                                <option value="5"> 5</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <?php echo e(Form::label('Año:* ', '', ['class' => 'col-sm-3 control-label'])); ?>

                        <div class="col-sm-6">
                            <?php echo e(form::number('pres_mod_anio', date('Y'), ['class' =>'form-control', 'id'  =>'pres_mod_anio'])); ?>

                        </div>
                    </div> 
                    
                    <!--FINCUERPO-->
                    <div class="form-group">
                        <?php echo e(Form::label('','', ['class'=>'col-sm-3 control-label'])); ?>

                        <div class="col-sm-5">
                            <?php echo e(Form::button('<span class="glyphicon glyphicon-floppy-save"> Registrar</span>',array('class'=>'btn btn-primary','type'=>'submit', 'style'=>'padding-bottom: 10px;'))); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--FINPANEL Registro-->
  <?php echo Form::close(); ?>

</div>   


<!--ALERTA DIALOGO-->
<script>
    $(document).ready(function() {
      $(".autocompletable").select2();
    });
</script>

<!--FIN ALERTA DIALOGO-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.plantillaPoi', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sgd\resources\views\poi\PresupuestoMod.blade.php ENDPATH**/ ?>