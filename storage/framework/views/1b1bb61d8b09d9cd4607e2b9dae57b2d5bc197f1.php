<td><?php echo e(Money::toMoney($d->monto_pim,'')); ?></td>
<td><div class="prg"></div></td>
<td style="border-left: solid #000 2px;"><?php echo e(Money::toMoney($d->monto_cert,'')); ?></td>
<td><?php echo e(Money::toMoney($d->monto_pim-$d->monto_cert,'')); ?></td>
<td><?php echo e(Money::porcentaje($d->monto_cert/$d->monto_pim)); ?></td>
<td style="border-left: solid #000 2px;"><?php echo e(Money::toMoney($d->monto_comp,'')); ?></td>
<td><?php echo e(Money::toMoney($d->monto_pim-$d->monto_comp,'')); ?></td>
<td><?php echo e(Money::porcentaje($d->monto_comp/$d->monto_pim)); ?></td>
<td style="border-left: solid #000 2px;"><?php echo e(Money::toMoney($d->monto_dev,'')); ?></td>
<td><?php echo e(Money::toMoney($d->monto_pim-$d->monto_dev,'')); ?></td>
<td style="border-right: solid #000 2px;"><?php echo e(Money::porcentaje($d->monto_dev/$d->monto_pim)); ?></td>
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
<?php /**PATH C:\xampp\htdocs\sgd\resources\views\proyectos\proyecto\gastos\linea.blade.php ENDPATH**/ ?>