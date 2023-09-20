<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <meta name="funciones-hash" content="<?php echo e(\App\Http\Controllers\Siaf\PresupuestoController::funcionHash()); ?>">
    <title><?php echo e(config('app.name', 'Proyectos y Financiera')); ?></title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:500&display=swap" rel="stylesheet">
    <!-- <link href="https://fonts.googleapis.com/css?family=Solway&display=swap" rel="stylesheet"> -->
    <!-- Styles -->
    <link href="<?php echo e(mix('css/gastos.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(mix('css/styles.css')); ?>" rel="stylesheet">
</head>
<body>
    <div id="app"></div>

    <!-- Scripts -->
    <script>
        const hashMd5 = JSON.parse('<?php echo json_encode((Object)[
        'funciones'=>\App\Http\Controllers\Siaf\PresupuestoController::funcionHash(),
        'ubigeo'=>\App\Http\Controllers\Proy\ProyectoController::ubigeoHash(),
        'proyectos'=>\App\Http\Controllers\Proy\ProyectoController::ProyectosHash(),
        'metas'=>\App\Http\Controllers\Proy\GastosController::metasHash(),
        'oficinas'=>\App\Http\Controllers\Proy\ProyectoController::oficinasHash(),
        'estados'=>\App\Http\Controllers\Proy\ProyectoController::estadosHash(),
        'fuenteFinanciamiento'=>\App\Http\Controllers\Siaf\PresupuestoController::fuenteFinanciamientoHash(),
        'especificaDetalleGasto'=>\App\Http\Controllers\Siaf\PresupuestoController::especificaDetalleGastoHash(),
        'especificaGasto'=>\App\Http\Controllers\Siaf\PresupuestoController::especificaGastoHash(),
        'componente'=>\App\Http\Controllers\Siaf\PresupuestoController::componenteNombreHash(),
        'dispositivosLegales'=>\App\Http\Controllers\Siaf\PresupuestoController::dispositivosLegalesHash(),
        'maestroDocumento'=>\App\Http\Controllers\Siaf\PresupuestoController::maestroDocumentoHash(),
        'programa'=>\App\Http\Controllers\Siaf\PresupuestoController::programasComponenteHash(),
        'divisionesFuncionales'=>\App\Http\Controllers\Siaf\PresupuestoController::divisionesFuncionalesHash(),
        'gruposFuncionales'=>\App\Http\Controllers\Siaf\PresupuestoController::gruposFuncionalesHash(),
        'actividad'=>\App\Http\Controllers\Proy\ActividadObraController::actividadHash(),
        'actividadAccion'=>\App\Http\Controllers\Proy\ActividadObraController::obtenerActividadAccionHash(),
        'actProyecto'=>\App\Http\Controllers\Siaf\PresupuestoController::actProyectoHash(),
    ]); ?>')
    </script>
    <script src="<?php echo e(mix('js/manifest.js')); ?>"></script>
    <script src="<?php echo e(mix('js/vendor.js')); ?>"></script>
    <script src="<?php echo e(mix('js/proyectos.js')); ?>"></script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\sgd\resources\views\proyectos.blade.php ENDPATH**/ ?>