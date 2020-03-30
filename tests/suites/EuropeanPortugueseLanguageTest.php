<?php

namespace Oblik\Pluralization;

final class EuropeanPortugueseLanguageTest extends LanguageTestCase
{
    static $class = EuropeanPortugueseLanguage::class;

    public function testCardinals()
    {
        $this->checkCardinals(ONE, [1]);
        $this->checkCardinals(OTHER, [0, [2, 16], 100, 1000, 10000]);
        $this->checkCardinals(OTHER, [[0, 1.5, 1], '10.0', '100.0', '1000.0', '10000.0']);
    }

    public function testOrdinals()
    {
        // canonical ordinals missing at https://www.unicode.org/cldr/charts/34/supplemental/language_plural_rules.html#pt_PT
    }
}
