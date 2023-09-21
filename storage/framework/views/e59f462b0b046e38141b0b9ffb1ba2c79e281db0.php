<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!-- Put favicon.ico and apple-touch-icon(s).png in the images folder -->
    <link rel="icon" type="image/png" href="/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        <?php $__env->startSection('titulo'); ?>
        <?php echo e(env("TITULO_PAGINA")); ?>

        <?php echo $__env->yieldSection(); ?>
        </title>
    <link rel="stylesheet" href="<?php echo e(mix('css/app.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('css/estilos.css')); ?>">
</head>

<body>
    <div>
        <nav class="navbar navbar-gorehco navbar-static-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                <a href="#" class="navbar-brand"><?php echo e(env('TITULO_PAGINA')); ?></a>
                </div>
                <div class="collapse navbar-collapse" id="navegacion-fm">
                   
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                        <li v-else class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                <?php echo e(Auth::user()->adm_name); ?> <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="<?php echo e(route('logout')); ?>"><i class="fa fa-btn fa-sign-out"></i>Cerrar Session</a></li>
                            </ul>
                        </li>
                </ul>
                </div>
            </div>
        </nav>
        
    </div>
    <header id="logeo">
        <admin-cambiar-contrasenia
            route-inicio="<?php echo e(route('tramite.inicio')); ?>"
            route-user="<?php echo e(route('tramite.usuarios.cambiarContrasenia')); ?>"
            route-principal="<?php echo e(route('principal')); ?>"
            route-webservice-dni="<?php echo e(route('tramite.persona.dni','%s')); ?>"
            :user='<?php echo e($user); ?>'
            :tipo='<?php echo 1; ?>'
        >
        </admin-cambiar-contrasenia>
    </header>
  

  
<script src="<?php echo e(asset('js/jquery-3.2.1.min.js')); ?>"></script>
<script src="<?php echo e(mix('js/manifest.js')); ?>"></script>
<script src="<?php echo e(mix('js/vendor.js')); ?>"></script>
<script src="<?php echo e(mix('js/logeo.js')); ?>"></script>
</body>
</html>

<?php /**PATH C:\xampp\htdocs\sgd\resources\views/tramite/primerLogeo.blade.php ENDPATH**/ ?>