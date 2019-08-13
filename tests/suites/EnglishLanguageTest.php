<?php

namespace Oblik\Pluralization;

final class EnglishLanguageTest extends LanguageTestCase
{
    static $class = EnglishLanguage::class;

    public function testCardinals()
    {
        $this->checkCardinals(ONE, [1]);
        $this->checkCardinals(OTHER, [0, [2, 16], 100, 1000, 10000]);
        $this->checkCardinals(OTHER, [[0, 1.5, 1], '10.0', '100.0', '1000.0', '10000.0']);
    }

    public function testOrdinals()
    {
        $this->checkOrdinals(ONE, [1, 21, 101, 1001]);
        $this->checkOrdinals(TWO, [2, 22, 202, 2002]);
        $this->checkOrdinals(FEW, [3, 33, 303, 3003]);
        $this->checkOrdinals(OTHER, [0, [4, 18], 100, 1000, 10000]);
    }
}
