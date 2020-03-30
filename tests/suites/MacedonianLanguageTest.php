<?php

namespace Oblik\Pluralization;

final class MacedonianLanguageTest extends LanguageTestCase
{
    static $class = MacedonianLanguage::class;

    public function testCardinals()
    {
        $this->checkCardinals(ONE, [1, 21, 31, 41, 51, 61, 71, 81, 101, 1001]);
        $this->checkCardinals(ONE, [0.1, 1.1, 2.1, 3.1, 4.1, 5.1, 6.1, 7.1, 10.1, 100.1, 1000.1]);
        $this->checkCardinals(OTHER, [0, [2, 16], 100, 1000, 10000]);
        $this->checkCardinals(OTHER, ['0.0', [0.2, 1.0, 1], [1.2, 1.7, 1], '10.0', '100.0', '1000.0', '10000.0']);
    }

    public function testOrdinals()
    {
        $this->checkOrdinals(ONE, [1, 21, 31, 41, 51, 61, 71, 81, 101, 1001]);
        $this->checkOrdinals(TWO, [2, 22, 32, 42, 52, 62, 72, 82, 102, 1002]);
        $this->checkOrdinals(MANY, [7, 8, 27, 28, 37, 38, 47, 48, 57, 58, 67, 68, 77, 78, 87, 88, 107, 1007]);
        $this->checkOrdinals(OTHER, [0, [3, 6], [9, 19], 100, 1000, 10000]);
    }
}
