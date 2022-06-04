<?php

namespace Oblik\Pluralization;

class IrishLanguage extends Language
{
    static function cardinal(float $n)
    {
        if ($n == 1) {
            return ONE;
        }
        elseif ($n == 2)
        {
            return TWO;
        }
        elseif (self::inRange($n, [3, 6]))
        {
            return FEW;
        }
        elseif (self::inRange($n, [7, 10]))
        {
            return MANY;
        }
        return OTHER;
    }

    static function ordinal(int $n)
    {
        return OTHER;
    }

    const RANGE = [];
}
