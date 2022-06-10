<?php

namespace Oblik\Pluralization;

class AlbanianLanguageTest extends LanguageTestCase
{
    static $class = AlbanianLanguage::class;

    public function testCardinals()
    {
        $this->checkCardinals(ONE, [1, '1.0', '1.00', '1.000']);
        $this->checkCardinals(OTHER, [0, [2, 16], 100, 1000, 10000]);
    }

    public function testOrdinals()
    {
        $this->checkOrdinals(ONE, [1]);
        $this->checkOrdinals(MANY, [4, 24, 34, 44, 54, 64, 74, 84, 104, 1004]);
        $this->checkOrdinals(OTHER, [0, 2, 3, [5, 17], 100, 1000]);
    }
}
