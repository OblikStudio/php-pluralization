<?php

namespace Oblik\Pluralization;

final class WelshLanguageTest extends LanguageTestCase
{
    static $class = WelshLanguage::class;

    public function testCardinals()
    {
        $this->checkCardinals(ZERO, [0]);
        $this->checkCardinals(ZERO, ['0.0', '0.00', '0.000', '0.0000']);
        $this->checkCardinals(ONE, [1]);
        $this->checkCardinals(ONE, ['1.0', '1.00', '1.000', '1.0000']);
        $this->checkCardinals(TWO, [2]);
        $this->checkCardinals(TWO, ['2.0', '2.00', '2.000', '2.0000']);
        $this->checkCardinals(FEW, [3]);
        $this->checkCardinals(FEW, ['3.0', '3.00', '3.000', '3.0000']);
        $this->checkCardinals(MANY, [6]);
        $this->checkCardinals(MANY, ['6.0', '6.00', '6.000', '6.0000']);
        $this->checkCardinals(OTHER, [4, 5, [7, 20], 100, 1000, 10000]);
        $this->checkCardinals(OTHER, [[0.1, 0.9, 1], [1.1, 1.7, 1], '10.0', '100.0', '1000.0', '10000.0']);
    }

    public function testOrdinals()
    {
        $this->checkOrdinals(ZERO, [0, [7, 9]]);
        $this->checkOrdinals(ONE, [1]);
        $this->checkOrdinals(TWO, [2]);
        $this->checkOrdinals(FEW, [3, 4]);
        $this->checkOrdinals(MANY, [5, 6]);
        $this->checkOrdinals(OTHER, [[10, 25], 100, 1000, 10000]);
    }
}
