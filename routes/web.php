<?php
use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
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


// Trang Admin
Route::get('/Admin',[BookController::class, 'index'])->name('index');
Route::delete('/posts/delete/{id}', [BookController::class, 'destroy'])->name('destroy');
Route::get('/create', [BookController::class, 'create'])->name('create');
Route::post('/create', [BookController::class, 'store'])->name('store');
Route::get('/edit/{id}', [BookController::class, 'edit'])->name('edit');
Route::put('/edit/{id}', [BookController::class, 'update'])->name('update');



// Trang User
Route::get('/',[BookController::class, 'home'])->name('home');

Route::get('/category/{id}', [BookController::class, 'list'])->name('list-book');

Route::get('/detail/{id}',[BookController::class, 'show'])->name('detail');

Route::get('/list',[BookController::class, 'list'])->name('list');

Route::get('/search',[BookController::class, 'search'])->name('search');

Route::get('/book/{id}',[BookController::class, 'list_dm'])->name('list_dm');

// Route để thêm sản phẩm vào giỏ hàng với phương thức POST
Route::post('/add-to-cart/{id}', [BookController::class, 'addToCart'])->name('cart.addtocart');

// Route để hiển thị giỏ hàng (hiển thị nội dung giỏ hàng), phương thức GET
Route::get('/add-to-cart', [BookController::class, 'viewCart'])->name('cart.view');



