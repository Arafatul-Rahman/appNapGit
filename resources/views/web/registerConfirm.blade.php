@extends('web.layouts.defaulLogin')

@section('content')
<!-- Advanced login -->
<form method="POST" action="{{ route('web.login') }}">
    @csrf
    <div class="panel panel-body login-form">
        <div class="text-center">
            <div class="icon-object border-slate-300 text-slate-300"><i class="icon-reading"></i></div>
            <h5 class="content-group">Please Check Your Mail to verify Your Account. Thank You.</h5>
        </div>

    </div>
</form>
<!-- /advanced login -->
@endsection
