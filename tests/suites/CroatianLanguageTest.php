<?php

namespace Oblik\Pluralization;

final class CroatianLanguageTest extends LanguageTestCase
{
    static $class = CroatianLanguage::class;

    public function testCardinals()
    {
        $this->checkCardinals(ONE, [1, 21, 31, 41, 51, 61, 71, 81, 101, 1001]);
        $this->checkCardinals(ONE, [0.1, 1.1, 2.1, 3.1, 4.1, 5.1, 6.1, 7.1, 10.1, 100.1, 1000.1]);
        $this->checkCardinals(FEW, [[2, 4], [22, 24], [32, 34], [42, 44], [52, 54], 62, 102, 1002]);
        $this->checkCardinals(FEW, [[0.2, 0.4, 1], [1.2, 1.4, 1], [2.2, 2.4, 1], [3.2, 3.4, 1], [4.2, 4.4, 1], 5.2, 10.2, 100.2, 1000.2]);
        $this->checkCardinals(OTHER, [0, [5, 19], 100, 1000, 10000]);
        $this->checkCardinals(OTHER, [0.0, [0.5, 1.0, 1], [1.5, 2.0, 1], [2.5, 2.7, 1], '10.0', '100.0', '1000.0', '10000.0']);
    }

    public function testOrdinals()
    {
        $this->checkOrdinals(OTHER, [[0, 15], 100, 1000]);
    }
}
