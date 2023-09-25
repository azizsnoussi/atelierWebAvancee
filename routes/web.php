<?php

use Illuminate\Support\Facades\Route;
use \Symfony\Component\HttpFoundation\Request;
use App\Http\Middleware\VerifAge;
use App\Http\Controllers\ProductController;




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

Route::get('/page1', function () {
    return view('page1',['title'=>'my first page']);
});

Route::get('/page2/{nom}/{id}', function ($nom,$id) {
    return view('page2', ['nom' => $nom,'id' => $id]);
})->where('id','[1-9]');

// Route::get('/page2/{nom?}', function ($nom=null) {
//     return view('page2', ['nom' => $nom]);
// })

// Route::get('/message/{nom?}', function ($nom=null) {
//     return view('message', ['name' => $nom]);
// })->where('nom','[a-zA-Z]+');



// Route::get('/home', function () {
//     return view('show',['message' => $msg]);
// });

Route::get('/welcome', [App\Http\Controllers\homeController::class, 'welcome']);
Route::get('/home', [App\Http\Controllers\homeController::class, 'index']);
Route::get('/trimstring', [App\Http\Controllers\homeController::class, 'trimstring']);
Route::get('/result', [App\Http\Controllers\homeController::class, 'trimstring']);

Route::get('/result', function (\Symfony\Component\HttpFoundation\Request $request) {
    return 'la valeur sans espace'.$request->$name ;
})->name('resultname');


Route::get('/verif/{age}', function (Request $request) {
    return $request->$age ;
})->middleware(VerifAge::class);


Route::get('/verif/{age}', function (Request $request) {
    return $request->$age ;
})->middleware(VerifAge::class);




Route::resource('products',ProductController::class);

Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products/create', [ProductController::class, 'store']);