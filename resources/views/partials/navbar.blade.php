<body>

  <!-- Navbar للشاشات الكبيرة (فوق md) -->
  <nav class="navbar navbar-expand-md sticky-top d-none d-md-flex" 
      style="background-color:#535a65" data-bs-theme="dark">
    <div class="container-fluid">
      
      <a class="navbar-brand fw-bold" href="#">
        <i class="fa-solid fa-house"></i> يمن عقار
      </a>
      
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
          <li class="nav-item mx-2">
            <a class="nav-link" href="{{ route('home')}}">الرئيسية</a></li>

          <li class="nav-item mx-2">
            <a class="nav-link" href="{{route('favorites') }}">المفضلة</a></li>

          <li class="nav-item mx-2">
            <a class="nav-link" href="{{ url('/contact') }}">التواصل معنا</a></li>

          <li class="nav-item mx-2">
            <a class="nav-link" href="{{ url('/help') }}">مساعدة</a></li>

        </ul>

<div class="d-flex align-items-center ms-2">
    <!-- زر نشر إعلان -->
    <a href="{{route('apartment.create')}}" class="btn btn-primary ms-3" style="background-color: #00000096;">+ نشر إعلان</a>

    @guest
        <!-- زر تسجيل الدخول -->
       <a href="{{ route('login.get') }}" class="btn btn-outline-secondary d-flex align-items-center"> <i class="fa-regular fa-circle-user ms-2" style="font-size:1.8rem;"></i> <span>تسجيل الدخول</span> </a>
    @else
        <!-- قائمة المستخدم -->
       <div class="dropdown text-center">
    <a class="d-flex flex-column align-items-center text-decoration-none"
       href="#" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">

        <!-- أيقونة -->
     @php
    $user = Auth::user();
    $letter = strtoupper(substr($user->email ?? 'U', 0, 1)); // أول حرف من الإيميل
@endphp

<div class="d-flex align-items-center justify-content-center rounded-circle 
             fw-bold" 
     style="width:30px; height:30px; background:#ffb300; font-size:1.3rem;color:535a65">
    {{ $letter }}
</div>


        <!-- النص -->
        <span style="font-size:0.8rem; color:#fff;">الحساب الشخصي</span>
    </a>

    <!-- القائمة -->
<ul class="dropdown-menu shadow" aria-labelledby="userDropdown">
    <li class="text-center mb-2">
        <strong>{{ Auth::user()->name ?? 'مستخدم' }}</strong><br>
        <small class="text-muted">{{ Auth::user()->email }}</small>
    </li>
    <li><hr class="dropdown-divider"></li>
    <li>
        <form action="{{ route('logout') }}" method="POST" class="m-0">
            @csrf
            <button type="submit" class="btn btn-outline-danger btn-sm w-100">
                <i class="fa-solid fa-right-from-bracket ms-2"></i> تسجيل الخروج
            </button>
        </form>
    </li>
</ul>

</div>

    @endguest
</div>



      </div>
    </div>
  </nav>

  <!-- Navbar سفلي للشاشات الصغيرة (أقل من md) -->
  <nav class="navbar fixed-bottom d-md-none" 
      style="background-color:#eeee; border-top: 3px solid white; direction: rtl;
             border-top-left-radius: 15px; border-top-right-radius: 15px; overflow: hidden;">
    <div class="container justify-content-around">

      <!-- الرئيسية -->
      <a href="{{route('home') }}" class="nav-link text-secondary text-center">
        <i class="fa-solid fa-house" style="font-size: 1.7rem;"></i><br>الرئيسية
      </a>

      <!-- المفضلة -->
      <a href="{{ route('favorites') }}" class="nav-link text-secondary text-center">
        <i class="fa-regular fa-heart" style="font-size: 1.8rem;"></i><br>المفضلة
      </a>

      <!-- اعرض شقتك -->
      
          <a href="{{ route('apartment.create') }}" class="nav-link text-secondary text-center">
            <i class="fa-solid fa-plus" style="font-size: 1.8rem; "></i><br>اعرض شقتك
          </a>
      
         
      

      <!-- تسجيل الدخول / حساب المستخدم -->
 @guest <a href="{{ route('login.get') }}" class="nav-link text-secondary text-center">
   <i class="fa-regular fa-circle-user" style="font-size: 1.8rem;"></i><br>تسجيل الدخول
@else
    @php
        $user = Auth::user();
        $letter = strtoupper(substr($user->email ?? 'U', 0, 1));
    @endphp
   <div style="margin-bottom: 1px">
    <a href="#" class="nav-link text-secondary text-center d-flex flex-column align-items-center justify-content-center">

        <!-- دائرة الحرف بحجم متناسق مع الأيقونات الأخرى -->
        <div class="d-flex align-items-center justify-content-center rounded-circle fw-bold "
             style="width:32px; height:32px; font-size:1.5rem;color:#535a65; box-shadow: 0 2px 6px rgba(0,0,0,0.2);">
            {{ $letter }}
        </div>

        <!-- النص تحت الدائرة -->
       <span class="fw-semibold " style="font-size:0.95rem; color:#535a65;">الحساب الشخصي</span>
    </a>
   </div>
@endguest

    </div>
  </nav>

</body>
