<?php

namespace Stichoza\GoogleTranslate\Tests;

use PHPUnit\Framework\TestCase;
use Stichoza\GoogleTranslate\GoogleTranslate;

class TranslationTest extends TestCase
{
    public $tr;

    public function setUp()
    {
        $this->tr = new GoogleTranslate();
    }

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