<?php

namespace Oblik\Pluralization;

class KazakhLanguageTest extends LanguageTestCase
{
    static $class = KazakhLanguage::class;

    public function testCardinals()
    {
        $this->checkCardinals(ONE, [1]);
        $this->checkCardinals(ONE, ['1.0', '1.00', '1.000']);
        $this->checkCardinals(OTHER, [0, [2, 16], 100, 1000, 10000]);
        $this->checkCardinals(OTHER, [[0.0, 0.9, 1], [1.1, 1.6, 1], '10.0', '100.0', '1000.0', '10000.0']);
    }

    public function testOrdinals()
    {
        $this->checkOrdinals(MANY, [6, 9, 10, 16, 19, 100, 1000, 10000]);
        $this->checkOrdinals(OTHER, [[0, 5], 7, 8, [11, 15], 17, 18, 21, 101, 1001]);
    }
}
