<?php
return array (
  'generalDesc' => 
  array (
    'NationalNumberPattern' => '[2689]\\d{7}',
    'PossibleNumberPattern' => '\\d{8}',
    'ExampleNumber' => '',
  ),
  'fixedLine' => 
  array (
    'NationalNumberPattern' => '6[3-8]\\d{6}',
    'PossibleNumberPattern' => '\\d{8}',
    'ExampleNumber' => '63123456',
  ),
  'mobile' => 
  array (
    'NationalNumberPattern' => '2\\d{7}',
    'PossibleNumberPattern' => '\\d{8}',
    'ExampleNumber' => '21234567',
  ),
  'tollFree' => 
  array (
    'NationalNumberPattern' => '80\\d{6}',
    'PossibleNumberPattern' => '\\d{8}',
    'ExampleNumber' => '80123456',
  ),
  'premiumRate' => 
  array (
    'NationalNumberPattern' => '90\\d{6}',
    'PossibleNumberPattern' => '\\d{8}',
    'ExampleNumber' => '90123456',
  ),
  'sharedCost' => 
  array (
    'NationalNumberPattern' => '81\\d{6}',
    'PossibleNumberPattern' => '\\d{8}',
    'ExampleNumber' => '81123456',
  ),
  'noInternationalDialling' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
    'ExampleNumber' => '',
  ),
  'id' => 'LV',
  'countryCode' => 371,
  'internationalPrefix' => '00',
  'sameMobileAndFixedLinePattern' => false,
  'numberFormat' => 
  array (
    0 => 
    array (
      'pattern' => '([2689]\\d)(\\d{3})(\\d{3})',
      'format' => '$1 $2 $3',
      'leadingDigitsPatterns' => 
      array (
      ),
      'nationalPrefixFormattingRule' => '',
      'domesticCarrierCodeFormattingRule' => '',
    ),
  ),
  'intlNumberFormat' => 
  array (
  ),
  'mainCountryForCode' => NULL,
  'leadingZeroPossible' => NULL,
);