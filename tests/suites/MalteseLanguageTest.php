<?php

namespace Oblik\Pluralization;

class MalteseLanguageTest extends LanguageTestCase
{
    static $class = MalteseLanguage::class;

    public function testCardinals()
    {
        $this->checkCardinals(ONE, [1]);
        $this->checkCardinals(ONE, ['1.0', '1.00', '1.000']);
        $this->checkCardinals(FEW, [0, [2, 10], [102, 107], 1002]);
        $this->checkCardinals(FEW, ['0.0', '2.0', '3.0', '10.0', '102.0', '1002.0']);
        $this->checkCardinals(MANY, [[11, 19], [111, 117], 1011]);
        $this->checkCardinals(MANY, ['11.0', '12.0', '13.0', '14.0', '111.0', '1011.0']);
        $this->checkCardinals(OTHER, [[20, 35], 100, 1000, 10000]);
        $this->checkCardinals(OTHER, [[0.1, 0.9, 1], [1.1, 1.7, 1], 10.1, '100.0', '1000.0']);
    }

    public function testOrdinals()
    {
        $this->checkOrdinals(OTHER, [[0, 15], 100, 1000]);
    }
}
