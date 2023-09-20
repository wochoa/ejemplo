<?php $__env->startSection('content'); ?>
<div class="container-fluid">

    <div class="row">
        <div class="col-md-12 ">

            
            <div class="panel panel-default mt-2">

                <div class="panel-heading">Tramites Observados</div>

                <div class="panel-body">
                    
                    <div class="row">
                    
                   <div class="table-responsive">
                        <table class="table table-bordered table-hover table-sm">
                            <thead>
                                <tr>
                                    <th>N</th>
                                    <th>DNI/RUC</th>
                                    <th>DOCUMENTO</th>
                                    <th>FIRMANTE</th>
                                    <th>MOTIVO OBS</th>
                                    <th>FECHA OBS</th>
                                    <th nowrap>Link para subsanar</th>
                                </tr>
                            </thead>
                            <tbody>
                                    <?php $__currentLoopData = $externo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ext): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><small><?php echo e($ext->id); ?></small></td>
                                        <td>
                                        <small>
                                        <?php if($ext->docu_dni): ?>
                                            <?php echo e($ext->docu_dni); ?>

                                            <?php else: ?>
                                            <?php echo e($ext->docu_ruc); ?>

                                            <?php endif; ?>
                                        </small>
                                        </td>
                                        <td><small><?php echo e($ext->docu_numero_doc); ?>-<?php echo e($ext->docu_siglas_doc); ?></small></td>
                                        <td>
                                            <small>
                                            <?php echo e($ext->docu_firma); ?> <br>
                                            <span class="badge bg-primary text-sm"><small><?php echo e($ext->docu_telef); ?></small></span><br>
                                            <span class="badge bg-info text-sm"><small><?php echo e($ext->docu_emailorigen); ?></small></span>
                                            </small>
                                        </td>
                                        <td>
                                            <?php if($ext->docu_motivo_archivamiento): ?>
                                            <small>
                                            <?php echo e($ext->docu_motivo_archivamiento); ?> 
                                            </small>

                                            <?php else: ?>
                                             <p class="text-center">
                                             <span class="badge bg-success text-sm"><small>No presenta observación</small></span>
                                             </p>
                                            <?php endif; ?>
                                           
                                        </td>
                                        <td nowrap>
                                            <small>
                                                <?php echo e($ext->updated_at); ?>  
                                            </small>
                                        </td>
                                        <td>
                                            <?php if($ext->iddocumento): ?>
                                            <p><small><strong>Reg. Doc:</strong> <a href="/tramite/buscar/buscarModal/<?php echo e($ext->iddocumento); ?>"><?php echo e($ext->iddocumento); ?> </a><br>
                                            <strong>Reg. Exp:</strong> <a href="/tramite/buscar/buscarExpedienteModal/<?php echo e($ext->docu_idexma); ?>" target="_blank"><?php echo e($ext->docu_idexma); ?> </a> </small></p>
                                            
                                            <?php else: ?>
                                            <small><a href="/registro/mesa-partes-virtual/<?php echo e($ext->id_dependencia); ?>/<?php echo e($ext->docu_token); ?>"target="_blank" class="btn btn-danger btn-sm">Subsanar</a></small>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                        <?php echo e($externo->links()); ?>

                   </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.tema', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sgd\resources\views\listaobservacion.blade.php ENDPATH**/ ?>