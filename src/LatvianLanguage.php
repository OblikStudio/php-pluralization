<?php

namespace Oblik\Pluralization;

class LatvianLanguage extends Language
{
    static function cardinal(float $n, int $i, int $v, int $w, int $f, int $t)
    {
        $mod10 = $n % 10;
        $mod100 = $n % 100;
        $fmod10 = $f % 10;
        $fmod100 = $f % 100;
        $hasNonZeroDecimal = $n != $i;
        
        if (!$hasNonZeroDecimal && (
            $mod10 == 0
            || self::inRange($mod100, [11, 19])
            || ($v == 2 && self::inRange($fmod100, [11, 19]))
        )) {
            return ZERO;
        }
        elseif (
            (!$hasNonZeroDecimal && $mod10 == 1 && $mod100 != 11)
            || ($v == 2 && $fmod10 == 1 && $fmod100 != 11)
            || ($v != 2 && $fmod10 == 1)
        ) {
            return ONE;
        }
        return OTHER;
    }

    static function ordinal(int $n)
    {
        return OTHER;
    }

    const RANGE = [
        ZERO . ZERO => OTHER,
        ZERO . ONE => ONE,
        ZERO . OTHER => OTHER,
        ONE . ZERO => OTHER,
        ONE . ONE => ONE,
        ONE . OTHER => OTHER,
        OTHER . ZERO => OTHER,
        OTHER . ONE => ONE,
        OTHER . OTHER => OTHER,
    ];
}
