<?php $__env->startSection('titulo'); ?>
    Nuevo| Unidades Orgánicas
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenido'); ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
            <!--tapmenu-->
            <div class="container">
              <ul class="nav nav-tabs">
                <li class="active"><?php echo e(link_to_action('Directorio\DirectorioController@create', 'Explorar Unidades Orgánicas' )); ?></li>
                <li><?php echo e(link_to_action('Directorio\DirectorioController@create', 'Nuevo Registro Directorio' )); ?></li> 
              </ul>
            </div>
            <!--fintapmenu-->
                   
            <!--PANEL Registro-->
            <div class="panel-group">
               <div class="panel panel-primary">
                   <div class="panel-heading">DIRECTORIO::[Búsqueda Datos]</div>
                   <div class="panel-body">
                      <!--CUERPO-->
                      <div class="col-md-12">
                        <!--@ include('tramite.administracion.unidad-organica.search')-->
                        <!--tabla-->
                        <div class="box">
                                <!-- /.tabla -->
                            <div class="box-body">
							
							<!--{ !! $dataTable->table() !!}-->
							
							<table class="table table-bordered" id="users-table">
								<thead>
									<tr class="info">
										<th>Entidad</th>
										<th>Teléfono</th>
										<th>Dirección</th>
										<th>Responsable</th>
										<th>Cargo</th>
										<th>Acciones</th>
									</tr>
								</thead>
							</table>
                            </div> 
                        </div>
                        <!--FINCUERPO--> 
                       </div>
                   </div>
               </div> 
            </div>
            <!--FINPANEL Registro-->  
			<!-- jQuery -->
        <script src="//code.jquery.com/jquery.js"></script>
        <!-- DataTables -->
        <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
     <!-- App scripts -->
			<script>
	$(document).ready(function() {
		$('#users-table').DataTable({
			"processing": true,
			"serverSide": true,
			"ajax": "http://doceditor.regionCUSCO.gob.pe/tramite/public/directorio/directorio_ver",
			"columns": [
				{data:"uni_denominacion"},
				{data:"uni_fono"},
				{data:"uni_direccion"},
				{data:"per_nombre"},
				{data:"asi_cargo"},
			]
		});
	} );
	</script>
            </div>
        </div>
    </div>
    <!--ALERTA DIALOGO-->
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
	
    {  !! $dataTable->scripts() !!}
	
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sgd\resources\views\directorio\directorio.blade.php ENDPATH**/ ?>