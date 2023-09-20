<?php $__env->startSection('content'); ?>

<div class="Login">
    <div class="pt-2 pb-4" align="center">
        <img src="<?php echo e(asset("img/logooficial.png")); ?>" width="250" class="img-fluid">
        
        
    </div>
    <div class="panel panel-default" style="background-color: #cccccc !important;">
        <div class="panel-heading text-center text-light" style="background: #9E0B26ad !important;"><h4>Iniciar Sesión</h4></div>
        <div class="panel-body text-center">
            <!-- <img class="LoginLogo img-fluid" src="<?php echo e(asset("img/Logo-Oficial-2-300x98.png")); ?>">
            <br><br> -->
            <small>Inicie sesión con su cuenta para realizar trámites digitales</small>
            <hr>
            <form class="form-horizontal" role="form" method="POST" action="<?php echo e(url('/login')); ?>">
                <?php echo e(csrf_field()); ?>


                <div class="form-group<?php echo e($errors->has('adm_email') ? ' has-error' : ''); ?>">
                    <div class="LoginGroup">
                        <span class="glyphicon glyphicon-user"></span>
                        <input 
                            id="adm_email" 
                            type="text" 
                            class="form-control" 
                            name="adm_email"
                            value="<?php echo e(old('adm_email')); ?>" 
                            onkeyup="javascript:this.value=this.value.toUpperCase();"
                            placeholder="Usuario"
                        />
                    </div>

                    <?php if($errors->has('adm_email')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('adm_email')); ?></strong>
                        </span>
                    <?php endif; ?>
                
                </div>
                <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                    <div class="LoginGroup">
                        <span class="glyphicon glyphicon-lock"></span>
                        <input id="password" type="password" class="form-control" name="password" 
                        placeholder="Contraseña">
                    </div>
                    <?php if($errors->has('password')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('password')); ?></strong>
                        </span>
                    <?php endif; ?>
                
                </div>
                <div class="LoginActions">
                    
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember"> Recordarme
                        </label>
                    </div>
                    <button  type="submit" class="btn btn-primary LoginButton">
                        <i class="fa fa-btn fa-sign-in"></i>Iniciar Sesión
                    </button>
                
                </div>
            </form>
        </div>
        <div class="panel-footer" style="background-color: #cccccc !important;">
            <a href="/registro/mesa-partes-virtual/1" class="btn btn-sm btn-info btn-block">Acceso a Mesa de partes virtual</a>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.tema', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sgd\resources\views\auth\login.blade.php ENDPATH**/ ?>