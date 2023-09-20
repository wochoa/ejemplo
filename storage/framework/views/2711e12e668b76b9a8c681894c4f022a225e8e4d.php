<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <title>Solicitud de tramite</title>
</head>
<body>
    <h1 style="text-align: center; background-color: #4F81BD">Notificación de Trámite Documentario</h1>
    <p>Estimado(a) Sr(a): <strong><?php echo e($doc->docu_firma); ?></strong>
        Se le comunica a usted que hemos recibido su trámite.</p>
    <p>Tan pronto como podamos nos pondremos en contacto con usted por este medio.</p>
    <ul>
        <li><strong>Dependencia Remitida: </strong> <?php echo e($doc->dependencia->depe_nombre); ?></li>
        <li><strong>Asunto: </strong><?php echo e($doc->docu_asunto); ?></li>
        <li><strong>Entidad: </strong><?php echo e($doc->docu_detalle); ?></li>
        <li><strong>Firmante: </strong><?php echo e($doc->docu_firma); ?></li>
        <?php if($doc->docu_dni!=null): ?>
            <li><strong>DNI: </strong><?php echo e($doc->docu_dni); ?></li>
        <?php elseif($doc->docu_ruc!=null): ?>
            <li><strong>RUC: </strong><?php echo e($doc->docu_ruc); ?></li>
        <?php endif; ?>
        <li><strong>Teléfono: </strong><?php echo e($doc->docu_telef); ?></li>
        <li><strong>eMail: </strong><?php echo e($doc->docu_emailorigen); ?></li>
    </ul>
    <img src="<?php echo e(asset('https://www.regionCUSCO.gob.pe/img/logosgrh/Logo-Oficial-2-300x98.png')); ?>" alt="Gobierno Regional Huánuco" />
    <p>Por favor no responder a esta dirección de correo, ya que este buzón es de envío automático.</p>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\sgd\resources\views\mail\MesaElectronica\solicitudTramite.blade.php ENDPATH**/ ?>