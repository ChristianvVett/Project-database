<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\PublicController;
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

Route::get('/', [PublicController::class, 'home'])->name('home');

Route::get('/conoscenza', [PublicController::class, 'name'])->name('chi.siamo');

Route::get('/viaggi', [PublicController::class, 'nostriViaggi'])->name('nostri.viaggi');

Route::get('/show-viaggi/{id}', [PublicController::class, 'showViaggio'])->name('show.viaggio');

Route::get('/contattaci', [PublicController::class, 'contactUs'])->name('contact.us');

Route::post('/send-mail', [PublicController::class, 'sendMail'])->name('send.mail');

Route::get('/product-create', [ProductController::class, 'create'])->name('productCreate');

Route::post('/product-store', [ProductController::class, 'store'])->name('productStore');

Route::get('/product-wel', [ProductController::class, 'wel'])->name('productWel');

Route::get('/product-show/{id}',[ProductController::class, 'show'])->name('productShow');

//Rotte che gestiscono tutti i negozi di elettronica

Route::get('/create-ES', [StoreController::class, 'create'])->name('createElectronicStore');

Route::post('/store-ES', [StoreController::class, 'store'])->name('storeElectronicStore');

Route::get('/index-ES', [StoreController::class, 'index'])->name('indexElectronicStore');

Route::get('/show-ES/{store}', [StoreController::class, 'show'])->name('showElectronicStore');

Route::get('/edit-ES/{store}', [StoreController::class, 'edit'])->name('editElectronicStore');

Route::put('/update-ES/{store}', [StoreController::class, 'update'])->name('updateElectronicStore');

Route::delete('/delete-ES/{store}', [StoreController::class, 'destroy'])->name('deleteElectronicStore');

Route::get('user-all', [PublicController::class, 'allUser'])->name('allUser');

Route::delete('/delete-user/{user}', [PublicController::class, 'destroy'])->name('deleteUser');