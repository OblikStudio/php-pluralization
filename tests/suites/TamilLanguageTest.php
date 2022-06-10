<?php

namespace Oblik\Pluralization;

class TamilLanguageTest extends LanguageTestCase
{
    static $class = TamilLanguage::class;

    public function testCardinals()
    {
        $this->checkCardinals(ONE, [1, '1.0', '1.00', '1.000']);
        $this->checkCardinals(OTHER, [0, [2, 16], 100, 1000, 10000]);
    }

    public function testOrdinals()
    {
        $this->checkOrdinals(OTHER, [[0, 15], 100, 1000]);
    }
}
