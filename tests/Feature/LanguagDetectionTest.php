<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Stichoza\GoogleTranslate\GoogleTranslate;

class LanguagDetectionTest extends TestCase
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

    public function testSingleWord()
    {
        $this->tr->translate('Bonjour le monde');
        $this->assertEquals($this->tr->getLastDetectedSource(), 'fr');
 
    } 
}
