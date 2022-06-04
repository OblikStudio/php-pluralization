<?php

namespace Oblik\Pluralization;

class CatalanLanguageTest extends LanguageTestCase
{
    static $class = CatalanLanguage::class;

    public function testCardinals()
    {
        $this->checkCardinals(ONE, [1]);
        $this->checkCardinals(OTHER, [0, [2, 16], 100, 1000, 10000]);
        $this->checkCardinals(OTHER, [[0, 1.5, 1], '10.0', '100.0', '1000.0', '10000.0']);
    }

    public function testOrdinals()
    {
        $this->checkOrdinals(ONE, [1, 3]);
        $this->checkOrdinals(TWO, [2]);
        $this->checkOrdinals(FEW, [4]);
        $this->checkCardinals(OTHER, [0, [5, 19], 100, 1000, 10000]);
    }
}
