<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

	<title><?php echo e(config('app.name', 'LFWF Academy')); ?></title>
    <!-- Favicon -->
    <link href="<?php echo e(asset('web/img/fav.png')); ?>" rel="shortcut icon" type="image/x-icon"/>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="<?php echo e(asset('backend/assets/css/icons/icomoon/styles.css')); ?>" rel="stylesheet" type="text/css">
	<link href="<?php echo e(asset('backend/assets/css/minified/bootstrap.min.css')); ?>" rel="stylesheet" type="text/css">
	<link href="<?php echo e(asset('backend/assets/css/minified/core.min.css')); ?>" rel="stylesheet" type="text/css">
	<link href="<?php echo e(asset('backend/assets/css/minified/components.min.css')); ?>" rel="stylesheet" type="text/css">
	<link href="<?php echo e(asset('backend/assets/css/minified/colors.min.css')); ?>" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script type="text/javascript" src="<?php echo e(asset('backend/assets/js/plugins/loaders/pace.min.js')); ?>"></script>
	<script type="text/javascript" src="<?php echo e(asset('backend/assets/js/core/libraries/jquery.min.js')); ?>"></script>
	<script type="text/javascript" src="<?php echo e(asset('backend/assets/js/core/libraries/bootstrap.min.js')); ?>"></script>
	<script type="text/javascript" src="<?php echo e(asset('backend/assets/js/plugins/loaders/blockui.min.js')); ?>"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script type="text/javascript" src="<?php echo e(asset('backend/assets/js/plugins/forms/styling/uniform.min.js')); ?>"></script>

	<script type="text/javascript" src="<?php echo e(asset('backend/assets/js/core/app.js')); ?>"></script>
	<script type="text/javascript" src="<?php echo e(asset('backend/assets/js/pages/login.js')); ?>"></script>
    <!-- /theme JS files -->
    
</head>
<body>
    <div id="app">
       	<!-- Page container -->
        <div class="page-container login-container">

            <!-- Page content -->
            <div class="page-content">

                <!-- Main content -->
                <div class="content-wrapper">

                    <!-- Content area -->
                    <div class="content">

                        <?php echo $__env->yieldContent('content'); ?>

                        <!-- Footer -->
                        <div class="footer text-muted">
                            &copy; <?php echo e(date('Y')); ?>. <a href="#">Developed</a> by <a href="#" target="_blank">DevsSquad IT Solutions</a>
                        </div>
                        <!-- /footer -->

                    </div>
                    <!-- /content area -->

                </div>
                <!-- /main content -->

            </div>
            <!-- /page content -->

        </div>
        <!-- /page container -->

    </div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\project\appNap\resources\views/web/layouts/defaulLogin.blade.php ENDPATH**/ ?>