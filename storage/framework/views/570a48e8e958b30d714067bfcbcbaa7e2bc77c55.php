<?php $__env->startSection('content'); ?>

<div class="Login">
    <div class="pt-2 pb-4" align="center">
        <img src="<?php echo e(asset("img/login.png")); ?>" width="50%" class="img-fluid">
        
        
    </div>
    <div class="panel panel-default" style="background-color: #f8f8f8b0 !important;">
        <div class="panel-heading text-center text-light" style="background: #9e0b2699 !important;"><h4>Iniciar Sesión</h4></div>
        <div class="panel-body text-center">
            <!-- <img class="LoginLogo img-fluid" src="<?php echo e(asset("img/Logo-Oficial-2-300x98.png")); ?>">
            <br><br> -->
            <small>Inicie sesión con su cuenta para realizar trámites digitales</small>
            <hr>
            <form class="form-horizontal" role="form" method="POST" action="<?php echo e(url('/login')); ?>">
                <?php echo e(csrf_field()); ?>


                <div class="form-group<?php echo e($errors->has('adm_email') ? ' has-error' : ''); ?>">
                    <div class="LoginGroup">
                        <!-- <span class="glyphicon glyphicon-user"></span> -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
  <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
</svg>
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
                        <!-- <span class="glyphicon glyphicon-lock"></span> -->
                        
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-key" viewBox="0 0 16 16">
  <path d="M0 8a4 4 0 0 1 7.465-2H14a.5.5 0 0 1 .354.146l1.5 1.5a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0L13 9.207l-.646.647a.5.5 0 0 1-.708 0L11 9.207l-.646.647a.5.5 0 0 1-.708 0L9 9.207l-.646.647A.5.5 0 0 1 8 10h-.535A4 4 0 0 1 0 8zm4-3a3 3 0 1 0 2.712 4.285A.5.5 0 0 1 7.163 9h.63l.853-.854a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.793-.793-1-1h-6.63a.5.5 0 0 1-.451-.285A3 3 0 0 0 4 5z"/>
  <path d="M4 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
</svg>
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
                    <button  type="submit" class="btn btn-danger LoginButton">
                        <i class="fa fa-btn fa-sign-in"></i>Iniciar Sesión
                    </button>
                
                </div>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.tema', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sgd\resources\views/auth/login.blade.php ENDPATH**/ ?>