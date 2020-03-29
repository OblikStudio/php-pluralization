<?php

namespace Oblik\Pluralization;

final class AzerbaijaniLanguageTest extends LanguageTestCase
{
    static $class = AzerbaijaniLanguage::class;

    public function testCardinals()
    {
        $this->checkCardinals(ONE, [1]);
        $this->checkCardinals(ONE, ['1.0', '1.00', '1.000', '1.0000']);
        $this->checkCardinals(OTHER, [0, [2, 16], 100, 1000, 10000]);
        $this->checkCardinals(OTHER, [[0, 0.9, 1], [1.1, 1.6, 1], '10.0', '100.0', '1000.0', '10000.0']);
    }

    public function testOrdinals()
    {
        $this->checkOrdinals(ONE, [1, 2, 5, 7, 8, 11, 12, 15, 17, 18, [20, 22], 25, 101, 1001]);
        $this->checkOrdinals(FEW, [3, 4, 13, 14, 23, 24, 33, 34, 43, 44, 53, 54, 63, 64, 73, 74, 100, 1003]);
        $this->checkOrdinals(MANY, [0, 6, 16, 26, 36, 40, 46, 56, 106, 1006]);
        $this->checkOrdinals(OTHER, [9, 10, 19, 29, 30, 39, 49, 59, 69, 79, 109, 1000, 10000]);
    }
}
