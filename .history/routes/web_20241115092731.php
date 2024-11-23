<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/config-cache', function() {
    Artisan::call('config:cache');
  
    dd("Cache config");
});

// Front-end

Route::get('/', [PagesController::class, 'index'])->name('home');
Route::get('/gioi-thieu', [PagesController::class, 'about'])->name('about');
Route::get('/chuyen-giao-cong-nghe', [PagesController::class, 'about_1']);
Route::get('/co-cau-to-chuc', [PagesController::class, 'about_2']);
Route::get('/thanh-tich-dat-duoc', [PagesController::class, 'about_3']);
Route::get('/tuyen-dung', [PagesController::class, 'recruit']);
Route::get('/ho-tro-doanh-nghiep', [PagesController::class, 'update']);
Route::get('/thu-nghiem-khao-nghiem-cong-nghe', [PagesController::class, 'update']);
Route::get('/dao-tao', [PagesController::class, 'update']);
Route::get('/su-kien', [PagesController::class, 'news_1']);
Route::get('/tin-tuc', [PagesController::class, 'news_2']);
Route::get('/chi-tiet-tin-tuc', [PagesController::class, 'news_details']);
Route::get('/cung-cau-cong-nghe', [PagesController::class, 'news_3']);
Route::get('/metag+', [PagesController::class, 'news_4']);
// Route::get('/tin-tuc/{slug}', [PagesController::class, 'news_details']);
Route::get('/khach-hang', [PagesController::class, 'customer'])->name('customer_client');
Route::get('/lien-he', [PagesController::class, 'contact'])->name('contact');
Route::post('/search-keyword', [PagesController::class, 'search']);



// Back-end

Route::get('/auth//admin', [AdminController::class, 'index']);
Route::post('/auth/login', [AdminController::class, 'login']);
Route::get('/logout', [AdminController::class, 'logout']);

// Route::group(['middleware' => ['auth']], function () {
//     Route::get('/dashboard', [AdminController::class, 'dashboard']);
//     Route::get('change-password', [AdminController::class, 'change_password_index']);
//     Route::post('change-password/update', [AdminController::class, 'change_password']);
   
    
//     route::post('/upload', [AdminController::class, 'upload'])->name('ckeditor.upload');
    
//     Route::resource('/banner', BannerController::class);
//     Route::resource('/category', CategoryController::class);
//     Route::resource('/service', ServiceController::class);
//     Route::resource('/news', NewsController::class);
//     Route::resource('/partner', PartnerController::class);
//     Route::resource('/customer', CustomerController::class);
//     Route::resource('/policy', PolicyController::class);

    
//     Route::get('home-page/index', [AdminController::class, 'home_index']);
//     Route::post('home-page/update', [AdminController::class, 'home_update']);
//     Route::get('about-page/index', [AdminController::class, 'about_index']);
//     Route::post('about-page/update', [AdminController::class, 'about_update']);
//     Route::get('facility-page/index', [AdminController::class, 'facility_index']);
//     Route::post('facility-page/update', [AdminController::class, 'facility_update']);
//     Route::get('teacher-page/index', [AdminController::class, 'teacher_index']);
//     Route::post('teacher-page/update', [AdminController::class, 'teacher_update']);

//     Route::get('category-edit/{id}', [CategoryController::class, 'category_edit']);
//     Route::post('category-update/{id}', [CategoryController::class, 'category_update']);

// });