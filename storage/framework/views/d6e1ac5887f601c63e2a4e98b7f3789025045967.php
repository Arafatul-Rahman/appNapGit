

<?php $__env->startSection('content'); ?>
<!-- Advanced login -->
<form method="POST" action="<?php echo e(route('provider.login')); ?>">
    <?php echo csrf_field(); ?>
    <div class="panel panel-body login-form">
        <div class="text-center">
            <div class="icon-object border-slate-300 text-slate-300"><i class="icon-reading"></i></div>
            <h5 class="content-group">Login to your account <small class="display-block">Your credentials</small></h5>
        </div>

        <div class="form-group has-feedback has-feedback-left">
            <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus placeholder="Email">
            <div class="form-control-feedback">
                <i class="icon-user text-muted"></i>
            </div>
            <?php if(session('error')): ?>
            <strong style="color:red;"><?php echo session('error'); ?></strong>
            <?php endif; ?>
        </div>

        <div class="form-group has-feedback has-feedback-left">
            <input id="password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="current-password" placeholder="Password">
            <div class="form-control-feedback">
                <i class="icon-lock2 text-muted"></i>
            </div>
            <?php if(session('error')): ?>
            <strong style="color:red;"><?php echo session('error'); ?></strong>
            <?php endif; ?>
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
                    <a href="login_password_recover.html">Forgot password?</a>
                </div>
            </div>
        </div>

        <div class="form-group">
            <button type="submit" class="btn bg-blue btn-block">Login <i class="icon-arrow-right14 position-right"></i></button>
        </div>

        
    </div>
</form>
<!-- /advanced login -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('provider.layouts.defaulLogin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project\webHosting\resources\views/provider/login.blade.php ENDPATH**/ ?>