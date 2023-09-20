<!doctype html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
  <title>Solicitud de tramite</title>
</head>
<body>
<h1 style="text-align: center; background-color: #4F81BD">Notificación de Aceptación de Trámite Documentario</h1>
<p>Estimado(a) Sr(a): <strong><?php echo e($doc->docu_firma); ?></strong>
  Se le comunica a usted que el registro de su trámite ha sido validado.</p>
<ul>
  <li>Entidad: <?php echo e($doc->docu_detalle); ?></li>
  <li>Firmante: <?php echo e($doc->docu_firma); ?></li>
  <?php if($doc->docu_dni!=null): ?>
    <li>DNI: <?php echo e($doc->docu_dni); ?></li>
  <?php elseif($doc->docu_ruc!=null): ?>
    <li>RUC: <?php echo e($doc->docu_ruc); ?></li>
  <?php endif; ?>
  <li>Teléfono: <?php echo e($doc->docu_telef); ?></li>
  <li>eMail: <?php echo e($doc->docu_emailorigen); ?></li>
</ul>
<p>Recuerde que puede hacer el seguimiento de su trámite <a href="<?php echo e(route('tramite.buscar.buscarExpedienteModal', $doc->docu_idexma)); ?>">
aquí
  </a> o a través de nuestra página Web usando el Registro : <strong><?php echo e($doc->iddocumento); ?></strong> y Expediente: <strong><?php echo e($doc->docu_idexma); ?></strong> </p>

<p><?php echo e($dependencia->depe_nombre); ?></p>

    <img src="<?php echo e(asset('https://www.regionCUSCO.gob.pe/img/logosgrh/Logo-Oficial-2-300x98.png')); ?>" alt="Gobierno Regional Huánuco" />
    <p>Por favor no responder a esta dirección de correo, ya que este buzón es de envío automático.</p>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\sgd\resources\views\mail\MesaElectronica\tramiteAceptado.blade.php ENDPATH**/ ?>