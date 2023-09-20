<?php $__env->startSection('tabContent'); ?>
        <div class="panel-body">
            <?php if(count($errors) > 0): ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            <?php endif; ?>
           
                <div class="row">
                    <div class="form-group col-xs-12 col-sm-12 col-lg-12">
                        <?php echo e(Form::label('proy_nombre', 'Nombre del Proyecto')); ?>

                        <?php echo e(Form::textarea('proy_nombre', $proyecto->proy_nombre, array('class' => 'form-control'.($errors->has('proy_nombre') ? ' has-error' : ''), 'size' => '30x3'))); ?>

                    </div>
                    <div class="form-group col-md-12">
                        <div class="form-group col-xs-6 col-sm-4 col-lg-3">
                            <?php echo e(Form::label('proy_cod_snip', 'Codigo SNIP')); ?>

                            <?php echo e(Form::text('proy_cod_snip', $proyecto->proy_cod_snip, array('class' => 'form-control'.($errors->has('proy_cod_snip') ? ' has-error' : '')))); ?>

                        </div>
                        <div class="form-group col-xs-6 col-sm-4 col-lg-3">
                            <?php echo e(Form::label('proy_cod_siaf', 'Codigo SIAF')); ?>

                            <?php echo e(Form::text('proy_cod_siaf', $proyecto->proy_cod_siaf, array('class' => 'form-control'.($errors->has('proy_cod_siaf') ? ' has-error' : '')))); ?>

                        </div>
                        <div class="form-group col-xs-6 col-sm-4 col-lg-3">
                            <?php echo e(Form::label('funcion_id', 'Funcion')); ?>

                            <?php echo e(Form::select('funcion_id', $funciones,$proyecto->funcion_id , array('class' => 'form-control'.($errors->has('funcion_id') ? ' has-error' : '')) )); ?>

                        </div>
                        <div class="form-group col-xs-6 col-sm-4 col-lg-3">
                            <?php echo e(Form::label('proy_fte_fto', 'FFT')); ?>

                            <?php echo e(Form::text('proy_fte_fto', $proyecto->proy_fte_fto, array('class' => 'form-control'.($errors->has('proy_fte_fto') ? ' has-error' : '')))); ?>

                        </div>
                        <div class="form-group col-xs-6 col-sm-4 col-lg-3">
                            <?php echo e(Form::label('proy_beneficiarios', 'Beneficiarios')); ?>

                            <?php echo e(Form::text('proy_beneficiarios', $proyecto->proy_beneficiarios, array('class' => 'form-control'.($errors->has('proy_beneficiarios') ? ' has-error' : '')))); ?>

                        </div>
                        <div class="form-group col-xs-6 col-sm-4 col-lg-3">
                            <?php echo e(Form::label('proy_localidad', 'Localidad')); ?>

                            <?php echo e(Form::text('proy_localidad', $proyecto->proy_localidad, array('class' => 'form-control'.($errors->has('proy_localidad') ? ' has-error' : '')))); ?>

                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <div class="form-group col-xs-6 col-sm-4 col-lg-3">
                            <?php echo e(Form::label('proy_perfil_viable', 'Perfil Viable')); ?>

                            <?php echo e(Form::number('proy_perfil_viable', $proyecto->proy_perfil_viable, array('step'=>'any', 'class' => 'form-control'.($errors->has('proy_perfil_viable') ? ' has-error' : '')))); ?>

                        </div>
                        <div class="form-group col-xs-6 col-sm-4 col-lg-3">
                            <?php echo e(Form::label('proy_snip15', 'ET FR SNIP 15')); ?>

                            <?php echo e(Form::number('proy_snip15', $proyecto->proy_snip15, array('step'=>'any', 'class' => 'form-control'.($errors->has('proy_snip15') ? ' has-error' : '')))); ?>

                        </div>
                        <div class="form-group col-xs-6 col-sm-4 col-lg-3">
                            <?php echo e(Form::label('proy_snip16', 'Modificaciones SNIP 16')); ?>

                            <?php echo e(Form::number('proy_snip16', $proyecto->proy_snip16, array('step'=>'any', 'class' => 'form-control'.($errors->has('proy_snip16') ? ' has-error' : '')))); ?>

                        </div>
                        <div class="form-group col-xs-6 col-sm-4 col-lg-3">
                            <?php echo e(Form::label('proy_verificacion_viabilidad', 'Verificacion de Viabilidad')); ?>

                            <?php echo e(Form::text('proy_verificacion_viabilidad', $proyecto->proy_verificacion_viabilidad, array('class' => 'form-control'.($errors->has('proy_verificacion_viabilidad') ? ' has-error' : '')))); ?>

                        </div>
                        <div class="form-group col-xs-6 col-sm-4 col-lg-3">
                            <?php echo e(Form::label('proy_modificaciones_sin_evaluacion', 'modificaciones sin evaluacion')); ?>

                            <?php echo e(Form::text('proy_modificaciones_sin_evaluacion', $proyecto->proy_modificaciones_sin_evaluacion, array('class' => 'form-control'.($errors->has('proy_modificaciones_sin_evaluacion') ? ' has-error' : '')))); ?>

                        </div>
                        <div class="form-group col-xs-6 col-sm-4 col-lg-3">
                            <?php echo e(Form::label('proy_fech_registro_perfil', 'Fecha de Registro del Perfil (*)')); ?>

                            <?php echo e(Form::date('proy_fech_registro_perfil', $proyecto->proy_fech_registro_perfil, array('class' => 'form-control'.($errors->has('proy_fech_registro_perfil') ? ' has-error' : '')))); ?>

                        </div>
                        <div class="form-group col-xs-6 col-sm-4 col-lg-3">
                            <?php echo e(Form::label('proy_oficina', 'OFICINA A CARGO')); ?>

                            <?php echo e(Form::select('proy_oficina', $oficinas, $proyecto->proy_oficina , array('class' => 'form-control'.($errors->has('proy_oficina') ? ' has-error' : '')) )); ?>

                        </div>
                        <div class="form-group col-xs-12 col-sm-12 col-lg-9">
                            <?php echo e(Form::label('proy_etiquetas', 'Etiquetas')); ?>

                            <?php echo e(Form::text('proy_etiquetas', 'D.U.', array('class' => 'form-control'.($errors->has('proy_modificaciones_sin_evaluacion') ? ' has-error' : '')))); ?>

                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <div class="form-group col-xs-6 col-sm-4 col-lg-3">
                            <?php echo e(Form::label('proy_pip_actualizado', 'Monto PIP Act')); ?>

                            <?php echo e(Form::number('proy_pip_actualizado', $proyecto->proy_pip_actualizado, array('step'=>'any', 'class' => 'form-control'.($errors->has('proy_pip_actualizado') ? ' has-error' : '')))); ?>

                        </div>
                        <div class="form-group col-xs-6 col-sm-4 col-lg-3">
                            <?php echo e(Form::label('proy_pres_inc_cf', 'Inc. Carta Fianza')); ?>

                            <?php echo e(Form::text('proy_pres_inc_cf', $proyecto->proy_pres_inc_cf, array('class' => 'form-control'.($errors->has('proy_pres_inc_cf') ? ' has-error' : '')))); ?>

                        </div>
                    </div>
                </div>
           
           
                <h3>
                    <a class="btn btn-success">Analitico de Gasto</a>
                </h3>
                <?php echo $__env->make('proyectos.analitico.analitico', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script src="<?php echo e(asset('js/bootstrap-tagsinput.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/typeahead.bundle.min.js')); ?>"></script>
<script>
    var etiq = '#proy_etiquetas';
    var avTags = new Bloodhound({
        datumTokenizer: Bloodhound.tokenizers.obj.whitespace('tag_description'),
        queryTokenizer: Bloodhound.tokenizers.whitespace,
        prefetch: {url:'<?php echo e(route('proyectos.tags.index')); ?>?json=true', cache :false}
    });
    avTags.initialize();
    elt=$(etiq);
    elt.tagsinput({
        itemValue: 'id',
        itemText: 'tag_name',
        typeaheadjs: {
            name: 'cities',
            displayKey: 'tag_description',
            source: avTags.ttAdapter()
        }
    });

    $.ajax({
        url:'<?php echo route('proyectos.tags.detalle.index'); ?>',
        method:'GET',
        data:{'tag_anio':2017, 'proyecto_id':<?php echo e($proyecto->idproy_proyecto); ?>, 'json':true, '_token': '<?php echo e(csrf_token()); ?>'},
        success:function (result) {
            $.each(result,function(i,d){
                elt.tagsinput('add', d);
            });
        }

    })
    elt.on('beforeItemAdd', function(event) {
        $.ajax({
            url:'<?php echo route('proyectos.tags.detalle.store'); ?>',
            method:'POST',
            data:{'tag_anio':2017, 'proyecto_id':<?php echo e($proyecto->idproy_proyecto); ?>, 'tag_id':event.item.id, '_token': '<?php echo e(csrf_token()); ?>'},
            success:function (result) {
                if (!result.ok)
                    event.cancel=true;
            }

        })
    });
    elt.on('itemAdded', function(event) {
        var tag = $($('.bootstrap-tagsinput .tag')[elt.tagsinput('items') .length-1]);
        tag.attr('title', event.item.tag_description)
        tag.tooltip();
    });
    elt.on('beforeItemRemove', function(event) {
        $.ajax({
            async:false,
            url:'<?php echo route('proyectos.tags.detalle.destroy','unknow'); ?>',
            method:'DELETE',
            data:{'tag_anio':2017, 'proyecto_id':<?php echo e($proyecto->idproy_proyecto); ?>, 'tag_id':event.item.id, '_token': '<?php echo e(csrf_token()); ?>'},
            success:function (result) {
                if (result.ok) {
                    tags =elt.prev().find('.tag');
                    indx = $(etiq).tagsinput('items').indexOf(event.item);
                    tag=$(tags[indx]);
                    tag.tooltip('destroy');
                }
                else
                event.cancel = true;
            }

        });
        // event.item: contains the item
        // event.cancel: set to true to prevent the item getting removed
    });
</script>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('style'); ?>

<link rel="stylesheet" href="<?php echo e(asset('css/bootstrap-tagsinput.css')); ?>">
<style>

    .tt-menu {
        position: absolute;
        top: 100%;
        left: 0;
        z-index: 1000;
        display: none;
        float: left;
        min-width: 160px;
        padding: 5px 0;
        margin: 2px 0 0;
        list-style: none;
        font-size: 14px;
        background-color: #ffffff;
        border: 1px solid #cccccc;
        border: 1px solid rgba(0, 0, 0, 0.15);
        border-radius: 4px;
        -webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
        background-clip: padding-box;
        cursor: pointer;
    }

    .tt-suggestion {
        display: block;
        padding: 3px 20px;
        clear: both;
        font-weight: normal;
        line-height: 1.428571429;
        color: #333333;
        white-space: nowrap;
    }

    .tt-suggestion:hover,
    .tt-suggestion:focus {
        color: #ffffff;
        text-decoration: none;
        outline: 0;
        background-color: #428bca;
    }
</style>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.proyectos.tab_edit', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sgd\resources\views\proyectos\proyecto\edit.blade.php ENDPATH**/ ?>