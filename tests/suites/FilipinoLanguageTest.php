<?php

namespace Oblik\Pluralization;

class FilipinoLanguageTest extends LanguageTestCase
{
    static $class = FilipinoLanguage::class;

    public function testCardinals()
    {
        $this->checkCardinals(ONE, [[0, 3], 5, 7, 8, [10, 13], 15, 17]);
        $this->checkCardinals(ONE, [[0.0, 0.3, 1], 0.5, 0.7, 0.7]);
        $this->checkCardinals(OTHER, [4, 6, 9, 14, 16, 19, 24, 26, 104, 1004]);
        $this->checkCardinals(OTHER, [0.4, 0.6, 0.9, 1.4, 1.6, 1.9, 2.4, 2.6]);
    }

    public function testOrdinals()
    {
        $this->checkOrdinals(ONE, [1]);
        $this->checkOrdinals(OTHER, [0, [2, 16], 100, 1000]);
    }
}
