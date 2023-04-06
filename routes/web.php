<?php

use App\Http\Controllers\InfiniteScrollController;
use App\Http\Livewire\UploadImageWithPreview;
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
    return redirect('/infinite-scroll');
});


Route::get('/infinite-scroll', [InfiniteScrollController::class, 'list'])->name('post_infinite');

Route::get('/upload-image/{id}', UploadImageWithPreview::class)->name('upload_image');