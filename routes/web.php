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
use App\Http\Controllers\backend\SubCategoryController;

use App\Http\Controllers\frontend\HomeController;


use Illuminate\Support\Facades\Route;


// frontend routes


// Home page
Route::get('/', [HomeController::class, 'forntendHomePage'])->name('home');



// backend routes
Route::group(['prefix' => 'backend'], function () {
    // Route::get('/login/form',[UserController::class , 'loginform'])->name('login.form');
    // Route::post('/login-form-post',[UserController::class , 'loginpost'])->name('login.form.post');


    // admin dashbord || backend dashbord Routes
    Route::get('/dashbord', [AdminController::class, 'backendHomePage'])->name('backend.home');

    // admin Routes
    Route::group(['prefix' => 'admin'], function () {
        Route::get('/', [AdminController::class, 'list'])->name('admin');
        Route::get('/add', [AdminController::class, 'from'])->name('admin.add');
        Route::post('/store', [AdminController::class, 'store'])->name('sotre.admin');
        Route::get('/delete/{id}', [AdminController::class, 'delete'])->name('delete.admin');
        Route::get('/edit/{id}', [AdminController::class, 'edit'])->name('edit.admin');
        Route::post('/update/{id}', [AdminController::class, 'update'])->name('update.admin');
        Route::get('/view/{id}', [AdminController::class, 'view'])->name('view.admin');
    });

    // admin Profile Routes
    Route::get('/admin/profile', [AdminController::class, 'profile'])->name('admin.profile');

    // customer Routes
    Route::group(['prefix'=>'customer'], function(){
        Route::get('/list', [CustomerController::class, 'list'])->name('customer.list');
        Route::get('/from', [CustomerController::class, 'from'])->name('add.customer');
        Route::post('/store', [CustomerController::class, 'store'])->name('sotre.customer');
        Route::get('/delete/{id}', [CustomerController::class, 'delete'])->name('delete.customer');
        Route::get('/edit/{id}', [CustomerController::class, 'edit'])->name('edit.customer');
        Route::post('/update/{id}', [CustomerController::class, 'update'])->name('update.customer');
        Route::get('/view/{id}', [CustomerController::class, 'view'])->name('view.customer');
    });
    

    // category Routes
    Route::group(['prefix' => 'category'], function () {        
        Route::get('/list', [CategoriesController::class, 'list'])->name('category.list');
        Route::get('/add', [CategoriesController::class, 'form'])->name('category.add');
        Route::post('/stor', [CategoriesController::class, 'store'])->name('category.store');
        Route::get('/delete/{id}', [CategoriesController::class, 'delete'])->name('category.delete');
        Route::get('/edit/{id}', [CategoriesController::class, 'edit'])->name('category.edit');
        Route::post('/update/{id}', [CategoriesController::class, 'update'])->name('category.update');
        Route::get('/view/{id}', [CategoriesController::class, 'view'])->name('category.view');
    });

    // SubCategory
    Route::group(['prefix'=>'subcategory'], function(){
        Route::get('/list', [SubcategoryController::class, 'list'])->name('subcategory.list');
        Route::get('/from', [SubcategoryController::class, 'form'])->name('subcategory.add');
        Route::post('/store', [SubcategoryController::class, 'store'])->name('store.subcategory');
        Route::get('/delete/{id}', [SubcategoryController::class, 'delete'])->name('subcategory.delete');
        Route::get('/edit/{id}', [SubcategoryController::class, 'edit'])->name('subcategory.edit');
        Route::post('/update/{id}', [SubcategoryController::class, 'update'])->name('subcategory.update');
        Route::get('/view/{id}', [SubcategoryController::class, 'view'])->name('subcategory.view');
    });
    

    // Brands Routes
    Route::get('/brand/list', [BrandsController::class, 'list'])->name('brand.list');
    Route::get('/add/brands', [BrandsController::class, 'form'])->name('add.brands');
    Route::post('/stor/brands', [BrandsController::class, 'stor'])->name('sotre.brand');

    // Product Routes
    Route::get('/products', [ProdutController::class, 'list'])->name('product.list');
    Route::get('/add/products', [ProdutController::class, 'form'])->name('add.product');
    Route::get('/delete/products/{id}', [ProdutController::class, 'delete'])->name('delete.product');
    Route::get('/edit/products/{id}', [ProdutController::class, 'edit'])->name('edite.product');
    Route::put('/update/products/{id}', [ProdutController::class, 'update'])->name('update.products');
    Route::post('/store/products', [ProdutController::class, 'store'])->name('store.products');

    // Orders Routes
    Route::get('/order/list', [OrderController::class, 'list'])->name('order.list');
    Route::get('/add/order', [OrderController::class, 'orderList'])->name('add.orders');
    Route::post('/see/order', [OrderController::class, 'seeorderList'])->name('see.orders');

    // OrderDetails Routes
    Route::get('/orderdetails', [OrderController::class, 'list'])->name('orderdetails.list');

    // Payment Routes
    Route::get('/payment', [PaymentController::class, 'list'])->name('payment.list');
    Route::get('/see/payment', [PaymentController::class, 'paymentList'])->name('see.payments');
    Route::get('/see/payment', [PaymentController::class, 'seepayments'])->name('see.payments');


    // backend Logout
    Route::get('/logout', [UserController::class, 'logout'])->name('admin.logout');
});
require __DIR__ . '/auth.php';
