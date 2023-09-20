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
                  'assistance.rrhh'       =>(Object)['route'=>route('assistance.rrhh'),         'can'=>Auth::user()->can('assistance.rrhh')],
                  'assistance.manager'    =>(Object)['route'=>route('assistance.manager'),      'can'=>Auth::user()->can('assistance.manager')],
                  'tramite.documento.json'=>(Object)['route'=>route('tramite.documento.json','all.json'),'can'=>Auth::user()->can('tramite.documento.json')],

                  'login'                 =>(Object)['route'=>route('login'),                   'can'=>Auth::user()->can('login')],
                  'logout'                =>(Object)['route'=>route('logout'),                  'can'=>Auth::user()->can('logout')],
                  'principal'			  =>(Object)['route'=>route('principal')],
                ];
                $auth=['guest'=>Auth::guest()]
            ?>
            <assistance-menu
                :routes="<?php echo e(json_encode($routes)); ?>"
                :auth="<?php echo e(json_encode($auth)); ?>"
                titulo="<?php echo e(env('TITULO_PAGINA')); ?>"
                :user='<?php echo e(Auth::user()); ?>'
            >
            </assistance-menu>
        </header>


        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <router-view
                        :tipo="<?php echo 1; ?>"
                        :limit='<?php echo e(env("PAGINATION_LIMIT")); ?>'
                    ></router-view>

                </div>
            </div>
        </div>
    </div>
    <script src="<?php echo e(asset('js/jquery-3.2.1.min.js')); ?>"></script>
    <script src="<?php echo e(mix('js/manifest.js')); ?>"></script>
    <script src="<?php echo e(mix('js/vendor.js')); ?>"></script>
    <script src="<?php echo e(mix('js/assistances.js')); ?>"></script>
    <?php echo $__env->yieldPushContent('scripts'); ?>
</body>
</html>

<?php /**PATH C:\xampp\htdocs\sgd\resources\views\assistance\inicio.blade.php ENDPATH**/ ?>