<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\RivewController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\BrandsController;
use App\Http\Controllers\ProdutController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\SuplaireController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\UserController;



// frontend routes


// Home page
Route::get('/', [AdminController::class, 'forntendHomePage'])->name('home');























// backend routes

// authentication

Route::group(['prefix'=>'backend'], function()
{
    Route::get('/login/form',[UserController::class , 'loginform'])->name('login.form');
    Route::post('/login-form-post',[UserController::class , 'loginpost'])->name('login.form.post');

    Route::group(['middleware'=>'auth'], function()
    {
        // admin dashbord || backend dashbord
        Route::get('/dashbord', [AdminController::class, 'backendHomePage'])->name('backend.home');

        // admin control
        Route::get('/admin', [AdminController::class, 'list'])->name('admin.list');
        Route::get('/add/users', [AdminController::class, 'form'])->name('add.users');
        Route::post('/user/store', [AdminController::class, 'store'])->name('sotre.users');

        // customer control
        Route::get('/customer/list', [CustomerController::class, 'list'])->name('customer.list');
        Route::get('/customer/from', [CustomerController::class, 'from'])->name('add.customer');
        Route::post('/customer/store', [CustomerController::class, 'store'])->name('sotre.customer');

        // category cnotrol
        Route::get('/categori', [CategoriesController::class, 'list'])->name('category.list');
        Route::get('/add/categories', [CategoriesController::class, 'form'])->name('add.categories');
        Route::post('/stor/categories', [CategoriesController::class, 'store'])->name('stor.categories');





        // backend Logout
    });
    Route::get('/fjsafhius',[UserController::class , 'logout'])->name('logout');

});









// store control
Route::get('/store', [StoreController::class, 'list'])->name('store.list');



// Route::get('/backend/categori', [CategoriesController::class, 'list'])->name('subcategory.list');




// Route::get('/backend/brand', [BrandsController::class, 'list'])->name('brand.list');
// Route::get('/backend/add/brands', [BrandsController::class, 'form'])->name('add.brands');
// Route::post('/backend/stor/brands', [BrandsController::class, 'stor'])->name('sotre.brand');

// Route::get('/backend/products', [ProdutController::class, 'list'])->name('product.list');
// Route::get('/backend/add/products', [ProdutController::class, 'form'])->name('add.products');
// Route::get('/backend/add/products', [ProdutController::class, 'form'])->name('add.products');




// Route::get('/backend/suplaier', [SuplaireController::class, 'list'])->name('suplaire.list');
// Route::get('/backend/add/supliars', [SuplaireController::class, 'form'])->name('see.suplaires');
// Route::get('/backend/add/supliars', [SuplaireController::class, 'form'])->name('see.suplaires');

// Route::get('/backend/suplaier', [SuplaireController::class, 'list'])->name('cart.list');

// Route::get('/backend/orderdetails', [OrderController::class, 'list'])->name('order.list');
// Route::get('/backend/see/orderdetails', [OrderController::class, 'orderList'])->name('see.orders');
// Route::get('/backend/see/orderdetails', [OrderController::class, 'seeorderList'])->name('see.orders');

// Route::get('/backend/orderdetails', [OrderController::class, 'list'])->name('orderdetails.list');

// Route::get('/backend/payment', [PaymentController::class, 'list'])->name('payment.list');
// Route::get('/backend/see/payment', [PaymentController::class, 'paymentList'])->name('see.payments');
// Route::get('/backend/see/payment', [PaymentController::class, 'seepayments'])->name('see.payments');

// Route::get('/backend/review', [RivewController::class, 'list'])->name('wishlist.list');

// Route::get('/backend/review', [RivewController::class, 'list'])->name('report.lish');

// Route::get('/backend/review', [RivewController::class, 'list'])->name('rivewRating.list');
// Route::get('/backend/see/review', [RivewController::class, 'rivewList'])->name('see.rivews');
// Route::get('/backend/see/review', [RivewController::class, 'seerivewList'])->name('see.rivews');




















// Route::get('/mycChiterWebSite',[TestController::class, 'chitariDhanda']);

// Route::get('/tumiKeHe',[TestController::class, "amiHe"]);

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__ . '/auth.php';
