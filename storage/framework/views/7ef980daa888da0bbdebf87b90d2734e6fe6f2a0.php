
<table cellpadding="0" cellspacing="0" border="0" class="table table-bordered" width="100%">
    <thead>
    <tr>
        <th>Meta</th>
        <th>Especifica</th>
        <th>FFT</th>
        <th>Cert</th>
        <th>PIA</th>
        <th>PIM</th>
        <th>Monto Solicitado</th>
        <th>Accion</th>
    </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $solicitudes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $solicitud): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr class="alert-info">
            <td><?php echo e($solicitud->solc_sec_func); ?></td>
            <td></td>
            <td><?php echo e($solicitud->solc_fuente_financiamiento); ?></td>
            <td><?php echo e($solicitud->solc_certificado); ?></td>
            <td><?php echo e($solicitud->solc_pia); ?></td>
            <td><?php echo e($solicitud->solc_pim); ?></td>
            <td><?php echo e($solicitud->solc_certificacion); ?></td>
            <td>
                <a href="#" class="print" data-id="<?php echo e($solicitud->id); ?>">Imprimir</a>
                <br>
                <a href="#" class="edit" data-data="<?php echo e(json_encode($solicitud)); ?>">Editar</a>
                <br>
                <a href="#" class="delete" data-id="<?php echo e($solicitud->id); ?>">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table><?php /**PATH C:\xampp\htdocs\sgd\resources\views\proyectos\herramientas\certificar\solicitudes_lista.blade.php ENDPATH**/ ?>