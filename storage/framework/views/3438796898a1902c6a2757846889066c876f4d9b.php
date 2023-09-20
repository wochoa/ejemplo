<?php $__env->startSection('titulo'); ?> Solicitar|Papeleta
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenido'); ?>
<div  class="container-fluid">

   <div class="row">
      <div class="col-sm-12">
         <div class="container">
            <ul class="nav nav-tabs card-header-tabs">
               <router-link to="/tramite/papeleta/solicitarPapeleta" tag="li"><a href="">Papeletas Solicitadas</a></router-link>
               <router-link to="/tramite/papeleta/solicitarPapeleta/create" tag="li" v-if="this.$route.name != 'OperPapeletaEdit'"><a href="">Nueva Papeleta</a></router-link>
               <router-link :to="this.$route.path" tag="li" v-if="this.$route.name == 'OperPapeletaEdit'"><a href="">Editar Papeleta</a></router-link>
            </ul>
         </div>
   
         <router-view
                  route-papeletas="<?php echo e(route('tramite.papeletas.index')); ?>"
                  route-guardar="<?php echo e(route('tramite.documento.store')); ?>"
                  route-get-papeleta="<?php echo e(route('tramite.papeletas.show','%s')); ?>"
                  route-correlativo="<?php echo e(route('tramite.correlativo.buscar')); ?>"
                  route-derivar="<?php echo e(route('tramite.documento.documentoDerivar')); ?>"
                  route-eliminar-derivacion="<?php echo e(route('tramite.documento.eliminarDerivacion')); ?>"
                  route-archivar="<?php echo e(route('tramite.documento.documentoArchivar')); ?>"
                  :limit="<?php echo e(env('PAGINATION_LIMIT')); ?>"
                  user-id='<?php echo Auth::user()->id; ?>'
                  user-dependencia='<?php echo Auth::user()->depe_id; ?>'
                  user-cargo='<?php echo e(Auth::user()->adm_cargo); ?>'
                  user-name='<?php echo e(Auth::user()->adm_name." ".Auth::user()->adm_lastname); ?>'
                  user-inicial='<?php echo e(Auth::user()->adm_inicial); ?>'
                  :tipo-doc-papeleta='<?php echo e(env("TIPO_DOC_PAPELETA")); ?>'
         >

         </router-view>
      </div>
   </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script type='text/javascript' src="<?php echo e(mix('js/papeleta.js')); ?>"></script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.plantillaVue', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sgd\resources\views\tramite\tramiteVarios\solicitarPapeleta.blade.php ENDPATH**/ ?>