<?php

use App\Http\Controllers\DocumentController;
use App\Http\Controllers\DocumentTemplateController;
use App\Http\Controllers\ResidentController;
use App\Http\Controllers\NewsController;
use App\Models\DocumentTemplate;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/news', NewsController::class);
Route::resource('/residents', ResidentController::class);
Route::resource('/documents', DocumentController::class);
Route::resource('/document-templates', DocumentTemplateController::class);
Route::get('/select2-document-templates', [DocumentTemplateController::class, 'select2'])->name('document-templates.select2');
