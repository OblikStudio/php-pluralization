<?php

namespace Oblik\Pluralization;

class MalteseLanguage extends Language
{
    static function cardinal(float $n, int $i)
    {
        $mod100 = $n % 100;

        if ($n == 1) {
            return ONE;
        }
        elseif ($n == 0 || (self::inRange($mod100, [2, 10]) && $n == $i))
        {
            return FEW;
        }
        elseif (self::inRange($mod100, [11, 19]) && $n == $i)
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
