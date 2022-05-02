<?php

namespace Stichoza\GoogleTranslate\Tests;

use PHPUnit\Framework\TestCase;
use Stichoza\GoogleTranslate\GoogleTranslate;

class LanguageDetectionTest extends TestCase
{
    public $tr;

    public function setUp()
    {
        $this->tr = new GoogleTranslate();
    }

    public function testSingleWord()
    {
        $this->tr->translate('Bonjour le monde');
        $this->assertEquals($this->tr->getLastDetectedSource(), 'fa');
 
    } 
}