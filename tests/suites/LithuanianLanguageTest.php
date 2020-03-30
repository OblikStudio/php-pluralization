<?php

namespace Oblik\Pluralization;

final class LithuanianLanguageTest extends LanguageTestCase
{
    static $class = LithuanianLanguage::class;

    public function testCardinals()
    {
        $this->checkCardinals(ONE, [1, 21, 31, 41, 51, 61, 71, 81, 101, 1001]);
        $this->checkCardinals(ONE, ['1.0', '21.0', '31.0', '41.0', '51.0', '61.0', '71.0', '81.0', '101.0', '1001.0']);
        $this->checkCardinals(FEW, [[2, 9], [22, 29], 102, 1002]);
        $this->checkCardinals(FEW, ['2.0', '3.0', '4.0', '5.0', '6.0', '7.0', '8.0', '9.0', '22.0', '102.0', '1002.0']);
        $this->checkCardinals(MANY, [[0.1, 0.9, 1], [1.1, 1.7, 1], 10.1, 100.1, 1000.1]);
        $this->checkCardinals(OTHER, [0, [10, 20], 30, 40, 50, 60, 100, 1000, 10000]);
        $this->checkCardinals(OTHER, ['0.0', '10.0', '11.0', '12.0', '13.0', '14.0', '15.0', '16.0', '100.0', '1000.0', '10000.0']);
    }

    public function testOrdinals()
    {
        $this->checkOrdinals(OTHER, [[0, 15], 100, 1000, 10000]);
    }
}
