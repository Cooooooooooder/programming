<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController;


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [
            'localize',
            'localizationRedirect',
            'localeSessionRedirect',
            'localeCookieRedirect',
            'localeViewPath'
        ]
    ],
    function () {
        Auth::routes();
        Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
        Route::get('/master', [FrontendController::class, 'show']);
        // محمي بـ auth
        Route::middleware(['auth'])->group(function () {
            Route::get('/users', fn() => view('admin.users'));

            Route::middleware(['isAdmin'])->group(function () {
                // Routes of categories
                Route::get('/category/index', [CategoryController::class, 'index']) -> name('category.index');
                Route::get('/category/create', [CategoryController::class, 'create']) -> name('category.create');
                Route::post('/category/store', [CategoryController::class, 'store']) -> name('category.store');
                Route::get('/category/{id}', [CategoryController::class, 'show']) -> name('category.show');
                Route::get('/category/{id}/edit', [CategoryController::class, 'edit']) -> name('category.edit');
                Route::patch('/category/{id}', [CategoryController::class, 'update']) -> name('category.update');
                Route::delete('/category/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');

                
                // Routes of products
                Route::get('/products/index', [ProductController::class, 'index']) -> name('products.index');
                Route::get('/products/create', [ProductController::class, 'create']) -> name('products.create');
                Route::post('/products/store', [ProductController::class, 'store']) -> name('products.store');
                Route::get('/products/{id}', [ProductController::class, 'show']) -> name('products.show');
                Route::get('/products/{id}/edit', [ProductController::class, 'edit']) -> name('products.edit');
                Route::patch('/products/{id}', [ProductController::class, 'update']) -> name('products.update');
                Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');

                // Routes of dashboard
                Route::get('/dashboard/index', [DashboardController::class, 'index']) -> name('dashboard');
            });
        });

        // auth routes (لو مثبت laravel/ui)
       
    }
);
