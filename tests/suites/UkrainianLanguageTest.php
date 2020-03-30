<?php

namespace Oblik\Pluralization;

final class UkrainianLanguageTest extends LanguageTestCase
{
    static $class = UkrainianLanguage::class;

    public function testCardinals()
    {
        $this->checkCardinals(ONE, [1, 21, 31, 41, 51, 61, 71, 81, 101, 1001]);
        $this->checkCardinals(FEW, [[2, 4], [22, 24], [52, 54], 62, 102, 1002]);
        $this->checkCardinals(MANY, [0, [5, 19], 100, 1000, 10000]);
        $this->checkCardinals(OTHER, [[0, 1.5, 1], '10.0', '100.0', '1000.0', '10000.0']);
    }

    public function testOrdinals()
    {
        $this->checkOrdinals(FEW, [3, 23, 33, 43, 53, 63, 73, 83, 103, 1003]);
        $this->checkOrdinals(OTHER, [[0, 2], [4, 16], 100, 1000, 10000]);
    }
}
