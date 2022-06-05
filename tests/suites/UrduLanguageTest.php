<?php

namespace Oblik\Pluralization;

class UrduLanguageTest extends LanguageTestCase
{
    static $class = UrduLanguage::class;

    public function testCardinals()
    {
        $this->checkCardinals(ONE, [1]);
        $this->checkCardinals(OTHER, [0, [2, 16], 100, 1000, 10000]);
    }

    public function testOrdinals()
    {
        $this->checkOrdinals(OTHER, [[0, 15], 100, 1000]);
    }
}
