<?php

namespace Oblik\Pluralization;

class ZuluLanguageTest extends LanguageTestCase
{
    static $class = ZuluLanguage::class;

    public function testCardinals()
    {
        $this->checkCardinals(ONE, [0, 1]);
        $this->checkCardinals(ONE, [[0, 1.0, 1], [0.00, 0.04, 2]]);
        $this->checkCardinals(OTHER, [[2, 17], 100, 1000, 10000]);
        $this->checkCardinals(OTHER, [[1.1, 2.6, 1], '10.0', '100.0', '1000.0', '10000.0']);    }

    public function testOrdinals()
    {
        $this->checkOrdinals(OTHER, [[0, 15], 100, 1000]);
    }
}
