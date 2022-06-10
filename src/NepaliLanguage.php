<?php

namespace Oblik\Pluralization;

class NepaliLanguage extends Language
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
        if (self::inRange($n, [1, 4]))
        {
            return ONE;
        }
        return OTHER;
    }

    const RANGE = [
        ONE . OTHER => OTHER,
        OTHER . ONE => ONE,
        OTHER . OTHER => OTHER
    ];
}
