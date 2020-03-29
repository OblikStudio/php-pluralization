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
  'az'  => AzerbaijaniLanguage::class,
  'bg'  => BulgarianLanguage::class,
  'bm'  => BambaraLanguage::class,
  'my'  => BurmeseLanguage::class,
  'yue' => CantoneseLanguage::class,
  'cs'  => CzechLanguage::class,
  'zh'  => ChineseLanguage::class,
  'dz'  => DzongkhaLanguage::class,
  'en'  => EnglishLanguage::class,
  'fr'  => FrenchLanguage::class,
  'da'  => DanishLanguage::class,
  'de'  => GermanLanguage::class,
  'es'  => EstonianLanguage::class,
  'ig'  => IgboLanguage::class,
  'id'  => IndonesianLanguage::class,
  'in'  => IndonesianLanguage::class,
  'it'  => ItalianLanguage::class,
  'jv'  => JavaneseLanguage::class,
  'jw'  => JavaneseLanguage::class,
  'ja'  => JapaneseLanguage::class,
  'kea' => KabuverdianuLanguage::class,
  'km'  => KhmerLanguage::class,
  'ko'  => KoreanLanguage::class,
  'ses' => KoyraboroSenniLanguage::class,
  'lkt' => LakotaLanguage::class,
  'lo'  => LaoLanguage::class,
  'jbo' => LojbanLanguage::class,
  'kde' => MakondeLanguage::class,
  'ms'  => MalayLanguage::class,
  'nqo' => NKoLanguage::class,
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
