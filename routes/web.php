<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\NewsroomController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
});
// Route::get('/contact', function () {
//     return view('contact');
// });
Route::get('/services', function () {
    return view('services');
});
Route::get('/air-freight', function () {
    return view('air');
});
Route::get('/ocean-freight', function () {
    return view('ocean');
});
Route::get('/consolidation', function () {
    return view('consolidation');
});
Route::get('/project-shipment', function () {
    return view('project');
});
Route::get('/project-shipment', function () {
    return view('project');
});

Route::get('/pomanagement', function () {
    return view('pomanagement');
});
Route::get('/warehouse', function () {
    return view('warehouse');
});
Route::get('/custom-brokerage', function () {
    return view('custom');
});
Route::get('/inland-tracking', function () {
    return view('inland_tracking');
});
Route::get('/specialized', function () {
    return view('specialized');
});
Route::get('/door-delivery', function () {
    return view('door');
});
Route::get('/pharmaceutical', function () {
    return view('pharmaceutical');
});
Route::get('/seafood', function () {
    return view('seafood');
});
Route::get('/dg-goods', function () {
    return view('dg');
});
Route::get('/work', function () {
    return view('work');
});
Route::get('/mission', function () {
    return view('mission');
});
Route::get('/carriers', function () {
    return view('carriers');
});
Route::get('/approch', function () {
    return view('approch');
});
Route::get('/visibility', function () {
    return view('visibility');
});
Route::get('/faq', function () {
    return view('faq');
});
Route::get('/stay-connected', function () {
    return view('connected');
});
Route::get('/easy', function () {
    return view('easy');
});
Route::get('/workflow', function () {
    return view('workflow');
});
Route::get('/awards', function () {
    return view('awards');
});
Route::get('/executive-team', function () {
    return view('executive');
});

Route::get('/business-iq', function () {
    return view('business');
});
Route::get('/advisories', function () {
    return view('advisories');
});
Route::get('/glossary', function () {
    return view('glossary');
});
Route::get('/faq', function () {
    return view('faq');
});
Route::get('/e-services', function () {
    return view('e_services');
});
// Route::get('/newsroom', function () {
//     return view('newsroom');
// });
Route::get('/newsroom', [App\Http\Controllers\HomeController::class, 'newsroom'])->name('newsroom');

Route::get('/contact', [App\Http\Controllers\ContactController::class, 'main'])->name('contact');


Route::post('/contactForm', [App\Http\Controllers\ContactController::class, 'contactForm'])->name('contactForm');
// Users Routes

Route::middleware(['auth', 'user-access:user'])->group(function () {
  
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
});

// Manager Routes

Route::middleware(['auth', 'user-access:manager'])->group(function () {
  
    Route::get('/manager/dashboard', [HomeController::class, 'managerDashboard'])->name('manager.dashboard');
});  

// Super Admin Routes

Route::middleware(['auth', 'user-access:super-admin'])->group(function () {
  
    Route::get('/admin/dashboard', [App\Http\Controllers\HomeController::class, 'adminIndex'])->name('admin.dashboard');

    //contact route
    Route::get('/admin/contact',[ContactController::class,'index'])->name('admin.contact.index');
    Route::delete('/admin/contact/destroy/{id}',[ContactController::class,'destroy'])->name('admin.contact.destroy');

     //news route
     Route::get('admin/newsroom',[NewsroomController::class,'index'])->name('newsroom.index');
     Route::get('admin/newsroom/create',[NewsroomController::class,'create'])->name('newsroom.create');
     Route::post('admin/newsroom/store',[NewsroomController::class,'store'])->name('newsroom.store');
     Route::get('admin/newsroom/edit/{id}',[NewsroomController::class,'edit'])->name('newsroom.edit');
     Route::post('admin/newsroom/update/{id}',[NewsroomController::class,'update'])->name('newsroom.update');
     Route::delete('admin/newsroom/destroy/{id}',[NewsroomController::class,'destroy'])->name('newsroom.destroy');
});




Auth::routes();


