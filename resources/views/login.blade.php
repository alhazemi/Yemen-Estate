@extends('layouts.auth')

@section('title', 'تسجيل الدخول')

@section('content')
<h3>مرحباً بك مجدداً</h3>
<p class="text-center text-muted">من فضلك أدخل بيانات حسابك لتسجيل الدخول</p>
@if($errors->any())
<div class="alert alert-danger">
    <ul class="mb-0">
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form method="POST" action="{{ route('login') }}">
    @csrf

    <div class="input-group-custom">
        <label for="email">البريد الالكتروني</label>
        <i class="fa fa-user"></i>
        <input type="email" id="email" name="email" class="form-control" placeholder="البريد الالكتروني" required>
    </div>

    <div class="input-group-custom">
        <label for="password">كلمة السر</label>
        <i class="fa fa-lock"></i>
        <input type="password" id="password" name="password" class="form-control" placeholder="كلمة السر" required>
    </div>

    <div class="d-grid mb-3 mt-2">
        <button type="submit" class="btn btn-login btn-lg">تسجيل الدخول</button>
    </div>

    <div class="separator">
        <hr /><span>أو</span><hr />
    </div>

    <div class="d-grid mb-3">
        <button type="button" class="btn btn-google btn-lg d-flex align-items-center justify-content-center gap-2">
            <img src="{{ asset('imges/search_281764.png') }}" alt="Google" width="20" height="20" />
            تسجيل الدخول بواسطة جوجل
        </button>
    </div>

    <p class="text-center text-muted">ليس لديك حساب؟ <a href="{{ route('register.get') }}">أنشئ حساب</a></p>
</form>
@endsection