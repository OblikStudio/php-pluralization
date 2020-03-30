<?php

namespace Oblik\Pluralization;

final class ArabicLanguageTest extends LanguageTestCase
{
    static $class = ArabicLanguage::class;

    public function testCardinals()
    {
        $this->checkCardinals(ZERO, [0]);
        $this->checkCardinals(ZERO, ['0.0', '0.00', '0.000', '0.0000']);
        $this->checkCardinals(ONE, [1]);
        $this->checkCardinals(ONE, ['1.0', '1.00', '1.000', '1.0000']);
        $this->checkCardinals(TWO, [2]);
        $this->checkCardinals(TWO, ['2.0', '2.00', '2.000', '2.0000']);
        $this->checkCardinals(FEW, [[3, 10], [103, 110], 1003]);
        $this->checkCardinals(FEW, ['3.0', '4.0', '5.0', '6.0', '7.0', '8.0', '9.0', '10.0', '103.0', '1003.0']);
        $this->checkCardinals(MANY, [[11, 26], 111, 1011]);
        $this->checkCardinals(MANY, ['11.0', '12.0', '13.0', '14.0', '15.0', '16.0', '17.0', '18.0', '111.0', '1011.0']);
        $this->checkCardinals(OTHER, [[100, 102], [200, 202], [300, 302], [400, 402], [500, 502], 600, 1000, 10000]);
        $this->checkCardinals(OTHER, [[0.1, 0.9, 1], [1.1, 1.7, 1], 10.1, '100.0', '1000.0', '10000.0']);
    }

    public function testOrdinals()
    {
        $this->checkOrdinals(OTHER, [[0, 15], 100, 1000, 10000]);
    }
}
