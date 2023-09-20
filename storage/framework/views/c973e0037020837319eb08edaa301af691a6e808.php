<?php $__currentLoopData = $gastos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id=>$d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php ($lvl=$class.'-'.$id); ?>
<tr class="gradeU lvl_5 <?php echo e($lvl); ?>" data-level="<?php echo e($nivel); ?>" data-status="0" data-class="<?php echo e($lvl); ?>">
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td style="text-align:right"><?php if($d->monto_comp>0||$d->monto_dev>0): ?>
            <button type="button" class="ejec_plus btn btn-xs btn-link glyphicon glyphicon-plus"></button>
    <?php endif; ?>
    </td>
    <td colspan="8">
        <strong>Certificado:</strong> <?php echo e($d->certificado); ?><br>
        <strong>Monto:</strong> <?php echo e(Money::toMoney($d->monto_cert)); ?><br>
        <?php if(isset($d->dispositivo)&&$d->dispositivo!=''): ?>
        <strong>Dispositivo Legal:</strong> <?php echo e($d->dispositivo); ?><br>
        <?php endif; ?>
        <strong>Concepto:</strong> <?php echo e($d->concepto); ?></td>
    <td style="border-left: solid #000 2px;"><?php echo e(($d->monto_cert>0)?Money::toMoney($d->monto_comp,''):''); ?></td>
    <td><?php echo e(($d->monto_cert>0)?Money::toMoney($d->monto_cert-$d->monto_comp,''):''); ?></td>
    <td><?php echo e(($d->monto_cert>0)?Money::porcentaje($d->monto_comp/$d->monto_cert):''); ?></td>
    <td style="border-left: solid #000 2px;"><?php echo e(Money::toMoney($d->monto_dev,'')); ?></td>
    <td><?php echo e(($d->monto_cert>0)?Money::toMoney($d->monto_cert-$d->monto_dev,''):''); ?></td>
    <td style="border-right: solid #000 2px;"><?php echo e(($d->monto_cert>0)?Money::porcentaje($d->monto_dev/$d->monto_cert):''); ?></td>
    <td <?php echo e(($hoy->month==1)?'class=c_m':''); ?>><?php echo e(Money::toMoney($d->g_1,'')); ?><div class="prg"></div></td>
    <td <?php echo e(($hoy->month==2)?'class=c_m':''); ?>><?php echo e(Money::toMoney($d->g_2,'')); ?><div class="prg"></div></td>
    <td <?php echo e(($hoy->month==3)?'class=c_m':''); ?>><?php echo e(Money::toMoney($d->g_3,'')); ?><div class="prg"></div></td>
    <td <?php echo e(($hoy->month==4)?'class=c_m':''); ?>><?php echo e(Money::toMoney($d->g_4,'')); ?><div class="prg"></div></td>
    <td <?php echo e(($hoy->month==5)?'class=c_m':''); ?>><?php echo e(Money::toMoney($d->g_5,'')); ?><div class="prg"></div></td>
    <td <?php echo e(($hoy->month==6)?'class=c_m':''); ?>><?php echo e(Money::toMoney($d->g_6,'')); ?><div class="prg"></div></td>
    <td <?php echo e(($hoy->month==7)?'class=c_m':''); ?>><?php echo e(Money::toMoney($d->g_7,'')); ?><div class="prg"></div></td>
    <td <?php echo e(($hoy->month==8)?'class=c_m':''); ?>><?php echo e(Money::toMoney($d->g_8,'')); ?><div class="prg"></div></td>
    <td <?php echo e(($hoy->month==9)?'class=c_m':''); ?>><?php echo e(Money::toMoney($d->g_9,'')); ?><div class="prg"></div></td>
    <td <?php echo e(($hoy->month==10)?'class=c_m':''); ?>><?php echo e(Money::toMoney($d->g_10,'')); ?><div class="prg"></div></td>
    <td <?php echo e(($hoy->month==11)?'class=c_m':''); ?>><?php echo e(Money::toMoney($d->g_11,'')); ?><div class="prg"></div></td>
    <td <?php echo e(($hoy->month==12)?'class=c_m':''); ?>><?php echo e(Money::toMoney($d->g_12,'')); ?><div class="prg"></div></td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH C:\xampp\htdocs\sgd\resources\views\proyectos\proyecto\gastos\linealvl5.blade.php ENDPATH**/ ?>