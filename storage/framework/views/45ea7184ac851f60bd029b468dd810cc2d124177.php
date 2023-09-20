<?php if($iframe): ?>
    <?php
    $extend = 'layouts.proyectos.plantilla_black';
    $section = 'content';
    $option = '?iframe=true'.(($anio!=null)?'&anio='.$anio:'');
    $option2 = '?iframe=true&anio=%d';
    ?>
<?php else: ?>
    <?php
    $extend = 'layouts.proyectos.tab_edit';
    $section = 'tabContent';
    $option = '?'.(($anio!=null)?'&anio='.$anio:'');
    $option2 = '?anio=%d';

?>
<?php endif; ?>




<?php $__env->startSection($section); ?>
<div id="table">
<h3 class="text-center"><?php echo e($proyecto->proy_nombre); ?></h3>
    <div class="form-group col-12 col-sm-12 col-md-12 col-lg-12 mod_ad_btn">
        <div class="form-group col-xs-12 col-sm-6 col-lg-3">
            <?php echo e(Form::label('formato', 'Formato')); ?>

            <?php echo e(Form::select('formato', [1=>'año > Fto > sec_func > especifica',2=>'año > sec_func > Fto > especifica',3=>'año > sec_func > especifica > Fto',4=>'año > sec_func > especifica'], $formato , array('class' => 'form-control send reset') )); ?>

        </div>
        <div class="form-group col-xs-12 col-sm-6 col-lg-3">
            <?php echo e(Form::label('anio', 'Año')); ?>

            <?php echo e(Form::select('anio', $anios, $anio , array('class' => 'form-control send reset') )); ?>

        </div>
        <a class="btn btn-primary" href="<?php echo e(route('proyectos.gastos',[$id, 'excel'])); ?>">Exportar Excel</a>
        <a class="btn btn-success" href="<?php echo e(route('proyectos.gastos',[$id, 'excelall'])); ?>">Exportar Excel Completo</a>
    </div>
    <div class="gastos_show form-group col-12 col-sm-12 col-md-12 col-lg-12 mod_ad_btn" style="overflow-x: scroll;cursor: -webkit-grab;" data-mouse_x="0" >
        <table cellpadding="0" cellspacing="0" border="0" class="table table-bordered gasto" width="2700" style="width:2700px;" data-proy="<?php echo e($proyecto->proy_cod_siaf); ?>">
            <thead class="thead-light">
            <tr class="info">
                <th width="40" rowspan="2"><center></center></th>
                <th width="60" rowspan="2">Año</th>
                <th width="60" rowspan="2"><?php echo e(($formato==1)?'Fto':'Meta'); ?></th>
                <th width="60" rowspan="2"><?php echo e(($formato==1)?'Meta':(($formato==2)?'Fto':'Especifica')); ?></th>
                <th width="60" rowspan="2">Especifica</th>
                <th width="60" rowspan="2">Cert.</th>
                <th width="60" rowspan="2">Comp.</th>
                <th width="90" rowspan="2">EXP_SIAF</th>
                <th width="80" rowspan="2">PIM</th>
                <th width="80" rowspan="2">Programado</th>
                <th colspan="3" style="border-left: solid #000 2px;"><center>CERTIFICADO</center></th>
                <th colspan="3" style="border-left: solid #000 2px;"><center>COMPROMISO</center></th>
                <th colspan="3" style="border-left: solid #000 2px;border-right: solid #000 2px;"><center>DEVENGADO</center></th>
                <th colspan="12"><center>DEVENGADO MENSUALIZADO</center></th>
            </tr>
            <tr class="info">
                <th width="100" style="border-left: solid #000 2px;">MONTO.</th>
                <th width="100">SALDO </th>
                <th width="50">%</th>
                <th width="100" style="border-left: solid #000 2px;">MONTO.</th>
                <th width="100">SALDO </th>
                <th width="50">%</th>
                <th width="100" style="border-left: solid #000 2px;">MONTO.</th>
                <th width="100">SALDO </th>
                <th width="50" style="border-right: solid #000 2px;">%</th>
                <th width="100"><center>Ene</center></th>
                <th width="100"><center>Feb</center></th>
                <th width="100"><center>Mar</center></th>
                <th width="100"><center>Abr</center></th>
                <th width="100"><center>May</center></th>
                <th width="100"><center>Jun</center></th>
                <th width="100"><center>Jul</center></th>
                <th width="100"><center>Ago</center></th>
                <th width="100"><center>Set</center></th>
                <th width="100"><center>Oct</center></th>
                <th width="100"><center>Nov</center></th>
                <th width="100"><center>Dic</center></th>
            </tr>
            </thead>
            <tbody>
            <?php ($first=true); ?>
            <?php $__currentLoopData = $presupuesto; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id1=>$d1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($id1!='t'): ?>
                    <?php ($lv1=$id1); ?>
                    <?php ($d=$d1['t']); ?>
                    <tr class="gradeX lvl_1 <?php echo e($lv1); ?>" data-level="1" data-status="<?php echo e(($first)?1:0); ?>" data-class="<?php echo e($lv1); ?>">
                        <td style="text-align:right"><button type="button" class="ejec_plus btn btn-xs btn-link glyphicon glyphicon-<?php echo e(($first)?'minus':'plus'); ?>"></button></td>
                        <td colspan="7" class=""><?php echo e($id1); ?></td>
                        <?php echo $__env->make('proyectos.proyecto.gastos.linea', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </tr>
                    <?php $__currentLoopData = $d1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id2=>$d2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($id2!='t'): ?>
                            <?php ($d=$d2['t']); ?>
                            <?php ($lv2=$lv1."-".$id2); ?>
                            <tr class="gradeX lvl_2 <?php echo e($lv2); ?> <?php echo e(($first)?'':'hide'); ?>" data-level="2" data-status="<?php echo e(($first)?1:0); ?>" data-class="<?php echo e($lv2); ?>">
                                <td>&nbsp;</td>
                                <td style="text-align:right"><button type="button" class="ejec_plus btn btn-xs btn-link glyphicon glyphicon-<?php echo e(($first)?'minus':'plus'); ?>"></button></td>
                                <td colspan="6"><?php echo e($d->desc1); ?></td>
                                <?php echo $__env->make('proyectos.proyecto.gastos.linea', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </tr>
                            <?php $__currentLoopData = $d2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id3=>$d3): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($id3!='t'): ?>
                                    <?php ($lv3=$lv2."-".$id3); ?>
                                    <?php ($d=$d3['t']); ?>
                                    <tr class="gradeX lvl_3 <?php echo e($lv3); ?> <?php echo e(($first)?'':'hide'); ?>" data-level="3" data-status="0" data-class="<?php echo e($lv3); ?>">
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td style="text-align:right"><button type="button" class="ejec_plus btn btn-xs btn-link glyphicon glyphicon-plus"></button></td>
                                        <td colspan="5"><?php echo e($d->desc1); ?></td>
                                        <?php echo $__env->make('proyectos.proyecto.gastos.linea', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    </tr>
                                    <?php $__currentLoopData = $d3; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id4=>$d4): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($id4!='t'): ?>
                                            <?php ($lv4=$lv3."-".$id4); ?>
                                            <?php ($d=$d4['t']); ?>
                                            <tr class="gradeU lvl_4 <?php echo e($lv4); ?> hide" data-level="4" data-status="0" data-class="<?php echo e($lv4); ?>">
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td style="text-align:right"><?php if($d->monto_cert>0||$d->monto_dev>0): ?>
                                                        <button type="button" class="ejec_plus btn btn-xs btn-link glyphicon glyphicon-plus"></button>
                                                    <?php endif; ?></td>
                                                <td colspan="4"><?php echo e($d->desc1); ?></td>
                                                <?php echo $__env->make('proyectos.proyecto.gastos.linea', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                            </tr>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php ($first=false); ?>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script>
    var table = $(".gastos_show");
    table.mousedown(function(e){$(this).css( "cursor", "-webkit-grabbing" ).data("mouse_x",e.pageX ).data("cliked",true);});
    table.mouseup(function(e){$(this).data("cliked",false).css( "cursor", "-webkit-grab" );});
    table.mouseleave(function(e){$(this).data("cliked",false).css( "cursor", "-webkit-grab" );});
    table.mousemove(function(e){
        if($(this).data("cliked")){
            max_scroll=this.scrollWidth-this.clientWidth;
            s_Left=this.scrollLeft+$(this).data("mouse_x")-e.pageX;
            s_Left=(s_Left<0)?0:(s_Left>max_scroll)?max_scroll:s_Left;
            $(this).animate({scrollLeft:s_Left},0);
            $(this).data("mouse_x",e.pageX );
        }
    });

    table.on('click','tbody tr td .s_more',function(e){
        e.preventDefault();
        console.log($(this).data('status'))
        if ($(this).data('status')==0) {
            $(this).next().removeClass('hidden');
            $(this).data('status',1);
            $(this).text('Ocultar notas...');
        }else {
            $(this).next().addClass('hidden');
            $(this).data('status',0);
            $(this).text('Ver nota completa...');
        }
        });
    table.on('click','tbody tr td .ejec_plus',function(e){
        e.preventDefault();
        button=this;
        tr=$(this).closest("tr");
        next_lvl=parseInt($(tr).data('level'))+1
        if (next_lvl<=4||$(tr).data("status") != '0') {
            son = $(".gastos_show").find("tbody tr").filter("[data-class^='"+$(tr).data("class")+"']");
            if ($(tr).data("status") == '0') {
                $(son).each(function (i, j) {
                    if (parseInt($(j).data('level')) == next_lvl)
                        $(  j).removeClass('hide');
                });
                $(button).removeClass("glyphicon-plus").addClass("glyphicon-minus");
                $(tr).data("status", 1);
            }
            else {
                $(son).each(function (i, j) {
                    if (parseInt($(j).data('level')) > parseInt($(tr).data('level'))) {
                        if($(j).data('level')>=5){
                            $(j).remove()
                        }
                        else {
                            btn = $(j).find('button')[0];
                            $(btn).removeClass("glyphicon-minus").addClass("glyphicon-plus");
                            $(j).addClass('hide').data("status", 0);
                        }
                    }
                });
                $(button).removeClass("glyphicon-minus").addClass("glyphicon-plus");
                $(tr).data("status", 0);
            }
        }else {
            $(button).attr('disabled','disabled');
            if ($(tr).data("status") == '0') {
                var ruta = "<?php echo route('proyectos.gastos',[$proyecto->idproy_proyecto, $formato]); ?>";
                $.ajax({
                    method: "GET",
                    url: ruta,
                    data: {formato: "<?php echo e($formato); ?>", option: "gastos_lvl", lvl: next_lvl, class: $(tr).data("class")}
                })
                .done(function (msg) {
                    $(tr).after(msg);
                    $(button).removeClass("glyphicon-plus").addClass("glyphicon-minus");
                    $(tr).data("status", 1);
                }).fail(function () {
                    alert("error");
                }).always(function() {
                    $(button).removeAttr("disabled");
                });
            }
        }
    });
    $('#table').on('change', '[name=formato]',function () {
        ruta = '<?php echo e(route('proyectos.gastos',[$proyecto->idproy_proyecto, '%s'] )); ?><?php echo e($option); ?>';
        window.location =  ruta.replace(/%s/g, $(this).val())
    });
    $('#table').on('change', '[name=anio]',function () {
        ruta = '<?php echo e(route('proyectos.gastos',[$proyecto->idproy_proyecto, '%s'] )); ?><?php echo $option2; ?>';
        window.location =  ruta.replace(/%s/g, $('[name=formato]').val()).replace(/%d/g, $(this).val())
    });
</script>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('style'); ?>
<style>
    table { border: 1px solid #ccc;}
    tr {vertical-align: middle;}
    td, th{vertical-align: middle !important;border:solid #CCC 1px;}
    thead tr{ background-color:#989898;}
    .gasto thead th { padding:5px !important;}
    table.gasto td { padding: 0px 1px !important;/*font-size: 10px*/}
    table.gasto tr .pim { background-color:rgb(187, 187, 187);}
    table.gasto tr .c_m { background-color:#e07175;}
    table.gasto tr:hover .pim { background-color:rgb(152, 151, 151);}
    .gasto .ui-progressbar { height:7px; text-align: left; margin-bottom: 0px !important; margin-top: 1px !important; padding: 2px !important;}
    .proyeccion input{ padding:2px !important;}
    .proy_cent {background-color: orange;cursor: pointer; height: 20px; padding: 0px;}
    #tabla_gastos_cert tbody tr td .ejec_plus{margin: 0px !important; background: transparent;border: 0px !important; webkit-box-shadow:none;box-shadow:none;}
    #tabla_gastos_cert tbody .prg, #tabla_gastos_cert tbody tr .prg{background-color: #ffcc81;}
    #tabla_gastos_cert tbody .prg:hover, #tabla_gastos_cert tbody tr .prg:hover{background-color: #dc9e42;}
    .lvl_1{background-color: #a9a9a9}
    .lvl_2{background-color: #c1c1c1}
    .lvl_3{background-color: #d6d6d6}
    .lvl_4{background-color: #e6e6e6}
    .lvl_5{background-color: #efefef}
    .lvl_6{background-color: #f7f7f7}
    .lvl_7{background-color: white}
</style>
<?php $__env->stopPush(); ?>

<?php echo $__env->make($extend, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sgd\resources\views\proyectos\proyecto\gastos.blade.php ENDPATH**/ ?>