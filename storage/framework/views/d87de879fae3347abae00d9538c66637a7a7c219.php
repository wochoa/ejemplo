    <table cellpadding="0" cellspacing="0" border="0" class="table table-bordered" width="100%">
        <thead>
            <tr>
                <th>Documento</th>
                <th>SISGEDO</th>
                <th>Fecha</th>
                <th>Accion</th>
            </tr>
        </thead>
        <tbody>
        <?php if(count($documentos)>0): ?>
        <?php $__currentLoopData = $documentos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $documento): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($documento->doc_documento); ?></td>
                <td><?php echo e(sprintf("%08s",$documento->doc_reg_sisgedo)); ?></td>
                <td><?php echo e($documento->doc_fecha); ?></td>
                <td>
                    <a href="#" class="edit" data-data="<?php echo e(json_encode($documento)); ?>"><i class="glyphicon glyphicon-edit"></i> Editar</a>
                    <br>
                    <a href="<?php echo e(route('proyectos.herramientas.certificar.solicitud.index',[$anio,$documento->id])); ?>"><i class="glyphicon glyphicon-list-alt"></i> Listar</a></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
        <tr>
            <td colspan="2" class="text-center">No existen documentos</td>
        </tr>
        <?php endif; ?>
        </tbody>
    </table><?php /**PATH C:\xampp\htdocs\sgd\resources\views\proyectos\herramientas\certificar\documento\listar.blade.php ENDPATH**/ ?>