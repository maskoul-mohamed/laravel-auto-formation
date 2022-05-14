<?php

use App\Http\Controllers\HelloWorld;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function() {
//     return view('pages.index');
// });
// Route::get('/profile/{id}', [HelloWorld::class, 'getUser']);

// Route::get('/home', function() {
//     return view('pages.home');
// });

// Route::get('/about', function() {
//     return view('pages.about');
// });

// Route::get('/contact', function() {
//     return view('/pages.contact');
// });

// Route::get('/users', function() {
//     return "This is users page";
// });

// Route::get('/users', function () {
//     return ['PHP', 'JS', 'HTML', 'Laravel'];
// });

// Route::get('/users', function () {
//     return response()->json(
//         [
//             'name' => 'PHP',
//             'framework' => 'Laravel'
//         ]
//     );
// });

// Route::get('/users', function () {
//     return redirect('/');
// });

// Route::get('/home', function(){
//     return view('home');
// });

// Route::get('/products/{name}/{id}', [ProductsController::class, 'show'])->where(
//     ['name'=> '[a-zA-Z]+',
//     'id' =>'[0-9]+']
// );

// Route::get('/products', [ProductsController::class, 'index'])->name('products');

Route::get('/', [PagesController::class, 'index']);
Route::get('/about', [PagesController::class, 'about']);