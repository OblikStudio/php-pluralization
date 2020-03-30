<?php

namespace Oblik\Pluralization;

final class VietnameseLanguageTest extends LanguageTestCase
{
    static $class = VietnameseLanguage::class;

    public function testCardinals()
    {
        $this->checkCardinals(OTHER, [[0, 15], 100, 1000, 10000]);
        $this->checkCardinals(OTHER, [[0, 1.5, 1], '10.0', '100.0', '1000.0', '10000.0']);
    }

    public function testOrdinals()
    {
        $this->checkOrdinals(ONE, [1]);
        $this->checkOrdinals(OTHER, [0, [2, 16], 100, 1000, 10000]);
    }
}
