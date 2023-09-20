<style>td {padding: 0px 8px !important;}</style>
<div class="panel panel-info">
    <div class="panel-heading text-center">
        <h3 class="panel-title">Presupuesto Analitico<a class="pull-right"><i class="glyphicon glyphicon-chevron-up"></i></a></h3>
    </div>
    <div id="analitico_content" class="panel-body">
        <div class="form-group col-md-12 mod_ad" style="display: none">
            <div class="form-groupcol-xs-12 col-sm-12 col-lg-6">
                <?php echo e(Form::label('asig_componente', 'Componente')); ?>

                <?php echo e(Form::select('asig_componente', $componentes, null , array('class' => 'form-control send reset', 'data-def'=>'<option value="%s" class="remove">%s - COMPONENTE DESHABILITADO</option>') )); ?>

            </div>
            <div class="col-xs-12 col-sm-12 col-lg-6">
                <?php echo e(Form::label('asig_oficina', 'Oficina')); ?>

                <?php echo e(Form::select('asig_oficina', $oficinas, null , array('class' => 'form-control send reset') )); ?>

            </div>
            <div class="col-xs-12 col-sm-12 col-lg-6">
                <?php echo e(Form::label('asig_anio', 'Año')); ?>

                <?php echo e(Form::select('asig_anio', $anios, null , array('class' => 'form-control send reset') )); ?>

            </div>
            <div class="form-group col-xs-12 col-sm-12 col-lg-12">
                <?php echo e(Form::hidden('asig_act_proy', $proyecto->proy_cod_siaf, array('class' => 'send'))); ?>

                <?php echo e(Form::hidden('analitico_id', null, array('class' => 'send'))); ?>

                <?php echo e(Form::hidden('_token', csrf_token(), array('class' => 'send'))); ?>

                <?php echo e(Form::button('Guardar', array('type' => 'button', 'class' => 'btn btn-warning btn_guardar'))); ?>

                <?php echo e(Form::button('Cancelar', array('type' => 'button', 'class' => 'btn btn-danger btn_cancelar'))); ?>

            </div>
        </div>
        <div class="form-group col-md-12 mod_ad_btn">
            <?php echo e(Form::button('Agregar', array('type' => 'button', 'class' => 'btn btn-primary btn_agregar'))); ?>

        </div>
        <div class="form-group col-md-12 load_table" style="background-color:#fff"></div>
    </div>
</div>
<?php $__env->startPush('scripts'); ?>
<script>
    modulo = $('#analitico_content').saveModule({
        id: '[name=\'analitico_id\']',
        rList: '<?php echo e(route('proyectos.{act_proy}.analitico.index',$proyecto->proy_cod_siaf )); ?>',
        rDelete: '<?php echo e(route('proyectos.{act_proy}.analitico.destroy',[$proyecto->proy_cod_siaf,'%s'])); ?>',
        rSave:'<?php echo e(route('proyectos.{act_proy}.analitico.store',$proyecto->proy_cod_siaf )); ?>',
        requiredFields:['ana_componente','ana_monto'],
        modal:false
    });
</script>
<?php $__env->stopPush(); ?><?php /**PATH C:\xampp\htdocs\sgd\resources\views\proyectos\proyecto\asignar.blade.php ENDPATH**/ ?>