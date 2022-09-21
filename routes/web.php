<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\forntend\HomeController as Forntend;
use App\Http\Controllers\backend\HomeController as Backend;
use App\Http\Controllers\backend\AddProduct;
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
// forntend........................................
Route::get('/', [Forntend::class, 'index'])->name('home');
Route::get('/productlist', [Forntend::class, 'productlist'])->name('productlist');
Route::get('/contact', [Forntend::class, 'contact'])->name('contact');
Route::get('/about', [Forntend::class, 'about'])->name('about');
Route::get('/addtocard', [Forntend::class, 'addtocard'])->name('addtocard');



// backend................................
Route::get('admin/', [Backend::class, 'index'])->name('admin.home');
Route::get('admin/productadd', [Backend::class, 'productadd'])->name('admin.productadd');
Route::get('admin/productedit', [Backend::class, 'productedit'])->name('admin.productedit');
Route::get('admin/category', [Backend::class, 'category'])->name('admin.category');
Route::get('admin/categoryadd', [Backend::class, 'categoryadd'])->name('admin.categoryadd');
Route::get('admin/categoryedit', [Backend::class, 'categoryedit'])->name('admin.categoryedit');
Route::get('admin/userlist', [Backend::class, 'userlist'])->name('admin.userlist');
//Route::get('/admin', [AddProduct::class, 'productadd'])->name('admin.productadd');
