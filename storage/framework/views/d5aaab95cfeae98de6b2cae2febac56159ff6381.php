

<?php $__env->startSection('content'); ?>
<!-- Advanced login -->
<form method="POST" action="<?php echo e(route('web.login')); ?>">
    <?php echo csrf_field(); ?>
    <div class="panel panel-body login-form">
        <div class="text-center">
            <div class="icon-object border-slate-300 text-slate-300"><i class="icon-reading"></i></div>
            <h5 class="content-group">Login to your account <small class="display-block">Your credentials</small></h5>
        </div>
        <div id="err" style="color: red">
            <?php if(session()->has('error')): ?>
            <div class="alert alert-danger"><?php echo e(session('error')); ?></div>
            <?php endif; ?>
        </div>
        <div class="form-group has-feedback has-feedback-left">
            <input id="userName" type="userName" class="form-control" name="userName" value="<?php echo e(old('userName')); ?>" required autocomplete="userName" autofocus placeholder="User Name">
            <div class="form-control-feedback">
                <i class="icon-user text-muted"></i>
            </div>

        </div>

        <div class="form-group has-feedback has-feedback-left">
            <input id="password" type="password" class="form-control" name="password" required autocomplete="current-password" placeholder="Password">
            <div class="form-control-feedback">
                <i class="icon-lock2 text-muted"></i>
            </div>
        </div>

        <div class="form-group login-options">
            <div class="row">
                <div class="col-sm-6">
                    <label class="checkbox-inline">
                        <input type="checkbox" class="styled" checked="checked" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>
                        Remember
                    </label>
                </div>

                
                <div class="col-sm-6 text-right">
                    <a href="<?php echo e(route('web.resetPassword')); ?>">Forgot password?</a>
                </div>
            </div>
        </div>

        <div class="form-group">
            <button type="submit" class="btn bg-blue btn-block">Login <i class="icon-arrow-right14 position-right"></i></button>
        </div>
        <div class="col-sm-12 text-right">
            No Account ? Please <a href="<?php echo e(route('web.register')); ?>">Register</a>
        </div>

        
    </div>
</form>
<!-- /advanced login -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('web.layouts.defaulLogin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project\appNap\resources\views/web/login.blade.php ENDPATH**/ ?>