<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!-- Put favicon.ico and apple-touch-icon(s).png in the images folder -->
    <link rel="icon" type="image/png" href="/img/favicon.png" />
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
    <div id="assistance">
        <header>
            <?php
                $routes=[
                  'getRoute'			  =>(Object)['route'=>route('getRoute'),				'can'=>Auth::user()->can('getRoute')],
                  'tramite.documento.json'=>(Object)['route'=>route('tramite.documento.json','all.json'),'can'=>Auth::user()->can('tramite.documento.json')],

                ];
            ?>
            <nav class="navbar navbar-gorehco navbar-static-top" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navegacion-fm">
                            <span class="sr-only">Desplegar / Ocultar Menu</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="<?php echo e(route('principal')); ?>" class="img">
                            <img src="/img/logo1.png" alt="" height=48 />
                        </a>
                    </div>
                    <div class="collapse navbar-collapse" id="navegacion-fm">
                        <ul class="nav navbar-nav navbar-right">
                            <!-- Authentication Links -->
                            <?php if(Auth::guest()): ?>
                                <li><a href="<?php echo e(route('login')); ?>">Login</a></li>
                            <?php else: ?>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                        <?php echo e(Auth::user()->adm_name); ?> <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <a href="<?php echo e(route('principal')); ?>">
                                                <span class="icon icon-home "></span>
                                                Menu principal
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo e(route('logout')); ?>"><i class="fa fa-btn fa-sign-out"></i>Cerrar Session</a>
                                        </li>
                                    </ul>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="container">
                            <ul class="nav nav-tabs card-header-tabs">
                                <router-link to="/interoperabilidad/despachos" tag="li"><a href="">Documentos enviados</a></router-link>
                                <router-link to="/interoperabilidad/recepciones" tag="li"><a href="">Documentos recibidos</a></router-link>
                            </ul>
                        </div>
                        <router-view
                            :routes="<?php echo e(json_encode($routes)); ?>"
                            titulo="<?php echo e(env('TITULO_PAGINA')); ?>"
                            dependencia='<?php echo auth()->user()->dependencia->sede->depe_nombre; ?>'
                        >
                        </router-view>
                    </div>
                </div>
            </div>
        </header>

    </div>
    <script src="<?php echo e(asset('js/jquery-3.2.1.min.js')); ?>"></script>
    <script src="<?php echo e(mix('js/manifest.js')); ?>"></script>
    <script src="<?php echo e(mix('js/vendor.js')); ?>"></script>
    <script src="<?php echo e(mix('js/assistances.js')); ?>"></script>
    <?php echo $__env->yieldPushContent('scripts'); ?>
</body>
</html>


<?php /**PATH C:\xampp\htdocs\sgd\resources\views\interoperabilidad\index.blade.php ENDPATH**/ ?>