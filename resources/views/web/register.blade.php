@extends('web.layouts.defaulLogin')

@section('content')
<!-- Advanced login -->
<form method="POST" action="{{ route('web.register') }}">
    @csrf
    <div class="panel panel-body login-form">
        <div class="text-center">
            <div class="icon-object border-slate-300 text-slate-300"><i class="icon-reading"></i></div>
            <h5 class="content-group">Register Here <small class="display-block">Your credentials</small></h5>
        </div>

        <div class="form-group has-feedback has-feedback-left">
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" required autocomplete="name" autofocus placeholder="Full Name">
            <div class="form-control-feedback">
                <i class="icon-user text-muted"></i>
            </div>
            @if ($errors->has('name'))
                <span class="help-block text-danger">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group has-feedback has-feedback-left">
            <input id="userName" type="text" class="form-control @error('userName') is-invalid @enderror" name="userName" required autocomplete="userName" autofocus placeholder="UserName">
            <div class="form-control-feedback">
                <i class="icon-user text-muted"></i>
            </div>
            @if ($errors->has('userName'))
                <span class="help-block text-danger">
                    <strong>{{ $errors->first('userName') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group has-feedback has-feedback-left">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" required autocomplete="email" autofocus placeholder="Email">
            <div class="form-control-feedback">
                <i class="icon-user text-muted"></i>
            </div>
            @if ($errors->has('email'))
                <span class="help-block text-danger">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group has-feedback has-feedback-left">
            <input id="dob" type="date" class="form-control @error('dob') is-invalid @enderror" name="dob" required autocomplete="dob" autofocus placeholder="Date Of Birth">
            <div class="form-control-feedback">
                <i class="icon-user text-muted"></i>
            </div>
            @if ($errors->has('dob'))
                <span class="help-block text-danger">
                    <strong>{{ $errors->first('dob') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group has-feedback">
            <input type="password" required class="form-control" placeholder="Your Password" name="password">
            <div class="form-control-feedback">
                <i class="icon-mail5 text-muted"></i>
            </div>
            @if ($errors->has('password'))
                <span class="help-block text-danger">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group has-feedback">
            <input type="password" required class="form-control" placeholder="Re-write Password" name="password_confirmation">
            <div class="form-control-feedback">
                <i class="icon-mail5 text-muted"></i>
            </div>
            @if ($errors->has('password_confirmation'))
                <span class="help-block text-danger">
                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                </span>
            @endif
        </div>


        <div class="form-group">
            <button type="submit" class="btn bg-blue btn-block">Register <i class="icon-arrow-right14 position-right"></i></button>
        </div>
        {{-- <div class="content-divider text-muted form-group"><span>Don't have an account?</span></div>
        <a href="login_registration.html" class="btn btn-default btn-block content-group">Sign up</a>
        <span class="help-block text-danger text-center no-margin">By continuing, you're confirming that you've read our <a href="#">Terms &amp; Conditions</a> and <a href="#">Cookie Policy</a></span> --}}
    </div>
</form>
<!-- /advanced login -->
@endsection
