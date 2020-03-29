<?php

namespace Oblik\Pluralization;

class ArabicLanguage extends Language
{
    static function cardinal(float $n, int $i, int $v)
    {
        $mod100 = $n % 100;
        $hasNonZeroDecimal = $n != $i;
        
        if ($n == 0) {
            return ZERO;
        }
        elseif ($n == 1) {
            return ONE;
        }
        elseif ($n == 2) {
            return TWO;
        }
        elseif (!$hasNonZeroDecimal && $mod100 >= 3 && $mod100 <= 10) {
            return FEW;
        }
        elseif (!$hasNonZeroDecimal && $mod100 >= 11 && $mod100 <= 99) {
            return MANY;
        }
        return OTHER;
    }

    static function ordinal(int $n)
    {
        return OTHER;
    }

    const RANGE = [
        ZERO . ONE => ZERO,
        ZERO . TWO => ZERO,
        ZERO . FEW => FEW,
        ZERO . MANY => MANY,
        ZERO . OTHER => OTHER,
        ONE . TWO => OTHER,
        ONE . FEW => FEW,
        ONE . MANY => MANY,
        ONE . OTHER => OTHER,
        TWO . FEW => FEW,
        TWO . MANY => MANY,
        TWO . OTHER => OTHER,
        FEW . FEW => FEW,
        FEW . MANY => MANY,
        FEW . OTHER => OTHER,
        MANY . FEW => FEW,
        MANY . MANY => MANY,
        MANY . OTHER => OTHER,
        OTHER . ONE => OTHER,
        OTHER . TWO => OTHER,
        OTHER . FEW => FEW,
        OTHER . MANY => MANY,
        OTHER . OTHER => OTHER,
    ];
}
