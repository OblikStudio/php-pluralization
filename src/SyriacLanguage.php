<?php

namespace Oblik\Pluralization;

class SyriacLanguage extends Language
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
        return OTHER;
    }

    const RANGE = [];
}
