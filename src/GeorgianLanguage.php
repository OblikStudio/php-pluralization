<?php

namespace Oblik\Pluralization;

class GeorgianLanguage extends Language
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
        $mod100 = $n % 100;
        
        if ($n == 1) {
            return ONE;
        }
        elseif ($n == 0 || (self::inRange($mod100, [2, 20]) || $mod100 === 40 || $mod100 == 60 || $mod100 == 80)) {
            return MANY;
        }
        return OTHER;
    }

    const RANGE = [
        ONE . OTHER => ONE,
        OTHER . ONE => OTHER,
        OTHER . OTHER => OTHER,
    ];
}
