

<?php $__env->startSection('content'); ?>
<!-- Page header -->
<div class="page-header">
    

    <div class="breadcrumb-line">
        <ul class="breadcrumb">
            <li><a href="index.html"><i class="icon-home2 position-left"></i> Home</a></li>
            <li><a href="icons_glyphicons.html">Icons</a></li>
            <li class="active">Glyphicons</li>
        </ul>
    </div>
</div>
<!-- /page header -->

<!-- Content area -->
<div class="content">
    <div class="panel panel-white">
        <div class="panel-heading">
            <h6 class="panel-title">Welcome Page</h6>
            <div class="heading-elements">
                <ul class="icons-list">
                    <li><a data-action="collapse"></a></li>
                    <li><a data-action="reload"></a></li>
                    <li><a data-action="close"></a></li>
                </ul>
            </div>
        </div>
        <div class="panel-body">
            <div style="text-align: center; padding: 40px;">
                <div style="border-bottom: 1px solid #dddddd;">
                    <span style="font-size: 18px;">Hi! <strong style="font-size: 24px; letter-spacing: 2px;"><?php echo e($userInfo->name); ?></strong></span> 
                </div>
                <h6>Welcome to Admin Panel</h6>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer text-muted">
        &copy; <?php echo e(date('Y')); ?>. <a href="#">Developed</a> by <a href="#" target="_blank">DevsSquad IT Solutions</a>
    </div>
    <!-- /footer -->
</div>
<!-- /content area -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('web.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project\webHosting\resources\views/web/home.blade.php ENDPATH**/ ?>