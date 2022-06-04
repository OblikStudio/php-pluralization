<?php

namespace Oblik\Pluralization;

class GujaratiLanguageTest extends LanguageTestCase
{
    static $class = GujaratiLanguage::class;

    public function testCardinals()
    {
        $this->checkCardinals(ONE, [0, 1]);
        $this->checkCardinals(ONE, [0.0, 1.0, 1]);
        $this->checkCardinals(OTHER, [[2, 17], 100, 1000, 10000]);
        $this->checkCardinals(OTHER, [[1.1, 2.6, 1], '10.0', '100.0', '1000.0', '10000.0']);
    }

    public function testOrdinals()
    {
        $this->checkOrdinals(ONE, [1]);
        $this->checkOrdinals(TWO, [2, 3]);
        $this->checkOrdinals(FEW, [4]);
        $this->checkOrdinals(MANY, [6]);
        $this->checkOrdinals(OTHER, [0, 5, [7, 20], 100, 1000]);
    }
}
