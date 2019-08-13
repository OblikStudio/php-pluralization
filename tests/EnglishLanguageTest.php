<?php

namespace Oblik\Pluralization;

use PHPUnit\Framework\TestCase;

final class EnglishLanguageTest extends TestCase
{
    public function testCardinal()
    {
        $this->assertEquals(EnglishLanguage::getCardinal(1), ONE);
        $this->assertEquals(EnglishLanguage::getCardinal(2), OTHER);
        $this->assertEquals(EnglishLanguage::getCardinal(1.5), OTHER);
    }

    public function testOrdinal()
    {
        $this->assertEquals(EnglishLanguage::getOrdinal(1), ONE);
        $this->assertEquals(EnglishLanguage::getOrdinal(2), TWO);
        $this->assertEquals(EnglishLanguage::getOrdinal(3), FEW);
        $this->assertEquals(EnglishLanguage::getOrdinal(4), OTHER);
    }

    public function testRange()
    {
        $this->assertEquals(EnglishLanguage::getRange(1, 2), OTHER);
        $this->assertEquals(EnglishLanguage::getRange(0, 1), OTHER);
        $this->assertEquals(EnglishLanguage::getRange(0, 2), OTHER);
    }
}
