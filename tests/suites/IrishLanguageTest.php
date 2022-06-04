<?php

namespace Oblik\Pluralization;

class IrishLanguageTest extends LanguageTestCase
{
    static $class = IrishLanguage::class;

    public function testCardinals()
    {
        $this->checkCardinals(ONE, [1]);
        $this->checkCardinals(ONE, ['1.0', '1.00', '1.000']);
        $this->checkCardinals(TWO, [2]);
        $this->checkCardinals(TWO, ['2.0', '2.00', '2.000']);
        $this->checkCardinals(FEW, [[3, 6]]);
        $this->checkCardinals(FEW, ['3.0', '4.0', '5.0', '6.0']);
        $this->checkCardinals(MANY, [[7, 10]]);
        $this->checkCardinals(MANY, ['7.0', '8.0', '9.0', '10.0']);
        $this->checkOrdinals(OTHER, [[0, 0.9], [1.1, 1.6], '10.1', '100.0']);
    }

    public function testOrdinals()
    {
        $this->checkOrdinals(OTHER, [[0, 15], 100, 1000]);
    }
}
