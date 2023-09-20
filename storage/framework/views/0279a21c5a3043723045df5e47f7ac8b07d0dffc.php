
<div class="form-group col-xs-14 col-sm-12 col-lg-12">
    <?php echo e(Form::label('doc_obra', 'OBRA')); ?>

    <?php echo e(Form::textarea('doc_obra', null, array('class' => 'form-control send', 'size' => '30x2') )); ?>

	<button type="button" class="btn btn btn-info btn-lg" id="search_obra" style="float: left;position: absolute;top: 25px;right: 16px;"><i class="glyphicon glyphicon-search"></i></button>
	<?php echo e(Form::hidden('doc_idobra', null, array('class' => 'form-control send') )); ?>

	<?php echo e(Form::hidden('tda_destinoNombre', json_decode($dest)->dest_nombre, array('class' => 'form-control') )); ?>

	<?php echo e(Form::hidden('tda_destinoCargo', 'f', array('class' => 'form-control') )); ?>

</div>

<div class="form-group col-xs-4 col-sm-4 col-lg-4">
   <?php echo e(Form::label('doc_meta', 'META')); ?>

   <?php echo e(Form::select('doc_meta', [''=>'SELECCIONE'], null, array('class' => 'form-control send') )); ?>

</div>

<div class="form-group col-xs-4 col-sm-4 col-lg-4">
	<?php echo e(Form::label('doc_ff', 'FUENTE DE FINANCIAMIENTO')); ?>

	<?php echo e(Form::select('doc_ff', [''=>'SELECCIONE'], null,array('class' => 'form-control send') )); ?>

</div>
<div class="form-group col-xs-4 col-sm-4 col-lg-4">
    <?php echo e(Form::label('doc_especifica', 'ESPECIFICA')); ?>

    <?php echo e(Form::select('doc_especifica[]', [''=>'SELECCIONE'], null, array('class' => 'form-control send especifica') )); ?>

</div>


<?php /**PATH C:\xampp\htdocs\sgd\resources\views\proyectos\herramientas\documentos\proy_ceventuales.blade.php ENDPATH**/ ?>