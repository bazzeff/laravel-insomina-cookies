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
| contains the "web" middleware group. Now create something great! return view('welcome'); 
|
*/

Route::get('/', function () {
    $tr = new GoogleTranslate('fr');   
    return $tr->setSource('en')->setTarget('fr')->translate('Hello-world').' (English Translation) - hello world';
});
