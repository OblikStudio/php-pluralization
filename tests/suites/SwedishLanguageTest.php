<?php

namespace Oblik\Pluralization;

final class SwedishLanguageTest extends LanguageTestCase
{
    static $class = SwedishLanguage::class;

    public function testCardinals()
    {
        $this->checkCardinals(ONE, [1]);
        $this->checkCardinals(OTHER, [0, [2, 16], 100, 1000, 10000]);
        $this->checkCardinals(OTHER, [[0, 1.5, 1], '10.0', '100.0', '1000.0', '10000.0']);
    }

    public function testOrdinals()
    {
        $this->checkOrdinals(ONE, [1, 2, 21, 22, 31, 32, 41, 42, 51, 52, 61, 62, 71, 72, 81, 82, 101, 1001]);
        $this->checkOrdinals(OTHER, [0, [3, 17], 100, 1000, 10000]);
    }
}
