<?php

namespace Oblik\Pluralization;

class LithuanianLanguage extends Language
{
    static function cardinal(float $n, int $i, int $v, int $w, int $f, int $t)
    {
        $mod10 = $n % 10;
        $mod100 = $n % 100;
        $hasNonZeroDecimal = $n != $i;
        
        if (!$hasNonZeroDecimal && $mod10 == 1 && !self::inRange($mod100, [11, 19])) {
            return ONE;
        }
        elseif (!$hasNonZeroDecimal && self::inRange($mod10, [2, 19]) && !self::inRange($mod100, [11, 19])) {
            return FEW;
        }
        elseif ($f != 0) {
            return MANY;
        }
        return OTHER;
    }

    static function ordinal(int $n)
    {
        return OTHER;
    }

    const RANGE = [
        ONE . ONE => ONE,
        ONE . FEW => FEW,
        ONE . MANY => MANY,
        ONE . OTHER => OTHER,
        FEW . ONE => ONE,
        FEW . FEW => FEW,
        FEW . MANY => MANY,
        FEW . OTHER => OTHER,
        MANY . ONE => ONE,
        MANY . FEW => FEW,
        MANY . MANY => MANY,
        MANY . OTHER => OTHER,
        OTHER . ONE => ONE,
        OTHER . FEW => FEW,
        OTHER . MANY => MANY,
        OTHER . OTHER => OTHER,
    ];
}
