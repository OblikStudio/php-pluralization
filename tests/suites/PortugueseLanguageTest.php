<?php

namespace Oblik\Pluralization;

final class PortugueseLanguageTest extends LanguageTestCase
{
    static $class = PortugueseLanguage::class;

    public function testCardinals()
    {
        $this->checkCardinals(ONE, [0, 1]);
        $this->checkCardinals(ONE, [[0, 1.5, 1]]);
        $this->checkCardinals(OTHER, [[2, 17], 100, 1000, 10000]);
        $this->checkCardinals(OTHER, [[2.0, 3.5, 1], '10.0', '100.0', '1000.0', '10000.0']);
    }

    public function testOrdinals()
    {
        $this->checkOrdinals(OTHER, [[0, 15], 100, 1000, 10000]);
    }
}
