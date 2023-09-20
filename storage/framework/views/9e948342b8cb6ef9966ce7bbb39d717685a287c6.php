<?php $__env->startSection('titulo'); ?><?php echo e('Listado de Modificatorias'); ?><?php $__env->stopSection(); ?>
<?php $__env->startSection('tabContent'); ?>
    <div class="panel-body" id="modificar_module">
        <div class="mod_ad modal fade" tabindex="-1" role="dialog" aria-labelledby="SelAnioModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content form-group col-md-12 ">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="form-group col-xs-12 col-sm-6">
                                <?php echo e(Form::label('modif_titulo', 'Titulo')); ?>

                                <?php echo e(Form::text('modif_titulo', null , array('class' => 'form-control send reset') )); ?>

                            </div>
                            <div class="form-group col-xs-6 col-sm-6">
                                <?php echo e(Form::label('modif_fecha_aprovacion', 'Fecha')); ?>

                                <?php echo e(Form::date('modif_fecha_aprovacion', null, array('class' => 'form-control send reset'))); ?>

                            </div>
                        </div>
                    </div>
                    <div class="form-group col-xs-12 col-sm-12 col-lg-12">
                        <?php echo e(Form::hidden('id', null, array('class' => 'send'))); ?>

                        <?php echo e(Form::hidden('_token', csrf_token(), array('class' => 'send'))); ?>

                        <?php echo e(Form::button('Guardar', array('type' => 'button', 'class' => 'btn btn-warning btn_guardar'))); ?>

                        <?php echo e(Form::button('Cancelar', array('type' => 'button', 'class' => 'btn btn-danger btn_cancelar'))); ?>

                    </div>
                </div>
            </div>
        </div>
        <div id="mod_ad_p_c_i_btn" class="form-group col-md-12 mod_ad_btn">
        <?php echo e(Form::button('Agregar', array('type' => 'button', 'class' => 'btn btn-primary btn_agregar'))); ?>


        </div>
        <div class="col-md-12 load_table" id="p_c_i_table" style="background-color:#fff"></div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
<script>
    $('#modificar_module').saveModule({
        rList:'<?php echo e(route('proyectos.herramientas.{anio}.modificar.index',[$anio] )); ?>?listar=1',
        rDelete:'<?php echo e(route('proyectos.herramientas.{anio}.modificar.destroy',[$anio,'%s'])); ?>',
        rSave:'<?php echo e(route('proyectos.herramientas.{anio}.modificar.store',[$anio] )); ?>',
        token:'<?php echo e(csrf_token()); ?>'
    });
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.proyectos.herramientas.tab_modificar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sgd\resources\views\proyectos\herramientas\modificar\modificatorias\index.blade.php ENDPATH**/ ?>