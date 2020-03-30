<?php

namespace Oblik\Pluralization;

class NorwegianNynorskLanguage extends Language
{
    static function cardinal(float $n, int $i, int $v)
    {
        if ($n == 1) {
            return ONE;
        }
        return OTHER;
    }

    static function ordinal(int $n)
    {
        // information missing at https://www.unicode.org/cldr/charts/34/supplemental/language_plural_rules.html#nn
        return OTHER;
    }

    const RANGE = [
        // information missing at https://www.unicode.org/cldr/charts/34/supplemental/language_plural_rules.html#nn
        OTHER . OTHER => OTHER,
    ];
}
