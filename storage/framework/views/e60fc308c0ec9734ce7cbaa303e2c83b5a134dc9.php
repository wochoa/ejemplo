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
	<style type="text/css">
		@media  print {
			@page{
				size: A4;
			}
			@page  :left {
			 	margin: 1in 1in 1in 1in;
			}
			@page  :right {
			 	margin: 1in 1in 1in 1in;
			}
			@page  :first {
			 	margin: 1in 1in 1in 1in;
			}
			
			.salto{

		    } 

			#cabecera {
				position: absolute repeat y;
				top: 0px;
			}
			#contenido{
				position: absolute;
				top: 100px;
			}
			#contenido h1{
				text-align: center;
				font-family: Cambria;
				font-size: 24px;
				font-style: oblique;
				font-variant: normal;
				font-weight: bold;
				line-height: 30px;
			}
			#contenido h3{
				text-align: left;
				font-family: Cambria;
				font-size: 20px;
				font-variant: normal;
				font-weight: bold;
				line-height: 30px;
			}
			#contenido h3 claus{
				margin-left: 50px;
			}
			#contenido p{
				text-align: justify;
				font-family: Cambria;
				font-size: 18px;
				line-height: 30px;
				margin-bottom: 30px;
			}
			#contenido li{
			}
			#contenido ul{
				text-align: justify;
				font-family: Cambria;
				font-size: 18px;
				line-height: 30px;
				margin-bottom: 30px;
			}
			html, body {
		    	width: 210mm;
		    	height: 297mm;
		  	}
		}
	</style>
	<?php echo $__env->yieldPushContent('style'); ?>
</head>

<body>
	<div class="form-body" id="doc_print" style="text-align: float;">
	<div id="cabecera">
		<?php echo e(Html::image('img/head_cnt.jpg')); ?>

	</div>
	<div id="referencia" style="margin: 0px 0px 0px 0px">
		<?php
			$contenido = json_decode($documento->td_contenido); 
			$referencia = explode(",", $documento->td_referencia);
			//var_dump($referencia);

		?>
	<div id="contenido" style="margin: 20px 0px 0px 20px">
	<?php echo $asunto->td_contenido; ?>

	</div>
</div>
	<script src="<?php echo e(asset('js/jquery-3.2.1.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jQuery.print.js')); ?>"></script>
	<script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
	<script src="<?php echo e(asset('js/proy.js')); ?>"></script>
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
			
			d=new Date('<?php echo e($documento->created_at); ?>');
			option = { year: 'numeric', month: 'long', day: 'numeric' };

			dini=new Date('<?php echo e($contenido->cnt_finicio); ?>');
			dini.setDate(dini.getDate() + 1);
			optionini = {month: 'long', day: 'numeric' };

			dfin=new Date('<?php echo e($contenido->cnt_ffin); ?>');
			dfin.setDate(dfin.getDate() + 1);
			optionfin = { year: 'numeric', month: 'long', day: 'numeric' };
					
			$("label[for='fecha_doc']").html('CUSCO, '+d.toLocaleDateString("es-ES", option));

			$( "#contenido cntnombre" ).html('<?php echo $contenido->cnt_nombre or ''; ?>');
			$( "#contenido cntcargo" ).html('<?php echo $documento->td_asunto_txt or ''; ?>');
			$( "#contenido cntdni" ).html('<?php echo e($contenido->cnt_dni or ''); ?>');
			$( "#contenido cntdireccion" ).html('<?php echo e($contenido->cnt_direccion or ''); ?>');
			$( "#contenido cntoficina" ).html('<?php echo e($contenido->doc_nro_pedido or ''); ?>');
			$( "#contenido cntinforme1" ).html('<?php echo $referencia[0]; ?>');
			$( "#contenido cntinforme2" ).html('<?php echo $referencia[1]; ?>');
			$( "#contenido cntinforme3" ).html('<?php echo $referencia[2]; ?>');
			$( "#contenido cntinforme4" ).html('<?php echo $referencia[3]; ?>');
			$( "#contenido cntcfp" ).html('<?php echo e($contenido->cnt_cfp or ''); ?>');
            $( "#contenido cntespecifica" ).html('<?php echo e($contenido->cnt_especifica or ''); ?>');
			$( "#contenido cntobranombre" ).html('<?php echo e($contenido->cnt_obra or ''); ?>');
			$( "#contenido cntff" ).html('<?php echo e($ff or ''); ?>');
			$( "#contenido cntmonto" ).html(NumeroALetras('<?php echo e($contenido->cnt_monto or ''); ?>')+' ('+formatCurrency('<?php echo e($contenido->cnt_monto or ''); ?>')+')');
			$( "#contenido cntvigenciainicio" ).html(dini.toLocaleDateString("es-ES", optionini));
			$( "#contenido cntvigenciafin" ).html(dfin.toLocaleDateString("es-ES", optionfin));
		});
			
	</script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\sgd\resources\views\proyectos\herramientas\documentos\printcnt.blade.php ENDPATH**/ ?>