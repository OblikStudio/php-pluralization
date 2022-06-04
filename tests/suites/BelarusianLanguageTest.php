<?php

namespace Oblik\Pluralization;

final class BelarusianLanguageTest extends LanguageTestCase
{
    static $class = RussianLanguage::class;

    public function testCardinals()
    {
        $this->checkCardinals(ONE, [1, 21, 101, 1001]);
        $this->checkCardinals(FEW, [[2, 4], [22, 24], [52, 54], 62, 102, 1002]);
        $this->checkCardinals(MANY, [0, [5, 19], 100, 1000, 10000]);
        $this->checkCardinals(OTHER, [[0, 1.5, 1], '10.0', '100.0', '1000.0', '10000.0']);
    }

    public function testOrdinals()
    {
        $this->checkOrdinals(OTHER, [[0, 15], 100, 1000, 10000]);
    }
}
