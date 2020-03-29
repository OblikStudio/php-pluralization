<?php

namespace Oblik\Pluralization;

const ZERO = 0;
const ONE = 1;
const TWO = 2;
const FEW = 3;
const MANY = 4;
const OTHER = 5;

const LANGUAGES = [
  'ar'  => ArabicLanguage::class,
  'hy'  => ArmenianLanguage::class,
  'az'  => AzerbaijaniLanguage::class,
  'bm'  => BambaraLanguage::class,
  'bg'  => BulgarianLanguage::class,
  'my'  => BurmeseLanguage::class,
  'yue' => CantoneseLanguage::class,
  'zh'  => ChineseLanguage::class,
  'hr'  => CroatianLanguage::class,
  'cs'  => CzechLanguage::class,
  'dz'  => DzongkhaLanguage::class,
  'da'  => DanishLanguage::class,
  'en'  => EnglishLanguage::class,
  'eo'  => EsperantoLanguage::class,
  'es'  => EstonianLanguage::class,
  'fi'  => FinnishLanguage::class,
  'fr'  => FrenchLanguage::class,
  'de'  => GermanLanguage::class,
  'hi'  => HindiLanguage::class,
  'hu'  => Hungarian::class,
  'ig'  => IgboLanguage::class,
  'id'  => IndonesianLanguage::class,
  'in'  => IndonesianLanguage::class,
  'it'  => ItalianLanguage::class,
  'ja'  => JapaneseLanguage::class,
  'jv'  => JavaneseLanguage::class,
  'jw'  => JavaneseLanguage::class,
  'kea' => KabuverdianuLanguage::class,
  'km'  => KhmerLanguage::class,
  'ko'  => KoreanLanguage::class,
  'ses' => KoyraboroSenniLanguage::class,
  'jbo' => LojbanLanguage::class,
  'lkt' => LakotaLanguage::class,
  'lo'  => LaoLanguage::class,
  'kde' => MakondeLanguage::class,
  'ms'  => MalayLanguage::class,
  'nqo' => NKoLanguage::class,
  'fa'  => PersianLanguage::class,
  'ru'  => RussianLanguage::class,
  'sah' => SakhaLanguage::class,
  'sg'  => SangoLanguage::class,
  'ii'  => SichuanYiLanguage::class,
  'es'  => SpanishLanguage::class,
  'th'  => ThaiLanguage::class,
  'bo'  => TibetanLanguage::class,
  'to'  => TonganLanguage::class,
  'vi'  => VietnameseLanguage::class,
  'wo'  => WolofLanguage::class,
  'yo'  => YorubaLanguage::class,
];
