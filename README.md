Yemen_Estate

مشروع ويب مبني باستخدام Laravel و Bootstrap للبحث والتصفح عن شقق ومنازل للبيع أو الإيجار في اليمن. يوفر الموقع تجربة سهلة للبحث، التصفح، متابعة الإعلانات، مع دعم الخرائط الذكية لتحديد المواقع.

المميزات:
- البحث المتقدم عن الشقق والمنازل.
- خريطة ذكية لعرض المواقع.
- عرض تفاصيل الشقق، والتواصل مع المعلن بسهولة.
- إضافة الشقق إلى المفضلة.
- إضافة إعلان جديد للشقق.
- نظام تسجيل الدخول وإنشاء حساب (Auth/Guest).
- تصميم متجاوب باستخدام Bootstrap.

التقنيات المستخدمة:
- Laravel (Back‑end framework)
- Bootstrap (Front‑end framework)
- MySQL (قاعدة البيانات)
- XAMPP (بيئة تشغيل محلية)

المشروع يتم تطويره بالعمل التعاوني بين أعضاء الفريق.

بيئة التشغيل (محليًا - عبر XAMPP):

1. انسخ المشروع إلى مجلد htdocs في XAMPP، أو استنسخه:
   git clone https://github.com/alhazemi/Yemen_Estate.git
   cd Yemen_Estate

2. تثبيت الاعتمادات:
   composer install
   npm install && npm run build

3. نسخ ملف البيئة:
   cp .env.example .env

4. تعديل إعدادات قاعدة البيانات في الملف .env لتناسب إعدادات XAMPP، مثال:
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=myapp
   DB_USERNAME=root
   DB_PASSWORD=

5. توليد مفتاح التطبيق:
   php artisan key:generate

6. إنشاء قاعدة البيانات (عن طريق phpMyAdmin أو CLI باسم rental_db).

7. تشغيل الهجرات:
   php artisan migrate

8. تشغيل السيرفر:
   - عبر Laravel: php artisan serve (ثم زيارة http://127.0.0.1:8000)
   - أو عبر XAMPP: افتح المستعرض وادخل إلى http://localhost/Yemen_Estate/public

ملاحظات:
- ملف .env لا يتم رفعه إلى GitHub.
- مجلدي vendor و node_modules غير مرفوعان. يتم إنشاؤهما عبر composer install و npm install.
- تأكد من مراجعة .gitignore.

طريقة العمل الجماعي بالفروع:
1. إنشاء فرع جديد:
   git checkout -b feature‑اسم_الميزة
2. بعد التعديل:
   git add .
   git commit -m "وصف التعديل"
   git push origin feature‑اسم_الميزة
3. فتح Pull Request عبر GitHub لدمج التعديلات.
