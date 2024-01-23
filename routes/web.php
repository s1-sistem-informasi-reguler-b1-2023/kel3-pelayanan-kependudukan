<?php

use App\Http\Controllers\DocumentApprovalController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\DocumentTemplateController;
use App\Http\Controllers\ResidentController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\TerritoryAvailableController;
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

Route::middleware(['auth'])->group(function () {
    Route::resource('/news', NewsController::class);

    Route::resource('/residents', ResidentController::class);

    Route::prefix('documents')->group(function () {
        Route::get('approval', [DocumentController::class, 'approval'])->name('documents.approval');
        Route::get('approval/{document}', [DocumentController::class, 'approvalDetail'])->name('documents.approval-show');
    });
    Route::resource('documents', DocumentController::class);

    Route::prefix('document-templates')->group(function () {
        Route::get('select2', [DocumentTemplateController::class, 'select2'])->name('document-templates.select2');
        Route::get('{document_template}/preview', [DocumentTemplateController::class, 'preview'])->name('document-templates.preview');
    });
    Route::resource('/document-templates', DocumentTemplateController::class);

    Route::resource('/document-approvals', DocumentApprovalController::class);

    Route::prefix('territory-availables')->group(function () {
        Route::get('select2', [TerritoryAvailableController::class, 'select2'])->name('territory-availables.select2');
    });

    Route::get('/settings/signature', [SettingController::class, 'signature'])->name('settings.signature');
    Route::post('/settings/signature/upload', [SettingController::class, 'signatureUpload'])->name('settings.signature-upload');

});
