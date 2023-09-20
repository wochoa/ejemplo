<?php $__env->startSection('titulo'); ?>
    Nuevo| Tipo Documento
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contenido'); ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="container">
                    <ul class="nav nav-tabs card-header-tabs">
                        <router-link to="/tramite/catalogo/tipoDocumento" tag="li"><a href="">Explorar Tipos de Documentos</a></router-link>
                        <router-link to="/tramite/catalogo/tipoDocumento/create" tag="li" v-if="this.$route.name != 'CataTipoDocumentoEdit'"><a href="">Nuevo Tipo Documento</a></router-link>
                        <router-link :to="this.$route.path" tag="li" v-if="this.$route.name == 'CataTipoDocumentoEdit'"><a href="">Editar Tipo Documento</a></router-link>
                    </ul>
                </div>
               <router-view
                    route-tipo="<?php echo e(route('tramite.tipoDocumento.index')); ?>"
                    route-guardar="<?php echo e(route('tramite.tipoDocumento.store')); ?>"
                    route-get-tipo="<?php echo e(route('tramite.tipoDocumento.show','%s')); ?>"
                    :limit='<?php echo e(env("PAGINATION_LIMIT")); ?>'
               >
               </router-view>
            </div> 
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script type='text/javascript' src="<?php echo e(mix('js/tipoDocumento.js')); ?>"></script>
<?php $__env->stopPush(); ?>


<?php echo $__env->make('layouts.plantillaVue', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sgd\resources\views\tramite\catalogos\tipodocumento.blade.php ENDPATH**/ ?>