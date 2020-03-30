<?php

namespace Oblik\Pluralization;

final class GeorgianLanguageTest extends LanguageTestCase
{
    static $class = GeorgianLanguage::class;

    public function testCardinals()
    {
        $this->checkCardinals(ONE, [1]);
        $this->checkCardinals(ONE, ['1.0', '1.00', '1.000', '1.0000']);
        $this->checkCardinals(OTHER, [0, [2, 16], 100, 1000, 10000]);
        $this->checkCardinals(OTHER, [[0.0, 0.9, 1], [1.1, 1.6, 1], '10.0', '100.0', '1000.0', '10000.0']);
    }

    public function testOrdinals()
    {
        $this->checkOrdinals(ONE, [1]);
        $this->checkOrdinals(MANY, [0, [2, 16], 102, 1002]);
        $this->checkOrdinals(OTHER, [[21, 36], 100, 1000, 10000]);
    }
}
