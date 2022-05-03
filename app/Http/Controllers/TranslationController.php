<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Google\Cloud\Translate\V2\TranslateClient;
//use Stichoza\GoogleTranslate\GoogleTranslate;

class TranslationController extends Controller
{
    
    public $translate;

    public $success = false;

    public function __construct($api_key = null)
    {
        $this->handle = new TranslateClient();
    }

    public function index()
    {
         
        $translate = new TranslateClient([
            'key' => 'api_key'
        ]);
        
        // Translate text from english to french.
        $result = $translate->translate('Hello world!', [
            'target' => 'fr'
        ]);
        
        echo $result['text'] . "\n";
        
        // Detect the language of a string.
        $result = $translate->detectLanguage('Greetings from Michigan!');
        
        echo $result['languageCode'] . "\n";
        
        // Get the languages supported for translation specifically for your target language.
        $languages = $translate->localizedLanguages([
            'target' => 'en'
        ]);
        
        foreach ($languages as $language) {
            echo $language['name'] . "\n";
            echo $language['code'] . "\n";
        }
        
        // Get all languages supported for translation.
        $languages = $translate->languages();
        
        foreach ($languages as $language) {
            echo $language . "\n";
        }
        return view('components.translate', compact('languages'));

    }

}

