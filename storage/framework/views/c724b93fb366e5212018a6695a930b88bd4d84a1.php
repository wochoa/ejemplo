<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Put favicon.ico and apple-touch-icon(s).png in the images folder -->
    <link rel="icon" type="image/png" href="/img/favicon.png" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

      <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
      <link rel="stylesheet" href="<?php echo e(asset('css/estilos.css')); ?>">
      <link rel="stylesheet" href="<?php echo e(asset('css/styles.css')); ?>">
  </head>

  <body style="background: rgb(194,185,185);
               background: linear-gradient(29deg, rgba(194,185,185,1) 27%, rgba(255,255,255,1) 100%); backgorund-no" >

        <?php if(Auth::guest()): ?>
        <div class="Navbar">
          <div class="Navbar-wrapper">
            <form action="">
              <a href="<?php echo e(route('tramite.buscar.buscarDigital')); ?>" target="_blank" class="btn btn-sm btn-warning">Buscar Documentos Firmados</a>
              <a href="<?php echo e(route('tramite.buscar.buscarDocExterno')); ?>" target="_blank" class="btn btn-sm btn-success">Buscar Documentos Externos</a>
            </form>
            <div id="expediente">
              <buscar-expediente-gen
                route-expediente="<?php echo e(route('tramite.expediente.index')); ?>"
                route-documento="<?php echo e(route('tramite.buscar.buscarExpedienteModal','%s')); ?>"
              >
              </buscar-expediente-gen>
            </div>
          </div>
        </div>
        <?php else: ?>
        <nav class="navbar navbar-gorehco">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
          </button>
          <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
              <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                      <?php echo e(Auth::user()->adm_name); ?> <span class="caret"></span>
                  </a>

                  <ul class="dropdown-menu" role="menu">
                      <li><a href="<?php echo e(url('/logout')); ?>"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                  </ul>
              </li>
            </ul>

          </div><!--/.nav-collapse -->
        </nav>
        <?php endif; ?>


    <div class="container-fluid content">
        <?php echo $__env->yieldContent('content'); ?>
    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo e(asset('js/jquery-3.2.1.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(mix('js/manifest.js')); ?>"></script>
    <script src="<?php echo e(mix('js/vendor.js')); ?>"></script>
    <script src="<?php echo e(asset('js/expediente.js')); ?>"></script>
  </body>
</html>
<?php /**PATH C:\xampp\htdocs\sgd\resources\views/layouts/tema.blade.php ENDPATH**/ ?>