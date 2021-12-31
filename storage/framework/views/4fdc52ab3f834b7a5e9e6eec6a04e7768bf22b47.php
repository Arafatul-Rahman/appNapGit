

<?php $__env->startSection('content'); ?>

<style type="text/css">
.text-denger{
	color: red;
}
 .swal2-popup{
        width: 500px!important;
    }
    .swal2-show>.swal2-header>.swal2-title{
        font-size: 30px!important;
        color: #FF5722;
    }
</style>

	<!-- /main navbar -->
<!-- Page container -->
	<div class="page-container login-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Content area -->
				<div class="content">

					<!-- Password recovery -->
					<form method="POST" action="<?php echo e(route('web.resetEmail')); ?>">
					<?php echo csrf_field(); ?>
						<div class="panel panel-body login-form">
							<div class="text-center">
								<div class="icon-object border-warning text-warning"><i class="icon-spinner11"></i></div>
								<h5 class="content-group">Password recovery <small class="display-block">We'll send you instructions in email</small></h5>
							</div>
							<div id="err" style="color: red">
								<?php if(session()->has('error')): ?>
								<div class="alert alert-danger"><?php echo e(session('error')); ?></div>
								<?php endif; ?>
							</div>
							<div class="form-group has-feedback">
								<input type="text" class="form-control" name="userName" placeholder="Your User Name">
								<div class="form-control-feedback">
									<i class="icon-mail5 text-muted"></i>
								</div>
							</div>

							<button type="submit" id="submit" class="btn bg-blue btn-block">Reset password <i class="icon-arrow-right14 position-right"></i></button>
						</div>
					</form>
					<!-- /password recovery -->

				</div>
				<!-- /content area -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->



<?php $__env->stopSection(); ?>

<?php echo $__env->make('web.layouts.defaulLogin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project\appNap\resources\views/web/resetPassword.blade.php ENDPATH**/ ?>