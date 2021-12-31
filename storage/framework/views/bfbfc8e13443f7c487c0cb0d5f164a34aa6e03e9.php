

<?php $__env->startSection('content'); ?>
<!-- Advanced login -->
<form method="POST" action="<?php echo e(route('web.register')); ?>">
    <?php echo csrf_field(); ?>
    <div class="panel panel-body login-form">
        <div class="text-center">
            <div class="icon-object border-slate-300 text-slate-300"><i class="icon-reading"></i></div>
            <h5 class="content-group">Register Here <small class="display-block">Your credentials</small></h5>
        </div>

        <div class="form-group has-feedback has-feedback-left">
            <input id="name" type="text" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="name" required autocomplete="name" autofocus placeholder="Full Name">
            <div class="form-control-feedback">
                <i class="icon-user text-muted"></i>
            </div>
            <?php if($errors->has('name')): ?>
                <span class="help-block text-danger">
                    <strong><?php echo e($errors->first('name')); ?></strong>
                </span>
            <?php endif; ?>
        </div>

        <div class="form-group has-feedback has-feedback-left">
            <input id="userName" type="text" class="form-control <?php $__errorArgs = ['userName'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="userName" required autocomplete="userName" autofocus placeholder="UserName">
            <div class="form-control-feedback">
                <i class="icon-user text-muted"></i>
            </div>
            <?php if($errors->has('userName')): ?>
                <span class="help-block text-danger">
                    <strong><?php echo e($errors->first('userName')); ?></strong>
                </span>
            <?php endif; ?>
        </div>
        <div class="form-group has-feedback has-feedback-left">
            <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" required autocomplete="email" autofocus placeholder="Email">
            <div class="form-control-feedback">
                <i class="icon-user text-muted"></i>
            </div>
            <?php if($errors->has('email')): ?>
                <span class="help-block text-danger">
                    <strong><?php echo e($errors->first('email')); ?></strong>
                </span>
            <?php endif; ?>
        </div>

        <div class="form-group has-feedback has-feedback-left">
            <input id="dob" type="date" class="form-control <?php $__errorArgs = ['dob'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="dob" required autocomplete="dob" autofocus placeholder="Date Of Birth">
            <div class="form-control-feedback">
                <i class="icon-user text-muted"></i>
            </div>
            <?php if($errors->has('dob')): ?>
                <span class="help-block text-danger">
                    <strong><?php echo e($errors->first('dob')); ?></strong>
                </span>
            <?php endif; ?>
        </div>

        <div class="form-group has-feedback">
            <input type="password" required class="form-control" placeholder="Your Password" name="password">
            <div class="form-control-feedback">
                <i class="icon-mail5 text-muted"></i>
            </div>
            <?php if($errors->has('password')): ?>
                <span class="help-block text-danger">
                    <strong><?php echo e($errors->first('password')); ?></strong>
                </span>
            <?php endif; ?>
        </div>
        <div class="form-group has-feedback">
            <input type="password" required class="form-control" placeholder="Re-write Password" name="password_confirmation">
            <div class="form-control-feedback">
                <i class="icon-mail5 text-muted"></i>
            </div>
            <?php if($errors->has('password_confirmation')): ?>
                <span class="help-block text-danger">
                    <strong><?php echo e($errors->first('password_confirmation')); ?></strong>
                </span>
            <?php endif; ?>
        </div>


        <div class="form-group">
            <button type="submit" class="btn bg-blue btn-block">Register <i class="icon-arrow-right14 position-right"></i></button>
        </div>
        
    </div>
</form>
<!-- /advanced login -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('web.layouts.defaulLogin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project\appNap\resources\views/web/register.blade.php ENDPATH**/ ?>