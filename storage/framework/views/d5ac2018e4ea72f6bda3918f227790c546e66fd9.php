
<table cellpadding="0" cellspacing="0" border="0" class="table table-bordered" id="modificaciones" width="100%">
        <thead>
            <tr>
                <th width="20%">Proyecto</th>
                <th width="15%">Componente / Especifica</th>
                <th width="12%">PIM</th>
                <th width="8%">DE</th>
                <th width="8%">A</th>
                <th width="12%">Nuevo PIM</th>
                <th width="8%">Certificado</th>
                <th width="17%">Justificacion</th>
            </tr>
        </thead>
        <tbody>
        <tr class="alert alert-danger">
            <td colspan="2">Total</td>
            <td><?php echo e(Money::toMoney($total['pim'],'')); ?></td>
            <td><?php echo e(Money::toMoney($total['de'],'')); ?></td>
            <td><?php echo e(Money::toMoney($total['a'],'')); ?></td>
            <td></td>
            <td><?php echo e(Money::toMoney($total['cert'])); ?></td>
            <td></td>
        </tr>
        <?php if(count($detalles)>0): ?>
            <?php $__currentLoopData = $detalles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id_proy=>$proyecto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr class="alert alert-success">
                    <td rowspan="<?php echo e($proyecto['d']['rows']); ?>"><?php echo e($proyecto['d']['nombre']); ?></td>
                    <td>Total</td>
                    <td>
                        <table width="100%">
                            <tr>
                                <td><strong>Limite: </strong></td>
                                <td><?php echo e(\App\_clases\utilitarios\Money::toMoney($proyecto['d']['limite'], '')); ?></td>
                            </tr>
                            <tr>
                                <td><strong>Acumulado: </strong></td>
                                <td><?php echo e(\App\_clases\utilitarios\Money::toMoney($proyecto['d']['acumulado'], '')); ?></td>
                            </tr>
                            <?php if($proyecto['d']['otras_ejecutoras']>0): ?>
                                <tr>
                                    <td><strong>Otras Ejecutoras:</strong></td>
                                    <td><?php echo e(\App\_clases\utilitarios\Money::toMoney($proyecto['d']['otras_ejecutoras'], '')); ?></td>
                                </tr>
                            <?php endif; ?>
                            <tr>
                                <td><strong>PIM:</strong></td>
                                <td><?php echo e(\App\_clases\utilitarios\Money::toMoney($proyecto['d']['pim1'], '')); ?></td>
                            </tr>
                            <tr <?php echo e((($proyecto['d']['limite']-($proyecto['d']['acumulado']+$proyecto['d']['otras_ejecutoras']+$proyecto['d']['pim1']))<0)?'style=background-color:#f5baba':''); ?>>
                                <td style="border-top: solid 1px;"><strong>Saldo:</strong></td>
                                <td style="border-top: solid 1px;"><?php echo e(\App\_clases\utilitarios\Money::toMoney(($proyecto['d']['limite']-($proyecto['d']['acumulado']+$proyecto['d']['otras_ejecutoras']+$proyecto['d']['pim1'])), '')); ?></td>
                            </tr>
                        </table>
                    </td>
                    <td><?php echo e(\App\_clases\utilitarios\Money::toMoney($proyecto['d']['de'], '')); ?></td>
                    <td><?php echo e(\App\_clases\utilitarios\Money::toMoney($proyecto['d']['a'], '')); ?></td>
                    <td>
                    <table width="100%">
                        <tr>
                            <td><strong>Limite: </strong></td>
                            <td><?php echo e(\App\_clases\utilitarios\Money::toMoney($proyecto['d']['limite'], '')); ?></td>
                        </tr>
                        <tr>
                            <td><strong>Acumulado: </strong></td>
                            <td><?php echo e(\App\_clases\utilitarios\Money::toMoney($proyecto['d']['acumulado'], '')); ?></td>
                        </tr>
                        <?php if($proyecto['d']['otras_ejecutoras']>0): ?>
                            <tr>
                                <td><strong>Otras Ejecutoras:</strong></td>
                                <td><?php echo e(\App\_clases\utilitarios\Money::toMoney($proyecto['d']['otras_ejecutoras'], '')); ?></td>
                            </tr>
                        <?php endif; ?>
                        <tr>
                            <td><strong>PIM:</strong></td>
                            <td><?php echo e(\App\_clases\utilitarios\Money::toMoney($proyecto['d']['pim'], '')); ?></td>
                        </tr>
                        <tr <?php echo e((($proyecto['d']['limite']-($proyecto['d']['acumulado']+$proyecto['d']['otras_ejecutoras']+$proyecto['d']['pim']))<0)?'style=background-color:#f5baba':''); ?>>
                            <td style="border-top: solid 1px;"><strong>Saldo:</strong></td>
                            <td style="border-top: solid 1px;"><?php echo e(\App\_clases\utilitarios\Money::toMoney(($proyecto['d']['limite']-($proyecto['d']['acumulado']+$proyecto['d']['otras_ejecutoras']+$proyecto['d']['pim'])), '')); ?></td>
                        </tr>
                    </table></td>
                    <td><?php echo e(\App\_clases\utilitarios\Money::toMoney($proyecto['d']['certificado'], '')); ?></td>
                    <td></td>
                </tr>
                <?php $__currentLoopData = $proyecto; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id_comp=>$componente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($id_comp!='d'): ?>
                        <tr class="alert alert-info" style="font-weight: bold; background-color: #c5dfec" id="<?php echo e($id_proy.$id_comp); ?>_">
                            <td><?php echo e($componente['d']['nombre']); ?><?php if($componente['d']['sec_func']>0): ?> <br><strong style="color: #000; text-decoration: underline;background-color: #f5baba;">SEC FUNC (META) - <?php echo e($componente['d']['sec_func']); ?></strong> <?php endif; ?></td>
                            <td>
                                <table>
                                    <tr>
                                        <td><strong>Acumulado: </strong></td>
                                        <td style="font-weight: 100;"><?php echo e(\App\_clases\utilitarios\Money::toMoney($componente['d']['acumulado'], '')); ?></td>
                                    </tr>
                                    <tr>
                                        <td><strong>PIM</strong></td>
                                        <td style="font-weight: 100;"><?php echo e(\App\_clases\utilitarios\Money::toMoney($componente['d']['pim1'], '')); ?></td>
                                    </tr>
                                </table>
                            </td>
                            <td><?php echo e(\App\_clases\utilitarios\Money::toMoney($componente['d']['de'], '')); ?></td>
                            <td><?php echo e(\App\_clases\utilitarios\Money::toMoney($componente['d']['a'], '')); ?></td>
                            <td><?php echo e(\App\_clases\utilitarios\Money::toMoney($componente['d']['pim'], '')); ?></td>
                            <td><?php echo e(\App\_clases\utilitarios\Money::toMoney($componente['d']['certificado'], '')); ?></td>
                            <td><a href="#<?php echo e($componente['d']['sec_func']); ?>_add" data-data="<?php echo e(json_encode($componente['d']['add'])); ?>" class="edit" id="<?php echo e($componente['d']['sec_func']); ?>_add"><i class="glyphicon glyphicon-plus"></i> Agregar Especifica</a></td>
                        </tr>
                    <?php $__currentLoopData = $componente; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id_esp=>$especifica): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($id_esp!='d'): ?>
                        <tr class="alert alert-<?php echo e($especifica['d']['alert']); ?>" data-id="<?php echo e($especifica['d']['id']); ?>">
                            <td><?php echo e($especifica['d']['nombre']); ?>

                                <br>
                                <a href="#" data-id="<?php echo e($especifica['d']['id']); ?>" class="delete"><i class="glyphicon glyphicon-trash"></i> Eliminar</a>

                            </td>
                            <td>
                                <table>
                                    <tr>
                                        <td><strong>Acumulado: </strong></td>
                                        <td><?php echo e(\App\_clases\utilitarios\Money::toMoney($especifica['d']['acumulado'], '')); ?></td>
                                    </tr>
                                    <tr>
                                        <td><strong>PIM</strong></td>
                                        <td><?php echo e(\App\_clases\utilitarios\Money::toMoney($especifica['d']['pim1'], '')
                                            /*\App\_clases\utilitarios\Money::toMoney($especifica['d']['pim1'], '').json_encode($especifica['d']['pim2']).json_encode($especifica['d']['pim1'])*/); ?></td>
                                    </tr>
                                </table>
                            </td>
                            <td><?php echo e(Form::text('solc_certificado', $especifica['d']['de'], array('class' => 'form-control modif modif_de seleccionar','required'=>1,
                            'max'=>$especifica['d']['pim1']-$especifica['d']['certificado'], 'data-value'=>$especifica['d']['de'], 'data-position'=> $id_proy.$id_comp ))); ?>

                            <div>max: <?php echo e(\App\_clases\utilitarios\Money::toMoney($especifica['d']['pim1']-$especifica['d']['certificado'], '')); ?></div></td>
                            <td><?php echo e(Form::text('solc_certificado', $especifica['d']['a'] , array('class' => 'form-control modif modif_a seleccionar','required'=>1,
                            'data-value'=>$especifica['d']['a'], 'data-position'=> $id_proy.$id_comp))); ?>

                            <?php echo e(Form::hidden('pim',$especifica['d']['pim1'],array('class'=>'pim'))); ?></td>
                            <td><?php echo e(\App\_clases\utilitarios\Money::toMoney($especifica['d']['pim'], '')); ?></td>
                            <td><?php echo e(\App\_clases\utilitarios\Money::toMoney($especifica['d']['certificado'], '')); ?>

                                <br><strong><?php echo e($especifica['d']['certificados']); ?></strong></td>
                            <td class="justificacion"><?php echo e(Form::textarea('solc_certificado', $especifica['d']['justificacion'] , array('class' => 'form-control modif modif_just','required'=>1,
                             'data-value'=>$especifica['d']['justificacion'], 'data-position'=> $id_proy.$id_comp))); ?></td>
                        </tr>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
        <tr>
            <td colspan="8" class="text-center">No existe informacion cargada</td>
        </tr>
        <?php endif; ?>
        </tbody>
    </table><?php /**PATH C:\xampp\htdocs\sgd\resources\views\proyectos\herramientas\modificar\detalle\listar.blade.php ENDPATH**/ ?>