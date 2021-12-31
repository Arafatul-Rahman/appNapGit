

<?php $__env->startSection('content'); ?>
<!-- Advanced login -->
<form method="POST" action="<?php echo e(route('web.login')); ?>">
    <?php echo csrf_field(); ?>
    <div class="panel panel-body login-form">
        <div class="text-center">
            <div class="icon-object border-slate-300 text-slate-300"><i class="icon-reading"></i></div>
            <h5 class="content-group">Please Check Your Mail to verify Your Account. Thank You.</h5>
        </div>

    </div>
</form>
<!-- /advanced login -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('web.layouts.defaulLogin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project\appNap\resources\views/web/registerConfirm.blade.php ENDPATH**/ ?>