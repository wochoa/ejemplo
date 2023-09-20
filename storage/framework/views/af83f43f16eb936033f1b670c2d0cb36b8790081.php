<?php $__env->startSection('titulo'); ?>
    Nuevo| Directorio
<?php $__env->stopSection(); ?>


<?php $__env->startSection('contenido'); ?>
    <div class="container">
        <div class="row">
            
            <div class="col-sm-12">
            <!--tapmenu-->
            <div class="container">
              
              <ul class="nav nav-tabs">
                <li><?php echo e(link_to('directorio/directorio', 'Explorar Directorio' )); ?>

                <li class="active"><?php echo e(link_to('#', 'Nuevo Registro Directorio' )); ?></li> 
              </ul>
            </div>
            <!--fintapmenu-->
              <?php echo e(Form::open(array('action' => 'Directorio\DirectorioController@store', 'class' => 'form-horizontal', 'method' =>'POST'))); ?>

              <?php echo e(csrf_field()); ?>      
             <!--PANEL Registro-->
            <div class="panel-group">
               <div class="panel panel-primary">
                   <div class="panel-heading">DATOS DE LA ENTIDAD / UNIDAD</div>
                   <div class="panel-body">
                      <!--CUERPO-->
                     
                          <div class="form-group">
                              <?php echo e(Form::label('Dependencia Superior', '', ['class'=>'col-sm-3 control-label', 'for'=>'superior'])); ?>

                            <div class="col-sm-7">
                                <!--FOREACH-->
                                 <select class="form-control" name="superior">
									<option value="">Seleccione</option>
                                <?php $__currentLoopData = $unidades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $superior): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                   <option value="<?php echo e($superior->uni_id); ?>"><?php echo e($superior->uni_denominacion); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                               </select>
                             </div>
                          </div>
						  
						  <div class="form-group">
                              <?php echo e(Form::label('Tipo:', '', ['class'=>'col-sm-3 control-label', 'for'=>'tipo_unidad'])); ?>

                            <div class="col-sm-7">
                                <!--FOREACH-->
                                 <select class="form-control" name="tipo_unidad" required="required">
									<option value="">Seleccione</option>
                                <?php $__currentLoopData = $tipo_unidad; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tipo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                   <option value="<?php echo e($tipo->tip_uni_id); ?>"><?php echo e($tipo->tip_uni_denominacion); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                               </select>
                             </div>
                          </div>
                          
                         <div class="form-group">
                            <?php echo e(Form::label('Nombre de la Entidad / Unidad', '', ['class'=>'col-sm-3 control-label', 'for'=>'uni_denominacion', 'required'=>'required'])); ?>

                             <div class="col-sm-7">
                            <?php echo e(Form::text('uni_denominacion','', ['class' => 'form-control mayuscula','id' =>'uni_denominacion'])); ?>

                             </div>
                          </div>
                          <div class="form-group">
                            <?php echo e(Form::label('Teléfono(s)/Celular(es)', '', ['class'=>'col-sm-3 control-label', 'for'=>'uni_fono'])); ?>

                             <div class="col-sm-7">
                            <?php echo e(Form::text('uni_fono','', ['class' => 'form-control','id' =>'uni_fono'])); ?>

                             </div>
                          </div>
                          <div class="form-group">
                            <?php echo e(Form::label('Dirección', '', ['class'=>'col-sm-3 control-label', 'for'=>'uni_direccion'])); ?>

                             <div class="col-sm-7">
                            <?php echo e(Form::text('uni_direccion','', ['class' => 'form-control mayuscula','id' =>'uni_direccion', 'required'=>'required'])); ?>

                             </div>
                          </div>
                          <div class="form-group">
                            <?php echo e(Form::label('Dirección web o URL', '', ['class'=>'col-sm-3 control-label', 'for'=>'uni_direccion_web'])); ?>

                             <div class="col-sm-7">
                            <?php echo e(Form::text('uni_direccion_web','', ['class' => 'form-control','id' =>'uni_direccion_web'])); ?>

                             </div>
                          </div>
                          <div class="form-group">
                            <?php echo e(Form::label('Contactos Redes, cuentas diversas:', '', ['class'=>'col-sm-3 control-label', 'for'=>'uni_contactos_varios'])); ?>

                             <div class="col-sm-7">
                            <?php echo e(Form::text('uni_contactos_varios','', ['class' => 'form-control','id' =>'uni_contactos_varios'])); ?>

                             </div>
                          </div>                    
                        <div class="form-group">
                             <?php echo e(Form::label('Lugar: ', '', ['class' =>  'col-sm-3 control-label'])); ?>

                             <div class="col-sm-7">
								<?php echo e(Form::select('ubigeo', $ubigeo, null, [ 'id' => 'ubigeo', 'class' => 'form-control', 'required'=>'required' ])); ?>

                             </div>
                        </div>                      
                      
                      <!--FINCUERPO--> 
                   </div>
               </div> 
            </div>
            <!--FINPANEL Registro--> 
             
            <!--PANEL Registro-->
            <div class="panel-group">
               <div class="panel panel-primary">
                   <div class="panel-heading">DATOS DEL RESPONSABLE</div>
                   <div class="panel-body">
                      <!--CUERPO-->
						  <div class="form-group">
                            <?php echo e(Form::label('DNI:', '', ['class'=>'col-sm-3 control-label', 'for'=>'per_dni'])); ?>

                             <div class="col-sm-7">
                            <?php echo e(Form::number('per_dni','', ['class' => 'form-control','id' =>'per_dni','min' =>'0','max' =>'999999999999999'])); ?>

                             </div>
                          </div>
						  <div class="form-group">
                            <?php echo e(Form::label('Nombres:', '', ['class'=>'col-sm-3 control-label', 'for'=>'per_nombre'])); ?>

                             <div class="col-sm-7">
                            <?php echo e(Form::text('per_nombre','', ['class' => 'form-control mayuscula','id' =>'per_nombre', 'required'=>'required'])); ?>

                             </div>
                          </div>  
						  <div class="form-group">
                            <?php echo e(Form::label('Apellidos:', '', ['class'=>'col-sm-3 control-label', 'for'=>'per_apellido'])); ?>

                             <div class="col-sm-7">
                            <?php echo e(Form::text('per_apellido','', ['class' => 'form-control mayuscula','id' =>'per_apellido', 'required'=>'required'])); ?>

                             </div>
                          </div>   
						  <div class="form-group">
                            <?php echo e(Form::label('Teléfono(s)', '', ['class'=>'col-sm-3 control-label', 'for'=>'per_fono'])); ?>

                             <div class="col-sm-7">
                            <?php echo e(Form::text('per_fono','', ['class' => 'form-control','id' =>'per_fono'])); ?>

                             </div>
                          </div>  
						  <div class="form-group">
                            <?php echo e(Form::label('Dirección:', '', ['class'=>'col-sm-3 control-label', 'for'=>'per_direccion'])); ?>

                             <div class="col-sm-7">
                            <?php echo e(Form::text('per_direccion','', ['class' => 'form-control mayuscula','id' =>'per_direccion'])); ?>

                             </div>
                          </div>
						  <div class="form-group">
                            <?php echo e(Form::label('Email:', '', ['class'=>'col-sm-3 control-label', 'for'=>'per_email'])); ?>

                             <div class="col-sm-7">
                            <?php echo e(Form::text('per_email','', ['class' => 'form-control','id' =>'per_email'])); ?>

                             </div>
                          </div>  
						  <div class="form-group">
                            <?php echo e(Form::label('Cargo:', '', ['class'=>'col-sm-3 control-label', 'for'=>'asi_cargo'])); ?>

                             <div class="col-sm-7">
                            <?php echo e(Form::text('asi_cargo','', ['class' => 'form-control mayuscula','id' =>'asi_cargo'])); ?>

                             </div>
                          </div>  
                      
                      <!--FINCUERPO--> 
                   </div>
               </div> 
            </div>
               <!--FINPANEL Registro-->
			
			<!--PANEL Registro-->
            <div class="panel-group">
               <div class="panel panel-primary">
                   <div class="panel-heading"><?php echo e(Form::label('NOMBRES DE LOS COLABORADORES', '', ['class'=>'label_enlace','id' =>'label_colaboradores'])); ?></div>
                   <div class="panel-body" id="div_colaboradores" style="display:none;">
                      <!--CUERPO-->
						  <div class="form-group">
                            <?php echo e(Form::label('Colaboradores:', '', ['class'=>'col-sm-3 control-label', 'for'=>'uni_colaboradores'])); ?>

                             <div class="col-sm-7">
                            <?php echo e(Form::textarea('uni_colaboradores','', ['class' => 'form-control mayuscula','id' =>'uni_colaboradores'])); ?>

                             </div>
                          </div>                   
                      
                      <!--FINCUERPO--> 
                   </div>
               </div> 
            </div>
               <!--FINPANEL Registro-->
			   
			<!--PANEL Registro-->
            <div class="panel-group">
               <div class="panel panel-primary">
                   <div class="panel-heading"></div>
                   <div class="panel-body">
                      <!--CUERPO-->
                          <div class="form-group">
                            <?php echo e(Form::label('', '', ['class'=>'col-sm-3 control-label', 'for'=>'FormGroup'])); ?>

                             <div class="col-sm-7">
                             <?php echo e(Form::button('<span class="glyphicon glyphicon-ok-circle"> Registrar</span>',array('class'=>'btn btn-primary','type'=>'submit'))); ?>

                             </div>
                          </div>                      
                      
                      <!--FINCUERPO--> 
                   </div>
               </div> 
            </div>
               <!--FINPANEL Registro-->
               <?php echo e(Form::close()); ?> 
              <!--</form> -->
            </div>
        </div>
    </div>
	
	<script>
		$("#label_colaboradores").on("click", function(){
			$("#div_colaboradores").toggle("slow");
		});
	</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sgd\resources\views\directorio\directorio\nuevo-directorio.blade.php ENDPATH**/ ?>