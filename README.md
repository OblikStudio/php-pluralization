# Pluralization for PHP

This package allows you to get the correct plural form for words based on the
Language Plural Rules [defined in
Unicode](https://www.unicode.org/cldr/charts/27/supplemental/language_plural_rules.html).
You can get forms for cardinal and ordinal numbers, as well as ranges of
cardinal numbers.

## Installation

```
composer require oblik/pluralization
```

## Usage

There are [five plural
categories](http://cldr.unicode.org/index/cldr-spec/plural-rules) and each
is represented with a constant: `ZERO`, `ONE`, `TWO`, `FEW`, and `OTHER`. You
should use those constants in your code:

```php
namespace Oblik\Pluralization {
    function place($n)
    {
        $class = LANGUAGES['en'];
        $form = $class::getOrdinal($n);

        switch ($form) {
            case ONE: return "{$n}st";
            case TWO: return "{$n}nd";
            case FEW: return "{$n}rd";
            case OTHER: return "{$n}th";
        }
    }

    echo place(1);    // 1st
    echo place(2);    // 2nd
    echo place(103);  // 103rd
    echo place(14);   // 14th
}
```

## API

Each language is represented by a class that extends the abstract `Language`
class and has the following static methods:

#### `getCardinal(float $number)`

Returns the plural form of a cardinal number.

#### `getOrdinal(int $number)`

Returns the plural form of an ordinal number.

#### `getRange(float $start, float $end)`

Returns the plural form of a range.

### Example

```php
use Oblik\Pluralization\EnglishLanguage;

EnglishLanguage::getCardinal(0);    // => Oblik\Pluralization\OTHER
EnglishLanguage::getCardinal(1);    // => Oblik\Pluralization\ONE
EnglishLanguage::getCardinal(1.5);  // => Oblik\Pluralization\OTHER
EnglishLanguage::getCardinal(2);    // => Oblik\Pluralization\OTHER

EnglishLanguage::getOrdinal(2);     // => Oblik\Pluralization\TWO
EnglishLanguage::getOrdinal(3);     // => Oblik\Pluralization\FEW
EnglishLanguage::getOrdinal(4);     // => Oblik\Pluralization\OTHER
EnglishLanguage::getOrdinal(103);   // => Oblik\Pluralization\FEW

EnglishLanguage::getOrdinal(0, 2);  // => Oblik\Pluralization\OTHER
EnglishLanguage::getOrdinal(1, 2);  // => Oblik\Pluralization\OTHER
```

To get the correct language class based on a language code, use the `LANGUAGES`
constant:

```php
use const Oblik\Pluralization\LANGUAGES;

$lang = LANGUAGES['en'];  // => "Oblik\Pluralization\EnglishLanguage"
$lang::getCardinal(1);    // => Oblik\Pluralization\ONE
```