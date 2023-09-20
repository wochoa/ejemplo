<?php
	$id = $_GET['id'];
 ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	 
	<title>
	<?php $__env->startSection('titulo'); ?>
	Gobierno Regional Huánuco
	<?php echo $__env->yieldSection(); ?>
	</title>
    
    <!--MENSAJE ALERTA-->
    
    <!--FIN MENSAJE ALERTA-->
	<link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('css/print_doc.css')); ?>" media="print">
	<?php echo $__env->yieldPushContent('style'); ?>
</head>

<body>
	<div class="form-body" id="doc_print" style="text-align: float;">
	<div id="cabecera">
		<?php echo e(Html::image('img/head_doc.jpg')); ?>

		<table border="1">
			<tr>
			  <td>Reg.Doc.</td>
			  <td width="85px">&nbsp;</td>
			</tr>
			<tr>
			  <td>Reg.Exp.</td>
			  <td><?php echo e($documento->td_expeSISGEDO); ?></td>
			</tr>
		</table>
	</div> 
	<div id="referencia" style="margin: 10px 0px 0px 70px">
		<?php
			$contenido = json_decode($documento->td_contenido); 
			$destino = json_decode($asunto->tda_destino);
			$referencia = explode("\n", $documento->td_referencia);
			$ccs = json_decode($documento->td_cc);
		?>
		<div class="form-group col-xs-12 col-sm-12 col-lg-12">
			<?php echo e(Form::label('memo', 'MEMORANDUM Nº_____2017 GRH-GRI')); ?>

		</div>
		<div class="form-group col-xs-3 col-sm-3 col-lg-3">
			<?php echo e(Form::label('destino', 'A:')); ?>

		</div>
		<div class="form-group col-xs-9 col-sm-9 col-lg-9">
			<?php echo e(Form::label('doc_desNombre', $destino->dest_nombre)); ?>

			<br>
			<?php if($destino->dest_oficina != ''): ?>
				<?php echo e(Form::label('doc_desOficina', $destino->dest_oficina)); ?>

			<?php endif; ?>
			
		</div>
		<div class="form-group col-xs-3 col-sm-3 col-lg-3">
			<?php echo e(Form::label('asunto', 'ASUNTO: ')); ?>

		</div>
		<div class="form-group col-xs-9 col-sm-9 col-lg-9">
			<?php echo e(Form::label('doc_asunto',  $documento->td_asunto_txt)); ?>

		</div>
		<div class="form-group col-xs-3 col-sm-3 col-lg-3">
			<?php echo e(Form::label('referencia', 'REFERENCIA: ')); ?>

		</div>
		<div id="ref" class="form-group col-xs-9 col-sm-9 col-lg-9">
		<?php $__currentLoopData = $referencia; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ref): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<?php if($ref != ""): ?>
				<?php echo e(Form::label('doc_referencia', $ref)); ?><br>
			<?php endif; ?>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</div>
		<div class="form-group col-xs-3 col-sm-3 col-lg-3">
			<?php echo e(Form::label('fecha', 'FECHA: ')); ?>

		</div>
		<div class="form-group col-xs-9 col-sm-9 col-lg-9">
			<?php echo e(Form::label('fecha_doc', 'fecha')); ?>

		</div>
	</div>  
	<div id="contenido" style="margin: 10px 0px 0px 70px">
	<?php echo $asunto->td_contenido; ?>

	<div id="sello" style="margin-left:40px;margin-top:60px">
	<?php echo e(Html::image('img/selloGerente.PNG', 'sello', array('height' => '110', 'width' => '300'))); ?>

	</div>
	</div>
	<div id="pie" class="foo" style="float:bottom; font-size:0.6em">
		<div class="form-group col-xs-3 col-sm-3 col-lg-3" style="margin: 10px 0px 0px 70px">
			<?php echo e(Form::label('cc1', 'Cc:')); ?><br>
			<?php $__currentLoopData = $ccs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<?php if($cc != ''): ?>
				<?php echo e(Form::label('cc1', strtoupper($cc))); ?><br>
				<?php endif; ?>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			<?php echo e(Form::label('cc_archivo', 'ARCHIVO')); ?><br>
		</div>
		<?php echo e(Html::image('img/footer_doc.JPG')); ?>

	</div>
</div>
	<script src="<?php echo e(asset('js/jquery-3.2.1.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jQuery.print.js')); ?>"></script>
	<script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
	<script>
		function decodeEntities(encodedString) {
			var textArea = document.createElement('textarea');
			textArea.innerHTML = encodedString;
			return textArea.value;
		}
		
		function formatCurrency(total) {
			var neg = false;
			if(total < 0) {
				neg = true;
				total = Math.abs(total);
			}
			return (neg ? "-$" : 'S/.') + parseFloat(total, 10).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,").toString();
		}
		
		function zeroFill( number, width ){
			width -= number.toString().length;
			if ( width > 0 )
			{
				return new Array( width + (/\./.test( number ) ? 2 : 1) ).join( '0' ) + number;
			}
			return number + ""; // always return a string
		}
	
		$( document ).ready(function() {
			
			d=new Date('<?php echo e($documento->td_fecha); ?>');
			option = { year: 'numeric', month: 'long', day: 'numeric' };
					
			$("label[for='fecha_doc']").html('CUSCO, '+d.toLocaleDateString("es-ES", option));

			$( "#contenido obra" ).html('<?php echo $contenido->doc_obra or ''; ?>');
			$( "#contenido proced" ).html('<?php echo e($contenido->doc_proced or 'xxx'); ?>');
			$( "#contenido snip" ).html('<?php echo e($contenido->doc_snip or ''); ?>');
			$( "#contenido pedido" ).html('<?php echo e($contenido->doc_nro_pedido or ''); ?>');
			$( "#contenido cp" ).html(zeroFill('<?php echo e($contenido->doc_cp or ''); ?>', 5));
			$( "#contenido metas" ).html(zeroFill('<?php echo e($contenido->doc_meta or ''); ?>', 4));
			$( "#contenido ff" ).html('<?php echo e($ff or ''); ?>');
			$( "#contenido esp" ).html('<?php echo e($contenido->doc_especifica or ''); ?>');
			$( "#contenido monto" ).html(formatCurrency('<?php echo e($contenido->doc_monto or ''); ?>'));

            $( "#contenido afd" ).html('<?php echo e($contenido->doc_afd or ''); ?>');
			$( "#contenido val" ).html('<?php echo e($contenido->doc_val or ''); ?>');
			$( "#contenido contrato" ).html('<?php echo e($contenido->doc_contrato or ''); ?>');
			$( "#contenido nrocontrato" ).html('<?php echo e($contenido->doc_nro_contrato or ''); ?>');
			
			
			 var myCallBack = function() {window.close();};
				$('#myPrintArea').print({
					deferred: $.Deferred().done(myCallBack)
				});
		});
			
	</script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\sgd\resources\views\proyectos\herramientas\documentos\print.blade.php ENDPATH**/ ?>