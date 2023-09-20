<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>
    <?php $__env->startSection('titulo'); ?>
      <?php echo e(env("TITULO_PAGINA")); ?>

    <?php echo $__env->yieldSection(); ?>
  </title>
  <!-- <link href="https://fonts.googleapis.com/css?family=Solway&display=swap" rel="stylesheet"> -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo e(mix('css/app.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('css/estilos.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('css/styles.css')); ?>">
  <base href="<?php echo e(route('principal')); ?>">
</head>

<body>
<header id="admin">
  <?php
    $routes=[
      'administrador.administrador.administrador' =>(Object)['route'=>route('administrador.administrador.administrador'), 'can'=>Auth::user()->can('administrador.administrador.administrador')],
      'tramite.inicio'                            =>(Object)['route'=>route('tramite.inicio'),                            'can'=>Auth::user()->can('tramite.inicio')],
      'controversia.controversia.controversia'    =>(Object)['route'=>route('controversia.controversia.controversia'),    'can'=>Auth::user()->can('controversia.controversia.controversia')],
      'proyectoPresupuesto.inicio'                =>(Object)['route'=>route('proyectoPresupuesto.inicio'),                'can'=>Auth::user()->can('proyectoPresupuesto.inicio')],
      'proyectos.list'                            =>(Object)['can'=>Auth::user()->can('proyectos.show')],
      'assistance.inicio'                         =>(Object)['route'=>route('assistance.inicio'),                         'can'=>Auth::user()->can('assistance.inicio')],
      'mpv.view'                                 =>(Object)['route'=>route('mpv.view'),                                   'can'=>Auth::user()->can('mpv.view')],
      'interoperabilidad.view'                   =>(Object)['route'=>route('interoperabilidad.view'),                     'can'=>Auth::user()->can('interoperabilidad.view')],
      'login'                                     =>(Object)['route'=>route('login'),                                     'can'=>Auth::user()->can('login')],
      'logout'                                    =>(Object)['route'=>route('logout'),                                    'can'=>Auth::user()->can('logout')],
      'principal'							      =>(Object)['route'=>route('principal')],
      'normatividad.view'                         =>(Object)['can'=>Auth::user()->can('normatividad.view')],

    ];
    $auth=['guest'=>Auth::guest()]
  ?>
  <menu-general
    :routes="<?php echo e(json_encode($routes)); ?>"
    :auth="<?php echo e(json_encode($auth)); ?>"
    titulo="<?php echo e(env('TITULO_PAGINA')); ?>"
    user-name='<?php echo e(Auth::user()->adm_name); ?>'
    user-sede='<?php echo Auth::user()->dependencia->sede->iddependencia; ?>'
    urlpagina="<?php echo e(env('APP_URL')); ?>"
  >
  </menu-general>
</header>


<div id="app" style="display: none;">
  <?php echo $__env->yieldContent('contenido'); ?>
</div>
<script src="<?php echo e(asset('js/jquery-3.2.1.min.js')); ?>"></script>
<script src="<?php echo e(mix('js/manifest.js')); ?>"></script>
<script src="<?php echo e(mix('js/vendor.js')); ?>"></script>
<script src="<?php echo e(mix('js/administrador.js')); ?>"></script>
<?php echo $__env->yieldPushContent('scripts'); ?>
</body>
</html>

<?php /**PATH C:\xampp\htdocs\sgd\resources\views\homeModulos.blade.php ENDPATH**/ ?>