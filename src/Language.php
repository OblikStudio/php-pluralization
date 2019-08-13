<?php

namespace Oblik\Pluralization;

const ZERO = 0;
const ONE = 1;
const TWO = 2;
const FEW = 3;
const MANY = 4;
const OTHER = 5;

abstract class Language
{
    abstract protected static function cardinal(int $i, float $v): int;
    abstract protected static function ordinal(int $n): int;

    public static function getCardinal(float $number)
    {
        $whole = (int) floor($number);
        $fraction = $number - $whole;
        return static::cardinal($whole, $fraction);
    }

    public static function getOrdinal(int $number)
    {
        return static::ordinal($number);
    }

    public static function getRange(float $start, float $end)
    {
        $startType = static::getCardinal($start);
        $endType = static::getCardinal($end);
        $rangeType = $startType . $endType;

        if (isset(static::RANGE[$rangeType])) {
            return static::RANGE[$rangeType];
        } else {
            return null;
        }
    }
}
