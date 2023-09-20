
<div class="form-group col-xs-14 col-sm-12 col-lg-12">
    <?php echo e(Form::label('doc_obra', 'OBRA')); ?>

    <?php echo e(Form::textarea('doc_obra', null, array('class' => 'form-control send', 'size' => '30x2') )); ?>

	<button type="button" class="btn btn btn-info btn-lg" id="search_obra" style="float: left;position: absolute;top: 25px;right: 16px;"><i class="glyphicon glyphicon-search"></i></button>
	<?php echo e(Form::hidden('doc_idobra', null, array('class' => 'form-control send') )); ?>

	<?php echo e(Form::hidden('tda_destinoNombre', json_decode($dest)->dest_nombre, array('class' => 'form-control send') )); ?>

	<?php echo e(Form::hidden('tda_destinoCargo', json_decode($dest)->dest_oficina, array('class' => 'form-control send') )); ?>

	<?php echo e(Form::hidden('doc_snip', '', array('class' => 'form-control send') )); ?>

</div>



<?php /**PATH C:\xampp\htdocs\sgd\resources\views\proyectos\herramientas\documentos\plantilla_08.blade.php ENDPATH**/ ?>