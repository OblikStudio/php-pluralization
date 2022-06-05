<?php

namespace Oblik\Pluralization;

class HebrewLanguageTest extends LanguageTestCase
{
    static $class = HebrewLanguage::class;

    public function testCardinals()
    {
        $this->checkCardinals(ONE, [1]);
        $this->checkCardinals(TWO, [2]);
        $this->checkCardinals(MANY, [20, 30, 40, 50, 60, 70]);
        $this->checkCardinals(OTHER, [0, [3, 17], 101, 1001]);
        $this->checkCardinals(OTHER, [[0.0, 1.5, 1], '10.0', '100.0', '1000.0', '10000.0']);
    }

    public function testOrdinals()
    {
        $this->checkOrdinals(OTHER, [[0, 15], 100, 1000]);
    }
}
