<?php

namespace Oblik\Pluralization;

class SlovenianLanguage extends Language
{
    static function cardinal(float $n, int $i, int $v)
    {
        $imod100 = $i % 100;

        if ($v == 0 && $imod100 == 1) {
            return ONE;
        }
        elseif ($v == 0 && $imod100 == 2)
        {
            return TWO;
        }
        elseif (($v == 0 && self::inRange($imod100, [3, 4])) || $v != 0)
        {
            return FEW;
        }
        return OTHER;
    }

    static function ordinal(int $n)
    {
        return OTHER;
    }

    const RANGE = [
        ONE . ONE => FEW,
        ONE . TWO => TWO,
        ONE . FEW => FEW,
        ONE . OTHER => OTHER,
        TWO . ONE => FEW,
        TWO . TWO => TWO,
        TWO . FEW => FEW,
        TWO . OTHER => OTHER,
        FEW . ONE => FEW,
        FEW . TWO => TWO,
        FEW . FEW => FEW,
        FEW . OTHER => OTHER,
        OTHER . ONE => FEW,
        OTHER . TWO => TWO,
        OTHER . FEW => FEW,
        OTHER . OTHER => OTHER
    ];
}
