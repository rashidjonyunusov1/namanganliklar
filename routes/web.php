<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\Admin\CategoryController; 
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\AuditController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\TegController;
use App\Http\Controllers\Admin\UserController;

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

Route::get('/', [PagesController::class, 'welcome'])->name('welcome');

Route::auto('/pages', PagesController::class);

Route::get('lang/{lang}', function($lang){
    session(['lang' => $lang]);

    return back();
});

// ADMIN

Route::prefix('admin/')->middleware('auth')->name('admin.')->group(function(){
    Route::get('dashboard', function(){
        return view('admin.layouts.dashboard');
    })->middleware('auth')->name('dashboard');

    Route::group(['middleware' => ['role:SuperAdmin']], function () {
        Route::resource('audits', AuditController::class)->only('index', 'show', 'destroy');
        Route::resource('logins', LoginController::class)->only('index');
        Route::resources([
            'users' => UserController::class,
            'roles' => RoleController::class,
        ]);
    });

    Route::group(['middleware' => ['role:SuperAdmin|admin']], function () {
        Route::resource('messages', MessageController::class)->only('index', 'show', 'destroy');
        Route::resources([
            'tegs' => TegController::class,
        ]);
    });

    Route::group(['middleware' => ['role:SuperAdmin|writter']], function () {
        Route::resources([
            'categories' => CategoryController::class,
            'posts' => PostController::class,
        ]);
    });

    
    
    
    
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
