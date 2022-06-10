<?php

namespace Oblik\Pluralization;

class SinhalaLanguageLanguage extends LanguageTestCase
{
    static $class = SinhalaLanguage::class;

    public function testCardinals()
    {
        $this->checkCardinals(ONE, [0, 1]);
        $this->checkCardinals(ONE, ['0.0', '0.1', '1.0', '0.00', '0.01', '1.00']);
        $this->checkCardinals(OTHER, [[2, 17], 100, 1000, 10000]);
        $this->checkCardinals(OTHER, [[0.2, 0.9, 1], [1.1, 1.8, 1], '10.0', '100.0', '1000.0', '10000.0']);
    }

    public function testOrdinals()
    {
        $this->checkOrdinals(OTHER, [[0, 15], 100, 1000]);
    }
}
