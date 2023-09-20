<?php $__env->startSection('tabContent'); ?>
    <div class="panel-body" id="certificar_module">
        <div id="mod_ad_p_c_i" class="form-group col-md-12 mod_ad" style="display: none">
            <div class="col-md-12">
                <div class="row">
                    <div class="form-group col-xs-6 col-sm-3 col-lg-2">
                        <?php echo e(Form::label('solc_certificado', 'Certificacion')); ?>

                        <?php echo e(Form::number('solc_certificado', null, array('class' => 'form-control send reset'))); ?>

                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <div class="form-group col-xs-12 col-sm-6 col-lg-4">
                        <?php echo e(Form::label('solc_oficina', 'Oficina')); ?>

                        <?php echo e(Form::text('solc_oficina', null , array('class' => 'form-control send reset') )); ?>

                    </div>
                    <div class="form-group col-xs-12 col-sm-6 col-lg-4">
                        <?php echo e(Form::label('solc_documento', 'Nro Documento')); ?>

                        <?php echo e(Form::text('solc_documento', null, array('class' => 'form-control send reset'))); ?>

                    </div>
                    <div class="form-group col-xs-6 col-sm-6 col-lg-2">
                        <?php echo e(Form::label('solc_fecha', 'Fecha')); ?>

                        <?php echo e(Form::date('solc_fecha', null, array('class' => 'form-control send reset'))); ?>

                    </div>
                    <div class="form-group col-xs-6 col-sm-6 col-lg-2">
                        <?php echo e(Form::label('solc_tipo_gasto', 'Tipo de Gasto')); ?>

                        <?php echo e(Form::select('solc_tipo_gasto', [1=>'Gasto Corriente', 2=>'Gasto de Capital'],null, array('class' => 'form-control send reset'))); ?>

                    </div>
                    <div class="form-group col-xs-12 col-sm-6 col-lg-6">
                        <?php echo e(Form::label('solc_objeto', 'Objeto')); ?>

                        <?php echo e(Form::text('solc_objeto', null , array('class' => 'form-control send reset') )); ?>

                    </div>
                    <div class="form-group col-xs-12 col-sm-6 col-lg-6">
                        <?php echo e(Form::label('solc_tipo_proceso_seleccion', 'Tipo de Seleccion')); ?>

                        <?php echo e(Form::text('solc_tipo_proceso_seleccion', null , array('class' => 'form-control send reset') )); ?>

                    </div>
                    <div class="form-group col-xs-12 col-sm-6 col-lg-6">
                        <?php echo e(Form::label('solc_otros', 'Otros')); ?>

                        <?php echo e(Form::text('solc_otros', null , array('class' => 'form-control send reset') )); ?>

                    </div>
                    <div class="form-group col-xs-12 col-sm-6 col-lg-6">
                        <?php echo e(Form::label('solc_justificacion', 'Justificacion')); ?>

                        <?php echo e(Form::text('solc_justificacion', null , array('class' => 'form-control send reset') )); ?>

                    </div>
                    <div class="form-group col-xs-12 col-sm-6 col-lg-6">
                        <?php echo e(Form::label('solc_doc_priorizacion', 'Doc Priorizacion')); ?>

                        <?php echo e(Form::text('solc_doc_priorizacion', null , array('class' => 'form-control send reset') )); ?>

                    </div>
                    <div class="form-group col-xs-12 col-sm-6 col-lg-6">
                        <?php echo e(Form::label('solc_id_clasif', 'Especifica')); ?>

                        <?php echo e(Form::select('solc_id_clasif', $especificas,null, array('class' => 'form-control send reset'))); ?>

                    </div>
                </div>
            </div>
            <div class="form-group col-xs-6 col-sm-3 col-lg-2">
                <?php echo e(Form::label('solc_pia', 'PIA')); ?>

                <?php echo e(Form::number('solc_pia', null, array('class' => 'form-control send reset', 'readonly'=>1))); ?>

            </div>
            <div class="form-group col-xs-6 col-sm-3 col-lg-2">
                <?php echo e(Form::label('solc_pim', 'PIM')); ?>

                <?php echo e(Form::number('solc_pim', null, array('class' => 'form-control send reset', 'readonly'=>1))); ?>

            </div>
            <div class="form-group col-xs-6 col-sm-3 col-lg-2">
                <?php echo e(Form::label('solc_certificacion', 'Monto Certificado')); ?>

                <?php echo e(Form::number('solc_certificacion', null, array('class' => 'form-control send reset', 'readonly'=>1))); ?>

            </div>
            <div class="form-group col-xs-6 col-sm-3 col-lg-2">
                <?php echo e(Form::label('solc_saldo_por_certificar', 'Saldo por Certificar')); ?>

                <?php echo e(Form::number('solc_saldo_por_certificar', null, array('class' => 'form-control send reset', 'readonly'=>1))); ?>

            </div>
            <div class="form-group col-xs-6 col-sm-3 col-lg-2">
                <?php echo e(Form::label('solc_monto_solicitado', 'Monto Solicitado')); ?>

                <?php echo e(Form::number('solc_monto_solicitado', null, array('class' => 'form-control send reset'))); ?>

            </div>
            <div class="form-group col-xs-12 col-sm-12 col-lg-12">
                <?php echo e(Form::hidden('id', null, array('class' => 'send'))); ?>

                <?php echo e(Form::hidden('solc_anio', null, array('class' => 'send'))); ?>

                <?php echo e(Form::hidden('solc_act_proy', null, array('class' => 'send'))); ?>

                <?php echo e(Form::hidden('solc_sec_func', null, array('class' => 'send'))); ?>

                <?php echo e(Form::hidden('solc_fuente_financiamiento', null, array('class' => 'send'))); ?>

                <?php echo e(Form::hidden('_token', csrf_token(), array('class' => 'send'))); ?>

                <?php echo e(Form::button('Guardar', array('type' => 'button', 'class' => 'btn btn-warning btn_guardar'))); ?>

                <?php echo e(Form::button('Cancelar', array('type' => 'button', 'class' => 'btn btn-danger btn_cancelar'))); ?>

            </div>
        </div>
        <div id="mod_ad_p_c_i_btn" class="form-group col-md-12 mod_ad_btn">
            <!--<?php echo e(Form::button('Agregar', array('type' => 'button', 'class' => 'btn btn-primary btn_agregar'))); ?>-->

        </div>
        <div class="form-group col-md-12 load_table" id="p_c_i_table" style="background-color:#fff"></div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
<script>
    $('#certificar_module').saveModule({
        rList: '<?php echo e(route('proyectos.herramientas.certificar.index',[$proy,$anio] )); ?>?listar=1',
        rDelete:'<?php echo e(route('proyectos.herramientas.certificar.destroy',[$proy,$anio,'%s'])); ?>',
        rSave:'<?php echo e(route('proyectos.herramientas.certificar.store',[$proy,$anio] )); ?>'
    });
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.proyectos.herramientas.tab_certificar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sgd\resources\views\proyectos\herramientas\certificar\index.blade.php ENDPATH**/ ?>