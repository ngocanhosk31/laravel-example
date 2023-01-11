<?php

use App\Http\Controllers\admin\ProductsController;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Expr\FuncCall;
use App\Http\Controllers\CategoriesController;
use PhpParser\Node\Expr\Cast;
use App\Http\Controllers\admin\Dashboard;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TestController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::prefix('admin')->group(function () {
//     Route::get('unicode/{slug?}-{id?}.html', function ($slug = null, $id = null) {
//         $content = 'Phuong thuc get cua path /unicode voi tham so: ';
//         $content .= 'id = ' . $id . '<br/>';
//         $content .= 'slug= ' . $slug;
//         return $content;
//     })->where(
//         [
//             'slug' => '.+',
//             'id' => '[0-9]+'
//         ]
//     );
//     Route::get('/first', function () {
//         return view('home');
//     });
//     Route::get('/home', function () {
//         return view('welcome');
//     })->name('admin.home');
// });


// Client route
// Route::get('/', [HomeController::class, 'index'])->name('home')->middleware('auth.admin');
Route::middleware('auth.admin')->prefix('categories')->group(function () {
    // danh sach chuyen muc
    Route::get('/', [CategoriesController::class, 'index'])->name('categories.list');
    // lay chi tiet 1 chuyen muc
    Route::get('/edit/{id}', [CategoriesController::class, 'getCategory'])->name('categories.edit');
    // xu ly update chuyen muc
    Route::post('/edit/{id}', [CategoriesController::class, 'updateCategory']);
    // Hien thi form add du lieu
    Route::get('/add', [CategoriesController::class, 'addCategory'])->name('categories.add');
    // xu ly them chuyen muc
    Route::post('/add', [CategoriesController::class, 'handleAddCategory']);
    // xoa chuyen muc
    Route::delete('/delete/{id}')->name('categories.delete');
    // xu ly file
    Route::post('/upload', [CategoriesController::class, 'handleFile'])->name('categories.upload');
    //hien thi form upload
    Route::get('/upload', [CategoriesController::class, 'getFile']);
});
Route::get('san-pham/{id}', [HomeController::class, 'getProductDetail']);

// admin route
Route::middleware('auth.admin')->prefix('admin')->group(function () {
    Route::get('/', [Dashboard::class, 'index']);
    Route::resource('products', ProductsController::class)->middleware('auth.admin.product');
});
Route::get('/', [TestController::class, 'index']);