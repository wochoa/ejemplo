<?php $__env->startSection('titulo'); ?> Documentos| En Proceso
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenido'); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="container ">
                <ul class="nav nav-tabs card-header-tabs">
                    <router-link to="/tramite/enproceso" tag="li"><a href="#">Explorar Documentos en proceso</a></router-link>
                    <router-link to="/tramite/enproceso/create" tag="li" v-if="this.$route.name.search('Generado')<0 && this.$route.name !='DocuEdit'"><a href="#">Nuevo Documento</a></router-link>
                    <router-link :to="this.$route.path" tag="li" v-if="this.$route.name.search('Generado')<0 && (this.$route.name ==='DocuEdit'||this.$route.name === 'DocuGeneradoEdit2')"><a href="#">Editar Documento</a></router-link>

                    <router-link tag='li' to="/tramite/docs-generados" v-if="this.$route.name.search('Generado')>0"><a>Explorar Documentos generados</a></router-link>
                    <router-link tag='li' to="/tramite/docs-generados/create" v-if="this.$route.name.search('Generado')>0 && this.$route.name != 'DocuGeneradoEdit' && this.$route.name != 'DocuGeneradoEdit2'"><a>Nuevo Documento generado</a></router-link>
                    <router-link tag='li' :to="this.$route.path" v-if="this.$route.name.search('Generado')>0 && this.$route.name === 'DocuGeneradoEdit'"><a>Editar documento generado</a></router-link>
                    <router-link tag='li' :to="this.$route.path" v-if="this.$route.name === 'DocuGeneradoEdit2'"><a>Editar documento generado</a></router-link>

                </ul>
            </div>
            <router-view
                    route-correlativo="<?php echo e(route('tramite.correlativo.buscar')); ?>"
                    route-usuarios-derivar="<?php echo e(route('tramite.usuarios.derivar')); ?>"
                    route-documentos-list="<?php echo e(route('tramite.documento.index')); ?>"
                    route-devolver="<?php echo e(route('tramite.documento.devolverProceso')); ?>"
                    route-eliminar-derivacion="<?php echo e(route('tramite.documento.eliminarDerivacion')); ?>"
                    route-liberar-documento="<?php echo e(route('tramite.documento.liberarDocumento')); ?>"
                    route-generar-observacion="<?php echo e(route('tramite.documento.generarObservacion')); ?>"
                    route-derivar="<?php echo e(route('tramite.documento.documentoDerivar')); ?>"
                    route-archivar="<?php echo e(route('tramite.documento.documentoArchivar')); ?>"
                    route-adjuntar="<?php echo e(route('tramite.documento.documentoAdjuntar')); ?>"
                    route-invoker-get="<?php echo e(route('invoker.getArguments')); ?>"
                    route-invoker-post="<?php echo e(route('invoker.postArguments')); ?>"
                    rutaurl="<?php echo e(env('APP_URL')); ?>"
                    route-print-pdf="<?php echo e(route('tramite.documento.printPdf','%s')); ?>"
                    route-print="<?php echo e(route('tramite.docs.generados.print','%s')); ?>"
                    route-guardar-doc-generado="<?php echo e(route('tramite.docGenerado.store')); ?>"
                    route-get-doc-generado="<?php echo e(route('tramite.docGenerado.show','%s')); ?>"
                    route-doc-generado-list="<?php echo e(route('tramite.docGenerado.index')); ?>"
                    route-plantillas="<?php echo e(route('tramite.plantillaC.index')); ?>"
                    route-webservice-dni="<?php echo e(route('tramite.persona.dni','%s')); ?>"
                    route-webservice-ruc="<?php echo e(route('tramite.persona.ruc','%s')); ?>"
                    route-webservice-entidad="<?php echo e(route('tramite.documento.entidadByCategoria','%s')); ?>"
                    route-archivador="<?php echo e(route('tramite.papeletas.obtenerArchivador')); ?>"
                    :can-interoperabilidad="<?php echo Auth::user()->can('interoperabilidad.view') ? 'true' : 'false'; ?>"
                    :can-super="<?php echo Auth::user()->can('admin') ? 'true' : 'false'; ?>"
                    route-cuo="<?php echo e(route('tramite.documento.cuo')); ?>"
                    :prioridades='<?php echo $prioridades; ?>'
                    now="<?php echo e(date('Y-m-d')); ?>"
                    user-id='<?php echo Auth::user()->id; ?>'
                    :usuario='<?php echo e(json_encode($usuario)); ?>'
                    :recepciones='<?php echo json_encode($recepciones); ?>'
                    :limit='<?php echo e(config("proyectos.pagination_limit")); ?>'
            ></router-view>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
<script src="<?php echo e(mix('js/enproceso.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.plantillaVue', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sgd\resources\views\tramite\documentos\proceso.blade.php ENDPATH**/ ?>