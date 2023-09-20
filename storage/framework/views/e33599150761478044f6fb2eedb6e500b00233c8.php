    <table cellpadding="0" cellspacing="0" border="0" class="table table-bordered" width="100%">
        <thead>
            <tr>
                <th>Certificado</th>
                <th>Sec Func</th>
                <th>Accion</th>
            </tr>
        </thead>
        <tbody>
        <?php if(count($solicitudes)>0): ?>
        <?php $__currentLoopData = $solicitudes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $solicitud): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($solicitud->solc_certificado); ?></td>
                <td><?php echo e($solicitud->solc_sec_func); ?></td>
                <td>
                    <a href="#" class="edit" data-data="<?php echo e(json_encode($solicitud)); ?>"><i class="glyphicon glyphicon-edit"></i> Editar</a>
                    <br>
                    <a href="#" class="delete" data-id="<?php echo e($solicitud->id); ?>"><i class="glyphicon glyphicon-trash"></i> Eliminar</a>
                    <br>
                    <a href="<?php echo e(route('proyectos.herramientas.certificar.detalle.index',[$anio,$doc,$solicitud->id] )); ?>"><i class="glyphicon glyphicon-list-alt"></i> Detalle</a>
                    <br>
                    <a href="#" class="print" data-id="<?php echo e($solicitud->id); ?>"><i class="glyphicon glyphicon-print"></i> Imprimir</a>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
        <tr>
            <td colspan="3" class="text-center">No existen Solicitudes</td>
        </tr>
        <?php endif; ?>
        </tbody>
    </table><?php /**PATH C:\xampp\htdocs\sgd\resources\views\proyectos\herramientas\certificar\solicitud\listar.blade.php ENDPATH**/ ?>