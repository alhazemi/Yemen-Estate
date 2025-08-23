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
 
<style>
     body{
    background: linear-gradient(rgba(255,255,255,0.85),rgba(83,90,101,0.85));
     min-height: 100vh;
     display: flex;
    
    
     font-family: 'Cairo', sans-serif;
   }
     .card{
   background-color: white;
   border-radius: 1rem;
   padding: 2rem;

   box-shadow:0 0.5rem 1rem rgba(0,0,0,0.3); 
  
max-width: 850px; width: 100%;
   }
   h3{
    /* color: #535a65; */
    text-align: center;
    margin-bottom: .8rem;
    font-weight: 600;
   }
     input:focus,
  select:focus,
  textarea:focus {
    outline: none;
     
  border-color: #ffb300 !important;
              box-shadow: 0 0 0 0.2rem rgba(255, 179, 0, 0.25) !important;
    
  }
    .btn {
    background-color: #ffb300;
    color: #535a65;
    transition: all 0.2s ease;
}
 
  .feature-box {
    display: flex;
    flex-direction: column;
    align-items: center;
    background: #fff;
    padding: 12px;
    border: 1px solid #ddd;
    border-radius: 10px;
    /* border-radius: 12px; */
    box-shadow: 0 2px 6px rgba(0,0,0,0.08);
    transition: 0.3s;
    cursor: pointer;
    text-align: center;
    font-weight: 500;
  }
  .feature-box i {
    font-size: 1.5rem;
    color: #ffb300;
    margin-bottom: 6px;
  }
  .feature-box:hover {
    background: #fff7e6;
    transform: translateY(-3px);
  }
  .feature-box input {
    margin-top: 6px;
    transform: scale(1.2);
    cursor: pointer;
  }
</style>
</head>
<body >
  <div class="container my-5 d-flex justify-content-center">
    <div class="card" >
      <h3 class="mb-4 text-center" >اعلن عن شقتك </h3>

      <form method="post" action="" enctype="multipart/form-data">
        <div class="row g-3">
          
          <div class="col-12">
            <label for="عنوان" class="form-label fw-bold">عنوان الشقة</label>
            <input type="text" id="عنوان" name="title" class="form-control" placeholder="ادخل عنوان الشقة" required>
          </div>

          <div class="col-6">
            <label for="الموقع" class="form-label fw-bold">الموقع</label>
            <input type="text" id="الموقع" name="location" class="form-control" placeholder="ادخل الموقع" required>
          </div>

          <div class="col-6">
            <label for="الغرف" class="form-label fw-bold">عدد الغرف</label>
            <input type="number" id="الغرف" name="rooms" class="form-control" placeholder="ادخل عدد الغرف" required>
          </div>

          <div class="col-6">
            <label for="المطابخ" class="form-label fw-bold">عدد المطابخ</label>
            <input type="number" id="المطابخ" name="kitchens" class="form-control" placeholder="ادخل عدد المطابخ" required>
          </div>

            <div class="col-6">
            <label for="الحمامات" class="form-label fw-bold">عدد الحمامات</label>
            <input type="number" id="الحمامات" name="bathrooms" class="form-control" placeholder="ادخل عدد الحمامات" required>
          </div>

          <div class="col-6">
            <label for="المساحة" class="form-label fw-bold">المساحة (م²)</label>
            <input type="number" id="المساحة" name="area" class="form-control" placeholder="ادخل المساحة" >
          </div>

          <div class="col-6">
            <label class="form-label fw-bold">الدور</label>
            <select name="floor" class="form-select" required>
              <option>أرضي</option>
              <option>أول</option>
              <option>ثاني</option>
              <option>ثالث</option>
              <option>أكثر</option>
            </select>
          </div>

          <div class="col-6">
            <label for="السعر" class="form-label fw-bold">السعر</label>
            <input type="number" id="السعر" name="price" class="form-control" placeholder="ادخل السعر" required>
          </div>

          <div class="col-6">
            <label class="form-label fw-bold">نوع العملة</label>
            <select name="currency" class="form-select" required>
              <option>ريال يمني</option>
              <option>ريال سعودي</option>
              <option>دولار</option>
            </select>
          </div>
        </div>
      

      <!-- أيقونات الخدمات -->
      <div class="row g-3 mt-4">
        <div class="col-4">
          <label class="feature-box">
            <i class="fas fa-couch"></i>
            <div>مفروشة</div>
            <input type="checkbox">
          </label>
        </div>

        <div class="col-4">
          <label class="feature-box">
            <i class="fas fa-bolt"></i>
            <div>كهرباء</div>
            <input type="checkbox">
          </label>
        </div>

        <div class="col-4">
          <label class="feature-box">
            <i class="fas fa-tint"></i>
            <div>ماء</div>
            <input type="checkbox">
          </label>
        </div>

        <div class="col-4">
          <label class="feature-box">
            <i class="fas fa-wifi"></i>
            <div>انترنت</div>
            <input type="checkbox">
          </label>
        </div>

        <div class="col-4">
          <label class="feature-box">
            <i class="fas fa-elevator"></i>
            <div>مصعد</div>
            <input type="checkbox">
          </label>
        </div>

        <div class="col-4">
          <label class="feature-box">
            <i class="fas fa-car"></i>
            <div>موقف سيارات</div>
            <input type="checkbox">
          </label>
        </div>
      </div>
      <!-- رفع الصور -->
<div class="mb-4 mt-4">
  <div class="d-flex align-items-center gap-2 mb-2">
    <label for="imageUpload" class="form-label fw-bold mb-0">رفع صور الشقة</label>
    <small class="text-muted">(يمكنك اختيار أكثر من صورة)</small>
  </div>

  <input type="file" id="imageUpload" name="images[]" class="form-control" accept="image/*" multiple >
  
  <div id="imagePreview" class="mt-3 d-flex flex-wrap gap-2"></div>
</div>


<!-- رفع الفيديو -->
<div class="mb-4">
  <div class="d-flex align-items-center gap-2 mb-2">
    <label for="videoUpload" class="form-label fw-bold mb-0">رفع فيديو الشقة</label>
    <small class="text-muted">(اختياري)</small>
  </div>
  <input type="file" id="videoUpload" name="video" class="form-control" accept="video/*">
</div>


<!-- موقع الشقة -->
 <div style="width: 100%; height: 350px; margin-top: 20px; margin-bottom: 200px;">
<div style="max-width: 700px; margin: 30px auto 50px; padding: 0 15px;">
  <h3 style="font-weight: 600; margin-bottom: 15px; text-align: center; color: #333;">
    حدد موقع الشقة على الخريطة
  </h3>
  <iframe
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62051.54567046162!2d44.015674999999995!3d13.583268649999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x161c692afdf672bb%3A0x800766c2f9603088!2z2KrYudiy2Iwg2KfZhNmK2Y7ZhdmO2YY!5e0!3m2!1sar!2s!4v1754780681923!5m2!1sar!2s"
    width="100%"
    height="400"
    style="border:0; border-radius: 8px;"
    allowfullscreen=""
    loading="lazy"
    referrerpolicy="no-referrer-when-downgrade"
  ></iframe>
</div>

</div>

<!-- زر الإرسال -->

            <div class="d-grid mb-3 mt-2">
                <button type="submit" class="btn btn-warning btn-lg"> موافق </button>
            </div>
      </form>

<!-- JS لمعاينة الصور + حذفها -->
<script>
  const imageUpload = document.getElementById('imageUpload');
  const imagePreview = document.getElementById('imagePreview');
  let selectedImages = [];

  imageUpload.addEventListener('change', function(event) {
    for (let file of event.target.files) {
      if (file.type.startsWith('image/')) {
        const reader = new FileReader();
        reader.onload = function(e) {
          const imgContainer = document.createElement('div');
          imgContainer.style.position = 'relative';
          imgContainer.style.display = 'inline-block';

          const img = document.createElement('img');
          img.src = e.target.result;
          img.style.height = '80px';
          img.style.borderRadius = '8px';
          img.style.objectFit = 'cover';
          img.style.border = '1px solid #ddd';

          const removeBtn = document.createElement('button');
          removeBtn.innerHTML = '×';
          removeBtn.style.position = 'absolute';
          removeBtn.style.top = '2px';
          removeBtn.style.right = '2px';
          removeBtn.style.background = 'rgba(0,0,0,0.6)';
          removeBtn.style.color = '#fff';
          removeBtn.style.border = 'none';
          removeBtn.style.borderRadius = '50%';
          removeBtn.style.width = '20px';
          removeBtn.style.height = '20px';
          removeBtn.style.cursor = 'pointer';
          removeBtn.onclick = () => {
            imagePreview.removeChild(imgContainer);
            selectedImages = selectedImages.filter(i => i !== file);
          };

          imgContainer.appendChild(img);
          imgContainer.appendChild(removeBtn);
          imagePreview.appendChild(imgContainer);

          selectedImages.push(file);
        }
        reader.readAsDataURL(file);
      }
    }
    imageUpload.value = ''; // إعادة تعيين الإدخال للسماح باختيار نفس الملفات لاحقًا
  });
</script>

    </div>
  </div>
</body>

</html>