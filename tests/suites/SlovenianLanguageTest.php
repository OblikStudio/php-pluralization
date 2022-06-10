<?php

namespace Oblik\Pluralization;

class SlovenianLanguageTest extends LanguageTestCase
{
    static $class = SlovenianLanguage::class;

    public function testCardinals()
    {
        $this->checkCardinals(ONE, [1, 101, 201, 301, 401, 501, 601, 701, 1001]);
        $this->checkCardinals(TWO, [2, 102, 202, 302, 402, 502, 602, 702, 1002]);
        $this->checkCardinals(FEW, [3, 4, 103, 104, 204, 204, 303, 304, 403, 404]);
        $this->checkCardinals(OTHER, [0, [5, 19], 100, 1000, 10000]);
    }

    public function testOrdinals()
    {
        $this->checkOrdinals(OTHER, [[0, 15], 100, 1000]);
    }
}
