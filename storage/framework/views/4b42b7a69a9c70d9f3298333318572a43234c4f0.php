<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<!-- Put favicon.ico and apple-touch-icon(s).png in the images folder -->
	<link rel="icon" type="image/png" href="/img/favicon.png" />
	 
	<title>
	<?php $__env->startSection('titulo'); ?>
	Gobierno Regional Huánuco
	<?php echo $__env->yieldSection(); ?>
	</title>
    
    <!--MENSAJE ALERTA-->
    
    <!--FIN MENSAJE ALERTA-->
	
<?php echo $__env->make('tramite.stylesheet', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('tramite.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>			
</head>

<body>

<!--HEADER-->
	<header>
		<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
			<div class="container">

				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navegacion-fm">
						<span class="sr-only">Desplegar / Ocultar Menu</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href="<?php echo e(route('home')); ?>" class="navbar-brand"><?php echo e(env("TITULO_PAGINA")); ?></a>
				</div>
				<!-- Inicia Menu -->
				<div class="collapse navbar-collapse" id="navegacion-fm">
					<?php if(!Auth::guest()): ?>
						<ul class="nav navbar-nav">
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
									Buscar <span class="caret"></span>
								</a>
								<ul class="dropdown-menu" role="menu">
									<li><a tabindex="-1" href="<?php echo e(route('tramite.buscar.index')); ?>">Documentos</a></li>
								</ul>
							</li>

							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
									Reportes <span class="caret"></span>
								</a>
								<ul class="dropdown-menu" role="menu">
									<li><a tabindex="-1" href="<?php echo e(route('tramite.reporte.index')); ?>">Reportes</a></li>
								</ul>
							</li>

							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
									Documentos <span class="caret"></span>
								</a>
								<ul class="dropdown-menu" role="menu">
									<li><a tabindex="-1"  href="<?php echo e(route('tramite.enproceso.index')); ?>">En Proceso</a></li>
									<li class="divider"></li>
									<li><a tabindex="-1" href="<?php echo e(route('tramite.recibir.index')); ?>">Por Recibir</a></li>
									<li><a tabindex="-1" href="<?php echo e(route('tramite.archivado.index')); ?>">Archivados</a></li>
								</ul>
							</li>

							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
									Catálogos <span class="caret"></span>
								</a>
								<ul class="dropdown-menu" role="menu">
									<li><a tabindex="-1" href="<?php echo e(route('tramite.catalogo.archivador')); ?>">Archivadores</a></li>
									<li class="divider"></li>
									<li><a tabindex="-1" href="<?php echo e(route('tramite.catalogo.tipoDocumento')); ?>">Tipos de Documentos</a></li>
									<li><a tabindex="-1" href="<?php echo e(route('tramite.formaexplorar.index')); ?>">Formas de Recepción</a></li>
									<li><a tabindex="-1" href="<?php echo e(route('tramite.tprioridadexplorar.index')); ?>">Tipos de Prioridades</a></li>
									<!--<li><a tabindex="-1" href="http://doceditor.regionCUSCO.gob.pe/tramite/public/tupa">Tupa</a></li>-->
								</ul>
							</li>

							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
									Administración<span class="caret"></span>
								</a>
								<ul class="dropdown-menu" role="menu">
									<li><a tabindex="-1" href="<?php echo e(route('tramite.administrador.entidades')); ?>">Entidades Externas</a></li>
									<li><a tabindex="-1" href="<?php echo e(route('tramite.administrador.unidades')); ?>">Unidades Orgánicas</a></li>
									<li class="divider"></li>
									<li><a tabindex="-1" href="<?php echo e(route('tramite.administrador.usuario')); ?>">Usuarios</a></li>
									<li><a tabindex="-1" href="<?php echo e(route('tramite.administrador.correlativos')); ?>">Correlativos</a></li>
									<!--<li><a tabindex="-1" href="bloques">Bloques</a></li>-->
									<li><a tabindex="-1" href="<?php echo e(route('tramite.administrador.dependencias')); ?>">Dependecias</a></li>
								</ul>
							</li>
						</ul>
					<?php endif; ?>
                    <ul class="nav navbar-nav navbar-right">
						<!-- Authentication Links -->
						<?php if(Auth::guest()): ?>
							<li><a href="<?php echo e(url('/login')); ?>">Login</a></li>
						<?php else: ?>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
									<?php echo e(Auth::user()->adm_name); ?> <span class="caret"></span>
								</a>

								<ul class="dropdown-menu" role="menu">
									<li><a href="<?php echo e(url('/logout')); ?>"><i class="fa fa-btn fa-sign-out"></i>Cerrar Session</a></li>
								</ul>
							</li>
						<?php endif; ?>
					</ul>
				</div>
			</div>
		</nav>
	</header>
<!--FIN  HEADER-->
	
	<section class="jumbotron">
		<div class="container">
			
		</div>
	</section>

	<!--CONTENIDO-->
	<?php echo $__env->yieldContent('contenido'); ?>

<?php echo $__env->yieldPushContent('scripts'); ?>
	<!--FIN DE CONTENIDO-->
	
	<!--FOOTER
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-xs-6">
					<p>&copy;Derechos Reservados 2016</p>
				</div>
				
			</div>
		</div>
	</footer>
	FIN FOOTER-->

</body>
</html><?php /**PATH C:\xampp\htdocs\sgd\resources\views\layouts\plantilla.blade.php ENDPATH**/ ?>