<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>@yield('title')</title>
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

  <link rel="preconnect" href="https://fonts.googleapis.com"/>
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>

  <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600&display=swap" rel="stylesheet"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;700&display=swap" rel="stylesheet">
  <!-- <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"/> -->
  <!-- <link rel="stylesheet" href="style.css"> -->
<style>
  
  body{
     font-family: 'Cairo', sans-serif;
  }
  .navbar-brand {
  color: #ffb300 !important; 
  font-size: 1.5rem;
  display: flex;
  align-items: center;
  gap: 8px; 
}

.navbar-brand i {
  color: #ffb300;
  font-size: 1.8rem;
}

  .navbar .nav-link {
    color: #ffffff;
  }
  .navbar .nav-link:hover {
    color: #ffc107;
  }
.card {
  border-radius: 10px;
  overflow: hidden;
  transition: transform 0.3s ease;
  
  display: flex;
  flex-direction: column;
  height: 400px; /* ارتفاع ثابت يناسبك، يمكنك تعديله */
  width: 100%; /* العرض يتحدد حسب العمود */
}

.card img {
  height: 200px; /* ارتفاع ثابت للصور */
  object-fit: cover;
  width: 100%;
  flex-shrink: 0;
}

.card-body {
  flex: 1 1 auto; /* لكي يأخذ المساحة المتبقية */
  display: flex;
  flex-direction: column;
  justify-content: space-between; /* توزيع المحتوى مع دفع الزر للأسفل */
  padding: 1rem;
   /* padding: 0.5rem 1rem; */
  margin-top: 0;
  overflow: hidden; /* لمنع خروج المحتوى */
}


.price {
  color: #ff6f00;
  font-weight: bold;
 
}

.card-body .btn {
  display: block;
  width: 100% !important;
  margin: 12px auto 0;
  padding: 6px 0;
  font-size: 0.9rem;
  white-space: nowrap;
  /* flex-shrink: 0; */
   /* لا يسمح له بالتصغير */
}

.card:hover {
  transform: translateY(-5px);
}

/* مؤشرات الكاروسيل */
.carousel-indicators [data-bs-target] {
  width: 8px;
  height: 8px;
  border-radius: 50%;
}

.carousel-indicators .active {
  background-color: #ffc107;
}

/* استجابة للشاشات الصغيرة */
@media (max-width: 576px) {
  .card img {
    height: 160px;
  }
  .card-body h6 {
    font-size: 0.8rem;
  }
  .card-body h5 {
    font-size: 0.9rem;
  }
  .card-body span {
    font-size: 0.75rem;
  }
  

}



  /* خلفية Hero بنفس لون النافبار */
 .hero {
  background-image: url('{{ asset('imges/backgrand.jpg') }}');
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
  min-height: 75vh; /* ارتفاع للشاشات الكبيرة */
  display: block; /* إلغاء flex حتى padding يعمل بحرية */
  text-align: center;
  padding-top: 290px; /* نزول المحتوى في الشاشات الكبيرة */
}

.hero-search {
  max-width: 500px;
  margin: 0 auto;
}

  
  .btn {
    background-color: #ffb300;
    border: none;
    transition: 0.3s;
    
  }
   .btn:hover {
    background-color: #ffc107;
    transform: scale(1.05); /* تكبير بسيط عند المرور */
  }
   .form-control:focus {
      /* border-color: #ffb300; */
      box-shadow: 0 0 0 0.2rem rgba(255, 179, 0, 0.25);
      /* ظل ذهبي */
      }
   


  /*
/* للشاشات الصغيرة */
@media (max-width: 768px) {
  .hero {
    min-height: 50vh;
    padding-top: 170px; /* نزول أقل على الموبايل */
  }
  .hero-search {
    width: 100%;
  }
  .hero-search .btn {
    padding: 10px 20px;
    font-size: 1rem;
  }
  
}
  .favorite-icon {
    position: absolute;
    top: 10px;
    right: 10px;
    font-size: 20px;
    /* color: #555; */
    cursor: pointer;
    z-index: 10;
    transition: color 0.3s ease;
  }

  .favorite-icon.active {
    color: red;
  }
  /* اجبار القائمة المنسدلة أن تلتصق يمين الأيقونة حتى مع RTL */
.dropdown-menu {
  background-color: #fff !important;   /* خلفية بيضاء */
  color: #000 !important;              /* النص أسود */
  border-radius: 12px;
  padding: 12px;
  min-width: 230px;
  text-align: right;

  inset-inline-start: auto !important; 
  inset-inline-end: 0 !important;      
  transform: translateX(-18px);   
}
.dropdown-menu small {
  color: #6c757d !important;  /* نفس لون Bootstrap muted */
}



  
</style>
</head>
    <body>
        @include('partials.navbar')
        @yield('contant')
    </body>
</html>