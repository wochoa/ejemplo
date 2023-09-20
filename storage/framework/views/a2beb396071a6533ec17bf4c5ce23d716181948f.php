<style>td {padding: 0px 8px !important;}</style>
<div class="panel panel-info">
    <div class="mod_save_version modal fade" tabindex="-1" role="dialog" aria-labelledby="SelAnioModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content form-group">
                <br>
                <div class="text-center mb-4">
                    <img class="mb-4" src="<?php echo e(asset('img/logo.jpg')); ?>" alt="" width="72" height="72">
                    <h1 class="h3 mb-3 font-weight-normal">GOREHCO</h1>
                    <p>Firmar electronicamente y generar una version</p>
                </div>
                <div class="form-group col-xs-12 col-sm-6">
                    <div class="form-group col-xs-12 col-sm-12">
                        <?php echo e(Form::label('usuario', 'Usuario')); ?>

                        <?php echo e(Form::text('usuario', null , array('class' => 'form-control send reset', 'placeholder'=>"Usuario") )); ?>

                    </div>
                    <div class="form-group col-xs-12 col-sm-12">
                        <?php echo e(Form::label('password', 'Contraseña')); ?>

                        <?php echo e(Form::password('password', array('class' => 'form-control send reset', 'placeholder'=>"Contraseña") )); ?>

                    </div>
                    <div class="form-group col-xs-12 col-sm-12">
                        <?php echo e(Form::label('vers_cargo  ', 'Cargo')); ?>

                        <?php echo e(Form::select('vers_cargo',
                        [
                            'Residente de Obra'=>'Residente de Obra',
                            'Administrador de Contrato de Obra'=>'Administrador de Contrato de Obra',
                            'Supervisor de Obra'=>'Supervisor de Obra',
                            'Inspector de Obra'=>'Inspector de Obra',
                            'Evaluador de Proyecto'=>'Evaluador de Proyecto',
                            'Asistente administrativo'=>'Asistente administrativo',
                            'Especialista administrativo'=>'Especialista administrativo'
                            ],null, array('class' => 'form-control send reset') )); ?>

                    </div>
                </div>
                <div class="form-group col-xs-12 col-sm-6">
                    <?php echo e(Form::label('vers_observacion', 'Observaciones')); ?>

                    <?php echo e(Form::textarea('vers_observacion',null, array('class' => 'form-control send reset') )); ?>

                </div>
                <div class="form-group col-xs-12 col-sm-12">
                    <?php echo e(Form::hidden('id', null, array('class' => 'send'))); ?>

                    <?php echo e(Form::hidden('_token', csrf_token(), array('class' => 'send'))); ?>

                    <?php echo e(Form::button('Guardar', array('type' => 'button', 'class' => 'btn btn-warning btn_save_version'))); ?>

                    <?php echo e(Form::button('Cancelar', array('type' => 'button', 'class' => 'btn btn-danger btn_cancelar_version'))); ?>

                </div>
            </div>
        </div>
    </div>
    <div class="panel-heading text-center">
        <h3 class="panel-title">Presupuesto Analitico<a class="pull-right"><i class="glyphicon glyphicon-chevron-up"></i></a></h3>
    </div>
    <div id="analitico_content" class="panel-body">
        <div class="form-group col-md-12 mod_ad" style="display: none">
            <div class="form-groupcol-xs-12 col-sm-12 col-lg-6">
                <?php echo e(Form::label('ana_componente', 'Componente')); ?>

                <?php echo e(Form::select('ana_componente', $componentes, null , array('class' => 'form-control send reset', 'data-def'=>'<option value="%s" class="remove">%s - COMPONENTE DESHABILITADO</option>') )); ?>

            </div>
            <div class="col-xs-12 col-sm-12 col-lg-6">
                <?php echo e(Form::label('ana_especifca', 'Especifica')); ?>

                <?php echo e(Form::select('ana_especifca', $espeficicas, null , array('class' => 'form-control send reset', 'data-def'=>'<option value="%s" class="remove">%s - ESPECIFICA DESHABILITADA</option>') )); ?>

            </div>
            <div class="form-group col-xs-12 col-sm-4 col-lg-2">
                <?php echo e(Form::label('ana_monto', 'Monto Inicial')); ?>

                <?php echo e(Form::number('ana_monto', null, array('step'=>'any', 'class' => 'form-control send reset'))); ?>

            </div>
            <div class="form-group col-xs-12 col-sm-4 col-lg-2">
                <?php echo e(Form::label('ana_modificaciones', 'Modificaciones')); ?>

                <?php echo e(Form::number('ana_modificaciones', null, array('step'=>'any', 'class' => 'form-control send reset'))); ?>

            </div>
            <div class="form-group col-xs-12 col-sm-4 col-lg-8">
                <?php echo e(Form::label('ana_descricion', 'Descripcion')); ?>

                <?php echo e(Form::text('ana_descricion', null, array('class' => 'form-control send reset'))); ?>

            </div>
            <div class="form-group col-xs-12 col-sm-12 col-lg-12">
                <?php echo e(Form::hidden('ana_act_proy', $proyecto->proy_cod_siaf, array('class' => 'send'))); ?>

                <?php echo e(Form::hidden('analitico_id', null, array('class' => 'send'))); ?>

                <?php echo e(Form::hidden('_token', csrf_token(), array('class' => 'send'))); ?>

                <?php echo e(Form::button('Guardar', array('type' => 'button', 'class' => 'btn btn-warning btn_guardar'))); ?>

                <?php echo e(Form::button('Cancelar', array('type' => 'button', 'class' => 'btn btn-danger btn_cancelar'))); ?>

            </div>
        </div>
        <div class="form-group col-xs-12 col-sm-4 col-lg-3">
            <?php echo e(Form::label('version_id', 'Version')); ?>

            <select class="form-control send" id="version_id" name="version_id">
                <?php $__currentLoopData = $versiones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $version): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($id); ?>" data-observacion="<?php echo e($version[1]); ?>"><?php echo e($version[0]); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
        <div class="form-group col-xs-12 col-sm-4 col-lg-5">
            <?php echo e(Form::textarea('mostrar_observacion',null,array('disabled'=>true, 'style'=>'width: -webkit-fill-available; height: 70px'))); ?>

        </div>
        <div class="form-group col-xs-12 col-sm-4 col-lg-4">
            <?php echo e(Form::button('Agregar', array('type' => 'button', 'class' => 'btn btn-primary btn_agregar'))); ?>

            <button type="button" class="btn btn-primary btn_add_version "><span class="glyphicon glyphicon-save" aria-hidden="true"></span>  Guardar Version</button>
            <button type="button" class="btn btn-primary btn_print "><span class="glyphicon glyphicon-print" aria-hidden="true"></span>  Imprimir</button>
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
    $('#version_id').change(function(e) {
        e.preventDefault();
        $('[name=mostrar_observacion]').val($(this).find('option:selected').data('observacion'))
    });
    var btnAddVersion = $('.btn_add_version');
    var btnSaveVersion = $('.btn_save_version');
    var btnCancelVersion = $('.btn_cancelar_version');
    var modSaveVersion = $('.mod_save_version');
    btnAddVersion.click(function () {
        modSaveVersion.modal()
    });
    btnCancelVersion.click(function () {
        modSaveVersion.modal('toggle')
    });
    btnSaveVersion.click(function () {

        validate = true;
        var dato = modSaveVersion.find('.send')
        var cont = 0;
        var envio = {};
        requiredFields =['usuario','password','vers_cargo','vers_observacion'];
        dato.each(function () {
            if ($(this)["0"].reportValidity()) {
                etiqueta = "[name=" + this.name + "]";
                var si =  requiredFields.indexOf(this.name)>=0&&!($(etiqueta).val()<0||$(etiqueta).val()==''||$(etiqueta).val()==null||$(etiqueta).val()==undefined);
                if (requiredFields.indexOf(this.name)<0) {

                    if ($(etiqueta).prop("type") != "radio")
                        envio[this.name] = $(etiqueta).val();
                    else
                        envio[this.name] = $(etiqueta + ":checked").val();
                }else if(si)
                {
                    if ($(etiqueta).prop("type") != "radio")
                        envio[this.name] = $(etiqueta).val();
                    else
                        envio[this.name] = $(etiqueta + ":checked").val();
                }
                else
                    validate=false;
            } else {
                validate = false;
                //return false;
            }
        });
        envio['option']='new_version';
        if (validate) {

            $.ajax({
                type: "POST",
                url: '<?php echo e(route('proyectos.{act_proy}.analitico.store',$proyecto->proy_cod_siaf )); ?>',
            data: envio,
            dataType: 'json',
            success: function (d) {
                if (d.ok) {
                    modSaveVersion.modal('toggle');
                    showTable();
                }
                else
                    alert(d.msg);
            },
            error: function (d) {
                //console.log(d);
            }
        });

        }else
            alert('Verifique los datos ingresados');
    });

    $('#analitico_content').on('click', '.btn_print',function () {
        ruta = '<?php echo e(route('proyectos.{act_proy}.analitico.index', [$proyecto->proy_cod_siaf])); ?>?option=print&version=%s';
        window.open(ruta.replace(/%s/g, $('[name=version_id]').val()), 'Popup', "height=900,width=1200,scrollTo,resizable=1,scrollbars=1,location=0")
    });
</script>
<?php $__env->stopPush(); ?><?php /**PATH C:\xampp\htdocs\sgd\resources\views\proyectos\analitico\analitico.blade.php ENDPATH**/ ?>