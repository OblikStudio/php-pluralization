<?php

namespace Oblik\Pluralization;

class IcelandicLanguageTest extends LanguageTestCase
{
    static $class = IcelandicLanguage::class;

    public function testCardinals()
    {
        $this->checkCardinals(ONE, [1, 21, 31, 41, 51, 61, 71, 81, 101, 1001]);
        $this->checkCardinals(ONE, [[0.1, 1.6], 10.1, 100.1, 1000.1]);
        $this->checkCardinals(OTHER, [0, [2, 16], 100, 1000, 10000]);
        $this->checkCardinals(OTHER, ['0.0', '2.0', '10.0', '100.0', '1000.0', '10000.0']);
    }

    public function testOrdinals()
    {
        $this->checkOrdinals(OTHER, [[0, 15], 100, 1000]);
    }
}
