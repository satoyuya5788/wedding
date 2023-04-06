<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WeddingController;
use App\Http\Controllers\SiteWeddingController;
use App\Http\Controllers\SimpleLoginController;
use App\Http\Controllers\SimpleLogoutController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\AdminLogoutController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// WEBサーバ立ち上げ時に絶対経由してほしいURL
Route::get('/', [SimpleLoginController::class, 'authjudge'])->middleware("simple_auth");
// 認証エラー時にログイン画面に戻す
Route::get('/home', function () {
return view('top');
});
//ログイン処理
Route::post('/wedding', [SimpleLoginController::class, 'login']);

// サイト側
Route::group(['middleware' => ['simple_auth']], function () {
    Route::prefix('site/wedding')->group(function () {
        Route::get('/', [SiteWeddingController::class, 'showCreate'])->name('site');
        // 招待状を登録する
        Route::post('/guide', [SiteWeddingController::class, 'executeStore'])->name('store');
        // 招待状
        Route::get('/guide', [SiteWeddingController::class, 'executeStore']);

        // 招待状
        Route::get('/guide/show/register', [SiteWeddingController::class, 'showRegister'])->name('showregister');

        Route::get('/guidehappouen', function () {
            return view('wedding.site.guide');
        });

        Route::get('/imagehappouen', function () {
            return view('wedding.site.non_participation');
        });
    });
});


Route::get('/admin', [AdminLoginController::class, 'authjudge'])->middleware("admin_auth");
// 認証エラー時にログイン画面に戻す
Route::get('/admin/home', function () {
return view('admin_top');
})->name('admin_home');
//ログイン処理
Route::post('/admin/wedding', [AdminLoginController::class, 'login'])->name('admin_login');
//ログアウト
Route::post('/admin/logout', [AdminLogoutController::class, 'logout']);

Route::group(['middleware' => ['admin_auth']], function () {
    Route::prefix('admin')->group(function () {
        // ゆうや↓
        // 招待状一覧画面を表示
        Route::get('wedding/list', [WeddingController::class, 'showList'])->name('list');
        Route::post('wedding/list', [WeddingController::class, 'showList']);

        Route::get('wedding/create', [WeddingController::class, 'create'])->name('create');

        Route::post('wedding/store', [WeddingController::class, 'adminStore'])->name('admin.store');

        // 招待状詳細画面を表示
        Route::get('wedding/{id}', [WeddingController::class, 'showDetail'])->name('detail');

        // 招待状編集フォーム画面を表示
        Route::get('wedding/edit/{id}', [WeddingController::class, 'showEdit'])->name('edit');

        // 招待状を更新する
        Route::post('wedding/update', [WeddingController::class, 'executeUpdate'])->name('update');

        // さとこ↓
        // 招待状一覧画面を表示
        Route::get('wedding_for_wife', [WeddingController::class, 'showList'])->name('list_for_wife');

        // ログインユーザ登録
        Route::get('wedding/loginuser/create', [WeddingController::class, 'loginUserCreate'])->name('loginuser.create');
        // ログインユーザ登録
        Route::post('wedding/loginuser/create', [WeddingController::class, 'loginUserStore'])->name('admin.loginuser.store');
    });
});
