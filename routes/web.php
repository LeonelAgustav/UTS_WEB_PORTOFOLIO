<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\CRUDController;

Route::get('/', [PageController::class, 'portofolio'])->name('portofolio');
Route::get('/welcome', [PageController::class, 'welcome'])->name('welcome');
Route::get('/crud', [PageController::class, 'CRUD']);

#prefix crud
Route::prefix('project')->group(function () {
    Route::get('/show', [PageController::class, 'project']);
    Route::post('/insert', [CRUDController::class, 'insertProject'])->name('project.insert');
    Route::post('/update/{project_id}', [CRUDController::class, 'updateProject'])->name('project.update');
    Route::post('/delete/{project_id}', [CRUDController::class, 'deleteProject'])->name('project.delete');
});

Route::prefix('certificate')->group(function () {
    Route::get('/show', [PageController::class, 'certificate']);
    Route::post('/insert', [CRUDController::class, 'insertCertificate'])->name('certificate.insert');
    Route::post('/update/{certi_id}', [CRUDController::class, 'updateCertificate'])->name('certificate.update');
    Route::post('/delete/{certi_id}', [CRUDController::class, 'deleteCertificate'])->name('certificate.delete');
});

Route::prefix('skill')->group(function () {
    Route::get('/show', [PageController::class, 'skill']);
    Route::post('/insert', [CRUDController::class, 'insertSkill'])->name('skill.insert');
    Route::post('/update/{skill_id}', [CRUDController::class, 'updateSkill'])->name('skill.update');
    Route::post('/delete/{skill_id}', [CRUDController::class, 'deleteSkill'])->name('skill.delete');
});
