<?php

namespace Oblik\Pluralization;

final class FrenchLanguageTest extends LanguageTestCase
{
    static $class = FrenchLanguage::class;

    public function testCardinals()
    {
        $this->checkCardinals(ONE, [0, 1]);
        $this->checkCardinals(ONE, [[0, 1.5, 1]]);
        $this->checkCardinals(OTHER, [[2, 17], 100, 1000, 10000]);
        $this->checkCardinals(OTHER, [[2, 3.5, 1], '10.0', '100.0', '1000.0', '10000.0']);
    }

    public function testOrdinals()
    {
        $this->checkOrdinals(ONE, [1]);
        $this->checkOrdinals(OTHER, [0, [2, 16], 100, 1000, 10000]);
    }
}
