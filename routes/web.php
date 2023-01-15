<?php

use App\Http\Controllers\admin\ProductsController;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Expr\FuncCall;
use App\Http\Controllers\CategoriesController;
use PhpParser\Node\Expr\Cast;
use App\Http\Controllers\admin\Dashboard;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TestController;
use Illuminate\Http\Response;
use Illuminate\Http\Request;



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
Route::get('/', [HomeController::class, 'index'])->name('home')->middleware('auth.admin');
Route::get('/san-pham', [HomeController::class, 'products'])->name('product');
Route::get('/them-san-pham', [HomeController::class, 'getAdd']);
Route::post('/them-san-pham', [HomeController::class, 'postAdd']);
Route::put('/them-san-pham', [HomeController::class, 'putAdd']);
Route::get('demo-response', function () {

    // $response = new Response();
    // dd($response);
    // Su dung helper
    // dd(response());
    // $content = '<h2>Hoc lap trinh</h2>';
    // $response = new Response('Hoc lap trinh', 200);
    //thay doi header o inspect
    // $response = response($content)->header('Content-Type', 'text/plain');
    // $content = json_encode([
    //     'Item1',
    //     'Item2',
    //     'Item3'
    // ]);
    // $response = response($content)->header('Content-Type', 'application/json');
    // don vi trong cookie -> phut
    // $response = (new Response())->cookie('Anh_cute', 'Hoc lap trinh - Laravel', 30);
    // return $response;
    // return view('demo-test');
    // $response = response()
    //     ->view('demo-test', [
    //         'title' => 'Hoc HTTP response'
    //     ], 201)
    //     ->header('Content-Type', 'application/json')
    //     ->header('API-Key', '123456');
    // return $response;
    // $contentArray = [
    //     'name' => 'Laravel 8.x',
    //     'lesson' => 'Khoa hoc lap trinh Laravel',
    //     'academy' => 'Anh cute'
    // ];
    // // return $contentArray;
    // return response()->json($contentArray, 201)->header('API-Key', '1234');
    // return '<h2>Welcome to ANh_cute</h2>';
    //co the chuyen old qua form
    // echo old('username');
    return view('demo-test');
})->name('demo-response');
Route::post('demo-response', function (Request $request) {
    if (!empty($request->username)) {
        // return redirect()->route('demo-response');
        // return redirect(route('demo-response'));
        return back()->withInput()->with('mess', 'Validate thanh cong');
    }
    return redirect(route('demo-response'))->with('mess', 'Validate khong thanh cong');
});
Route::get('demo-response-2', function (Request $request) {
    // return $request->cookie('Anh_cute');

});

Route::get('lay-thong-tin', [HomeController::class, 'getArray']);
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
    // Route::post('/upload', [CategoriesController::class, 'handleFile'])->name('categories.upload');
    //hien thi form upload
    Route::get('/upload', [CategoriesController::class, 'getFile']);
});
Route::get('san-pham/{id}', [HomeController::class, 'getProductDetail']);

// admin route
Route::middleware('auth.admin')->prefix('admin')->group(function () {
    Route::get('/', [Dashboard::class, 'index']);
    Route::resource('products', ProductsController::class)->middleware('auth.admin.product');
});
// Route::get('/', [TestController::class, 'index']);