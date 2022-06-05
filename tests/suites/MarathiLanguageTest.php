<?php

namespace Oblik\Pluralization;

class MarathiLanguageTest extends LanguageTestCase
{
    static $class = MarathiLanguage::class;

    public function testCardinals()
    {
        $this->checkCardinals(ONE, [0, 1]);
        $this->checkCardinals(ONE, [[0.0, 1.0, 1]]);
        $this->checkCardinals(OTHER, [[2, 17], 100, 1000, 10000]);
        $this->checkCardinals(OTHER, [[1.1, 2.6, 1], 10.1, '100.0', '1000.0', '10000.0']);
    }

    public function testOrdinals()
    {
        $this->checkOrdinals(ONE, [1]);
        $this->checkOrdinals(TWO, [2, 3]);
        $this->checkOrdinals(FEW, [4]);
        $this->checkOrdinals(OTHER, [0, [5, 19], 100, 1000]);
    }
}
