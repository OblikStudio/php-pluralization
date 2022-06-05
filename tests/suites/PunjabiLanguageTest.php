<?php

namespace Oblik\Pluralization;

class PunjabiLanguageTest extends LanguageTestCase
{
    static $class = PunjabiLanguage::class;

    public function testCardinals()
    {
        $this->checkCardinals(ONE, [0, 1]);
        $this->checkCardinals(ONE, ['0.0', '1.0', '1.00', '1.000']);
        $this->checkCardinals(OTHER, [[2, 17], 100, 1000, 10000]);
        $this->checkCardinals(OTHER, [[0.1, 0.9, 1], [1.1, 1.7, 1], '10.0', '100.0', '1000.0', '10000.0']);
    }

    public function testOrdinals()
    {
        $this->checkOrdinals(OTHER, [[0, 15], 100, 1000]);
    }
}
