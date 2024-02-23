<?php

// use Modules\UseExternal\Http\Controllers\UseExternalController;

// Route::get('/use-externals', [UseExternalController::class, 'index'])->name('use-externals.index');
// Route::get('/use-externals/create', [UseExternalController::class, 'create'])->name('use-externals.create');
// Route::post('/use-externals', [UseExternalController::class, 'store'])->name('use-externals.store');
// Route::get('/use-externals/{use-external}', [UseExternalController::class, 'show'])->name('use-externals.show');
// Route::get('/use-externals/{use-external}/edit', [UseExternalController::class, 'edit'])->name('use-externals.edit');
// Route::put('/use-externals/{use-external}', [UseExternalController::class, 'update'])->name('use-externals.update');
// Route::delete('/use-externals/{use-external}', [UseExternalController::class, 'destroy'])->name('use-externals.destroy');

use Modules\UseExternal\Http\Controllers\NewsController;

Route::prefix('use-external')->name('use-external.')->group(function () {
    Route::prefix('news')->name('news.')->group(function () {
        Route::get('/', [NewsController::class, 'index'])->name('index');
        Route::get('/create', [NewsController::class, 'create'])->name('create');
        Route::post('/', [NewsController::class, 'store'])->name('store');
        Route::get('/{news}', [NewsController::class, 'show'])->name('show');
    });
});
