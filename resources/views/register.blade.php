@extends('layouts.auth')

@section('title', 'إنشاء حساب')

@section('content')
<h3>إنشاء حساب جديد</h3>
<form method="POST" action="{{ route('register.submit') }}">
    @csrf

    <div class="input-group-custom">
        <label for="email">البريد الالكتروني</label>
        <i class="fa fa-user"></i>
        <input type="email" id="email" name="email" class="form-control" placeholder="البريد الالكتروني" value="{{ old('email') }}" required>
        @error('email') <p style="color:red; margin:2px 0;">{{ $message }}</p> @enderror
    </div>

    <div class="input-group-custom">
        <label for="password">كلمة السر</label>
        <i class="fa fa-lock"></i>
        <input type="password" id="password" name="password" class="form-control" placeholder="كلمة السر" required>
        @error('password') <p style="color:red; margin:2px 0;">{{ $message }}</p> @enderror
    </div>

    <div class="input-group-custom">
        <label for="password_confirmation">تأكيد كلمة السر</label>
        <i class="fa fa-lock"></i>
        <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="تأكيد كلمة السر" required>
        @error('password_confirmation') <p style="color:red; margin:2px 0;">{{ $message }}</p> @enderror
    </div>

    <div class="input-group-custom">
        <label for="phone">رقم الهاتف</label>
      <div class="position-relative">
    <i class="fa fa-phone position-absolute" style="right:10px; top:50%; transform:translateY(-50%);"></i>
    <input type="tel" id="phone" name="phone" class="form-control pe-5 ps-5" 
           placeholder="7xxxxxxxx" value="{{ old('phone') }}" 
           required maxlength="9" pattern="\d{9}" title="الرجاء إدخال 9 أرقام فقط"
           oninput="this.value=this.value.replace(/[^0-9]/g,'');">
    <span class="position-absolute fw-bold d-flex align-items-center justify-content-center" 
          style="color: #535a65; left:0; top:0; height:100%; padding-right: 1rem; width:70px; border-top-left-radius:0.375rem; border-bottom-left-radius:0.375rem;">
          967+
    </span>
</div>

        @error('phone') <p style="color:red; margin:2px 0;">{{ $message }}</p> @enderror
    </div>

    <div class="d-grid mb-3 mt-2">
        <button type="submit" class="btn btn-create btn-lg">إنشاء الحساب</button>
    </div>

    <div class="separator">
        <hr /><span>أو</span><hr />
    </div>

    <div class="d-grid mb-3">
        <button type="button" class="btn btn-google btn-lg d-flex align-items-center justify-content-center gap-2">
            <img src="{{ asset('imges/search_281764.png') }}" alt="Google" width="20" height="20" />
            انشئ حساب بواسطة جوجل
        </button>
    </div>

    <p class="text-center text-muted">هل لديك حساب؟ <a href="{{ route('login.get') }}">تسجيل الدخول</a></p>
</form>
@if(session('success')) <p style="color:green">{{ session('success') }}</p> @endif
@endsection