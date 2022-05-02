<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Google\Cloud\Translate\V2\TranslateClient;

class TranslationController extends Controller
{
    //
    public function index()
    {
        // 
        $translate = new TranslateClient([ 
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
        $languages = $translate->languages();

     return view('components.translate', compact('languages'));

    }

}
