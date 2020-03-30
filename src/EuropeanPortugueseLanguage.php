<?php

namespace Oblik\Pluralization;

class EuropeanPortugueseLanguage extends Language
{
    static function cardinal(float $n, int $i, int $v)
    {
        if ($i == 1 && $v == 0) {
            return ONE;
        }
        return OTHER;
    }

    static function ordinal(int $n)
    {
        // information missing at https://www.unicode.org/cldr/charts/34/supplemental/language_plural_rules.html#pt_PT
        return OTHER;
    }

    const RANGE = [
        ONE . OTHER => OTHER,
        OTHER . ONE => OTHER, // missing
        OTHER . OTHER => OTHER,
    ];
}
