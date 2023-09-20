<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
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
  <header id="admin">
      <?php
          $routes=[
            'getRoute'										  =>(Object)['route'=>route('getRoute'),										'can'=>Auth::user()->can('getRoute')],
            'administrador.roles.rol'                         =>(Object)['route'=>route('administrador.roles.rol'),                         'can'=>Auth::user()->can('administrador.roles.rol')],
            'administrador.usuarios.usuario'                  =>(Object)['route'=>route('administrador.usuarios.usuario'),                  'can'=>Auth::user()->can('administrador.usuarios.usuario')],
            'administrador.publicaciones.comunicacionIntena'  =>(Object)['route'=>route('administrador.publicaciones.comunicacionIntena'),  'can'=>Auth::user()->can('administrador.publicaciones.comunicacionIntena')],
            'tramite.unidades.obtenerUnidadOrganica'	      =>(Object)['route'=>route('tramite.unidades.obtenerUnidadOrganica'),		    'can'=>Auth::user()->can('tramite.unidades.obtenerUnidadOrganica')],
            'administrador.rol.obtenerRoles'				  =>(Object)['route'=>route('administrador.rol.obtenerRoles'),					'can'=>Auth::user()->can('administrador.rol.obtenerRoles')],
            'tramite.usuarios.checkUsuario'					  =>(Object)['route'=>route('tramite.usuarios.checkUsuario'),					'can'=>Auth::user()->can('tramite.usuarios.checkUsuario')],
            'tramite.documento.jsonAdministrador'			  =>(Object)['route'=>route('tramite.documento.jsonAdministrador','all.json')],
            'tramite.persona.dni'							  =>(Object)['route'=>route('tramite.persona.dni','%s'),						'can'=>Auth::user()->can('tramite.persona.dni')],
            'administrador.correos'                           =>(Object)['route'=>route('administrador.correos'),                           'can'=>Auth::user()->can('administrador.correos')],
            'administrador.holidays'                          =>(Object)['route'=>route('administrador.holidays'),                          'can'=>Auth::user()->can('administrador.holidays')],

            'login'                                           =>(Object)['route'=>route('login'),                                           'can'=>Auth::user()->can('login')],
            'logout'                                          =>(Object)['route'=>route('logout'),                                          'can'=>Auth::user()->can('logout')],
            'principal'										  =>(Object)['route'=>route('principal')],
          ];
          $auth=['guest'=>Auth::guest()]
      ?>
            <menu-administrador
            :routes="<?php echo e(json_encode($routes)); ?>"
            :auth="<?php echo e(json_encode($auth)); ?>"
            titulo="<?php echo e(env('TITULO_PAGINA')); ?>"
            :user='<?php echo e(Auth::user()); ?>'
            >
            </menu-administrador>
  </header>


  <div  id="app">
    <?php echo $__env->yieldContent('contenido'); ?>
  </div>
<script src="<?php echo e(asset('js/jquery-3.2.1.min.js')); ?>"></script>
<script src="<?php echo e(mix('js/manifest.js')); ?>"></script>
<script src="<?php echo e(mix('js/vendor.js')); ?>"></script>
<script src="<?php echo e(mix('js/administrador.js')); ?>"></script>
<?php echo $__env->yieldPushContent('scripts'); ?>
</body>
</html>

<?php /**PATH C:\xampp\htdocs\sgd\resources\views\layouts\plantillaAdministrador.blade.php ENDPATH**/ ?>