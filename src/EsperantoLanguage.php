<?php

namespace Oblik\Pluralization;

class EsperantoLanguage extends Language
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
        // information missing at https://www.unicode.org/cldr/charts/34/supplemental/language_plural_rules.html#eo
        return OTHER;
    }

    const RANGE = [
        ONE . OTHER => OTHER,
        OTHER . ONE => OTHER,
        OTHER . OTHER => OTHER,
    ];
}
