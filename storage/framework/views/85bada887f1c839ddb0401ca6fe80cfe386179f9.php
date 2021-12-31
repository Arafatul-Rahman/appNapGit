
<?php $__env->startSection('panel-title'); ?>
Add User
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

	<div class="page-container login-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Content area -->
				<div class="content">

					<!-- Advanced login -->
					<form method="POST" action="<?php echo e(route('updateResetPassword',$id)); ?>">
					<?php echo csrf_field(); ?>
						<div class="panel panel-body login-form">
							<div class="text-center">
								<div class="icon-object border-warning text-warning"><i class="icon-spinner11"></i></div>
								<h5 class="content-group">Password<small class="display-block">We'll send you instructions in email</small></h5>
							</div>

							<div class="form-group has-feedback">
								<input type="password" class="form-control" placeholder="Your Password" name="password">
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
								<input type="password" class="form-control" placeholder="Re-write Password" name="password_confirmation">
								<div class="form-control-feedback">
									<i class="icon-mail5 text-muted"></i>
								</div>
								<?php if($errors->has('password_confirmation')): ?>
								<span class="help-block text-danger">
									<strong><?php echo e($errors->first('password_confirmation')); ?></strong>
								</span>
							<?php endif; ?>
							</div>

							<button type="submit" class="btn bg-blue btn-block">Save password <i class="icon-arrow-right14 position-right"></i></button>
						</div>
					</form>	<!-- /advanced login -->

					<!-- /footer -->

				</div>
				<!-- /content area -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('web.layouts.defaulLogin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project\appNap\resources\views/web/updatePassword.blade.php ENDPATH**/ ?>