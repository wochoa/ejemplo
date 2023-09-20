<!DOCTYPE html>
<html lang="es">

<head>
    <title>
        <?php $__env->startSection('titulo'); ?>
            <?php echo e(env("TITULO_PAGINA")); ?>

        <?php echo $__env->yieldSection(); ?>
    </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!--MENSAJE ALERTA-->

    <!--FIN MENSAJE ALERTA-->

    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>">
    <?php echo $__env->yieldPushContent('style'); ?>
    <style>
        table, th, td {
            font-size:8px !important;
            font-family: Tahoma;
        }

        /*------------------------------class = "table"------------------------------------*/
        table{
            border-collapse: collapse;
            text-align: left;
            width: 100%;
            font-family: Tahoma;
            background: #fff;
            /*border: 1px solid black;*/
            margin-bottom: 2px !important;
        }
        table.modif{
             width: 1000px !important;
         }

        table thead th {
            color: #333333;
            padding-top: 2px;
            padding-bottom: 2px;
            padding-left: 3px;
            padding-right: 3px;
            font-size: 11px;
            font-weight: bold;
            border: 1px solid #DDDDDD;
        }

        table tbody td {
            color: #333333;
            padding: 1px !important;
            font-size: 11px;
            font-weight: normal;
            /*border: 1px solid #DDDDDD;*/
            border-top: 1px solid #DDDDDD;
            border-left: 1px solid #DDDDDD;
            border-right: 1px solid #DDDDDD;
        }
        /*------------------------------class = "table"------------------------------------*/

        /*------------------------------class = "primary"------------------------------------*/
        .info {
            background-color: #D9EDF7;
        }

        .info th {
            background-color: #D9EDF7;
        }

        .info td {
            background-color: #D9EDF7;
        }
        /*------------------------------class = "primary"------------------------------------*/

        /*------------------------------class = "info"------------------------------------*/
        .active {
            background-color: #F5F5F5;
        }

        .active th {
            background-color: #F5F5F5;
        }

        .active td {
            background-color: #F5F5F5;
        }
        /*------------------------------class = "info"------------------------------------*/
        .total td{
            border-bottom: hidden;
            border-left: hidden;
        }
        .sin-borde, .sin-borde td, .sin-borde th{
            border-top: hidden;
            border-left: hidden;
            border-right: hidden;
        }
        .con-borde-bottom td{
            border-style: dotted;
            border-width: 1px;
        }
    </style>
</head>

<body>
        <?php echo $__env->yieldContent('content'); ?>
    <script src="<?php echo e(asset('js/jquery-3.2.1.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jQuery.print.js')); ?>"></script>
    <?php echo $__env->yieldPushContent('scripts'); ?>
</body>
</html><?php /**PATH C:\xampp\htdocs\sgd\resources\views\layouts\proyectos\reporte.blade.php ENDPATH**/ ?>