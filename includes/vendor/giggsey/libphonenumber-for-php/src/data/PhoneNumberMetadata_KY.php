<?php
/**
 * This file has been @generated by a phing task by {@link BuildMetadataPHPFromXml}.
 * See [README.md](README.md#generating-data) for more information.
 *
 * Pull requests changing data in these files will not be accepted. See the
 * [FAQ in the README](README.md#problems-with-invalid-numbers] on how to make
 * metadata changes.
 *
 * Do not modify this file directly!
 */


return array (
  'generalDesc' => 
  array (
    'NationalNumberPattern' => '(?:345|[58]\\d\\d|900)\\d{7}',
    'PossibleLength' => 
    array (
      0 => 10,
    ),
    'PossibleLengthLocalOnly' => 
    array (
      0 => 7,
    ),
  ),
  'fixedLine' => 
  array (
    'NationalNumberPattern' => '345(?:2(?:22|3[23]|44|66)|333|444|6(?:23|38|40)|7(?:30|4[35-79]|6[6-9]|77)|8(?:00|1[45]|[48]8)|9(?:14|4[035-9]))\\d{4}',
    'ExampleNumber' => '3452221234',
    'PossibleLength' => 
    array (
    ),
    'PossibleLengthLocalOnly' => 
    array (
      0 => 7,
    ),
  ),
  'mobile' => 
  array (
    'NationalNumberPattern' => '345(?:32[1-9]|42[0-4]|5(?:1[67]|2[5-79]|4[6-9]|50|76)|649|82[56]|9(?:1[679]|2[2-9]|3[06-9]|90))\\d{4}',
    'ExampleNumber' => '3453231234',
    'PossibleLength' => 
    array (
    ),
    'PossibleLengthLocalOnly' => 
    array (
      0 => 7,
    ),
  ),
  'tollFree' => 
  array (
    'NationalNumberPattern' => '8(?:00|33|44|55|66|77|88)[2-9]\\d{6}',
    'ExampleNumber' => '8002345678',
    'PossibleLength' => 
    array (
    ),
    'PossibleLengthLocalOnly' => 
    array (
    ),
  ),
  'premiumRate' => 
  array (
    'NationalNumberPattern' => '(?:345976|900[2-9]\\d\\d)\\d{4}',
    'ExampleNumber' => '9002345678',
    'PossibleLength' => 
    array (
    ),
    'PossibleLengthLocalOnly' => 
    array (
    ),
  ),
  'sharedCost' => 
  array (
    'PossibleLength' => 
    array (
      0 => -1,
    ),
    'PossibleLengthLocalOnly' => 
    array (
    ),
  ),
  'personalNumber' => 
  array (
    'NationalNumberPattern' => '52(?:355[0-46-9]|4(?:5(?:2[024-9]|5[0-46-9])|60[1-9]|9(?:2[0-5]|49)))\\d{4}|52(?:3(?:[2-46-9][02-9]|5[02-46-9])|4(?:[2-478][02-9]|5[034]|6[2-9]|9[05-9])|7[2-4]\\d)\\d{5}|52[34][2-9]1[02-9]\\d{4}|5(?:00|2[1256]|33|44|66|77|88)[2-9]\\d{6}',
    'ExampleNumber' => '5002345678',
    'PossibleLength' => 
    array (
    ),
    'PossibleLengthLocalOnly' => 
    array (
    ),
  ),
  'voip' => 
  array (
    'PossibleLength' => 
    array (
      0 => -1,
    ),
    'PossibleLengthLocalOnly' => 
    array (
    ),
  ),
  'pager' => 
  array (
    'NationalNumberPattern' => '345849\\d{4}',
    'ExampleNumber' => '3458491234',
    'PossibleLength' => 
    array (
    ),
    'PossibleLengthLocalOnly' => 
    array (
    ),
  ),
  'uan' => 
  array (
    'PossibleLength' => 
    array (
      0 => -1,
    ),
    'PossibleLengthLocalOnly' => 
    array (
    ),
  ),
  'voicemail' => 
  array (
    'PossibleLength' => 
    array (
      0 => -1,
    ),
    'PossibleLengthLocalOnly' => 
    array (
    ),
  ),
  'noInternationalDialling' => 
  array (
    'PossibleLength' => 
    array (
      0 => -1,
    ),
    'PossibleLengthLocalOnly' => 
    array (
    ),
  ),
  'id' => 'KY',
  'countryCode' => 1,
  'internationalPrefix' => '011',
  'nationalPrefix' => '1',
  'nationalPrefixForParsing' => '1|([2-9]\\d{6})$',
  'nationalPrefixTransformRule' => '345$1',
  'sameMobileAndFixedLinePattern' => false,
  'numberFormat' => 
  array (
  ),
  'intlNumberFormat' => 
  array (
  ),
  'mainCountryForCode' => false,
  'leadingDigits' => '345',
  'leadingZeroPossible' => false,
  'mobileNumberPortableRegion' => true,
);
