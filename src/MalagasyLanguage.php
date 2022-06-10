<?php

namespace Oblik\Pluralization;

class MalagasyLanguage extends Language
{
    static function cardinal(float $n)
    {
        if ($n == 0 || $n == 1) {
            return ONE;
        }
        return OTHER;
    }

    static function ordinal(int $n)
    {
        return OTHER;
    }

    const RANGE = [];
}
