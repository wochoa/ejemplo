<table cellpadding="0" cellspacing="0" border="0" class="table table-bordered" width="100%">
    <thead>
    <tr>
        <th width="200px">Componente / Tarea</th>
        <th>Insumo</th>
        <th>UM</th>
        <th>Cant Insumo</th>
        <th>Especifica</th>
        <th>Monto</th>
        <th>Programacion</th>
        <th>Editar</th>
    </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $componentes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $componente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php $insumos=$componente->insumos()->get(); ?>
    <tr class="alert-info">
        <td rowspan="<?php echo e((count($insumos)>1)?count($insumos):1); ?>"><?php echo e($componente->comp_nombre); ?></td>
        <?php if(count($insumos)==0): ?>
            <td colspan="6">No se registraron Insumos</td>
        <?php else: ?>
        <td><?php echo e($insumos[0]->insu_nombre); ?></td>
        <td><?php echo e($insumos[0]->insu_unidad_medida); ?></td>
        <td><?php echo e($insumos[0]->insu_cantidad); ?></td>
        <td><?php echo e($espeficicas[$insumos[0]->insu_id_clasifi]); ?></td>
        <td></td>
        <td><a href="#" data-data="<?php echo e(json_encode($insumos[0])); ?>" class="program">Programar</a></td>
        <td><a href="#" data-data="<?php echo e(json_encode($insumos[0])); ?>" class="edit_p_c_i">Editar</a></td>
        <?php unset($insumos[0]); ?>
        <?php endif; ?>
    </tr>
        <?php $__currentLoopData = $insumos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $insumo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr class="alert-info">
                <td><?php echo e($insumo->insu_nombre); ?></td>
                <td><?php echo e($insumo->insu_unidad_medida); ?></td>
                <td><?php echo e($insumo->insu_cantidad); ?></td>
                <td><?php echo e($espeficicas[$insumo->insu_id_clasifi]); ?></td>
                <td></td>
                <td><a href="#" data-data="<?php echo e(json_encode($insumo)); ?>" class="program">Programar </a></td>
                <td><a href="#" data-data="<?php echo e(json_encode($insumo)); ?>" class="edit">Editar</a></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <tr>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table><?php /**PATH C:\xampp\htdocs\sgd\resources\views\proyectos\plan\insumo\list.blade.php ENDPATH**/ ?>