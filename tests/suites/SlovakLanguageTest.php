<?php

namespace Oblik\Pluralization;

class SlovakLanguageTest extends LanguageTestCase
{
    static $class = SlovakLanguage::class;

    public function testCardinals()
    {
        $this->checkCardinals(ONE, [1]);
        $this->checkCardinals(FEW, [[2, 4]]);
        $this->checkCardinals(MANY, [[0.0, 1.5, 1], '10.0', '100.0', '1000.0', '10000.0']);
        $this->checkCardinals(OTHER, [0, [5, 19], 100, 1000, 10000]);
    }

    public function testOrdinals()
    {
        $this->checkOrdinals(OTHER, [[0, 15], 100, 1000]);
    }
}
