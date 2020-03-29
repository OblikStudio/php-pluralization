<?php

namespace Oblik\Pluralization;

final class ItalianLanguageTest extends LanguageTestCase
{
    static $class = ItalianLanguage::class;

    public function testCardinals()
    {
        $this->checkCardinals(ONE, [1]);
        $this->checkCardinals(OTHER, [0, [2, 16], 100, 1000, 10000]);
        $this->checkCardinals(OTHER, [[0, 1.5, 1], '10.0', '100.0', '1000.0', '10000.0']);
    }

    public function testOrdinals()
    {
        $this->checkOrdinals(MANY, [8, 11, 80, 800]);
        $this->checkOrdinals(OTHER, [[0, 7], 9, 10, [12, 17], 100, 1000]);
    }
}
