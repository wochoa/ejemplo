<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Iniciar Sesión</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="<?php echo e(url('ingresar')); ?>">
                        <?php echo e(csrf_field()); ?>


                        <div class="form-group<?php echo e($errors->has('usu_login') ? ' has-error' : ''); ?>">
                            <label for="usu_login" class="col-md-4 control-label">Login</label>

                            <div class="col-md-6">
                                <input id="usuario" type="text" class="form-control" name="usuario" value="<?php echo e(old('usu_login')); ?>">

                                <?php if($errors->has('usu_login')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('usu_login')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('usu_password') ? ' has-error' : ''); ?>">
                            <label for="usu_password" class="col-md-4 control-label">Contraseña</label>

                            <div class="col-md-6">
                                <input id="usu_password" type="password" class="form-control" name="usu_password">

                                <?php if($errors->has('usu_password')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('usu_password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Recordarme
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i>Iniciar Sesión
                                </button>
                                <!--<a class="btn btn-link" href="<?php echo e(url('/usu_password/reset')); ?>">¿Olvidaste tu contraseña?</a>-->
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.tema', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sgd\resources\views\auth\ingresar.blade.php ENDPATH**/ ?>