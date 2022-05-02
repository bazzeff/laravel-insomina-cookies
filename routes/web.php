<?php

use Illuminate\Support\Facades\Route;
use Stichoza\GoogleTranslate\GoogleTranslate;


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
    $tr = new GoogleTranslate('fr'); 
    $tr->setSource('en')->setTarget('fr')->translate('Hello-world').' (English Translation) - hello world';
    return view('welcome'); 
});
Route::get('translate', [App\Http\Controllers\TranslationController::class, 'index'])->name('translate');
Route::get('language/detection', [LanguageDetectionController::class, 'index'])->name('language.detection');
