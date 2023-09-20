<?php echo Form::open(array('url'=>'bloques','method'=>'GET','autocomplete'=>'off','role'=>'search')); ?>

    
        <div class="form-group">
           <?php echo e(Form::label('', '', ['class'=>'col-sm-3 control-label', 'for'=>'FormGroup'])); ?>

            <div class="col-sm-7">
               <?php echo e(Form::button('<span class="glyphicon glyphicon-search"> Buscar</span>',
                                    array('class'=>'btn btn-primary','type'=>'submit'))); ?>

            </div>
        </div>
 
<?php echo e(Form::close()); ?><?php /**PATH C:\xampp\htdocs\sgd\resources\views\tramite\administracion\bloques\search.blade.php ENDPATH**/ ?>