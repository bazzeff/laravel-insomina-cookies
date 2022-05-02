<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Stichoza\GoogleTranslate\GoogleTranslate;

class TranslationTest extends TestCase
{   

    public $tr;

    public function setUp(): void
    {
        $this->tr = new GoogleTranslate();
    }
    /**
     * A basic feature test example.
     *
     * @return void
     */ 

    public function testTranslationEquality()
    {
        try {
            $resultOne = GoogleTranslate::trans('Hello world', 'fr', 'en');
        } catch (\ErrorException $e) {
            $resultOne = null;
        }
        $resultTwo = $this->tr->setSource('en')->setTarget('fr')->translate('Hello world');

        $this->assertEquals($resultOne, $resultTwo, 'Bonjour le monde');
    }

    public function testRawResponse()
    {
        $rawResult = $this->tr->getResponse('cat');

        $this->assertTrue(is_array($rawResult), 'Method getResponse() should return an array.');
    }
}
