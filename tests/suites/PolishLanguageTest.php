<?php

namespace Oblik\Pluralization;

final class PolishLanguageTest extends LanguageTestCase
{
    static $class = PolishLanguage::class;

    public function testCardinals()
    {
        $this->checkCardinals(ONE, [1]);
        $this->checkCardinals(FEW, [[2, 4], [22, 24], [32, 34], [42, 44], [52, 54], 62, 102, 1002]);
        $this->checkCardinals(MANY, [0, [5, 19], 100, 1000, 10000]);
        $this->checkCardinals(OTHER, [[0.0, 1.5, 1], '10.0', '100.0', '1000.0', '10000.0']);
    }

    public function testOrdinals()
    {
        $this->checkOrdinals(OTHER, [[0, 15], 100, 1000]);
    }
}
