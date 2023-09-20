<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Put favicon.ico and apple-touch-icon(s).png in the images folder -->
  <link rel="icon" type="image/png" href="/img/favicon.png" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Listado de anexos</title>
  <link rel="stylesheet" href="<?php echo e(mix('css/app.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('css/estilos.css')); ?>">
</head>
<body>
<header id="expediente">
  <div>
    <nav role="navigation" class="navbar navbar-gorehco navbar-static-top">
      <div class="container">
        <div class="navbar-header"><a href="" class="navbar-brand">Municipalidad distrital de Monzon</a></div>
      </div>
    </nav>
    <section class="jumbotron"><!----></section>
    <div class="container">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel-group">
          <div class="panel panel-success">

            <div class="panel-heading">Listado de anexos del documento: <?php echo e($doc->numero_documento); ?></div>
            <div class="panel-body text-left">
              <?php if(count($doc->anexos)>0): ?>
                <?php $__currentLoopData = $doc->anexos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $anexo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <p>
                    <a
                      href="<?php echo e(route('tramite.documento.printPdf2',['idFile'=>$anexo->id,'psw'=>$doc->docu_contrasenia,'name'=>$doc->iddocumento.'.pdf'])); ?>"
                      target="_blank">anexo1</a>
                  </p>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <?php else: ?>
                <p>el documento no tiene anexos</p>
              <?php endif; ?>
            </div>

          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="col-md-10"><!----></div>
    </div>
  </div>
</header>
</body>
</html><?php /**PATH C:\xampp\htdocs\sgd\resources\views\tramite\documentos\listadoAnexos.blade.php ENDPATH**/ ?>