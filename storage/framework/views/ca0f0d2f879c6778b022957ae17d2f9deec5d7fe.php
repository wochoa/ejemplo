<?php $__env->startSection('titulo'); ?> Documentos| Plantilla
<?php $__env->stopSection(); ?> 
<?php $__env->startSection('contenido'); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="container">
                <ul class="nav nav-tabs card-header-tabs">
                    <router-link to="/tramite/plantilla" tag="li"><a href="#">Explorar Plantilla</a></router-link>
                    <router-link to="/tramite/plantilla/create" tag="li" v-if="this.$route.name != 'DocuPlantillaEdit'"><a href="#">Nueva Plantilla</a></router-link>
                    <router-link :to="this.$route.path" tag="li" v-if="this.$route.name == 'DocuPlantillaEdit'"><a href="#">Editar Plantilla</a></router-link>
                </ul>
            </div>

            <router-view
                    route-usuarios-derivar="<?php echo e(route('tramite.usuarios.derivar')); ?>"
                    route-guardar-plantilla="<?php echo e(route('tramite.plantillaC.store')); ?>"
                    route-get-plantilla="<?php echo e(route('tramite.plantillaC.show','%s')); ?>"
                    route-plantilla-list="<?php echo e(route('tramite.plantillaC.index')); ?>"
                    :prioridades='<?php echo $prioridades; ?>'
                    user-id='<?php echo Auth::user()->id; ?>'
                    :usuario='<?php echo e(json_encode($usuario), true); ?>'
                    :recepciones='<?php echo json_encode($recepciones); ?>'
                    :limit='<?php echo e(env("PAGINATION_LIMIT")); ?>'
                    csrf="<?php echo e(csrf_token()); ?>"
            ></router-view>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script src="<?php echo e(mix('js/makePlantilla.js')); ?>"></script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.plantillaVue', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sgd\resources\views/tramite/documentos/makePlantilla.blade.php ENDPATH**/ ?>