<?php

namespace Oblik\Pluralization;

class HebrewLanguage extends Language
{
    static function cardinal(float $n, int $i, int $v)
    {
        if ($i == 1 && $v == 0) {
            return ONE;
        }
        elseif ($i == 2 && $v == 0) {
            return TWO;
        }
        elseif ($v == 0 && !self::inRange($n, [0, 10]) && $n % 10 == 0)
        {
            return MANY;
        }
        return OTHER;
    }

    static function ordinal(int $n)
    {
        return OTHER;
    }

    const RANGE = [
        ONE . TWO => OTHER,
        ONE . MANY => MANY,
        ONE . OTHER => OTHER,
        TWO . MANY => OTHER,
        TWO . OTHER => OTHER,
        MANY . MANY => MANY,
        MANY . OTHER => MANY,
        OTHER . ONE => OTHER,
        OTHER . TWO => OTHER,
        OTHER . MANY => MANY,
        OTHER . OTHER => OTHER
    ];
}
