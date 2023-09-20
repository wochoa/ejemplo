    <table cellpadding="0" cellspacing="0" border="0" class="table table-bordered" width="100%">
        <thead>
            <tr>
                <th>Meta</th>
                <th>Especifica</th>
                <th>FFT</th>
                <th>Cert</th>
                <th>PIA</th>
                <th>PIM</th>
                <th>Monto Certificado</th>
                <th>Saldo por Certificar</th>
                <th>Accion</th>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $arr; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sec_func=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($sec_func); ?></td>
                <td></td>
                <td></td>
                <td></td>
                <td><?php echo e($value['d']['pia']); ?></td>
                <td><?php echo e($value['d']['pim']); ?></td>
                <td><?php echo e($value['d']['monto_cert']); ?></td>
                <td><?php echo e($value['d']['pim']-$value['d']['monto_cert']); ?></td>
                <td></td>
            </tr>
            <?php $__currentLoopData = $value; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $esp=>$value_esp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($esp!='d'&&$value_esp['d']['pim']>0): ?>
                    <tr>
                        <td></td>
                        <td><?php echo e($value_esp['d']['ESPECIFICA']); ?></td>
                        <td></td>
                        <td></td>
                        <td><?php echo e($value_esp['d']['pia']); ?></td>
                        <td><?php echo e($value_esp['d']['pim']); ?></td>
                        <td><?php echo e($value_esp['d']['monto_cert']); ?></td>
                        <td><?php echo e($value_esp['d']['pim']-$value_esp['d']['monto_cert']); ?></td>
                        <td></td>
                    </tr>
                    <?php $__currentLoopData = $value_esp; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fft=>$value_fft): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($fft!='d'&&$value_fft['d']['pim']>0): ?>
                            <tr>
                                <td></td>
                                <td></td>
                                <td><?php echo e($fft); ?></td>
                                <td></td>
                                <td><?php echo e($value_fft['d']['pia']); ?></td>
                                <td><?php echo e($value_fft['d']['pim']); ?></td>
                                <td><?php echo e($value_fft['d']['monto_cert']); ?></td>
                                <td><?php echo e($value_fft['d']['pim']-$value_fft['d']['monto_cert']); ?></td>
                                <td><?php if($value_fft['d']['pim']-$value_fft['d']['monto_cert']>0): ?>
                                        <?php
                                        $value_fft['d']['d']['solc_saldo_por_certificar']=$value_fft['d']['pim']-$value_fft['d']['monto_cert']
                                        ?>
                                        <a href="#" class="edit" data-data="<?php echo e(json_encode($value_fft['d']['d'])); ?>">Certificar</a>
                                    <?php endif; ?>
                                </td>
                            </tr>
                            <?php $__currentLoopData = $value_fft; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cert=>$value_cert): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($cert!='d'&&$value_fft['d']['pim']>0): ?>
                                    <tr class="alert-info">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td colspan="3"><?php echo e($cert); ?></td>
                                        <td><?php echo e($value_cert['d']['monto_cert']); ?></td>
                                        <td><?php echo e($value_fft['d']['pim']-$value_fft['d']['monto_cert']); ?></td>
                                        <td>
                                            <?php if($value_fft['d']['pim']-$value_fft['d']['monto_cert']>0): ?>
                                                <?php
                                                    $dat=$value_fft['d']['d'];
                                                $dat['solc_certificado']=$cert;
                                                $dat['solc_saldo_por_certificar']=$value_fft['d']['pim']-$value_fft['d']['monto_cert'];
                                                $dat['solc_justificacion']=$value_cert['d']['glosa'];
                                                $dat['solc_id_clasif']=$esp;
                                                ?>
                                                <a href="#" class="edit" data-data="<?php echo e(json_encode($dat)); ?>" data-cert="<?php echo e($cert); ?>">Ampliar</a>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table><?php /**PATH C:\xampp\htdocs\sgd\resources\views\proyectos\herramientas\certificar\listar.blade.php ENDPATH**/ ?>