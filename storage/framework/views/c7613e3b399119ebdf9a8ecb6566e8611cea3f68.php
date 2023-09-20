<?php $__env->startSection('tabContent'); ?>
    <div class="panel-body" id="certificar_module">
        <div class="mod_ad modal fade" tabindex="-1" role="dialog" aria-labelledby="SelAnioModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content form-group col-md-12 ">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="form-group col-xs-6 col-sm-3">
                                <?php echo e(Form::label('solc_certificado', 'Certificacion')); ?>

                                <?php echo e(Form::number('solc_certificado', null, array('class' => 'form-control send reset','required'=>1))); ?>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="form-group col-xs-6 col-sm-6">
                                <?php echo e(Form::label('solc_tipo_gasto', 'Tipo de Gasto')); ?>

                                <?php echo e(Form::select('solc_tipo_gasto', [1=>'Gasto Corriente', 2=>'Gasto de Capital'],null, array('class' => 'form-control send reset'))); ?>

                            </div>
                            <div class="form-group col-xs-12 col-sm-6">
                                <?php echo e(Form::label('solc_objeto', 'Objeto')); ?>

                                <?php echo e(Form::text('solc_objeto', null , array('class' => 'form-control send reset') )); ?>

                            </div>
                            <div class="form-group col-xs-12 col-sm-6">
                                <?php echo e(Form::label('solc_tipo_proceso_seleccion', 'Tipo de Seleccion')); ?>

                                <?php echo e(Form::text('solc_tipo_proceso_seleccion', null , array('class' => 'form-control send reset') )); ?>

                            </div>
                            <div class="form-group col-xs-12 col-sm-6">
                                <?php echo e(Form::label('solc_otros', 'Otros')); ?>

                                <?php echo e(Form::text('solc_otros', null , array('class' => 'form-control send reset') )); ?>

                            </div>
                            <div class="form-group col-xs-12 col-sm-6">
                                <?php echo e(Form::label('solc_justificacion', 'Justificacion')); ?>

                                <?php echo e(Form::text('solc_justificacion', null , array('class' => 'form-control send reset') )); ?>

                            </div>
                            <div class="form-group col-xs-12 col-sm-6">
                                <?php echo e(Form::label('solc_doc_priorizacion', 'Doc Priorizacion')); ?>

                                <?php echo e(Form::text('solc_doc_priorizacion', null , array('class' => 'form-control send reset') )); ?>

                            </div>
                        </div>
                    </div>
                    <div class="form-group col-xs-12 col-sm-12">
                <?php echo e(Form::hidden('id', null, array('class' => 'send'))); ?>

                <?php echo e(Form::hidden('documento_id', $doc, array('class' => 'send'))); ?>

                <?php echo e(Form::hidden('_token', csrf_token(), array('class' => 'send'))); ?>

                <?php echo e(Form::button('Guardar', array('type' => 'button', 'class' => 'btn btn-warning btn_guardar'))); ?>

                <?php echo e(Form::button('Cancelar', array('type' => 'button', 'class' => 'btn btn-danger btn_cancelar'))); ?>

            </div>
                </div>
            </div>
        </div>
        <div class="form-group col-md-12 mod_ad_btn">
        <?php echo e(Form::button('Agregar', array('type' => 'button', 'class' => 'btn btn-primary btn_agregar'))); ?>


        </div>
        <div class="col-md-12 load_table" id="p_c_i_table" style="background-color:#fff"></div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
<script>
    $('#certificar_module').saveModule({
        rList: '<?php echo e(route('proyectos.herramientas.certificar.solicitud.index',[$anio,$doc] )); ?>?listar=1',
        rDelete:'<?php echo e(route('proyectos.herramientas.certificar.solicitud.destroy',[$anio,$doc,'%s'])); ?>',
        rSave:'<?php echo e(route('proyectos.herramientas.certificar.solicitud.store',[$anio,$doc] )); ?>',
        rPrint:'<?php echo e(route('proyectos.herramientas.certificar.print',[$doc,'%s'] )); ?>',
        token:'<?php echo e(csrf_token()); ?>'
    });
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.proyectos.herramientas.tab_documento', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sgd\resources\views\proyectos\herramientas\certificar\solicitud\index.blade.php ENDPATH**/ ?>