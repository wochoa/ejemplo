<table cellpadding="0" cellspacing="0" border="0" class="table table-bordered" width="100%">
    <thead>
        <tr>
            <th>Componente / CFP</th>
            <th width="50px">Año</th>
            <th width="50px">Sec Func</th>
            <th width="150px">Monto Dev</th>
            <th style="text-align: center">Monto Programado</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if(count($cadenas_funcionales)>0){
        $total=0;
        foreach($cadenas_funcionales as $id => $dato)
        {
            $total+=0;//$dato['ana_monto'];
            $data=$dato['data'];
            unset($dato['data']);
            $class=($data['id']=='-1')?'class=alert-warning':'class=alert-success';
        ?>
        <tr <?php echo e($class); ?>>
            <td rowspan="<?php echo e((count($dato)>0)?count($dato):1); ?>"><?php echo ($data['id']=='-1')?$id:($data['comp_nombre'].'<br>'.$id); ?>

                <?php if(true): ?>
                    <br>
                    <a href="#" data-data="<?php echo e(json_encode($data)); ?>" class="edit"><?php echo ($data['id']=='-1')?'<i class="glyphicon glyphicon-plus"></i> Registrar':'<i class="glyphicon glyphicon-pencil"></i> Editar'; ?></a>
                <?php endif; ?>
                <?php if(!isset($dato[key($dato)])): ?>
                    <a href="#" data-id="<?php echo e($data['id']); ?>" class="delete"><?php echo '     <i class="glyphicon glyphicon-trash"></i> Eliminar'; ?></a>
                <?php endif; ?>
            </td>
            <td><?php echo e(key($dato)); ?></td>
            <td><?php echo e((isset($dato[key($dato)]))?$dato[key($dato)]['sec_func']:''); ?></td>
            <td><?php echo e((isset($dato[key($dato)]))?Money::toMoney($dato[key($dato)]['monto_dev']):''); ?></td>
            <td rowspan="<?php echo e((count($dato)>0)?count($dato):1); ?>"><?php echo e(Money::toMoney($data['comp_monto'])); ?></td>
        </tr>
        <?php $count=0;?>
        <?php $__currentLoopData = $dato; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id2 => $dato2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($count++>0&&$id2!='data'): ?>
                <tr <?php echo e($class); ?>>
                    <td><?php echo e($id2); ?></td>
                    <td><?php echo e($dato2['sec_func']); ?></td>
                    <td><?php echo e(Money::toMoney($dato2['monto_dev'])); ?></td>
                </tr>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php }?>
        <tr class="alert-danger">
            <td colspan="2">Total.</td>
            <td colspan="2" style="border-right:none;"><?php echo e(Money::toMoney($total)); ?></td>
            <td colspan="2">&nbsp;</td>
        </tr>
        <?php
        } else {?>
        <tr class="odd gradeX">
            <td colspan="4"><center>
                    No existen Datos en el Analitico Cargados para este proyecto
                </center></td>
        </tr>
        <?php }?>
    </tbody>
</table><?php /**PATH C:\xampp\htdocs\sgd\resources\views\proyectos\plan\componente\list.blade.php ENDPATH**/ ?>