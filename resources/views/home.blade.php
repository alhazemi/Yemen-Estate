
  
@extends('layouts.app')
@section('title','يمن عقار')

@section('contant')

    

<section class="hero">
  <div class="container pb-800px">
    <h1 class="text-white fw-bold">ابحث عن شقتك المثالية الآن</h1>
    <p class="text-light">استكشف أفضل الشقق والعروض المتاحة بسهولة وسرعة</p>
    <div class="input-group flex-row-reverse input-group-lg hero-search">
      <button class="btn btn-warning fw-bold px-4" type="button"><i class="fa-solid fa-magnifying-glass"></i> بحث</button>
      <input type="text" class="form-control" placeholder="أدخل المنطقة..." aria-label="Search">
    </div>
  </div>
</section>


  <!-- features -->
        <div class="features text-center pt-2 pb-2">
          <div class="container">
            <div class="main-title">
              <img class="mb-4" src="//1748295510087.jpg" alt="">
              <h2>عقارات مميزة</h2>
              <p class="text-black-50 text-uppercase">اكتشف افضل العقارات المتاحة للبيع والايجار في اهم المدن في اليمن</p>
            </div>
          </div>
        </div>
      <div class="container " style="margin-bottom: 80px;" >
        <div class="row g-4">
     <div class="col-6 col-md-3">
  <div class="card h-100 shadow-sm"> 
 <i class="fa-regular fa-heart favorite-icon" onclick="toggleFavorite(this)"></i>
 <script>
  function toggleFavorite(icon) {
    icon.classList.toggle("active");       // يغير اللون
    icon.classList.toggle("fa-regular");   // يزيل شكل القلب الفارغ
    icon.classList.toggle("fa-solid");     // يضيف شكل القلب الممتلئ
  }
</script>

    <div id="carouselCard0" class="carousel slide" data-bs-ride="carousel">

      <!-- مؤشرات -->
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselCard0" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#carouselCard0" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#carouselCard0" data-bs-slide-to="2"></button>
      </div>

      <!-- الصور -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="rooms/1.jpg" class="d-block w-100" alt="شقة">
        </div>
        <div class="carousel-item">
          <img src="rooms/IMG_78809.png" class="d-block w-100" alt="شقة">
        </div>
        <div class="carousel-item">
          <img src="rooms/IMG_11892.png" class="d-block w-100" alt="شقة">
        </div>
      </div>

      <!-- أزرار تنقل -->
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselCard1" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselCard1" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
      </button>
    </div>

    <!-- تفاصيل العقار -->
    <div class="card-body ">
      <h6 class="card-title fw-bold">شقة فاخرة في برباشة</h6>
      
      <p class="text-muted small"><i class="fa-solid fa-location-dot text-warning"></i> تعز - برباشة</p>
      <h5 class="price">850,000 ريال</h5>
      <div class="d-flex justify-content-between text-muted small">
        <span><i class="fa-solid fa-bed text-primary"></i> 3 غرف</span>
        <span><i class="fa-solid fa-bath text-info"></i> 2 حمام</span>
        <span><i class="fa-solid fa-ruler-combined text-success"></i> 150 م²</span>
      </div>
<a href="view.html" class="btn btn-primary rounded-pill main-btn w-auto mt-2 text-nowrap px-3 py-1 fs-6 ">عرض التفاصيل</a>
    </div>
  </div>
</div>
 
<div class="col-6 col-md-3">
  <div class="card h-100 shadow-sm">
     <i class="fa-regular fa-heart favorite-icon" onclick="toggleFavorite(this)"></i>
 <script>
  function toggleFavorite(icon) {
    icon.classList.toggle("active");       // يغير اللون
    icon.classList.toggle("fa-regular");   // يزيل شكل القلب الفارغ
    icon.classList.toggle("fa-solid");     // يضيف شكل القلب الممتلئ
  }
</script>

    <div id="carouselCard1" class="carousel slide" data-bs-ride="carousel">
      <!-- مؤشرات -->
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselCard1" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#carouselCard1" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#carouselCard1" data-bs-slide-to="2"></button>
      </div>

      <!-- الصور -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="rooms/IMG_17474.png" class="d-block w-100" alt="شقة 1">
        </div>
        <div class="carousel-item">
          <img src="rooms/IMG_67761.png" class="d-block w-100" alt="شقة 2">
        </div>
        <div class="carousel-item">
          <img src="rooms/IMG_39782.png" class="d-block w-100" alt="شقة 3">
        </div>
      </div>

      <!-- أزرار تنقل -->
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselCard1" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselCard1" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
      </button>
    </div>

    <!-- تفاصيل العقار -->
    <div class="card-body">
      <h6 class="card-title fw-bold">شقة فاخرة في برباشة</h6>
      <p class="text-muted small"><i class="fa-solid fa-location-dot text-warning"></i> تعز - برباشة</p>
      <h5 class="price">850,000 ريال</h5>
      <div class="d-flex justify-content-between text-muted small">
        <span><i class="fa-solid fa-bed text-primary"></i> 3 غرف</span>
        <span><i class="fa-solid fa-bath text-info"></i> 2 حمام</span>
        <span><i class="fa-solid fa-ruler-combined text-success"></i> 150 م²</span>
      </div>
      <a href="view.html" class="btn btn-primary rounded-pill main-btn w-auto mt-2 text-nowrap px-3 py-1 fs-6 ">عرض التفاصيل</a>
    </div>
  </div>
</div>

<div class="col-6 col-md-3">
  <div class="card h-100 shadow-sm">
     <i class="fa-regular fa-heart favorite-icon" onclick="toggleFavorite(this)"></i>
 <script>
  function toggleFavorite(icon) {
    icon.classList.toggle("active");       // يغير اللون
    icon.classList.toggle("fa-regular");   // يزيل شكل القلب الفارغ
    icon.classList.toggle("fa-solid");     // يضيف شكل القلب الممتلئ
  }
</script>

    <div id="carouselCard2" class="carousel slide" data-bs-ride="carousel">
      <!-- مؤشرات -->
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselCard2" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#carouselCard2" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#carouselCard2" data-bs-slide-to="2"></button>
      </div>

      <!-- الصور -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="rooms/IMG_67761.png" class="d-block w-100" alt="شقة 4">
        </div>
        <div class="carousel-item">
          <img src="rooms/1.jpg" class="d-block w-100" alt="شقة 5">
        </div>
        <div class="carousel-item">
          <img src="rooms/IMG_65019.png" class="d-block w-100" alt="شقة 6">
        </div>
      </div>

      <!-- أزرار تنقل -->
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselCard2" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselCard2" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
      </button>
    </div>

    <!-- تفاصيل العقار -->
    <div class="card-body">
      <h6 class="card-title fw-bold">فيلا حديثة في الحوبان</h6>
      <p class="text-muted small"><i class="fa-solid fa-location-dot text-warning"></i> تعز - الحوبان</p>
      <h5 class="price">1,200,000 ريال</h5>
      <div class="d-flex justify-content-between text-muted small">
        <span><i class="fa-solid fa-bed text-primary"></i> 5 غرف</span>
        <span><i class="fa-solid fa-bath text-info"></i> 4 حمامات</span>
        <span><i class="fa-solid fa-ruler-combined text-success"></i> 320 م²</span>
      </div>
      <a href="view.html" class="btn btn-primary rounded-pill main-btn w-auto mt-2 text-nowrap px-3 py-1 fs-6 ">عرض التفاصيل</a>
    </div>
  </div>
</div>

<div class="col-6 col-md-3">
  <div class="card h-100 shadow-sm">
     <i class="fa-regular fa-heart favorite-icon" onclick="toggleFavorite(this)"></i>
 <script>
  function toggleFavorite(icon) {
    icon.classList.toggle("active");       // يغير اللون
    icon.classList.toggle("fa-regular");   // يزيل شكل القلب الفارغ
    icon.classList.toggle("fa-solid");     // يضيف شكل القلب الممتلئ
  }
</script>

    <div id="carouselCard3" class="carousel slide" data-bs-ride="carousel">
      <!-- مؤشرات -->
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselCard3" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#carouselCard3" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#carouselCard3" data-bs-slide-to="2"></button>
      </div>

      <!-- الصور -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="rooms/IMG_39782.png" class="d-block w-100" alt="شقة 7">
        </div>
        <div class="carousel-item">
          <img src="rooms/IMG_65019.png" class="d-block w-100" alt="شقة 8">
        </div>
        <div class="carousel-item">
          <img src="rooms/IMG_17474.png" class="d-block w-100" alt="شقة 9">
        </div>
      </div>

      <!-- أزرار تنقل -->
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselCard3" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselCard3" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
      </button>
    </div>

    <!-- تفاصيل العقار -->
    <div class="card-body">
      <h6 class="card-title fw-bold">شقة راقية في حي الصافية</h6>
      <p class="text-muted small"><i class="fa-solid fa-location-dot text-warning"></i> تعز - الصافية</p>
      <h5 class="price">950,000 ريال</h5>
      <div class="d-flex justify-content-between text-muted small">
        <span><i class="fa-solid fa-bed text-primary"></i> 4 غرف</span>
        <span><i class="fa-solid fa-bath text-info"></i> 3 حمامات</span>
        <span><i class="fa-solid fa-ruler-combined text-success"></i> 200 م²</span>
      </div>
      <a href="view.html" class="btn btn-primary rounded-pill main-btn w-auto mt-2 text-nowrap px-3 py-1 fs-6 ">عرض التفاصيل</a>
    </div>
  </div>
</div>
        </div>
      </div>
      @endsection
    
       {{-- <script src="js/bootstrap.bundle.min.js"></script> --}}
  </body>
</html>