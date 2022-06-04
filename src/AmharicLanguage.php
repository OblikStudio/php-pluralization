<?php

namespace Oblik\Pluralization;

class AmharicLanguage extends Language
{
    static function cardinal(float $n)
    {
        if ($n == 0 || $n == 1) {
            return ONE;
        }
        return OTHER;
    }

    static function ordinal()
    {
        return OTHER;
    }

    const RANGE = [
        ONE . ONE => ONE,
        ONE . OTHER => OTHER,
        OTHER . OTHER => OTHER,
    ];
}