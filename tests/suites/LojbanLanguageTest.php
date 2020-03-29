<?php

namespace Oblik\Pluralization;

final class LojbanLanguageTest extends LanguageTestCase
{
    static $class = LakotaLanguage::class;

    public function testCardinals()
    {
        $this->checkCardinals(OTHER, [[0, 15], 100, 1000, 10000]);
        $this->checkCardinals(OTHER, [[0, 1.5, 1], '10.0', '100.0', '1000.0', '10000.0']);
    }

    public function testOrdinals()
    {
        $this->checkOrdinals(OTHER, [[0, 15], 100, 1000, 10000]);
    }
}