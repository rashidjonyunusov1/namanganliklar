<?php

use App\Http\Controllers\Api\AuditController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\GetInfoController;
use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\API\RegisterController;
use App\Http\Controllers\Api\RoleController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::auto('/getinfo', GetInfoController::class);

Route::post('register', [RegisterController::class, 'register']);
Route::post('login', [RegisterController::class, 'login']);

Route::middleware('auth:sanctum')->group(function(){
    Route::group(['middleware' => ['role:SuperAdmin']], function () {
        Route::apiResources([
            'audits' => AuditController::class,
            'logins' => LoginController::class,
            'user' => UserController::class,
            'role' => RoleController::class,
        ]);
    });

    Route::group(['middleware' => ['role:SuperAdmin']], function () {
        Route::apiResource('messages', MessageController::class)->only('index', 'show', 'destroy');
        Route::apiResource([
            'tegs' => TegController::class,
        ]);
    });

        Route::group(['middleware' => ['role:SuperAdmin|writter']], function () {
            Route::apiResource([
                'categories' => CategoryController::class,
                'posy' => PostController::class,
            ]);
        });
});

