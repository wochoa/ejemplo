    <table cellpadding="0" cellspacing="0" border="0" class="table table-bordered" width="100%">
        <thead>
            <tr>
                <th>Sec</th>
                <th>Estado</th>
                <th>Cadena</th>
                <th>Especifica</th>
                <th>DOCUMENTO</th>
                <th>Cert Actual</th>
                <th>Saldo por Certificar</th>
                <th>Monto Solicitado</th>
                <th>Accion</th>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $arr; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $anio =>$d_anio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php $__currentLoopData = $d_anio; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $corr=>$d_corr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php $__currentLoopData = $d_corr; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $meta=>$d_meta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php $__currentLoopData = $d_meta; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $esp=>$d_esp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr class=" alert alert-<?php echo e(($d_esp['c']->ESTADO_REG=='A')?'info':'warning'); ?>">
                <td><?php echo e($corr); ?></td>
                <td><?php echo e($d_esp['c']->ESTADO_REG); ?> <br><?php echo e($d_esp['c']->FECHA); ?></td>
                <td><?php echo e($d_esp['c']->SEC_FUNC); ?></td>
                <!--<td><?php echo e($d_esp['c']->cadena_fun); ?></td>-->
                <td><?php echo e($d_esp['c']->ESPECIFICA); ?></td>
                <td><?php echo e($d_esp['c']->NUM_DOC); ?></td>
                <td><?php echo e($monto_cert=($d_esp['c']->monto_cert>$d_esp['c']->MONTO)?$d_esp['c']->monto_cert-$d_esp['c']->MONTO:0); ?></td>
                <td><?php echo e($d_esp['c']->pim-$monto_cert); ?></td>
                <td><?php echo e($d_esp['c']->MONTO); ?></td>
                <td><?php echo e(Form::label('inc_sol_'.$anio.$meta.$esp, 'Incluir')); ?>

                    <?php echo e(Form::checkbox('inc_sol_'.$anio.$meta.$esp,0,($d_esp['c']->id!=-1), ['class'=>'inc_sol', 'data-data'=>json_encode($d_esp['c'])])); ?></td>
            </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table><?php /**PATH C:\xampp\htdocs\sgd\resources\views\proyectos\herramientas\certificar\detalle\listar.blade.php ENDPATH**/ ?>