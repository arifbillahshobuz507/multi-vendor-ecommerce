<?php

use App\Http\Controllers\backend\AdminController;
use App\Http\Controllers\backend\BrandsController;
use App\Http\Controllers\backend\CategoriesController;
use App\Http\Controllers\backend\CustomerController;
use App\Http\Controllers\backend\OrderController;
use App\Http\Controllers\backend\PaymentController;
use App\Http\Controllers\backend\ProdutController;
use App\Http\Controllers\backend\SuplaireController;
use App\Http\Controllers\backend\UserController;
use App\Http\Controllers\SellerController;
use Illuminate\Support\Facades\Route;


// frontend routes


// Home page
Route::get('/', [AdminController::class, 'forntendHomePage'])->name('home');


// backend routes
Route::group(['prefix'=>'backend'], function()
{
    Route::get('/login/form',[UserController::class , 'loginform'])->name('login.form');
    Route::post('/login-form-post',[UserController::class , 'loginpost'])->name('login.form.post');

    Route::group(['middleware'=>'auth'], function()
    {
        // admin dashbord || backend dashbord Routes
        Route::get('/dashbord', [AdminController::class, 'backendHomePage'])->name('backend.home');

        // admin Routes
        Route::get('/admin/list', [AdminController::class, 'list'])->name('admin.list');
        Route::get('/add/users', [AdminController::class, 'form'])->name('add.users');
        Route::post('/user/store', [AdminController::class, 'store'])->name('sotre.users');

        // customer Routes
        Route::get('/customer/list', [CustomerController::class, 'list'])->name('customer.list');
        Route::get('/customer/from', [CustomerController::class, 'from'])->name('add.customer');
        Route::post('/customer/store', [CustomerController::class, 'store'])->name('sotre.customer');

        // category Routes
        Route::get('/categori/list', [CategoriesController::class, 'category_list'])->name('category.list');
        Route::get('/add/categories', [CategoriesController::class, 'form'])->name('add.categories');
        Route::post('/stor/categories', [CategoriesController::class, 'store'])->name('stor.categories');

        // SubCategory
        Route::get('/subCategori/list', [CategoriesController::class, 'subcategory_list'])->name('subcategory.list');
        Route::get('/subCategori/from', [CategoriesController::class, 'subcategory_from'])->name('add.subcategory');
        Route::post('/subCategori/store', [CategoriesController::class, 'subcategory_store'])->name('store.subcategory');

        // Store || Shop Routes
        Route::get('/backend/suplaier', [SuplaireController::class, 'list'])->name('suplaire.list');
        Route::get('/backend/add/supliars', [SuplaireController::class, 'form'])->name('see.suplaires');
        Route::get('/backend/add/supliars', [SuplaireController::class, 'form'])->name('see.suplaires');

        // Brands Routes
        Route::get('/brand/list', [BrandsController::class, 'list'])->name('brand.list');
        Route::get('/add/brands', [BrandsController::class, 'form'])->name('add.brands');
        Route::post('/stor/brands', [BrandsController::class, 'stor'])->name('sotre.brand');

        // Product Routes
        Route::get('/backend/products', [ProdutController::class, 'list'])->name('product.list');
        Route::get('/backend/add/products', [ProdutController::class, 'form'])->name('add.products');
        Route::get('/backend/add/products', [ProdutController::class, 'form'])->name('add.products');

        // Orders Routes
        Route::get('/backend/order/list', [OrderController::class, 'list'])->name('order.list');
        Route::get('/backend/add/order', [OrderController::class, 'orderList'])->name('add.orders');
        Route::get('/backend/see/order', [OrderController::class, 'seeorderList'])->name('see.orders');

         // OrderDetails Routes
         Route::get('/backend/orderdetails', [OrderController::class, 'list'])->name('orderdetails.list');

        // Payment Routes
        Route::get('/backend/payment', [PaymentController::class, 'list'])->name('payment.list');
        Route::get('/backend/see/payment', [PaymentController::class, 'paymentList'])->name('see.payments');
        Route::get('/backend/see/payment', [PaymentController::class, 'seepayments'])->name('see.payments');


        // backend Logout
        Route::get('/logout',[UserController::class , 'logout'])->name('admin.logout');
    });
});























// Route::get('/backend/review', [RivewController::class, 'list'])->name('wishlist.list');

// Route::get('/backend/report', [RivewController::class, 'list'])->name('report.lish');

// Route::get('/backend/review', [RivewController::class, 'list'])->name('rivewRating.list');
// Route::get('/backend/see/review', [RivewController::class, 'rivewList'])->name('see.rivews');
// Route::get('/backend/see/review', [RivewController::class, 'seerivewList'])->name('see.rivews');





















require __DIR__ . '/auth.php';
