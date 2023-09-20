<?php $__currentLoopData = $gastos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id=>$d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php ($lvl=$class.'-'.$id); ?>
<tr class="gradeU odd <?php echo e($lvl); ?>" data-level="<?php echo e($nivel); ?>" data-status="0" data-class="<?php echo e($lvl); ?>">
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td style="text-align:right"></td>
    <td colspan="12">
        <strong>Expediente SIAF:</strong><?php echo e($d->expediente); ?>

        <strong>Fecha:</strong> <?php echo e($d->fecha); ?>

        <strong>Monto:</strong> <?php echo e(Money::toMoney($d->monto_dev)); ?><br>
        <?php if($d->proveedor!=' - '): ?>
        <strong>Proveedor:</strong> <?php echo e($d->proveedor); ?><br>
        <?php endif; ?>

        <strong>Cp's:</strong> <?php echo e($d->cps); ?><br>
        <strong>Concepto:</strong> <?php echo e($d->nota_c); ?><br>
        <a href='#' class='s_more' data-status='0'>Ver nota completa...</a>
        <div class='hidden'><br>
            <strong>Notas del Devengado -</strong><?php echo e($d->nota_d); ?><br><br>
            <strong>Notas del Girado -</strong><?php echo e($d->nota_g); ?></div>
    </td>
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
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH C:\xampp\htdocs\sgd\resources\views\proyectos\proyecto\gastos\linealvl7.blade.php ENDPATH**/ ?>