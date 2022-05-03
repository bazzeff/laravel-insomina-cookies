<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Google\Cloud\Translate\V2\TranslateClient;
use Stichoza\GoogleTranslate\GoogleTranslate;

class TranslationController extends Controller
{
    
    public $tr;

    public $success = false;

    public function __construct($api_key = null)
    {
        $this->handle = new GoogleTranslate();
    }

    public function index()
    {
         
        $this->handle->setSource('en'); // Translate from English
        $this->handle->setSource(); // Detect language automatically
        $this->handle->setTarget('fr'); // Translate to french
        $this->success = true;   
        return $this->handle->setSource('en')->setTarget('fr','en')->translate('Goodbye');  

    }

}
