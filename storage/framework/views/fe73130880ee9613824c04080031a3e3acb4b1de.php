<?php $__env->startSection('tabContent'); ?>
        <div id="analitico_content" class="panel-body">
            <div class="mod_ad modal fade" tabindex="-1" role="dialog" aria-labelledby="SelAnioModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content form-group col-md-12 ">
                        <div class="form-group col-xs-6 col-sm-4">
                            <?php echo e(Form::label('comp_programa', 'Programa')); ?>

                            <?php echo e(Form::select('comp_programa', $programas, null , array('class' => 'form-control send  reset') )); ?>

                        </div>
                        <div class="form-group col-xs-6 col-sm-4">
                            <?php echo e(Form::label('comp_prod_proy', 'Prod / Proy')); ?>

                            <?php echo e(Form::text('comp_prod_proy', $proyecto->proy_cod_siaf, array('class' => 'form-control send','readonly'=>true))); ?>

                        </div>
                        <div class="form-group col-xs-6 col-sm-4">
                            <?php echo e(Form::label('comp_act_al_obra', 'Act / Al / Obra')); ?>

                            <?php echo e(Form::text('comp_act_al_obra', null, array('class' => 'form-control send'))); ?>

                        </div>
                        <div class="form-group col-xs-6 col-sm-4">
                            <?php echo e(Form::label('comp_funcion', 'Funcion')); ?>

                            <?php echo e(Form::select('comp_funcion', $funciones_plan, null , array('class' => 'form-control send  reset') )); ?>

                        </div>
                        <div class="form-group col-xs-6 col-sm-4">
                            <?php echo e(Form::label('comp_division_funcional', 'Division Funcional')); ?>

                            <?php echo e(Form::select('comp_division_funcional', $divisiones_funcionales, null , array('class' => 'form-control send  reset') )); ?>

                        </div>
                        <div class="form-group col-xs-6 col-sm-4">
                            <?php echo e(Form::label('comp_grupo_funcional', 'Grupo Funcional')); ?>

                            <?php echo e(Form::select('comp_grupo_funcional', $grupos_funcionales, null , array('class' => 'form-control send  reset') )); ?>

                        </div>
                        <div class="form-group col-xs-6 col-sm-4">
                            <?php echo e(Form::label('comp_meta', 'Meta')); ?>

                            <?php echo e(Form::text('comp_meta', null, array('class' => 'form-control send'))); ?>

                        </div>
                        <div class="form-group col-xs-6 col-sm-4">
                            <?php echo e(Form::label('comp_finalidad', 'Finalidad')); ?>

                            <?php echo e(Form::text('comp_finalidad', null, array('class' => 'form-control send'))); ?>

                        </div>
                        <div class="form-group col-xs-6 col-sm-4">
                            <?php echo e(Form::label('comp_monto', 'Monto Total')); ?>

                            <?php echo e(Form::number('comp_monto', null, array('step'=>'any', 'class' => 'form-control send  reset'))); ?>

                        </div>
                        <div class="form-group col-xs-12 col-sm-12">
                            <?php echo e(Form::label('comp_nombre', 'Descripcion')); ?>

                            <?php echo e(Form::text('comp_nombre', null, array('class' => 'form-control send  reset'))); ?>

                        </div>
                        <div class="form-group col-xs-12 col-sm-12">
                            <?php echo e(Form::hidden('id', null, array('class' => 'send'))); ?>

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
            <div class="form-group col-md-12 load_table" style="background-color:#fff"></div>
        </div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('style'); ?>
<style>
    #analitico_content .mod_ad #comp_programa optgroup[label='Inactivo']{background-color: #ff3e3e;}
</style>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('scripts'); ?>
<script>
    $('#analitico_content').saveModule({
        rList: '<?php echo e(route('proyectos.plan.componente.list',$proyecto->proy_cod_siaf )); ?>',
        rDelete: '<?php echo e(route('proyectos.{proy}.plan.componente.destroy',[$proyecto->idproy_proyecto,'%s'])); ?>',
        rSave:'<?php echo e(route('proyectos.{proy}.plan.componente.store',$proyecto->idproy_proyecto )); ?>',
        token:'<?php echo e(csrf_token()); ?>'
    });
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.proyectos.tab_edit', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sgd\resources\views\proyectos\plan\componente\componente.blade.php ENDPATH**/ ?>