<?php

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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::middleware(['auth'])->group( function() {

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/subscribers', function() {
    return view('admin.subscribers');
})->name('subscribers');


Route::get('/home', [\App\Http\Controllers\HeaderController::class, 'create'])->name('homepage');
Route::post('/video', [\App\Http\Controllers\HeaderController::class, 'storeVideoUrl'])->name('upload.video');

//Route::get('/services', [\App\Http\Controllers\ServiceController::class, 'index'])->name('services.all');


Route::get('/about/create', [\App\Http\Controllers\AboutController::class, 'create'])->name('aboutus');
Route::post('/about', [\App\Http\Controllers\AboutController::class, 'store'])->name('aboutus.store');
Route::get('/about', [\App\Http\Controllers\AboutController::class, 'index'])->name('aboutus.index');
Route::get('/about/{id}', [\App\Http\Controllers\AboutController::class, 'destroy'])->name('about.delete');

Route::get('/portfolio', [\App\Http\Controllers\PortfolioController::class, 'create'])->name('portfolio');
Route::post('/portfolio/store', [\App\Http\Controllers\PortfolioController::class, 'store'])->name('portfolio.store');
Route::get('/portfolio/{id}', [\App\Http\Controllers\PortfolioController::class, 'destroy'])->name('portfolio.delete');

Route::get('/contacts', [\App\Http\Controllers\ContactController::class, 'index'])->name('contacts');
Route::get('/contacts/create', [\App\Http\Controllers\ContactController::class, 'create'])->name('contact.create');
Route::post('/contacts/store', [\App\Http\Controllers\ContactController::class, 'store'])->name('contact.store');
Route::get('/contacts/edit/{id}', [\App\Http\Controllers\ContactController::class, 'edit'])->name('contact.edit');
Route::post('/contacts/update/{id}', [\App\Http\Controllers\ContactController::class, 'update'])->name('contact.update');
Route::get('/contacts/{id}', [\App\Http\Controllers\ContactController::class, 'destroy'])->name('contact.delete');


Route::get('/header/create', [\App\Http\Controllers\HeaderController::class, 'create'])->name('header.create');
Route::get('/headers', [\App\Http\Controllers\HeaderController::class, 'index'])->name('headers');
Route::get('/headers/edit/{id}', [\App\Http\Controllers\HeaderController::class, 'edit'])->name('header.edit');
Route::post('/headers/update/{id}', [\App\Http\Controllers\HeaderController::class, 'update'])->name('header.update');
Route::get('/headers/{id}', [\App\Http\Controllers\HeaderController::class, 'destroy'])->name('header.delete');

Route::get('/services', [\App\Http\Controllers\ServiceController::class, 'index'])->name('services');
Route::get('/services/create', [\App\Http\Controllers\ServiceController::class, 'create'])->name('service.create');
Route::post('services', [\App\Http\Controllers\ServiceController::class, 'store'])->name('services.store');
Route::get('services/edit/{id}', [\App\Http\Controllers\ServiceController::class, 'edit'])->name('service.edit');
Route::post('/services/update/{id}', [\App\Http\Controllers\ServiceController::class, 'update'])->name('service.update');
Route::get('/services/{id}', [\App\Http\Controllers\ServiceController::class, 'destroy'])->name('service.delete');

Route::get('/teams', [\App\Http\Controllers\TeamController::class, 'index'])->name('teams');
Route::get('/teams/create', [\App\Http\Controllers\TeamController::class, 'create'])->name('teams.create');
Route::post('/teams/store', [\App\Http\Controllers\TeamController::class, 'store'])->name('teams.store');
Route::get('/teams/edit/{id}', [\App\Http\Controllers\TeamController::class, 'edit'])->name('teams.edit');
Route::post('/teams/update/{id}', [\App\Http\Controllers\TeamController::class, 'update'])->name('teams.update');
Route::get('/teams/{id}', [\App\Http\Controllers\TeamController::class, 'destroy'])->name('teams.delete');

Route::get('/categories', [\App\Http\Controllers\CategoryController::class, 'index'])->name('categories');
Route::get('/categories/create', [\App\Http\Controllers\CategoryController::class, 'create'])->name('categories.create');
Route::post('/categories/store', [\App\Http\Controllers\CategoryController::class, 'store'])->name('categories.store');
Route::get('/categories/edit/{id}', [\App\Http\Controllers\CategoryController::class, 'edit'])->name('categories.edit');
Route::post('/categories/update/{id}', [\App\Http\Controllers\CategoryController::class, 'update'])->name('categories.update');
Route::get('/categories/{id}', [\App\Http\Controllers\CategoryController::class, 'destroy'])->name('categories.delete');

    Route::get('/logout', function() {
        \Illuminate\Support\Facades\Auth::logout();
        return redirect()->route('login');
    })->name('route.logout');

});





Route::get('/eden/about', [\App\Http\Controllers\AboutController::class, 'filter'])->name('about.filter');
Route::get('/portfolio/{name}', [\App\Http\Controllers\PortfolioController::class, 'filter'])->name('portfolio.filter');

//Frontend

Route::get('/eden', function()
{
    $latest = \App\Models\About::select('subcategory')->first();
    return view('frontend.home', compact('latest'));
});


Route::get('/eden/portfolio', function() {

    $wedding = \App\Models\Portfolio::where('category_id', '=', 2)->get();

    return view('frontend.portfolio');
});

Route::get('/eden/contact', function() {
    return view('frontend.contactus');
});


Route::get('/users', [\App\Http\Controllers\Usercontroller::class, 'index'])->name('users.all');

Route::post('/mail', [\App\Http\Controllers\EnquiryController::class, 'send'])->name('send.enquiry');
