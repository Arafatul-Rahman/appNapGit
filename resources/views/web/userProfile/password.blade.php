@extends('web.layouts.defaulLogin')
@section('panel-title')
Add User
@endsection
@section('content')

	<div class="page-container login-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Content area -->
				<div class="content">

					<!-- Advanced login -->
					<form method="POST" action="{{ route('updatePassword',$id) }}">
					@csrf
						<div class="panel panel-body login-form">
							<div class="text-center">
								<div class="icon-object border-warning text-warning"><i class="icon-spinner11"></i></div>
								<h5 class="content-group"><small class="display-block">We'll send you instructions in email</small></h5>
							</div>

							<button type="submit" class="btn bg-blue btn-block">Confarm Your Account <i class="icon-arrow-right14 position-right"></i></button>
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

@endsection
