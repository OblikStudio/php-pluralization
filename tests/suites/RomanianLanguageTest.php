<?php

namespace Oblik\Pluralization;

class RomanianLanguageTest extends LanguageTestCase
{
    static $class = RomanianLanguage::class;

    public function testCardinals()
    {
        $this->checkCardinals(ONE, [1]);
        $this->checkCardinals(FEW, [0, [2, 16], 101, 1001]);
        $this->checkCardinals(FEW, [[0, 1.5, 1], '10.0', '100.0', '1000.0', '10000.0']);
        $this->checkCardinals(OTHER, [[20, 35], 100, 1000, 10000]);
    }

    public function testOrdinals()
    {
        $this->checkOrdinals(ONE, [1]);
        $this->checkOrdinals(OTHER, [0, [2, 16], 100, 1000]);
    }
}
