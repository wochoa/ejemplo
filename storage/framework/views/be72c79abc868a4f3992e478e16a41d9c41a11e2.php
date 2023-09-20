 
<?php $__env->startSection('titulo'); ?> Nuevo| Tupa 
<?php $__env->stopSection(); ?> 
<?php $__env->startSection('contenido'); ?>

<div class="container">
    <div class="row">

        <div class="col-sm-12">
            <!--tapmenu-->
            <div class="container">

                <ul class="nav nav-tabs">
                    <li class="active"><a href="tupa">Explorar Tupa</a></li>
                    <li><a href="tupa/create">Nuevo Tupa</a></li>
                </ul>
            </div>
            <!--fintapmenu-->

            <!--PANEL Registro-->
            <div class="panel-group">
                <div class="panel panel-primary">
                    <div class="panel-heading">TUPA::[Búsqueda Datos]</div>
                    <div class="panel-body">

                        <div class="col-md-12">

                            <!--CUERPO-->
                            <!--<form class="form-horizontal">-->
                            <?php echo e(Form::open(array('action' => 'Tramite\TipoDocumentoController@store', 'class' => 'form-horizontal', 'method' =>'POST'))); ?>

                            <?php echo e(csrf_field()); ?>

                               
                                <div class="form-group">
                                    <?php echo e(Form::label('Descripción: ', '', ['class'=>'col-sm-3 control-label', 'for'=>'FormGroup'])); ?><!--
                                    <label class="col-sm-3 control-label" for="FormGroup">Descripción</label>-->
                                    <div class="col-sm-7">
                                        <?php echo e(Form::text('descripcion', '', ['id' =>  'FormGroup', 'class' => 'form-control', 'required' => 'required'])); ?>

                                        <!--<input type="text" class="form-control text-uppercase" id="FormGroup" name="descripcion">-->
                                    </div>
                                </div>
                                <div class="form-group">
                                    <?php echo e(Form::label('Periodo: ', '', ['class'=>'col-sm-3 control-label', 'for'=>'FormGroup'])); ?>

                                    <!--<label class="col-sm-3 control-label" for="FormGroup">Periodo</label>-->
                                    <div class="col-sm-7">
                                        <?php echo e(Form::text('periodo', '', ['id' =>  'FormGroup', 'class' => 'form-control', 'required' => 'required'])); ?>

                                        <!--<input type="text" class="form-control text-uppercase" id="FormGroup" name="descripcionAbreviado">-->
                                    </div>
                                </div>
                                <div class="form-group">
                                    <?php echo e(Form::label('', '', ['class'=>'col-sm-3 control-label', 'for'=>'FormGroup'])); ?>    
                                    <div class="col-sm-7">
                                       <?php echo e(Form::button('<span class="glyphicon glyphicon-ok-circle"> Registrar</span>',
                                       array('class'=>'btn btn-primary','type'=>'submit'))); ?>

                                        <!--<button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-ok-circle"></span> Registrar</button>-->
                                    </div>
                                </div>

                                <!--FINCUERPO-->
                            <?php echo e(Form::close()); ?>

                        </div>
                    </div>

                </div>
            </div>
            <!--FINPANEL Registro-->
        </div>
    </div>
</div>

<!--ALERTA DIALOGO-->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sgd\resources\views\tramite\catalogos\tupa.blade.php ENDPATH**/ ?>