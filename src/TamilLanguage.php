<?php

namespace Oblik\Pluralization;

class TamilLanguage extends Language
{
    static function cardinal(float $n)
    {
        if ($n == 1) {
            return ONE;
        }
        return OTHER;
    }

    static function ordinal(int $n)
    {
        return OTHER;
    }

    const RANGE = [
        ONE . OTHER => OTHER,
        OTHER . ONE => ONE,
        OTHER . OTHER => OTHER
    ];
}
