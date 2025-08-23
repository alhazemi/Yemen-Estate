<?php
use Illuminate\Auth\Events\Login;
use App\Http\Controllers\HelloController;
use Illuminate\Support\Facades\Route;

// الصفحة الرئيسية (مفتوحة للجميع)
Route::get('/', function () {
    return view('welcome');
});

// صفحة Home (مفتوحة للجميع مثلاً للعرض)
Route::get('/home', function () {
    return view('home');
})->name('home');

// صفحات الضيف (غير المسجّل)
Route::middleware('guest')->group(function () {
    Route::get('/register', [HelloController::class, 'register'])->name('register.get');
    Route::post('/register', [HelloController::class, 'store'])->name('register.submit');

    Route::get('/login', [HelloController::class, 'showlogin'])->name('login.get');
    Route::post('/login', [HelloController::class, 'login'])->name('login');
});

// صفحات المسجّل (auth)
Route::middleware('auth')->group(function () {
    // مثل المفضلة + إضافة إعلان شقة
    Route::get('/favorites', function () {
        return view('favorites');
    })->name('favorites');

    Route::get('/apartment/create', function () {
        return view('ad');
    })->name('apartment.create');

    // تسجيل الخروج
    Route::post('/logout', [HelloController::class, 'logout'])->name('logout');
});
