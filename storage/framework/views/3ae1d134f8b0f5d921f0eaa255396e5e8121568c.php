<?php $__env->startSection('titulo'); ?>
    Nuevo Proyecto
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <ul class="nav nav-tabs" role="tablist">
        <li role="presentation"><a href="<?php echo route('proyectos.index'); ?>">Listado de Proy</a></li>
        <li role="presentation" class="active"><a href="<?php echo route('proyectos.create'); ?>">Crear Proyecto</a></li>
    </ul>
    <div class="panel panel-default">
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
            <?php echo e(Form::open(array('route' => ['proyectos.store'], 'method' => 'POST'), array('role' => 'form'))); ?>

            <div class="row">
                <div class="form-group col-xs-12 col-sm-12 col-lg-12">
                    <?php echo e(Form::label('proy_nombre', 'Nombre del Proyecto')); ?>

                    <?php echo e(Form::textarea('proy_nombre', null, array('class' => 'form-control'.($errors->has('proy_nombre') ? ' has-error' : ''), 'size' => '30x3'))); ?>

                </div>
                <div class="form-group col-md-12">
                    <div class="form-group col-xs-6 col-sm-4 col-lg-3">
                        <?php echo e(Form::label('proy_cod_snip', 'Codigo SNIP')); ?>

                        <?php echo e(Form::text('proy_cod_snip', null, array('class' => 'form-control'.($errors->has('proy_cod_snip') ? ' has-error' : '')))); ?>

                    </div>
                    <div class="form-group col-xs-6 col-sm-4 col-lg-3">
                        <?php echo e(Form::label('proy_cod_siaf', 'Codigo SIAF')); ?>

                        <?php echo e(Form::text('proy_cod_siaf', null, array('class' => 'form-control'.($errors->has('proy_cod_siaf') ? ' has-error' : '')))); ?>

                        <button type="button" class="btn btn btn-success import_inviertepe" style="float: left;position: absolute;top: 19px;right: 16px;"><i class="glyphicon glyphicon-download-alt"></i></button>
                    </div>
                    <div class="form-group col-xs-6 col-sm-4 col-lg-3">
                        <?php echo e(Form::label('funcion_id', 'Funcion')); ?>

                        <?php echo e(Form::select('funcion_id', $funciones, null, array('class' => 'form-control'.($errors->has('funcion_id') ? ' has-error' : '')) )); ?>

                    </div>
                    <div class="form-group col-xs-6 col-sm-4 col-lg-3">
                        <?php echo e(Form::label('proy_fte_fto', 'FFT')); ?>

                        <?php echo e(Form::text('proy_fte_fto', null, array('class' => 'form-control'.($errors->has('proy_fte_fto') ? ' has-error' : '')))); ?>

                    </div>
                    <div class="form-group col-xs-6 col-sm-4 col-lg-3">
                        <?php echo e(Form::label('proy_beneficiarios', 'Beneficiarios')); ?>

                        <?php echo e(Form::text('proy_beneficiarios', null, array('class' => 'form-control'.($errors->has('proy_beneficiarios') ? ' has-error' : '')))); ?>

                    </div>
                    <div class="form-group col-xs-6 col-sm-4 col-lg-3">
                        <?php echo e(Form::label('proy_localidad', 'Localidad')); ?>

                        <?php echo e(Form::text('proy_localidad', null, array('class' => 'form-control'.($errors->has('proy_localidad') ? ' has-error' : '')))); ?>

                    </div>
                </div>
                <div class="form-group col-md-12">
                    <div class="form-group col-xs-6 col-sm-4 col-lg-3">
                        <?php echo e(Form::label('proy_perfil_viable', 'Perfil Viable')); ?>

                        <?php echo e(Form::number('proy_perfil_viable', null, array('step'=>'any', 'class' => 'form-control'.($errors->has('proy_perfil_viable') ? ' has-error' : '')))); ?>

                    </div>
                    <div class="form-group col-xs-6 col-sm-4 col-lg-3">
                        <?php echo e(Form::label('proy_snip15', 'ET FR SNIP 15')); ?>

                        <?php echo e(Form::number('proy_snip15', null, array('step'=>'any', 'class' => 'form-control'.($errors->has('proy_snip15') ? ' has-error' : '')))); ?>

                    </div>
                    <div class="form-group col-xs-6 col-sm-4 col-lg-3">
                        <?php echo e(Form::label('proy_snip16', 'Modificaciones SNIP 16')); ?>

                        <?php echo e(Form::number('proy_snip16', null, array('step'=>'any', 'class' => 'form-control'.($errors->has('proy_snip16') ? ' has-error' : '')))); ?>

                    </div>
                    <div class="form-group col-xs-6 col-sm-4 col-lg-3">
                        <?php echo e(Form::label('proy_verificacion_viabilidad', 'Verificacion de Viabilidad')); ?>

                        <?php echo e(Form::text('proy_verificacion_viabilidad', null, array('class' => 'form-control'.($errors->has('proy_verificacion_viabilidad') ? ' has-error' : '')))); ?>

                    </div>
                    <div class="form-group col-xs-6 col-sm-4 col-lg-3">
                        <?php echo e(Form::label('proy_modificaciones_sin_evaluacion', 'modificaciones sin evaluacion')); ?>

                        <?php echo e(Form::text('proy_modificaciones_sin_evaluacion', null, array('class' => 'form-control'.($errors->has('proy_modificaciones_sin_evaluacion') ? ' has-error' : '')))); ?>

                    </div>
                    <div class="form-group col-xs-6 col-sm-4 col-lg-3">
                        <?php echo e(Form::label('proy_fech_registro_perfil', 'Fecha de Registro del Perfil (*)')); ?>

                        <?php echo e(Form::date('proy_fech_registro_perfil', null, array('class' => 'form-control'.($errors->has('proy_fech_registro_perfil') ? ' has-error' : '')))); ?>

                    </div>
                    <div class="form-group col-xs-6 col-sm-4 col-lg-3">
                        <?php echo e(Form::label('proy_oficina', 'OFICINA A CARGO')); ?>

                        <?php echo e(Form::select('proy_oficina', $oficinas, null , array('class' => 'form-control'.($errors->has('proy_oficina') ? ' has-error' : '')) )); ?>

                    </div>

                </div>
                <div class="form-group col-md-12">
                    <div class="form-group col-xs-6 col-sm-4 col-lg-3">
                        <?php echo e(Form::label('proy_pip_actualizado', 'Monto PIP Act')); ?>

                        <?php echo e(Form::number('proy_pip_actualizado', null, array('step'=>'any', 'class' => 'form-control'.($errors->has('proy_pip_actualizado') ? ' has-error' : '')))); ?>

                    </div>
                    <div class="form-group col-xs-6 col-sm-4 col-lg-3">
                        <?php echo e(Form::label('proy_pres_inc_cf', 'Inc. Carta Fianza')); ?>

                        <?php echo e(Form::text('proy_pres_inc_cf', null, array('class' => 'form-control'.($errors->has('proy_pres_inc_cf') ? ' has-error' : '')))); ?>

                    </div>
                </div>
            </div>
            <?php echo e(Form::button('Guardar Cambios', array('type' => 'submit', 'class' => 'btn btn-primary'))); ?>

            <?php echo e(Form::close()); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script>
        $(".import_inviertepe").on("click",function(){
            var atr = $(this).prev().prop('name');
            var value = $(this).prev().val();
            $.ajax({
                type: "GET",
                url: "<?php echo e(route('proyectos.inviertepe')); ?>",
                data: {"codigo":value},
                success: function(d){
                    console.log(d);
                    $("#proy_nombre").val( d[0].Nombre );
                    $("#proy_cod_snip").val( d[0].CodigoSnip );
                    $("#proy_cod_siaf").val( d[0].CodigoUnico );
                    $("#proy_beneficiarios").val( d[0].Beneficiario );
                    $("#proy_pip_actualizado").val( d[0].Costo );
                    $("#proy_verificacion_viabilidad").val(d[0].FechaViabilidadStr.replace( /(\d{2})\/(\d{2})\/(\d{4})/, "$3-$2-$1"));
                    $("#proy_fech_registro_perfil").val(d[0].FechaRegistroStr.replace( /(\d{2})\/(\d{2})\/(\d{4})/, "$3-$2-$1") );
                    $("#proy_perfil_viable").val( d[0].MontoAlternativa );
                    $("#proy_snip15").val( d[0].MontoF15 );
                    $("#proy_snip16").val( d[0].MontoF16 );
                    var funcion = omitirAcentos( d[0].Funcion );
                    //$("#proy_funcion").val( 'Transporte' );
                    //$("#proy_funcion option[value='Transporte']").attr("selected","selected");
                    //alert(funcion.toLowerCase() );
                    $("#proy_verificacion_viabilidad").val( d[0].FechaViabilidadStr );
                    $("#proy_fecha_reg_perfil").val( d[0].FechaRegistroStr );
                },
                dataType: "json"
            });
        });
        function omitirAcentos(text) {
            var acentos = "ÃÀÁÄÂÈÉËÊÌÍÏÎÒÓÖÔÙÚÜÛãàáäâèéëêìíïîòóöôùúüûÑñÇç";
            var original = "AAAAAEEEEIIIIOOOOUUUUaaaaaeeeeiiiioooouuuunncc";
            for (var i=0; i<acentos.length; i++) {
                text = text.replace(acentos.charAt(i), original.charAt(i));
            }
            return text;
        }




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

<?php echo $__env->make('layouts.proyectos.plantilla_proyectos', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sgd\resources\views\proyectos\proyecto\create.blade.php ENDPATH**/ ?>