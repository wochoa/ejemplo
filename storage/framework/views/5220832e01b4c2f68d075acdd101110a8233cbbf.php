<?php $__env->startSection('content'); ?>
<h2>Listado de usuarios</h2>
<ul>
    <?php $__currentLoopData = $admins; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $admin): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li>
        <?php echo e($admin->adm_name.$admin->adm_email); ?>

    </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.tema', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sgd\resources\views\admins.blade.php ENDPATH**/ ?>