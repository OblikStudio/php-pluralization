<?php

namespace Oblik\Pluralization;

final class PersianLanguageTest extends LanguageTestCase
{
    static $class = PersianLanguage::class;

    public function testCardinals()
    {
        $this->checkCardinals(ONE, [0, 1]);
        $this->checkCardinals(ONE, [[0, 1.0, 1], [0.00, 0.04, 2]]);
        $this->checkCardinals(OTHER, [[2, 17], 100, 1000, 10000]);
        $this->checkCardinals(OTHER, [[1.1, 2.6, 1], '10.0', '100.0', '1000.0', '10000.0']);
    }

    public function testOrdinals()
    {
        $this->checkOrdinals(OTHER, [[1, 15], 100, 1000, 10000]);
    }
}
