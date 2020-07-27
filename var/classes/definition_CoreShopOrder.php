<?php 

/** 
* Inheritance: no
* Variants: no


Fields Summary: 
- orderNumber [input]
- saleState [input]
- token [input]
- backendCreated [checkbox]
- orderDate [datetime]
- localeCode [language]
- carrier [coreShopCarrier]
- store [coreShopStore]
- paymentProvider [coreShopPaymentProvider]
- paymentSettings [coreShopSerializedData]
- comment [textarea]
- additionalData [objectbricks]
- orderState [input]
- paymentState [input]
- shippingState [input]
- invoiceState [input]
- baseCurrency [coreShopCurrency]
- paymentTotal [numeric]
- totalNet [coreShopMoney]
- totalGross [coreShopMoney]
- subtotalNet [coreShopMoney]
- subtotalGross [coreShopMoney]
- shippingTaxRate [numeric]
- taxes [fieldcollections]
- pimcoreAdjustmentTotalNet [coreShopMoney]
- pimcoreAdjustmentTotalGross [coreShopMoney]
- adjustmentItems [fieldcollections]
- currency [coreShopCurrency]
- convertedPaymentTotal [numeric]
- convertedTotalNet [coreShopMoney]
- convertedTotalGross [coreShopMoney]
- convertedSubtotalNet [coreShopMoney]
- convertedSubtotalGross [coreShopMoney]
- convertedTaxes [fieldcollections]
- convertedPimcoreAdjustmentTotalNet [coreShopMoney]
- convertedPimcoreAdjustmentTotalGross [coreShopMoney]
- convertedAdjustmentItems [fieldcollections]
- weight [numeric]
- priceRuleItems [fieldcollections]
- items [manyToManyRelation]
- needsRecalculation [checkbox]
- customer [manyToOneRelation]
- shippingAddress [manyToOneRelation]
- invoiceAddress [manyToOneRelation]
*/ 


return Pimcore\Model\DataObject\ClassDefinition::__set_state(array(
   'id' => 'cs_order',
   'name' => 'CoreShopOrder',
   'description' => NULL,
   'creationDate' => NULL,
   'modificationDate' => 1595857062,
   'userOwner' => 0,
   'userModification' => 0,
   'parentClass' => 'CoreShop\\Component\\Core\\Model\\Order',
   'implementsInterfaces' => NULL,
   'listingParentClass' => '',
   'useTraits' => '',
   'listingUseTraits' => '',
   'encryption' => false,
   'encryptedTables' => 
  array (
  ),
   'allowInherit' => false,
   'allowVariants' => NULL,
   'showVariants' => false,
   'layoutDefinitions' => 
  Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
     'fieldtype' => 'panel',
     'labelWidth' => 100,
     'layout' => NULL,
     'border' => false,
     'name' => 'pimcore_root',
     'type' => NULL,
     'region' => NULL,
     'title' => NULL,
     'width' => NULL,
     'height' => NULL,
     'collapsible' => false,
     'collapsed' => false,
     'bodyStyle' => NULL,
     'datatype' => 'layout',
     'permissions' => NULL,
     'childs' => 
    array (
      0 => 
      Pimcore\Model\DataObject\ClassDefinition\Layout\Tabpanel::__set_state(array(
         'fieldtype' => 'tabpanel',
         'border' => false,
         'tabPosition' => 'top',
         'name' => 'Layout',
         'type' => NULL,
         'region' => NULL,
         'title' => NULL,
         'width' => NULL,
         'height' => NULL,
         'collapsible' => false,
         'collapsed' => false,
         'bodyStyle' => NULL,
         'datatype' => 'layout',
         'permissions' => NULL,
         'childs' => 
        array (
          0 => 
          Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
             'fieldtype' => 'panel',
             'labelWidth' => 100,
             'layout' => NULL,
             'border' => false,
             'name' => 'order',
             'type' => NULL,
             'region' => NULL,
             'title' => 'coreshop.order.order',
             'width' => NULL,
             'height' => NULL,
             'collapsible' => false,
             'collapsed' => false,
             'bodyStyle' => '',
             'datatype' => 'layout',
             'permissions' => NULL,
             'childs' => 
            array (
              0 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Input::__set_state(array(
                 'fieldtype' => 'input',
                 'width' => NULL,
                 'defaultValue' => NULL,
                 'queryColumnType' => 'varchar',
                 'columnType' => 'varchar',
                 'columnLength' => 190,
                 'phpdocType' => 'string',
                 'regex' => '',
                 'unique' => NULL,
                 'showCharCount' => NULL,
                 'name' => 'orderNumber',
                 'title' => 'coreshop.order.number',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => true,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'defaultValueGenerator' => '',
              )),
              1 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Input::__set_state(array(
                 'fieldtype' => 'input',
                 'width' => NULL,
                 'defaultValue' => NULL,
                 'queryColumnType' => 'varchar',
                 'columnType' => 'varchar',
                 'columnLength' => 190,
                 'phpdocType' => 'string',
                 'regex' => '',
                 'unique' => false,
                 'showCharCount' => false,
                 'name' => 'saleState',
                 'title' => 'coreshop.order.sale_state',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => true,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'defaultValueGenerator' => '',
              )),
              2 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Input::__set_state(array(
                 'fieldtype' => 'input',
                 'width' => NULL,
                 'defaultValue' => NULL,
                 'queryColumnType' => 'varchar',
                 'columnType' => 'varchar',
                 'columnLength' => 190,
                 'phpdocType' => 'string',
                 'regex' => '',
                 'unique' => false,
                 'showCharCount' => NULL,
                 'name' => 'token',
                 'title' => 'coreshop.order.token',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => true,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'relationType' => false,
                 'invisible' => true,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'defaultValueGenerator' => '',
              )),
              3 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Checkbox::__set_state(array(
                 'fieldtype' => 'checkbox',
                 'defaultValue' => 0,
                 'queryColumnType' => 'tinyint(1)',
                 'columnType' => 'tinyint(1)',
                 'phpdocType' => 'boolean',
                 'name' => 'backendCreated',
                 'title' => 'coreshop.order.backend_created',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => true,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'defaultValueGenerator' => '',
              )),
              4 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Datetime::__set_state(array(
                 'fieldtype' => 'datetime',
                 'queryColumnType' => 'bigint(20)',
                 'columnType' => 'bigint(20)',
                 'phpdocType' => '\\Carbon\\Carbon',
                 'defaultValue' => NULL,
                 'useCurrentDate' => false,
                 'name' => 'orderDate',
                 'title' => 'coreshop.order.date',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => true,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'defaultValueGenerator' => '',
              )),
              5 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Language::__set_state(array(
                 'fieldtype' => 'language',
                 'onlySystemLanguages' => false,
                 'options' => 
                array (
                  0 => 
                  array (
                    'key' => 'Afrikaans',
                    'value' => 'af',
                  ),
                  1 => 
                  array (
                    'key' => 'Afrikaans (Namibia)',
                    'value' => 'af_NA',
                  ),
                  2 => 
                  array (
                    'key' => 'Afrikaans (South Africa)',
                    'value' => 'af_ZA',
                  ),
                  3 => 
                  array (
                    'key' => 'Aghem',
                    'value' => 'agq',
                  ),
                  4 => 
                  array (
                    'key' => 'Aghem (Cameroon)',
                    'value' => 'agq_CM',
                  ),
                  5 => 
                  array (
                    'key' => 'Akan',
                    'value' => 'ak',
                  ),
                  6 => 
                  array (
                    'key' => 'Akan (Ghana)',
                    'value' => 'ak_GH',
                  ),
                  7 => 
                  array (
                    'key' => 'Albanian',
                    'value' => 'sq',
                  ),
                  8 => 
                  array (
                    'key' => 'Albanian (Albania)',
                    'value' => 'sq_AL',
                  ),
                  9 => 
                  array (
                    'key' => 'Albanian (Kosovo)',
                    'value' => 'sq_XK',
                  ),
                  10 => 
                  array (
                    'key' => 'Albanian (Macedonia)',
                    'value' => 'sq_MK',
                  ),
                  11 => 
                  array (
                    'key' => 'Amharic',
                    'value' => 'am',
                  ),
                  12 => 
                  array (
                    'key' => 'Amharic (Ethiopia)',
                    'value' => 'am_ET',
                  ),
                  13 => 
                  array (
                    'key' => 'Arabic',
                    'value' => 'ar',
                  ),
                  14 => 
                  array (
                    'key' => 'Arabic (Algeria)',
                    'value' => 'ar_DZ',
                  ),
                  15 => 
                  array (
                    'key' => 'Arabic (Bahrain)',
                    'value' => 'ar_BH',
                  ),
                  16 => 
                  array (
                    'key' => 'Arabic (Chad)',
                    'value' => 'ar_TD',
                  ),
                  17 => 
                  array (
                    'key' => 'Arabic (Comoros)',
                    'value' => 'ar_KM',
                  ),
                  18 => 
                  array (
                    'key' => 'Arabic (Djibouti)',
                    'value' => 'ar_DJ',
                  ),
                  19 => 
                  array (
                    'key' => 'Arabic (Egypt)',
                    'value' => 'ar_EG',
                  ),
                  20 => 
                  array (
                    'key' => 'Arabic (Eritrea)',
                    'value' => 'ar_ER',
                  ),
                  21 => 
                  array (
                    'key' => 'Arabic (Iraq)',
                    'value' => 'ar_IQ',
                  ),
                  22 => 
                  array (
                    'key' => 'Arabic (Israel)',
                    'value' => 'ar_IL',
                  ),
                  23 => 
                  array (
                    'key' => 'Arabic (Jordan)',
                    'value' => 'ar_JO',
                  ),
                  24 => 
                  array (
                    'key' => 'Arabic (Kuwait)',
                    'value' => 'ar_KW',
                  ),
                  25 => 
                  array (
                    'key' => 'Arabic (Lebanon)',
                    'value' => 'ar_LB',
                  ),
                  26 => 
                  array (
                    'key' => 'Arabic (Libya)',
                    'value' => 'ar_LY',
                  ),
                  27 => 
                  array (
                    'key' => 'Arabic (Mauritania)',
                    'value' => 'ar_MR',
                  ),
                  28 => 
                  array (
                    'key' => 'Arabic (Morocco)',
                    'value' => 'ar_MA',
                  ),
                  29 => 
                  array (
                    'key' => 'Arabic (Oman)',
                    'value' => 'ar_OM',
                  ),
                  30 => 
                  array (
                    'key' => 'Arabic (Palestinian Territories)',
                    'value' => 'ar_PS',
                  ),
                  31 => 
                  array (
                    'key' => 'Arabic (Qatar)',
                    'value' => 'ar_QA',
                  ),
                  32 => 
                  array (
                    'key' => 'Arabic (Saudi Arabia)',
                    'value' => 'ar_SA',
                  ),
                  33 => 
                  array (
                    'key' => 'Arabic (Somalia)',
                    'value' => 'ar_SO',
                  ),
                  34 => 
                  array (
                    'key' => 'Arabic (South Sudan)',
                    'value' => 'ar_SS',
                  ),
                  35 => 
                  array (
                    'key' => 'Arabic (Sudan)',
                    'value' => 'ar_SD',
                  ),
                  36 => 
                  array (
                    'key' => 'Arabic (Syria)',
                    'value' => 'ar_SY',
                  ),
                  37 => 
                  array (
                    'key' => 'Arabic (Tunisia)',
                    'value' => 'ar_TN',
                  ),
                  38 => 
                  array (
                    'key' => 'Arabic (United Arab Emirates)',
                    'value' => 'ar_AE',
                  ),
                  39 => 
                  array (
                    'key' => 'Arabic (Western Sahara)',
                    'value' => 'ar_EH',
                  ),
                  40 => 
                  array (
                    'key' => 'Arabic (World)',
                    'value' => 'ar_001',
                  ),
                  41 => 
                  array (
                    'key' => 'Arabic (Yemen)',
                    'value' => 'ar_YE',
                  ),
                  42 => 
                  array (
                    'key' => 'Armenian',
                    'value' => 'hy',
                  ),
                  43 => 
                  array (
                    'key' => 'Armenian (Armenia)',
                    'value' => 'hy_AM',
                  ),
                  44 => 
                  array (
                    'key' => 'Assamese',
                    'value' => 'as',
                  ),
                  45 => 
                  array (
                    'key' => 'Assamese (India)',
                    'value' => 'as_IN',
                  ),
                  46 => 
                  array (
                    'key' => 'Asturian',
                    'value' => 'ast',
                  ),
                  47 => 
                  array (
                    'key' => 'Asturian (Spain)',
                    'value' => 'ast_ES',
                  ),
                  48 => 
                  array (
                    'key' => 'Asu',
                    'value' => 'asa',
                  ),
                  49 => 
                  array (
                    'key' => 'Asu (Tanzania)',
                    'value' => 'asa_TZ',
                  ),
                  50 => 
                  array (
                    'key' => 'Azerbaijani',
                    'value' => 'az',
                  ),
                  51 => 
                  array (
                    'key' => 'Azerbaijani',
                    'value' => 'az_Cyrl',
                  ),
                  52 => 
                  array (
                    'key' => 'Azerbaijani',
                    'value' => 'az_Latn',
                  ),
                  53 => 
                  array (
                    'key' => 'Azerbaijani (Azerbaijan)',
                    'value' => 'az_Cyrl_AZ',
                  ),
                  54 => 
                  array (
                    'key' => 'Azerbaijani (Azerbaijan)',
                    'value' => 'az_Latn_AZ',
                  ),
                  55 => 
                  array (
                    'key' => 'Bafia',
                    'value' => 'ksf',
                  ),
                  56 => 
                  array (
                    'key' => 'Bafia (Cameroon)',
                    'value' => 'ksf_CM',
                  ),
                  57 => 
                  array (
                    'key' => 'Bambara',
                    'value' => 'bm',
                  ),
                  58 => 
                  array (
                    'key' => 'Bambara (Mali)',
                    'value' => 'bm_ML',
                  ),
                  59 => 
                  array (
                    'key' => 'Basaa',
                    'value' => 'bas',
                  ),
                  60 => 
                  array (
                    'key' => 'Basaa (Cameroon)',
                    'value' => 'bas_CM',
                  ),
                  61 => 
                  array (
                    'key' => 'Basque',
                    'value' => 'eu',
                  ),
                  62 => 
                  array (
                    'key' => 'Basque (Spain)',
                    'value' => 'eu_ES',
                  ),
                  63 => 
                  array (
                    'key' => 'Belarusian',
                    'value' => 'be',
                  ),
                  64 => 
                  array (
                    'key' => 'Belarusian (Belarus)',
                    'value' => 'be_BY',
                  ),
                  65 => 
                  array (
                    'key' => 'Bemba',
                    'value' => 'bem',
                  ),
                  66 => 
                  array (
                    'key' => 'Bemba (Zambia)',
                    'value' => 'bem_ZM',
                  ),
                  67 => 
                  array (
                    'key' => 'Bena',
                    'value' => 'bez',
                  ),
                  68 => 
                  array (
                    'key' => 'Bena (Tanzania)',
                    'value' => 'bez_TZ',
                  ),
                  69 => 
                  array (
                    'key' => 'Bengali',
                    'value' => 'bn',
                  ),
                  70 => 
                  array (
                    'key' => 'Bengali (Bangladesh)',
                    'value' => 'bn_BD',
                  ),
                  71 => 
                  array (
                    'key' => 'Bengali (India)',
                    'value' => 'bn_IN',
                  ),
                  72 => 
                  array (
                    'key' => 'Bodo',
                    'value' => 'brx',
                  ),
                  73 => 
                  array (
                    'key' => 'Bodo (India)',
                    'value' => 'brx_IN',
                  ),
                  74 => 
                  array (
                    'key' => 'Bosnian',
                    'value' => 'bs',
                  ),
                  75 => 
                  array (
                    'key' => 'Bosnian',
                    'value' => 'bs_Cyrl',
                  ),
                  76 => 
                  array (
                    'key' => 'Bosnian',
                    'value' => 'bs_Latn',
                  ),
                  77 => 
                  array (
                    'key' => 'Bosnian (Bosnia & Herzegovina)',
                    'value' => 'bs_Cyrl_BA',
                  ),
                  78 => 
                  array (
                    'key' => 'Bosnian (Bosnia & Herzegovina)',
                    'value' => 'bs_Latn_BA',
                  ),
                  79 => 
                  array (
                    'key' => 'Breton',
                    'value' => 'br',
                  ),
                  80 => 
                  array (
                    'key' => 'Breton (France)',
                    'value' => 'br_FR',
                  ),
                  81 => 
                  array (
                    'key' => 'Bulgarian',
                    'value' => 'bg',
                  ),
                  82 => 
                  array (
                    'key' => 'Bulgarian (Bulgaria)',
                    'value' => 'bg_BG',
                  ),
                  83 => 
                  array (
                    'key' => 'Burmese',
                    'value' => 'my',
                  ),
                  84 => 
                  array (
                    'key' => 'Burmese (Myanmar (Burma))',
                    'value' => 'my_MM',
                  ),
                  85 => 
                  array (
                    'key' => 'Cantonese',
                    'value' => 'yue',
                  ),
                  86 => 
                  array (
                    'key' => 'Cantonese (Hong Kong SAR China)',
                    'value' => 'yue_HK',
                  ),
                  87 => 
                  array (
                    'key' => 'Catalan',
                    'value' => 'ca',
                  ),
                  88 => 
                  array (
                    'key' => 'Catalan (Andorra)',
                    'value' => 'ca_AD',
                  ),
                  89 => 
                  array (
                    'key' => 'Catalan (France)',
                    'value' => 'ca_FR',
                  ),
                  90 => 
                  array (
                    'key' => 'Catalan (Italy)',
                    'value' => 'ca_IT',
                  ),
                  91 => 
                  array (
                    'key' => 'Catalan (Spain)',
                    'value' => 'ca_ES',
                  ),
                  92 => 
                  array (
                    'key' => 'Central Atlas Tamazight',
                    'value' => 'tzm',
                  ),
                  93 => 
                  array (
                    'key' => 'Central Atlas Tamazight (Morocco)',
                    'value' => 'tzm_MA',
                  ),
                  94 => 
                  array (
                    'key' => 'Chechen',
                    'value' => 'ce',
                  ),
                  95 => 
                  array (
                    'key' => 'Chechen (Russia)',
                    'value' => 'ce_RU',
                  ),
                  96 => 
                  array (
                    'key' => 'Cherokee',
                    'value' => 'chr',
                  ),
                  97 => 
                  array (
                    'key' => 'Cherokee (United States)',
                    'value' => 'chr_US',
                  ),
                  98 => 
                  array (
                    'key' => 'Chiga',
                    'value' => 'cgg',
                  ),
                  99 => 
                  array (
                    'key' => 'Chiga (Uganda)',
                    'value' => 'cgg_UG',
                  ),
                  100 => 
                  array (
                    'key' => 'Chinese',
                    'value' => 'zh_Hant',
                  ),
                  101 => 
                  array (
                    'key' => 'Chinese',
                    'value' => 'zh_Hans',
                  ),
                  102 => 
                  array (
                    'key' => 'Chinese',
                    'value' => 'zh',
                  ),
                  103 => 
                  array (
                    'key' => 'Chinese (China)',
                    'value' => 'zh_Hans_CN',
                  ),
                  104 => 
                  array (
                    'key' => 'Chinese (Hong Kong SAR China)',
                    'value' => 'zh_Hant_HK',
                  ),
                  105 => 
                  array (
                    'key' => 'Chinese (Hong Kong SAR China)',
                    'value' => 'zh_Hans_HK',
                  ),
                  106 => 
                  array (
                    'key' => 'Chinese (Macau SAR China)',
                    'value' => 'zh_Hant_MO',
                  ),
                  107 => 
                  array (
                    'key' => 'Chinese (Macau SAR China)',
                    'value' => 'zh_Hans_MO',
                  ),
                  108 => 
                  array (
                    'key' => 'Chinese (Singapore)',
                    'value' => 'zh_Hans_SG',
                  ),
                  109 => 
                  array (
                    'key' => 'Chinese (Taiwan)',
                    'value' => 'zh_Hant_TW',
                  ),
                  110 => 
                  array (
                    'key' => 'Colognian',
                    'value' => 'ksh',
                  ),
                  111 => 
                  array (
                    'key' => 'Colognian (Germany)',
                    'value' => 'ksh_DE',
                  ),
                  112 => 
                  array (
                    'key' => 'Cornish',
                    'value' => 'kw',
                  ),
                  113 => 
                  array (
                    'key' => 'Cornish (United Kingdom)',
                    'value' => 'kw_GB',
                  ),
                  114 => 
                  array (
                    'key' => 'Croatian',
                    'value' => 'hr',
                  ),
                  115 => 
                  array (
                    'key' => 'Croatian (Bosnia & Herzegovina)',
                    'value' => 'hr_BA',
                  ),
                  116 => 
                  array (
                    'key' => 'Croatian (Croatia)',
                    'value' => 'hr_HR',
                  ),
                  117 => 
                  array (
                    'key' => 'Czech',
                    'value' => 'cs',
                  ),
                  118 => 
                  array (
                    'key' => 'Czech (Czech Republic)',
                    'value' => 'cs_CZ',
                  ),
                  119 => 
                  array (
                    'key' => 'Danish',
                    'value' => 'da',
                  ),
                  120 => 
                  array (
                    'key' => 'Danish (Denmark)',
                    'value' => 'da_DK',
                  ),
                  121 => 
                  array (
                    'key' => 'Danish (Greenland)',
                    'value' => 'da_GL',
                  ),
                  122 => 
                  array (
                    'key' => 'Duala',
                    'value' => 'dua',
                  ),
                  123 => 
                  array (
                    'key' => 'Duala (Cameroon)',
                    'value' => 'dua_CM',
                  ),
                  124 => 
                  array (
                    'key' => 'Dutch',
                    'value' => 'nl',
                  ),
                  125 => 
                  array (
                    'key' => 'Dutch (Aruba)',
                    'value' => 'nl_AW',
                  ),
                  126 => 
                  array (
                    'key' => 'Dutch (Belgium)',
                    'value' => 'nl_BE',
                  ),
                  127 => 
                  array (
                    'key' => 'Dutch (Caribbean Netherlands)',
                    'value' => 'nl_BQ',
                  ),
                  128 => 
                  array (
                    'key' => 'Dutch (Curaçao)',
                    'value' => 'nl_CW',
                  ),
                  129 => 
                  array (
                    'key' => 'Dutch (Netherlands)',
                    'value' => 'nl_NL',
                  ),
                  130 => 
                  array (
                    'key' => 'Dutch (Sint Maarten)',
                    'value' => 'nl_SX',
                  ),
                  131 => 
                  array (
                    'key' => 'Dutch (Suriname)',
                    'value' => 'nl_SR',
                  ),
                  132 => 
                  array (
                    'key' => 'Dzongkha',
                    'value' => 'dz',
                  ),
                  133 => 
                  array (
                    'key' => 'Dzongkha (Bhutan)',
                    'value' => 'dz_BT',
                  ),
                  134 => 
                  array (
                    'key' => 'Embu',
                    'value' => 'ebu',
                  ),
                  135 => 
                  array (
                    'key' => 'Embu (Kenya)',
                    'value' => 'ebu_KE',
                  ),
                  136 => 
                  array (
                    'key' => 'English',
                    'value' => 'en',
                  ),
                  137 => 
                  array (
                    'key' => 'English (American Samoa)',
                    'value' => 'en_AS',
                  ),
                  138 => 
                  array (
                    'key' => 'English (Anguilla)',
                    'value' => 'en_AI',
                  ),
                  139 => 
                  array (
                    'key' => 'English (Antigua & Barbuda)',
                    'value' => 'en_AG',
                  ),
                  140 => 
                  array (
                    'key' => 'English (Australia)',
                    'value' => 'en_AU',
                  ),
                  141 => 
                  array (
                    'key' => 'English (Austria)',
                    'value' => 'en_AT',
                  ),
                  142 => 
                  array (
                    'key' => 'English (Bahamas)',
                    'value' => 'en_BS',
                  ),
                  143 => 
                  array (
                    'key' => 'English (Barbados)',
                    'value' => 'en_BB',
                  ),
                  144 => 
                  array (
                    'key' => 'English (Belgium)',
                    'value' => 'en_BE',
                  ),
                  145 => 
                  array (
                    'key' => 'English (Belize)',
                    'value' => 'en_BZ',
                  ),
                  146 => 
                  array (
                    'key' => 'English (Bermuda)',
                    'value' => 'en_BM',
                  ),
                  147 => 
                  array (
                    'key' => 'English (Botswana)',
                    'value' => 'en_BW',
                  ),
                  148 => 
                  array (
                    'key' => 'English (British Indian Ocean Territory)',
                    'value' => 'en_IO',
                  ),
                  149 => 
                  array (
                    'key' => 'English (British Virgin Islands)',
                    'value' => 'en_VG',
                  ),
                  150 => 
                  array (
                    'key' => 'English (Burundi)',
                    'value' => 'en_BI',
                  ),
                  151 => 
                  array (
                    'key' => 'English (Cameroon)',
                    'value' => 'en_CM',
                  ),
                  152 => 
                  array (
                    'key' => 'English (Canada)',
                    'value' => 'en_CA',
                  ),
                  153 => 
                  array (
                    'key' => 'English (Cayman Islands)',
                    'value' => 'en_KY',
                  ),
                  154 => 
                  array (
                    'key' => 'English (Christmas Island)',
                    'value' => 'en_CX',
                  ),
                  155 => 
                  array (
                    'key' => 'English (Cocos (Keeling) Islands)',
                    'value' => 'en_CC',
                  ),
                  156 => 
                  array (
                    'key' => 'English (Cook Islands)',
                    'value' => 'en_CK',
                  ),
                  157 => 
                  array (
                    'key' => 'English (Cyprus)',
                    'value' => 'en_CY',
                  ),
                  158 => 
                  array (
                    'key' => 'English (Denmark)',
                    'value' => 'en_DK',
                  ),
                  159 => 
                  array (
                    'key' => 'English (Diego Garcia)',
                    'value' => 'en_DG',
                  ),
                  160 => 
                  array (
                    'key' => 'English (Dominica)',
                    'value' => 'en_DM',
                  ),
                  161 => 
                  array (
                    'key' => 'English (Eritrea)',
                    'value' => 'en_ER',
                  ),
                  162 => 
                  array (
                    'key' => 'English (Europe)',
                    'value' => 'en_150',
                  ),
                  163 => 
                  array (
                    'key' => 'English (Falkland Islands)',
                    'value' => 'en_FK',
                  ),
                  164 => 
                  array (
                    'key' => 'English (Fiji)',
                    'value' => 'en_FJ',
                  ),
                  165 => 
                  array (
                    'key' => 'English (Finland)',
                    'value' => 'en_FI',
                  ),
                  166 => 
                  array (
                    'key' => 'English (Gambia)',
                    'value' => 'en_GM',
                  ),
                  167 => 
                  array (
                    'key' => 'English (Germany)',
                    'value' => 'en_DE',
                  ),
                  168 => 
                  array (
                    'key' => 'English (Ghana)',
                    'value' => 'en_GH',
                  ),
                  169 => 
                  array (
                    'key' => 'English (Gibraltar)',
                    'value' => 'en_GI',
                  ),
                  170 => 
                  array (
                    'key' => 'English (Grenada)',
                    'value' => 'en_GD',
                  ),
                  171 => 
                  array (
                    'key' => 'English (Guam)',
                    'value' => 'en_GU',
                  ),
                  172 => 
                  array (
                    'key' => 'English (Guernsey)',
                    'value' => 'en_GG',
                  ),
                  173 => 
                  array (
                    'key' => 'English (Guyana)',
                    'value' => 'en_GY',
                  ),
                  174 => 
                  array (
                    'key' => 'English (Hong Kong SAR China)',
                    'value' => 'en_HK',
                  ),
                  175 => 
                  array (
                    'key' => 'English (India)',
                    'value' => 'en_IN',
                  ),
                  176 => 
                  array (
                    'key' => 'English (Ireland)',
                    'value' => 'en_IE',
                  ),
                  177 => 
                  array (
                    'key' => 'English (Isle of Man)',
                    'value' => 'en_IM',
                  ),
                  178 => 
                  array (
                    'key' => 'English (Israel)',
                    'value' => 'en_IL',
                  ),
                  179 => 
                  array (
                    'key' => 'English (Jamaica)',
                    'value' => 'en_JM',
                  ),
                  180 => 
                  array (
                    'key' => 'English (Jersey)',
                    'value' => 'en_JE',
                  ),
                  181 => 
                  array (
                    'key' => 'English (Kenya)',
                    'value' => 'en_KE',
                  ),
                  182 => 
                  array (
                    'key' => 'English (Kiribati)',
                    'value' => 'en_KI',
                  ),
                  183 => 
                  array (
                    'key' => 'English (Lesotho)',
                    'value' => 'en_LS',
                  ),
                  184 => 
                  array (
                    'key' => 'English (Liberia)',
                    'value' => 'en_LR',
                  ),
                  185 => 
                  array (
                    'key' => 'English (Macau SAR China)',
                    'value' => 'en_MO',
                  ),
                  186 => 
                  array (
                    'key' => 'English (Madagascar)',
                    'value' => 'en_MG',
                  ),
                  187 => 
                  array (
                    'key' => 'English (Malawi)',
                    'value' => 'en_MW',
                  ),
                  188 => 
                  array (
                    'key' => 'English (Malaysia)',
                    'value' => 'en_MY',
                  ),
                  189 => 
                  array (
                    'key' => 'English (Malta)',
                    'value' => 'en_MT',
                  ),
                  190 => 
                  array (
                    'key' => 'English (Marshall Islands)',
                    'value' => 'en_MH',
                  ),
                  191 => 
                  array (
                    'key' => 'English (Mauritius)',
                    'value' => 'en_MU',
                  ),
                  192 => 
                  array (
                    'key' => 'English (Micronesia)',
                    'value' => 'en_FM',
                  ),
                  193 => 
                  array (
                    'key' => 'English (Montserrat)',
                    'value' => 'en_MS',
                  ),
                  194 => 
                  array (
                    'key' => 'English (Namibia)',
                    'value' => 'en_NA',
                  ),
                  195 => 
                  array (
                    'key' => 'English (Nauru)',
                    'value' => 'en_NR',
                  ),
                  196 => 
                  array (
                    'key' => 'English (Netherlands)',
                    'value' => 'en_NL',
                  ),
                  197 => 
                  array (
                    'key' => 'English (New Zealand)',
                    'value' => 'en_NZ',
                  ),
                  198 => 
                  array (
                    'key' => 'English (Nigeria)',
                    'value' => 'en_NG',
                  ),
                  199 => 
                  array (
                    'key' => 'English (Niue)',
                    'value' => 'en_NU',
                  ),
                  200 => 
                  array (
                    'key' => 'English (Norfolk Island)',
                    'value' => 'en_NF',
                  ),
                  201 => 
                  array (
                    'key' => 'English (Northern Mariana Islands)',
                    'value' => 'en_MP',
                  ),
                  202 => 
                  array (
                    'key' => 'English (Pakistan)',
                    'value' => 'en_PK',
                  ),
                  203 => 
                  array (
                    'key' => 'English (Palau)',
                    'value' => 'en_PW',
                  ),
                  204 => 
                  array (
                    'key' => 'English (Papua New Guinea)',
                    'value' => 'en_PG',
                  ),
                  205 => 
                  array (
                    'key' => 'English (Philippines)',
                    'value' => 'en_PH',
                  ),
                  206 => 
                  array (
                    'key' => 'English (Pitcairn Islands)',
                    'value' => 'en_PN',
                  ),
                  207 => 
                  array (
                    'key' => 'English (Puerto Rico)',
                    'value' => 'en_PR',
                  ),
                  208 => 
                  array (
                    'key' => 'English (Rwanda)',
                    'value' => 'en_RW',
                  ),
                  209 => 
                  array (
                    'key' => 'English (Samoa)',
                    'value' => 'en_WS',
                  ),
                  210 => 
                  array (
                    'key' => 'English (Seychelles)',
                    'value' => 'en_SC',
                  ),
                  211 => 
                  array (
                    'key' => 'English (Sierra Leone)',
                    'value' => 'en_SL',
                  ),
                  212 => 
                  array (
                    'key' => 'English (Singapore)',
                    'value' => 'en_SG',
                  ),
                  213 => 
                  array (
                    'key' => 'English (Sint Maarten)',
                    'value' => 'en_SX',
                  ),
                  214 => 
                  array (
                    'key' => 'English (Slovenia)',
                    'value' => 'en_SI',
                  ),
                  215 => 
                  array (
                    'key' => 'English (Solomon Islands)',
                    'value' => 'en_SB',
                  ),
                  216 => 
                  array (
                    'key' => 'English (South Africa)',
                    'value' => 'en_ZA',
                  ),
                  217 => 
                  array (
                    'key' => 'English (South Sudan)',
                    'value' => 'en_SS',
                  ),
                  218 => 
                  array (
                    'key' => 'English (St. Helena)',
                    'value' => 'en_SH',
                  ),
                  219 => 
                  array (
                    'key' => 'English (St. Kitts & Nevis)',
                    'value' => 'en_KN',
                  ),
                  220 => 
                  array (
                    'key' => 'English (St. Lucia)',
                    'value' => 'en_LC',
                  ),
                  221 => 
                  array (
                    'key' => 'English (St. Vincent & Grenadines)',
                    'value' => 'en_VC',
                  ),
                  222 => 
                  array (
                    'key' => 'English (Sudan)',
                    'value' => 'en_SD',
                  ),
                  223 => 
                  array (
                    'key' => 'English (Swaziland)',
                    'value' => 'en_SZ',
                  ),
                  224 => 
                  array (
                    'key' => 'English (Sweden)',
                    'value' => 'en_SE',
                  ),
                  225 => 
                  array (
                    'key' => 'English (Switzerland)',
                    'value' => 'en_CH',
                  ),
                  226 => 
                  array (
                    'key' => 'English (Tanzania)',
                    'value' => 'en_TZ',
                  ),
                  227 => 
                  array (
                    'key' => 'English (Tokelau)',
                    'value' => 'en_TK',
                  ),
                  228 => 
                  array (
                    'key' => 'English (Tonga)',
                    'value' => 'en_TO',
                  ),
                  229 => 
                  array (
                    'key' => 'English (Trinidad & Tobago)',
                    'value' => 'en_TT',
                  ),
                  230 => 
                  array (
                    'key' => 'English (Turks & Caicos Islands)',
                    'value' => 'en_TC',
                  ),
                  231 => 
                  array (
                    'key' => 'English (Tuvalu)',
                    'value' => 'en_TV',
                  ),
                  232 => 
                  array (
                    'key' => 'English (U.S. Outlying Islands)',
                    'value' => 'en_UM',
                  ),
                  233 => 
                  array (
                    'key' => 'English (U.S. Virgin Islands)',
                    'value' => 'en_VI',
                  ),
                  234 => 
                  array (
                    'key' => 'English (Uganda)',
                    'value' => 'en_UG',
                  ),
                  235 => 
                  array (
                    'key' => 'English (United Kingdom)',
                    'value' => 'en_GB',
                  ),
                  236 => 
                  array (
                    'key' => 'English (United States)',
                    'value' => 'en_US_POSIX',
                  ),
                  237 => 
                  array (
                    'key' => 'English (United States)',
                    'value' => 'en_US',
                  ),
                  238 => 
                  array (
                    'key' => 'English (Vanuatu)',
                    'value' => 'en_VU',
                  ),
                  239 => 
                  array (
                    'key' => 'English (World)',
                    'value' => 'en_001',
                  ),
                  240 => 
                  array (
                    'key' => 'English (Zambia)',
                    'value' => 'en_ZM',
                  ),
                  241 => 
                  array (
                    'key' => 'English (Zimbabwe)',
                    'value' => 'en_ZW',
                  ),
                  242 => 
                  array (
                    'key' => 'Esperanto',
                    'value' => 'eo',
                  ),
                  243 => 
                  array (
                    'key' => 'Estonian',
                    'value' => 'et',
                  ),
                  244 => 
                  array (
                    'key' => 'Estonian (Estonia)',
                    'value' => 'et_EE',
                  ),
                  245 => 
                  array (
                    'key' => 'Ewe',
                    'value' => 'ee',
                  ),
                  246 => 
                  array (
                    'key' => 'Ewe (Ghana)',
                    'value' => 'ee_GH',
                  ),
                  247 => 
                  array (
                    'key' => 'Ewe (Togo)',
                    'value' => 'ee_TG',
                  ),
                  248 => 
                  array (
                    'key' => 'Ewondo',
                    'value' => 'ewo',
                  ),
                  249 => 
                  array (
                    'key' => 'Ewondo (Cameroon)',
                    'value' => 'ewo_CM',
                  ),
                  250 => 
                  array (
                    'key' => 'Faroese',
                    'value' => 'fo',
                  ),
                  251 => 
                  array (
                    'key' => 'Faroese (Denmark)',
                    'value' => 'fo_DK',
                  ),
                  252 => 
                  array (
                    'key' => 'Faroese (Faroe Islands)',
                    'value' => 'fo_FO',
                  ),
                  253 => 
                  array (
                    'key' => 'Filipino',
                    'value' => 'fil',
                  ),
                  254 => 
                  array (
                    'key' => 'Filipino (Philippines)',
                    'value' => 'fil_PH',
                  ),
                  255 => 
                  array (
                    'key' => 'Finnish',
                    'value' => 'fi',
                  ),
                  256 => 
                  array (
                    'key' => 'Finnish (Finland)',
                    'value' => 'fi_FI',
                  ),
                  257 => 
                  array (
                    'key' => 'French',
                    'value' => 'fr',
                  ),
                  258 => 
                  array (
                    'key' => 'French (Algeria)',
                    'value' => 'fr_DZ',
                  ),
                  259 => 
                  array (
                    'key' => 'French (Belgium)',
                    'value' => 'fr_BE',
                  ),
                  260 => 
                  array (
                    'key' => 'French (Benin)',
                    'value' => 'fr_BJ',
                  ),
                  261 => 
                  array (
                    'key' => 'French (Burkina Faso)',
                    'value' => 'fr_BF',
                  ),
                  262 => 
                  array (
                    'key' => 'French (Burundi)',
                    'value' => 'fr_BI',
                  ),
                  263 => 
                  array (
                    'key' => 'French (Cameroon)',
                    'value' => 'fr_CM',
                  ),
                  264 => 
                  array (
                    'key' => 'French (Canada)',
                    'value' => 'fr_CA',
                  ),
                  265 => 
                  array (
                    'key' => 'French (Central African Republic)',
                    'value' => 'fr_CF',
                  ),
                  266 => 
                  array (
                    'key' => 'French (Chad)',
                    'value' => 'fr_TD',
                  ),
                  267 => 
                  array (
                    'key' => 'French (Comoros)',
                    'value' => 'fr_KM',
                  ),
                  268 => 
                  array (
                    'key' => 'French (Congo - Brazzaville)',
                    'value' => 'fr_CG',
                  ),
                  269 => 
                  array (
                    'key' => 'French (Congo - Kinshasa)',
                    'value' => 'fr_CD',
                  ),
                  270 => 
                  array (
                    'key' => 'French (Côte d’Ivoire)',
                    'value' => 'fr_CI',
                  ),
                  271 => 
                  array (
                    'key' => 'French (Djibouti)',
                    'value' => 'fr_DJ',
                  ),
                  272 => 
                  array (
                    'key' => 'French (Equatorial Guinea)',
                    'value' => 'fr_GQ',
                  ),
                  273 => 
                  array (
                    'key' => 'French (France)',
                    'value' => 'fr_FR',
                  ),
                  274 => 
                  array (
                    'key' => 'French (French Guiana)',
                    'value' => 'fr_GF',
                  ),
                  275 => 
                  array (
                    'key' => 'French (French Polynesia)',
                    'value' => 'fr_PF',
                  ),
                  276 => 
                  array (
                    'key' => 'French (Gabon)',
                    'value' => 'fr_GA',
                  ),
                  277 => 
                  array (
                    'key' => 'French (Guadeloupe)',
                    'value' => 'fr_GP',
                  ),
                  278 => 
                  array (
                    'key' => 'French (Guinea)',
                    'value' => 'fr_GN',
                  ),
                  279 => 
                  array (
                    'key' => 'French (Haiti)',
                    'value' => 'fr_HT',
                  ),
                  280 => 
                  array (
                    'key' => 'French (Luxembourg)',
                    'value' => 'fr_LU',
                  ),
                  281 => 
                  array (
                    'key' => 'French (Madagascar)',
                    'value' => 'fr_MG',
                  ),
                  282 => 
                  array (
                    'key' => 'French (Mali)',
                    'value' => 'fr_ML',
                  ),
                  283 => 
                  array (
                    'key' => 'French (Martinique)',
                    'value' => 'fr_MQ',
                  ),
                  284 => 
                  array (
                    'key' => 'French (Mauritania)',
                    'value' => 'fr_MR',
                  ),
                  285 => 
                  array (
                    'key' => 'French (Mauritius)',
                    'value' => 'fr_MU',
                  ),
                  286 => 
                  array (
                    'key' => 'French (Mayotte)',
                    'value' => 'fr_YT',
                  ),
                  287 => 
                  array (
                    'key' => 'French (Monaco)',
                    'value' => 'fr_MC',
                  ),
                  288 => 
                  array (
                    'key' => 'French (Morocco)',
                    'value' => 'fr_MA',
                  ),
                  289 => 
                  array (
                    'key' => 'French (New Caledonia)',
                    'value' => 'fr_NC',
                  ),
                  290 => 
                  array (
                    'key' => 'French (Niger)',
                    'value' => 'fr_NE',
                  ),
                  291 => 
                  array (
                    'key' => 'French (Rwanda)',
                    'value' => 'fr_RW',
                  ),
                  292 => 
                  array (
                    'key' => 'French (Réunion)',
                    'value' => 'fr_RE',
                  ),
                  293 => 
                  array (
                    'key' => 'French (Senegal)',
                    'value' => 'fr_SN',
                  ),
                  294 => 
                  array (
                    'key' => 'French (Seychelles)',
                    'value' => 'fr_SC',
                  ),
                  295 => 
                  array (
                    'key' => 'French (St. Barthélemy)',
                    'value' => 'fr_BL',
                  ),
                  296 => 
                  array (
                    'key' => 'French (St. Martin)',
                    'value' => 'fr_MF',
                  ),
                  297 => 
                  array (
                    'key' => 'French (St. Pierre & Miquelon)',
                    'value' => 'fr_PM',
                  ),
                  298 => 
                  array (
                    'key' => 'French (Switzerland)',
                    'value' => 'fr_CH',
                  ),
                  299 => 
                  array (
                    'key' => 'French (Syria)',
                    'value' => 'fr_SY',
                  ),
                  300 => 
                  array (
                    'key' => 'French (Togo)',
                    'value' => 'fr_TG',
                  ),
                  301 => 
                  array (
                    'key' => 'French (Tunisia)',
                    'value' => 'fr_TN',
                  ),
                  302 => 
                  array (
                    'key' => 'French (Vanuatu)',
                    'value' => 'fr_VU',
                  ),
                  303 => 
                  array (
                    'key' => 'French (Wallis & Futuna)',
                    'value' => 'fr_WF',
                  ),
                  304 => 
                  array (
                    'key' => 'Friulian',
                    'value' => 'fur',
                  ),
                  305 => 
                  array (
                    'key' => 'Friulian (Italy)',
                    'value' => 'fur_IT',
                  ),
                  306 => 
                  array (
                    'key' => 'Fulah',
                    'value' => 'ff',
                  ),
                  307 => 
                  array (
                    'key' => 'Fulah (Cameroon)',
                    'value' => 'ff_CM',
                  ),
                  308 => 
                  array (
                    'key' => 'Fulah (Guinea)',
                    'value' => 'ff_GN',
                  ),
                  309 => 
                  array (
                    'key' => 'Fulah (Mauritania)',
                    'value' => 'ff_MR',
                  ),
                  310 => 
                  array (
                    'key' => 'Fulah (Senegal)',
                    'value' => 'ff_SN',
                  ),
                  311 => 
                  array (
                    'key' => 'Galician',
                    'value' => 'gl',
                  ),
                  312 => 
                  array (
                    'key' => 'Galician (Spain)',
                    'value' => 'gl_ES',
                  ),
                  313 => 
                  array (
                    'key' => 'Ganda',
                    'value' => 'lg',
                  ),
                  314 => 
                  array (
                    'key' => 'Ganda (Uganda)',
                    'value' => 'lg_UG',
                  ),
                  315 => 
                  array (
                    'key' => 'Georgian',
                    'value' => 'ka',
                  ),
                  316 => 
                  array (
                    'key' => 'Georgian (Georgia)',
                    'value' => 'ka_GE',
                  ),
                  317 => 
                  array (
                    'key' => 'German',
                    'value' => 'de',
                  ),
                  318 => 
                  array (
                    'key' => 'German (Austria)',
                    'value' => 'de_AT',
                  ),
                  319 => 
                  array (
                    'key' => 'German (Belgium)',
                    'value' => 'de_BE',
                  ),
                  320 => 
                  array (
                    'key' => 'German (Germany)',
                    'value' => 'de_DE',
                  ),
                  321 => 
                  array (
                    'key' => 'German (Liechtenstein)',
                    'value' => 'de_LI',
                  ),
                  322 => 
                  array (
                    'key' => 'German (Luxembourg)',
                    'value' => 'de_LU',
                  ),
                  323 => 
                  array (
                    'key' => 'German (Switzerland)',
                    'value' => 'de_CH',
                  ),
                  324 => 
                  array (
                    'key' => 'Greek',
                    'value' => 'el',
                  ),
                  325 => 
                  array (
                    'key' => 'Greek (Cyprus)',
                    'value' => 'el_CY',
                  ),
                  326 => 
                  array (
                    'key' => 'Greek (Greece)',
                    'value' => 'el_GR',
                  ),
                  327 => 
                  array (
                    'key' => 'Gujarati',
                    'value' => 'gu',
                  ),
                  328 => 
                  array (
                    'key' => 'Gujarati (India)',
                    'value' => 'gu_IN',
                  ),
                  329 => 
                  array (
                    'key' => 'Gusii',
                    'value' => 'guz',
                  ),
                  330 => 
                  array (
                    'key' => 'Gusii (Kenya)',
                    'value' => 'guz_KE',
                  ),
                  331 => 
                  array (
                    'key' => 'Hausa',
                    'value' => 'ha',
                  ),
                  332 => 
                  array (
                    'key' => 'Hausa (Ghana)',
                    'value' => 'ha_GH',
                  ),
                  333 => 
                  array (
                    'key' => 'Hausa (Niger)',
                    'value' => 'ha_NE',
                  ),
                  334 => 
                  array (
                    'key' => 'Hausa (Nigeria)',
                    'value' => 'ha_NG',
                  ),
                  335 => 
                  array (
                    'key' => 'Hawaiian',
                    'value' => 'haw',
                  ),
                  336 => 
                  array (
                    'key' => 'Hawaiian (United States)',
                    'value' => 'haw_US',
                  ),
                  337 => 
                  array (
                    'key' => 'Hebrew',
                    'value' => 'he',
                  ),
                  338 => 
                  array (
                    'key' => 'Hebrew (Israel)',
                    'value' => 'he_IL',
                  ),
                  339 => 
                  array (
                    'key' => 'Hindi',
                    'value' => 'hi',
                  ),
                  340 => 
                  array (
                    'key' => 'Hindi (India)',
                    'value' => 'hi_IN',
                  ),
                  341 => 
                  array (
                    'key' => 'Hungarian',
                    'value' => 'hu',
                  ),
                  342 => 
                  array (
                    'key' => 'Hungarian (Hungary)',
                    'value' => 'hu_HU',
                  ),
                  343 => 
                  array (
                    'key' => 'Icelandic',
                    'value' => 'is',
                  ),
                  344 => 
                  array (
                    'key' => 'Icelandic (Iceland)',
                    'value' => 'is_IS',
                  ),
                  345 => 
                  array (
                    'key' => 'Igbo',
                    'value' => 'ig',
                  ),
                  346 => 
                  array (
                    'key' => 'Igbo (Nigeria)',
                    'value' => 'ig_NG',
                  ),
                  347 => 
                  array (
                    'key' => 'Inari Sami',
                    'value' => 'smn',
                  ),
                  348 => 
                  array (
                    'key' => 'Inari Sami (Finland)',
                    'value' => 'smn_FI',
                  ),
                  349 => 
                  array (
                    'key' => 'Indonesian',
                    'value' => 'id',
                  ),
                  350 => 
                  array (
                    'key' => 'Indonesian (Indonesia)',
                    'value' => 'id_ID',
                  ),
                  351 => 
                  array (
                    'key' => 'Irish',
                    'value' => 'ga',
                  ),
                  352 => 
                  array (
                    'key' => 'Irish (Ireland)',
                    'value' => 'ga_IE',
                  ),
                  353 => 
                  array (
                    'key' => 'Italian',
                    'value' => 'it',
                  ),
                  354 => 
                  array (
                    'key' => 'Italian (Italy)',
                    'value' => 'it_IT',
                  ),
                  355 => 
                  array (
                    'key' => 'Italian (San Marino)',
                    'value' => 'it_SM',
                  ),
                  356 => 
                  array (
                    'key' => 'Italian (Switzerland)',
                    'value' => 'it_CH',
                  ),
                  357 => 
                  array (
                    'key' => 'Japanese',
                    'value' => 'ja',
                  ),
                  358 => 
                  array (
                    'key' => 'Japanese (Japan)',
                    'value' => 'ja_JP',
                  ),
                  359 => 
                  array (
                    'key' => 'Jola-Fonyi',
                    'value' => 'dyo',
                  ),
                  360 => 
                  array (
                    'key' => 'Jola-Fonyi (Senegal)',
                    'value' => 'dyo_SN',
                  ),
                  361 => 
                  array (
                    'key' => 'Kabuverdianu',
                    'value' => 'kea',
                  ),
                  362 => 
                  array (
                    'key' => 'Kabuverdianu (Cape Verde)',
                    'value' => 'kea_CV',
                  ),
                  363 => 
                  array (
                    'key' => 'Kabyle',
                    'value' => 'kab',
                  ),
                  364 => 
                  array (
                    'key' => 'Kabyle (Algeria)',
                    'value' => 'kab_DZ',
                  ),
                  365 => 
                  array (
                    'key' => 'Kako',
                    'value' => 'kkj',
                  ),
                  366 => 
                  array (
                    'key' => 'Kako (Cameroon)',
                    'value' => 'kkj_CM',
                  ),
                  367 => 
                  array (
                    'key' => 'Kalaallisut',
                    'value' => 'kl',
                  ),
                  368 => 
                  array (
                    'key' => 'Kalaallisut (Greenland)',
                    'value' => 'kl_GL',
                  ),
                  369 => 
                  array (
                    'key' => 'Kalenjin',
                    'value' => 'kln',
                  ),
                  370 => 
                  array (
                    'key' => 'Kalenjin (Kenya)',
                    'value' => 'kln_KE',
                  ),
                  371 => 
                  array (
                    'key' => 'Kamba',
                    'value' => 'kam',
                  ),
                  372 => 
                  array (
                    'key' => 'Kamba (Kenya)',
                    'value' => 'kam_KE',
                  ),
                  373 => 
                  array (
                    'key' => 'Kannada',
                    'value' => 'kn',
                  ),
                  374 => 
                  array (
                    'key' => 'Kannada (India)',
                    'value' => 'kn_IN',
                  ),
                  375 => 
                  array (
                    'key' => 'Kashmiri',
                    'value' => 'ks',
                  ),
                  376 => 
                  array (
                    'key' => 'Kashmiri (India)',
                    'value' => 'ks_IN',
                  ),
                  377 => 
                  array (
                    'key' => 'Kazakh',
                    'value' => 'kk',
                  ),
                  378 => 
                  array (
                    'key' => 'Kazakh (Kazakhstan)',
                    'value' => 'kk_KZ',
                  ),
                  379 => 
                  array (
                    'key' => 'Khmer',
                    'value' => 'km',
                  ),
                  380 => 
                  array (
                    'key' => 'Khmer (Cambodia)',
                    'value' => 'km_KH',
                  ),
                  381 => 
                  array (
                    'key' => 'Kikuyu',
                    'value' => 'ki',
                  ),
                  382 => 
                  array (
                    'key' => 'Kikuyu (Kenya)',
                    'value' => 'ki_KE',
                  ),
                  383 => 
                  array (
                    'key' => 'Kinyarwanda',
                    'value' => 'rw',
                  ),
                  384 => 
                  array (
                    'key' => 'Kinyarwanda (Rwanda)',
                    'value' => 'rw_RW',
                  ),
                  385 => 
                  array (
                    'key' => 'Konkani',
                    'value' => 'kok',
                  ),
                  386 => 
                  array (
                    'key' => 'Konkani (India)',
                    'value' => 'kok_IN',
                  ),
                  387 => 
                  array (
                    'key' => 'Korean',
                    'value' => 'ko',
                  ),
                  388 => 
                  array (
                    'key' => 'Korean (North Korea)',
                    'value' => 'ko_KP',
                  ),
                  389 => 
                  array (
                    'key' => 'Korean (South Korea)',
                    'value' => 'ko_KR',
                  ),
                  390 => 
                  array (
                    'key' => 'Koyra Chiini',
                    'value' => 'khq',
                  ),
                  391 => 
                  array (
                    'key' => 'Koyra Chiini (Mali)',
                    'value' => 'khq_ML',
                  ),
                  392 => 
                  array (
                    'key' => 'Koyraboro Senni',
                    'value' => 'ses',
                  ),
                  393 => 
                  array (
                    'key' => 'Koyraboro Senni (Mali)',
                    'value' => 'ses_ML',
                  ),
                  394 => 
                  array (
                    'key' => 'Kwasio',
                    'value' => 'nmg',
                  ),
                  395 => 
                  array (
                    'key' => 'Kwasio (Cameroon)',
                    'value' => 'nmg_CM',
                  ),
                  396 => 
                  array (
                    'key' => 'Kyrgyz',
                    'value' => 'ky',
                  ),
                  397 => 
                  array (
                    'key' => 'Kyrgyz (Kyrgyzstan)',
                    'value' => 'ky_KG',
                  ),
                  398 => 
                  array (
                    'key' => 'Lakota',
                    'value' => 'lkt',
                  ),
                  399 => 
                  array (
                    'key' => 'Lakota (United States)',
                    'value' => 'lkt_US',
                  ),
                  400 => 
                  array (
                    'key' => 'Langi',
                    'value' => 'lag',
                  ),
                  401 => 
                  array (
                    'key' => 'Langi (Tanzania)',
                    'value' => 'lag_TZ',
                  ),
                  402 => 
                  array (
                    'key' => 'Lao',
                    'value' => 'lo',
                  ),
                  403 => 
                  array (
                    'key' => 'Lao (Laos)',
                    'value' => 'lo_LA',
                  ),
                  404 => 
                  array (
                    'key' => 'Latvian',
                    'value' => 'lv',
                  ),
                  405 => 
                  array (
                    'key' => 'Latvian (Latvia)',
                    'value' => 'lv_LV',
                  ),
                  406 => 
                  array (
                    'key' => 'Lingala',
                    'value' => 'ln',
                  ),
                  407 => 
                  array (
                    'key' => 'Lingala (Angola)',
                    'value' => 'ln_AO',
                  ),
                  408 => 
                  array (
                    'key' => 'Lingala (Central African Republic)',
                    'value' => 'ln_CF',
                  ),
                  409 => 
                  array (
                    'key' => 'Lingala (Congo - Brazzaville)',
                    'value' => 'ln_CG',
                  ),
                  410 => 
                  array (
                    'key' => 'Lingala (Congo - Kinshasa)',
                    'value' => 'ln_CD',
                  ),
                  411 => 
                  array (
                    'key' => 'Lithuanian',
                    'value' => 'lt',
                  ),
                  412 => 
                  array (
                    'key' => 'Lithuanian (Lithuania)',
                    'value' => 'lt_LT',
                  ),
                  413 => 
                  array (
                    'key' => 'Lower Sorbian',
                    'value' => 'dsb',
                  ),
                  414 => 
                  array (
                    'key' => 'Lower Sorbian (Germany)',
                    'value' => 'dsb_DE',
                  ),
                  415 => 
                  array (
                    'key' => 'Luba-Katanga',
                    'value' => 'lu',
                  ),
                  416 => 
                  array (
                    'key' => 'Luba-Katanga (Congo - Kinshasa)',
                    'value' => 'lu_CD',
                  ),
                  417 => 
                  array (
                    'key' => 'Luo',
                    'value' => 'luo',
                  ),
                  418 => 
                  array (
                    'key' => 'Luo (Kenya)',
                    'value' => 'luo_KE',
                  ),
                  419 => 
                  array (
                    'key' => 'Luxembourgish',
                    'value' => 'lb',
                  ),
                  420 => 
                  array (
                    'key' => 'Luxembourgish (Luxembourg)',
                    'value' => 'lb_LU',
                  ),
                  421 => 
                  array (
                    'key' => 'Luyia',
                    'value' => 'luy',
                  ),
                  422 => 
                  array (
                    'key' => 'Luyia (Kenya)',
                    'value' => 'luy_KE',
                  ),
                  423 => 
                  array (
                    'key' => 'Macedonian',
                    'value' => 'mk',
                  ),
                  424 => 
                  array (
                    'key' => 'Macedonian (Macedonia)',
                    'value' => 'mk_MK',
                  ),
                  425 => 
                  array (
                    'key' => 'Machame',
                    'value' => 'jmc',
                  ),
                  426 => 
                  array (
                    'key' => 'Machame (Tanzania)',
                    'value' => 'jmc_TZ',
                  ),
                  427 => 
                  array (
                    'key' => 'Makhuwa-Meetto',
                    'value' => 'mgh',
                  ),
                  428 => 
                  array (
                    'key' => 'Makhuwa-Meetto (Mozambique)',
                    'value' => 'mgh_MZ',
                  ),
                  429 => 
                  array (
                    'key' => 'Makonde',
                    'value' => 'kde',
                  ),
                  430 => 
                  array (
                    'key' => 'Makonde (Tanzania)',
                    'value' => 'kde_TZ',
                  ),
                  431 => 
                  array (
                    'key' => 'Malagasy',
                    'value' => 'mg',
                  ),
                  432 => 
                  array (
                    'key' => 'Malagasy (Madagascar)',
                    'value' => 'mg_MG',
                  ),
                  433 => 
                  array (
                    'key' => 'Malay',
                    'value' => 'ms',
                  ),
                  434 => 
                  array (
                    'key' => 'Malay (Brunei)',
                    'value' => 'ms_BN',
                  ),
                  435 => 
                  array (
                    'key' => 'Malay (Malaysia)',
                    'value' => 'ms_MY',
                  ),
                  436 => 
                  array (
                    'key' => 'Malay (Singapore)',
                    'value' => 'ms_SG',
                  ),
                  437 => 
                  array (
                    'key' => 'Malayalam',
                    'value' => 'ml',
                  ),
                  438 => 
                  array (
                    'key' => 'Malayalam (India)',
                    'value' => 'ml_IN',
                  ),
                  439 => 
                  array (
                    'key' => 'Maltese',
                    'value' => 'mt',
                  ),
                  440 => 
                  array (
                    'key' => 'Maltese (Malta)',
                    'value' => 'mt_MT',
                  ),
                  441 => 
                  array (
                    'key' => 'Manx',
                    'value' => 'gv',
                  ),
                  442 => 
                  array (
                    'key' => 'Manx (Isle of Man)',
                    'value' => 'gv_IM',
                  ),
                  443 => 
                  array (
                    'key' => 'Marathi',
                    'value' => 'mr',
                  ),
                  444 => 
                  array (
                    'key' => 'Marathi (India)',
                    'value' => 'mr_IN',
                  ),
                  445 => 
                  array (
                    'key' => 'Masai',
                    'value' => 'mas',
                  ),
                  446 => 
                  array (
                    'key' => 'Masai (Kenya)',
                    'value' => 'mas_KE',
                  ),
                  447 => 
                  array (
                    'key' => 'Masai (Tanzania)',
                    'value' => 'mas_TZ',
                  ),
                  448 => 
                  array (
                    'key' => 'Mazanderani',
                    'value' => 'mzn',
                  ),
                  449 => 
                  array (
                    'key' => 'Mazanderani (Iran)',
                    'value' => 'mzn_IR',
                  ),
                  450 => 
                  array (
                    'key' => 'Meru',
                    'value' => 'mer',
                  ),
                  451 => 
                  array (
                    'key' => 'Meru (Kenya)',
                    'value' => 'mer_KE',
                  ),
                  452 => 
                  array (
                    'key' => 'Metaʼ',
                    'value' => 'mgo',
                  ),
                  453 => 
                  array (
                    'key' => 'Metaʼ (Cameroon)',
                    'value' => 'mgo_CM',
                  ),
                  454 => 
                  array (
                    'key' => 'Mongolian',
                    'value' => 'mn',
                  ),
                  455 => 
                  array (
                    'key' => 'Mongolian (Mongolia)',
                    'value' => 'mn_MN',
                  ),
                  456 => 
                  array (
                    'key' => 'Morisyen',
                    'value' => 'mfe',
                  ),
                  457 => 
                  array (
                    'key' => 'Morisyen (Mauritius)',
                    'value' => 'mfe_MU',
                  ),
                  458 => 
                  array (
                    'key' => 'Mundang',
                    'value' => 'mua',
                  ),
                  459 => 
                  array (
                    'key' => 'Mundang (Cameroon)',
                    'value' => 'mua_CM',
                  ),
                  460 => 
                  array (
                    'key' => 'Nama',
                    'value' => 'naq',
                  ),
                  461 => 
                  array (
                    'key' => 'Nama (Namibia)',
                    'value' => 'naq_NA',
                  ),
                  462 => 
                  array (
                    'key' => 'Nepali',
                    'value' => 'ne',
                  ),
                  463 => 
                  array (
                    'key' => 'Nepali (India)',
                    'value' => 'ne_IN',
                  ),
                  464 => 
                  array (
                    'key' => 'Nepali (Nepal)',
                    'value' => 'ne_NP',
                  ),
                  465 => 
                  array (
                    'key' => 'Ngiemboon',
                    'value' => 'nnh',
                  ),
                  466 => 
                  array (
                    'key' => 'Ngiemboon (Cameroon)',
                    'value' => 'nnh_CM',
                  ),
                  467 => 
                  array (
                    'key' => 'Ngomba',
                    'value' => 'jgo',
                  ),
                  468 => 
                  array (
                    'key' => 'Ngomba (Cameroon)',
                    'value' => 'jgo_CM',
                  ),
                  469 => 
                  array (
                    'key' => 'North Ndebele',
                    'value' => 'nd',
                  ),
                  470 => 
                  array (
                    'key' => 'North Ndebele (Zimbabwe)',
                    'value' => 'nd_ZW',
                  ),
                  471 => 
                  array (
                    'key' => 'Northern Luri',
                    'value' => 'lrc',
                  ),
                  472 => 
                  array (
                    'key' => 'Northern Luri (Iran)',
                    'value' => 'lrc_IR',
                  ),
                  473 => 
                  array (
                    'key' => 'Northern Luri (Iraq)',
                    'value' => 'lrc_IQ',
                  ),
                  474 => 
                  array (
                    'key' => 'Northern Sami',
                    'value' => 'se',
                  ),
                  475 => 
                  array (
                    'key' => 'Northern Sami (Finland)',
                    'value' => 'se_FI',
                  ),
                  476 => 
                  array (
                    'key' => 'Northern Sami (Norway)',
                    'value' => 'se_NO',
                  ),
                  477 => 
                  array (
                    'key' => 'Northern Sami (Sweden)',
                    'value' => 'se_SE',
                  ),
                  478 => 
                  array (
                    'key' => 'Norwegian Bokmål',
                    'value' => 'nb',
                  ),
                  479 => 
                  array (
                    'key' => 'Norwegian Bokmål (Norway)',
                    'value' => 'nb_NO',
                  ),
                  480 => 
                  array (
                    'key' => 'Norwegian Bokmål (Svalbard & Jan Mayen)',
                    'value' => 'nb_SJ',
                  ),
                  481 => 
                  array (
                    'key' => 'Norwegian Nynorsk',
                    'value' => 'nn',
                  ),
                  482 => 
                  array (
                    'key' => 'Norwegian Nynorsk (Norway)',
                    'value' => 'nn_NO',
                  ),
                  483 => 
                  array (
                    'key' => 'Nuer',
                    'value' => 'nus',
                  ),
                  484 => 
                  array (
                    'key' => 'Nuer (South Sudan)',
                    'value' => 'nus_SS',
                  ),
                  485 => 
                  array (
                    'key' => 'Nyankole',
                    'value' => 'nyn',
                  ),
                  486 => 
                  array (
                    'key' => 'Nyankole (Uganda)',
                    'value' => 'nyn_UG',
                  ),
                  487 => 
                  array (
                    'key' => 'Oriya',
                    'value' => 'or',
                  ),
                  488 => 
                  array (
                    'key' => 'Oriya (India)',
                    'value' => 'or_IN',
                  ),
                  489 => 
                  array (
                    'key' => 'Oromo',
                    'value' => 'om',
                  ),
                  490 => 
                  array (
                    'key' => 'Oromo (Ethiopia)',
                    'value' => 'om_ET',
                  ),
                  491 => 
                  array (
                    'key' => 'Oromo (Kenya)',
                    'value' => 'om_KE',
                  ),
                  492 => 
                  array (
                    'key' => 'Ossetic',
                    'value' => 'os',
                  ),
                  493 => 
                  array (
                    'key' => 'Ossetic (Georgia)',
                    'value' => 'os_GE',
                  ),
                  494 => 
                  array (
                    'key' => 'Ossetic (Russia)',
                    'value' => 'os_RU',
                  ),
                  495 => 
                  array (
                    'key' => 'Pashto',
                    'value' => 'ps',
                  ),
                  496 => 
                  array (
                    'key' => 'Pashto (Afghanistan)',
                    'value' => 'ps_AF',
                  ),
                  497 => 
                  array (
                    'key' => 'Persian',
                    'value' => 'fa',
                  ),
                  498 => 
                  array (
                    'key' => 'Persian (Afghanistan)',
                    'value' => 'fa_AF',
                  ),
                  499 => 
                  array (
                    'key' => 'Persian (Iran)',
                    'value' => 'fa_IR',
                  ),
                  500 => 
                  array (
                    'key' => 'Polish',
                    'value' => 'pl',
                  ),
                  501 => 
                  array (
                    'key' => 'Polish (Poland)',
                    'value' => 'pl_PL',
                  ),
                  502 => 
                  array (
                    'key' => 'Portuguese',
                    'value' => 'pt',
                  ),
                  503 => 
                  array (
                    'key' => 'Portuguese (Angola)',
                    'value' => 'pt_AO',
                  ),
                  504 => 
                  array (
                    'key' => 'Portuguese (Brazil)',
                    'value' => 'pt_BR',
                  ),
                  505 => 
                  array (
                    'key' => 'Portuguese (Cape Verde)',
                    'value' => 'pt_CV',
                  ),
                  506 => 
                  array (
                    'key' => 'Portuguese (Guinea-Bissau)',
                    'value' => 'pt_GW',
                  ),
                  507 => 
                  array (
                    'key' => 'Portuguese (Macau SAR China)',
                    'value' => 'pt_MO',
                  ),
                  508 => 
                  array (
                    'key' => 'Portuguese (Mozambique)',
                    'value' => 'pt_MZ',
                  ),
                  509 => 
                  array (
                    'key' => 'Portuguese (Portugal)',
                    'value' => 'pt_PT',
                  ),
                  510 => 
                  array (
                    'key' => 'Portuguese (São Tomé & Príncipe)',
                    'value' => 'pt_ST',
                  ),
                  511 => 
                  array (
                    'key' => 'Portuguese (Timor-Leste)',
                    'value' => 'pt_TL',
                  ),
                  512 => 
                  array (
                    'key' => 'Punjabi',
                    'value' => 'pa_Guru',
                  ),
                  513 => 
                  array (
                    'key' => 'Punjabi',
                    'value' => 'pa_Arab',
                  ),
                  514 => 
                  array (
                    'key' => 'Punjabi',
                    'value' => 'pa',
                  ),
                  515 => 
                  array (
                    'key' => 'Punjabi (India)',
                    'value' => 'pa_Guru_IN',
                  ),
                  516 => 
                  array (
                    'key' => 'Punjabi (Pakistan)',
                    'value' => 'pa_Arab_PK',
                  ),
                  517 => 
                  array (
                    'key' => 'Quechua',
                    'value' => 'qu',
                  ),
                  518 => 
                  array (
                    'key' => 'Quechua (Bolivia)',
                    'value' => 'qu_BO',
                  ),
                  519 => 
                  array (
                    'key' => 'Quechua (Ecuador)',
                    'value' => 'qu_EC',
                  ),
                  520 => 
                  array (
                    'key' => 'Quechua (Peru)',
                    'value' => 'qu_PE',
                  ),
                  521 => 
                  array (
                    'key' => 'Romanian',
                    'value' => 'ro',
                  ),
                  522 => 
                  array (
                    'key' => 'Romanian (Moldova)',
                    'value' => 'ro_MD',
                  ),
                  523 => 
                  array (
                    'key' => 'Romanian (Romania)',
                    'value' => 'ro_RO',
                  ),
                  524 => 
                  array (
                    'key' => 'Romansh',
                    'value' => 'rm',
                  ),
                  525 => 
                  array (
                    'key' => 'Romansh (Switzerland)',
                    'value' => 'rm_CH',
                  ),
                  526 => 
                  array (
                    'key' => 'Rombo',
                    'value' => 'rof',
                  ),
                  527 => 
                  array (
                    'key' => 'Rombo (Tanzania)',
                    'value' => 'rof_TZ',
                  ),
                  528 => 
                  array (
                    'key' => 'Rundi',
                    'value' => 'rn',
                  ),
                  529 => 
                  array (
                    'key' => 'Rundi (Burundi)',
                    'value' => 'rn_BI',
                  ),
                  530 => 
                  array (
                    'key' => 'Russian',
                    'value' => 'ru',
                  ),
                  531 => 
                  array (
                    'key' => 'Russian (Belarus)',
                    'value' => 'ru_BY',
                  ),
                  532 => 
                  array (
                    'key' => 'Russian (Kazakhstan)',
                    'value' => 'ru_KZ',
                  ),
                  533 => 
                  array (
                    'key' => 'Russian (Kyrgyzstan)',
                    'value' => 'ru_KG',
                  ),
                  534 => 
                  array (
                    'key' => 'Russian (Moldova)',
                    'value' => 'ru_MD',
                  ),
                  535 => 
                  array (
                    'key' => 'Russian (Russia)',
                    'value' => 'ru_RU',
                  ),
                  536 => 
                  array (
                    'key' => 'Russian (Ukraine)',
                    'value' => 'ru_UA',
                  ),
                  537 => 
                  array (
                    'key' => 'Rwa',
                    'value' => 'rwk',
                  ),
                  538 => 
                  array (
                    'key' => 'Rwa (Tanzania)',
                    'value' => 'rwk_TZ',
                  ),
                  539 => 
                  array (
                    'key' => 'Sakha',
                    'value' => 'sah',
                  ),
                  540 => 
                  array (
                    'key' => 'Sakha (Russia)',
                    'value' => 'sah_RU',
                  ),
                  541 => 
                  array (
                    'key' => 'Samburu',
                    'value' => 'saq',
                  ),
                  542 => 
                  array (
                    'key' => 'Samburu (Kenya)',
                    'value' => 'saq_KE',
                  ),
                  543 => 
                  array (
                    'key' => 'Sango',
                    'value' => 'sg',
                  ),
                  544 => 
                  array (
                    'key' => 'Sango (Central African Republic)',
                    'value' => 'sg_CF',
                  ),
                  545 => 
                  array (
                    'key' => 'Sangu',
                    'value' => 'sbp',
                  ),
                  546 => 
                  array (
                    'key' => 'Sangu (Tanzania)',
                    'value' => 'sbp_TZ',
                  ),
                  547 => 
                  array (
                    'key' => 'Scottish Gaelic',
                    'value' => 'gd',
                  ),
                  548 => 
                  array (
                    'key' => 'Scottish Gaelic (United Kingdom)',
                    'value' => 'gd_GB',
                  ),
                  549 => 
                  array (
                    'key' => 'Sena',
                    'value' => 'seh',
                  ),
                  550 => 
                  array (
                    'key' => 'Sena (Mozambique)',
                    'value' => 'seh_MZ',
                  ),
                  551 => 
                  array (
                    'key' => 'Serbian',
                    'value' => 'sr',
                  ),
                  552 => 
                  array (
                    'key' => 'Serbian',
                    'value' => 'sr_Latn',
                  ),
                  553 => 
                  array (
                    'key' => 'Serbian',
                    'value' => 'sr_Cyrl',
                  ),
                  554 => 
                  array (
                    'key' => 'Serbian (Bosnia & Herzegovina)',
                    'value' => 'sr_Latn_BA',
                  ),
                  555 => 
                  array (
                    'key' => 'Serbian (Bosnia & Herzegovina)',
                    'value' => 'sr_Cyrl_BA',
                  ),
                  556 => 
                  array (
                    'key' => 'Serbian (Kosovo)',
                    'value' => 'sr_Latn_XK',
                  ),
                  557 => 
                  array (
                    'key' => 'Serbian (Kosovo)',
                    'value' => 'sr_Cyrl_XK',
                  ),
                  558 => 
                  array (
                    'key' => 'Serbian (Montenegro)',
                    'value' => 'sr_Latn_ME',
                  ),
                  559 => 
                  array (
                    'key' => 'Serbian (Montenegro)',
                    'value' => 'sr_Cyrl_ME',
                  ),
                  560 => 
                  array (
                    'key' => 'Serbian (Serbia)',
                    'value' => 'sr_Latn_RS',
                  ),
                  561 => 
                  array (
                    'key' => 'Serbian (Serbia)',
                    'value' => 'sr_Cyrl_RS',
                  ),
                  562 => 
                  array (
                    'key' => 'Shambala',
                    'value' => 'ksb',
                  ),
                  563 => 
                  array (
                    'key' => 'Shambala (Tanzania)',
                    'value' => 'ksb_TZ',
                  ),
                  564 => 
                  array (
                    'key' => 'Shona',
                    'value' => 'sn',
                  ),
                  565 => 
                  array (
                    'key' => 'Shona (Zimbabwe)',
                    'value' => 'sn_ZW',
                  ),
                  566 => 
                  array (
                    'key' => 'Sichuan Yi',
                    'value' => 'ii',
                  ),
                  567 => 
                  array (
                    'key' => 'Sichuan Yi (China)',
                    'value' => 'ii_CN',
                  ),
                  568 => 
                  array (
                    'key' => 'Sinhala',
                    'value' => 'si',
                  ),
                  569 => 
                  array (
                    'key' => 'Sinhala (Sri Lanka)',
                    'value' => 'si_LK',
                  ),
                  570 => 
                  array (
                    'key' => 'Slovak',
                    'value' => 'sk',
                  ),
                  571 => 
                  array (
                    'key' => 'Slovak (Slovakia)',
                    'value' => 'sk_SK',
                  ),
                  572 => 
                  array (
                    'key' => 'Slovenian',
                    'value' => 'sl',
                  ),
                  573 => 
                  array (
                    'key' => 'Slovenian (Slovenia)',
                    'value' => 'sl_SI',
                  ),
                  574 => 
                  array (
                    'key' => 'Soga',
                    'value' => 'xog',
                  ),
                  575 => 
                  array (
                    'key' => 'Soga (Uganda)',
                    'value' => 'xog_UG',
                  ),
                  576 => 
                  array (
                    'key' => 'Somali',
                    'value' => 'so',
                  ),
                  577 => 
                  array (
                    'key' => 'Somali (Djibouti)',
                    'value' => 'so_DJ',
                  ),
                  578 => 
                  array (
                    'key' => 'Somali (Ethiopia)',
                    'value' => 'so_ET',
                  ),
                  579 => 
                  array (
                    'key' => 'Somali (Kenya)',
                    'value' => 'so_KE',
                  ),
                  580 => 
                  array (
                    'key' => 'Somali (Somalia)',
                    'value' => 'so_SO',
                  ),
                  581 => 
                  array (
                    'key' => 'Spanish',
                    'value' => 'es',
                  ),
                  582 => 
                  array (
                    'key' => 'Spanish (Argentina)',
                    'value' => 'es_AR',
                  ),
                  583 => 
                  array (
                    'key' => 'Spanish (Bolivia)',
                    'value' => 'es_BO',
                  ),
                  584 => 
                  array (
                    'key' => 'Spanish (Canary Islands)',
                    'value' => 'es_IC',
                  ),
                  585 => 
                  array (
                    'key' => 'Spanish (Ceuta & Melilla)',
                    'value' => 'es_EA',
                  ),
                  586 => 
                  array (
                    'key' => 'Spanish (Chile)',
                    'value' => 'es_CL',
                  ),
                  587 => 
                  array (
                    'key' => 'Spanish (Colombia)',
                    'value' => 'es_CO',
                  ),
                  588 => 
                  array (
                    'key' => 'Spanish (Costa Rica)',
                    'value' => 'es_CR',
                  ),
                  589 => 
                  array (
                    'key' => 'Spanish (Cuba)',
                    'value' => 'es_CU',
                  ),
                  590 => 
                  array (
                    'key' => 'Spanish (Dominican Republic)',
                    'value' => 'es_DO',
                  ),
                  591 => 
                  array (
                    'key' => 'Spanish (Ecuador)',
                    'value' => 'es_EC',
                  ),
                  592 => 
                  array (
                    'key' => 'Spanish (El Salvador)',
                    'value' => 'es_SV',
                  ),
                  593 => 
                  array (
                    'key' => 'Spanish (Equatorial Guinea)',
                    'value' => 'es_GQ',
                  ),
                  594 => 
                  array (
                    'key' => 'Spanish (Guatemala)',
                    'value' => 'es_GT',
                  ),
                  595 => 
                  array (
                    'key' => 'Spanish (Honduras)',
                    'value' => 'es_HN',
                  ),
                  596 => 
                  array (
                    'key' => 'Spanish (Latin America)',
                    'value' => 'es_419',
                  ),
                  597 => 
                  array (
                    'key' => 'Spanish (Mexico)',
                    'value' => 'es_MX',
                  ),
                  598 => 
                  array (
                    'key' => 'Spanish (Nicaragua)',
                    'value' => 'es_NI',
                  ),
                  599 => 
                  array (
                    'key' => 'Spanish (Panama)',
                    'value' => 'es_PA',
                  ),
                  600 => 
                  array (
                    'key' => 'Spanish (Paraguay)',
                    'value' => 'es_PY',
                  ),
                  601 => 
                  array (
                    'key' => 'Spanish (Peru)',
                    'value' => 'es_PE',
                  ),
                  602 => 
                  array (
                    'key' => 'Spanish (Philippines)',
                    'value' => 'es_PH',
                  ),
                  603 => 
                  array (
                    'key' => 'Spanish (Puerto Rico)',
                    'value' => 'es_PR',
                  ),
                  604 => 
                  array (
                    'key' => 'Spanish (Spain)',
                    'value' => 'es_ES',
                  ),
                  605 => 
                  array (
                    'key' => 'Spanish (United States)',
                    'value' => 'es_US',
                  ),
                  606 => 
                  array (
                    'key' => 'Spanish (Uruguay)',
                    'value' => 'es_UY',
                  ),
                  607 => 
                  array (
                    'key' => 'Spanish (Venezuela)',
                    'value' => 'es_VE',
                  ),
                  608 => 
                  array (
                    'key' => 'Standard Moroccan Tamazight',
                    'value' => 'zgh',
                  ),
                  609 => 
                  array (
                    'key' => 'Standard Moroccan Tamazight (Morocco)',
                    'value' => 'zgh_MA',
                  ),
                  610 => 
                  array (
                    'key' => 'Swahili',
                    'value' => 'sw',
                  ),
                  611 => 
                  array (
                    'key' => 'Swahili (Congo - Kinshasa)',
                    'value' => 'sw_CD',
                  ),
                  612 => 
                  array (
                    'key' => 'Swahili (Kenya)',
                    'value' => 'sw_KE',
                  ),
                  613 => 
                  array (
                    'key' => 'Swahili (Tanzania)',
                    'value' => 'sw_TZ',
                  ),
                  614 => 
                  array (
                    'key' => 'Swahili (Uganda)',
                    'value' => 'sw_UG',
                  ),
                  615 => 
                  array (
                    'key' => 'Swedish',
                    'value' => 'sv',
                  ),
                  616 => 
                  array (
                    'key' => 'Swedish (Finland)',
                    'value' => 'sv_FI',
                  ),
                  617 => 
                  array (
                    'key' => 'Swedish (Sweden)',
                    'value' => 'sv_SE',
                  ),
                  618 => 
                  array (
                    'key' => 'Swedish (Åland Islands)',
                    'value' => 'sv_AX',
                  ),
                  619 => 
                  array (
                    'key' => 'Swiss German',
                    'value' => 'gsw',
                  ),
                  620 => 
                  array (
                    'key' => 'Swiss German (France)',
                    'value' => 'gsw_FR',
                  ),
                  621 => 
                  array (
                    'key' => 'Swiss German (Liechtenstein)',
                    'value' => 'gsw_LI',
                  ),
                  622 => 
                  array (
                    'key' => 'Swiss German (Switzerland)',
                    'value' => 'gsw_CH',
                  ),
                  623 => 
                  array (
                    'key' => 'Tachelhit',
                    'value' => 'shi',
                  ),
                  624 => 
                  array (
                    'key' => 'Tachelhit',
                    'value' => 'shi_Latn',
                  ),
                  625 => 
                  array (
                    'key' => 'Tachelhit',
                    'value' => 'shi_Tfng',
                  ),
                  626 => 
                  array (
                    'key' => 'Tachelhit (Morocco)',
                    'value' => 'shi_Latn_MA',
                  ),
                  627 => 
                  array (
                    'key' => 'Tachelhit (Morocco)',
                    'value' => 'shi_Tfng_MA',
                  ),
                  628 => 
                  array (
                    'key' => 'Taita',
                    'value' => 'dav',
                  ),
                  629 => 
                  array (
                    'key' => 'Taita (Kenya)',
                    'value' => 'dav_KE',
                  ),
                  630 => 
                  array (
                    'key' => 'Tamil',
                    'value' => 'ta',
                  ),
                  631 => 
                  array (
                    'key' => 'Tamil (India)',
                    'value' => 'ta_IN',
                  ),
                  632 => 
                  array (
                    'key' => 'Tamil (Malaysia)',
                    'value' => 'ta_MY',
                  ),
                  633 => 
                  array (
                    'key' => 'Tamil (Singapore)',
                    'value' => 'ta_SG',
                  ),
                  634 => 
                  array (
                    'key' => 'Tamil (Sri Lanka)',
                    'value' => 'ta_LK',
                  ),
                  635 => 
                  array (
                    'key' => 'Tasawaq',
                    'value' => 'twq',
                  ),
                  636 => 
                  array (
                    'key' => 'Tasawaq (Niger)',
                    'value' => 'twq_NE',
                  ),
                  637 => 
                  array (
                    'key' => 'Telugu',
                    'value' => 'te',
                  ),
                  638 => 
                  array (
                    'key' => 'Telugu (India)',
                    'value' => 'te_IN',
                  ),
                  639 => 
                  array (
                    'key' => 'Teso',
                    'value' => 'teo',
                  ),
                  640 => 
                  array (
                    'key' => 'Teso (Kenya)',
                    'value' => 'teo_KE',
                  ),
                  641 => 
                  array (
                    'key' => 'Teso (Uganda)',
                    'value' => 'teo_UG',
                  ),
                  642 => 
                  array (
                    'key' => 'Thai',
                    'value' => 'th',
                  ),
                  643 => 
                  array (
                    'key' => 'Thai (Thailand)',
                    'value' => 'th_TH',
                  ),
                  644 => 
                  array (
                    'key' => 'Tibetan',
                    'value' => 'bo',
                  ),
                  645 => 
                  array (
                    'key' => 'Tibetan (China)',
                    'value' => 'bo_CN',
                  ),
                  646 => 
                  array (
                    'key' => 'Tibetan (India)',
                    'value' => 'bo_IN',
                  ),
                  647 => 
                  array (
                    'key' => 'Tigrinya',
                    'value' => 'ti',
                  ),
                  648 => 
                  array (
                    'key' => 'Tigrinya (Eritrea)',
                    'value' => 'ti_ER',
                  ),
                  649 => 
                  array (
                    'key' => 'Tigrinya (Ethiopia)',
                    'value' => 'ti_ET',
                  ),
                  650 => 
                  array (
                    'key' => 'Tongan',
                    'value' => 'to',
                  ),
                  651 => 
                  array (
                    'key' => 'Tongan (Tonga)',
                    'value' => 'to_TO',
                  ),
                  652 => 
                  array (
                    'key' => 'Turkish',
                    'value' => 'tr',
                  ),
                  653 => 
                  array (
                    'key' => 'Turkish (Cyprus)',
                    'value' => 'tr_CY',
                  ),
                  654 => 
                  array (
                    'key' => 'Turkish (Turkey)',
                    'value' => 'tr_TR',
                  ),
                  655 => 
                  array (
                    'key' => 'Ukrainian',
                    'value' => 'uk',
                  ),
                  656 => 
                  array (
                    'key' => 'Ukrainian (Ukraine)',
                    'value' => 'uk_UA',
                  ),
                  657 => 
                  array (
                    'key' => 'Upper Sorbian',
                    'value' => 'hsb',
                  ),
                  658 => 
                  array (
                    'key' => 'Upper Sorbian (Germany)',
                    'value' => 'hsb_DE',
                  ),
                  659 => 
                  array (
                    'key' => 'Urdu',
                    'value' => 'ur',
                  ),
                  660 => 
                  array (
                    'key' => 'Urdu (India)',
                    'value' => 'ur_IN',
                  ),
                  661 => 
                  array (
                    'key' => 'Urdu (Pakistan)',
                    'value' => 'ur_PK',
                  ),
                  662 => 
                  array (
                    'key' => 'Uyghur',
                    'value' => 'ug',
                  ),
                  663 => 
                  array (
                    'key' => 'Uyghur (China)',
                    'value' => 'ug_CN',
                  ),
                  664 => 
                  array (
                    'key' => 'Uzbek',
                    'value' => 'uz_Latn',
                  ),
                  665 => 
                  array (
                    'key' => 'Uzbek',
                    'value' => 'uz',
                  ),
                  666 => 
                  array (
                    'key' => 'Uzbek',
                    'value' => 'uz_Arab',
                  ),
                  667 => 
                  array (
                    'key' => 'Uzbek',
                    'value' => 'uz_Cyrl',
                  ),
                  668 => 
                  array (
                    'key' => 'Uzbek (Afghanistan)',
                    'value' => 'uz_Arab_AF',
                  ),
                  669 => 
                  array (
                    'key' => 'Uzbek (Uzbekistan)',
                    'value' => 'uz_Cyrl_UZ',
                  ),
                  670 => 
                  array (
                    'key' => 'Uzbek (Uzbekistan)',
                    'value' => 'uz_Latn_UZ',
                  ),
                  671 => 
                  array (
                    'key' => 'Vai',
                    'value' => 'vai_Latn',
                  ),
                  672 => 
                  array (
                    'key' => 'Vai',
                    'value' => 'vai',
                  ),
                  673 => 
                  array (
                    'key' => 'Vai',
                    'value' => 'vai_Vaii',
                  ),
                  674 => 
                  array (
                    'key' => 'Vai (Liberia)',
                    'value' => 'vai_Vaii_LR',
                  ),
                  675 => 
                  array (
                    'key' => 'Vai (Liberia)',
                    'value' => 'vai_Latn_LR',
                  ),
                  676 => 
                  array (
                    'key' => 'Vietnamese',
                    'value' => 'vi',
                  ),
                  677 => 
                  array (
                    'key' => 'Vietnamese (Vietnam)',
                    'value' => 'vi_VN',
                  ),
                  678 => 
                  array (
                    'key' => 'Vunjo',
                    'value' => 'vun',
                  ),
                  679 => 
                  array (
                    'key' => 'Vunjo (Tanzania)',
                    'value' => 'vun_TZ',
                  ),
                  680 => 
                  array (
                    'key' => 'Walser',
                    'value' => 'wae',
                  ),
                  681 => 
                  array (
                    'key' => 'Walser (Switzerland)',
                    'value' => 'wae_CH',
                  ),
                  682 => 
                  array (
                    'key' => 'Welsh',
                    'value' => 'cy',
                  ),
                  683 => 
                  array (
                    'key' => 'Welsh (United Kingdom)',
                    'value' => 'cy_GB',
                  ),
                  684 => 
                  array (
                    'key' => 'Western Frisian',
                    'value' => 'fy',
                  ),
                  685 => 
                  array (
                    'key' => 'Western Frisian (Netherlands)',
                    'value' => 'fy_NL',
                  ),
                  686 => 
                  array (
                    'key' => 'Yangben',
                    'value' => 'yav',
                  ),
                  687 => 
                  array (
                    'key' => 'Yangben (Cameroon)',
                    'value' => 'yav_CM',
                  ),
                  688 => 
                  array (
                    'key' => 'Yiddish',
                    'value' => 'yi',
                  ),
                  689 => 
                  array (
                    'key' => 'Yiddish (World)',
                    'value' => 'yi_001',
                  ),
                  690 => 
                  array (
                    'key' => 'Yoruba',
                    'value' => 'yo',
                  ),
                  691 => 
                  array (
                    'key' => 'Yoruba (Benin)',
                    'value' => 'yo_BJ',
                  ),
                  692 => 
                  array (
                    'key' => 'Yoruba (Nigeria)',
                    'value' => 'yo_NG',
                  ),
                  693 => 
                  array (
                    'key' => 'Zarma',
                    'value' => 'dje',
                  ),
                  694 => 
                  array (
                    'key' => 'Zarma (Niger)',
                    'value' => 'dje_NE',
                  ),
                  695 => 
                  array (
                    'key' => 'Zulu',
                    'value' => 'zu',
                  ),
                  696 => 
                  array (
                    'key' => 'Zulu (South Africa)',
                    'value' => 'zu_ZA',
                  ),
                ),
                 'width' => '',
                 'defaultValue' => NULL,
                 'optionsProviderClass' => NULL,
                 'optionsProviderData' => NULL,
                 'queryColumnType' => 'varchar',
                 'columnType' => 'varchar',
                 'columnLength' => 190,
                 'phpdocType' => 'string',
                 'dynamicOptions' => false,
                 'name' => 'localeCode',
                 'title' => 'coreshop.order.locale',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => true,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'defaultValueGenerator' => '',
              )),
              6 => 
              CoreShop\Bundle\ShippingBundle\CoreExtension\Carrier::__set_state(array(
                 'fieldtype' => 'coreShopCarrier',
                 'phpdocType' => 'CoreShop\\Component\\Shipping\\Model\\CarrierInterface',
                 'allowEmpty' => false,
                 'options' => NULL,
                 'width' => '',
                 'defaultValue' => NULL,
                 'optionsProviderClass' => NULL,
                 'optionsProviderData' => NULL,
                 'queryColumnType' => 'varchar',
                 'columnType' => 'varchar',
                 'columnLength' => 190,
                 'dynamicOptions' => false,
                 'name' => 'carrier',
                 'title' => 'coreshop.order.carrier',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => true,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'defaultValueGenerator' => '',
              )),
              7 => 
              CoreShop\Bundle\StoreBundle\CoreExtension\Store::__set_state(array(
                 'fieldtype' => 'coreShopStore',
                 'allowEmpty' => false,
                 'options' => NULL,
                 'width' => '',
                 'defaultValue' => NULL,
                 'optionsProviderClass' => NULL,
                 'optionsProviderData' => NULL,
                 'queryColumnType' => 'varchar',
                 'columnType' => 'varchar',
                 'columnLength' => 190,
                 'phpdocType' => 'string',
                 'dynamicOptions' => false,
                 'name' => 'store',
                 'title' => 'coreshop.order.store',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => true,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'defaultValueGenerator' => '',
              )),
              8 => 
              CoreShop\Bundle\PaymentBundle\CoreExtension\PaymentProvider::__set_state(array(
                 'fieldtype' => 'coreShopPaymentProvider',
                 'phpdocType' => 'CoreShop\\Component\\Payment\\Model\\PaymentProvider',
                 'allowEmpty' => false,
                 'options' => NULL,
                 'width' => '',
                 'defaultValue' => NULL,
                 'optionsProviderClass' => NULL,
                 'optionsProviderData' => NULL,
                 'queryColumnType' => 'varchar',
                 'columnType' => 'varchar',
                 'columnLength' => 190,
                 'dynamicOptions' => false,
                 'name' => 'paymentProvider',
                 'title' => 'coreshop.order.payment_provider',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => true,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'defaultValueGenerator' => '',
              )),
              9 => 
              CoreShop\Bundle\PimcoreBundle\CoreExtension\SerializedData::__set_state(array(
                 'fieldtype' => 'coreShopSerializedData',
                 'phpdocType' => NULL,
                 'name' => 'paymentSettings',
                 'title' => 'coreshop.order.payment_settings',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => true,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
              )),
              10 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Textarea::__set_state(array(
                 'fieldtype' => 'textarea',
                 'width' => 350,
                 'height' => '',
                 'maxLength' => NULL,
                 'showCharCount' => NULL,
                 'excludeFromSearchIndex' => false,
                 'queryColumnType' => 'longtext',
                 'columnType' => 'longtext',
                 'phpdocType' => 'string',
                 'name' => 'comment',
                 'title' => 'coreshop.order.comment',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => true,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
              )),
              11 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Objectbricks::__set_state(array(
                 'fieldtype' => 'objectbricks',
                 'phpdocType' => '\\Pimcore\\Model\\DataObject\\Objectbrick',
                 'allowedTypes' => 
                array (
                ),
                 'maxItems' => '',
                 'border' => false,
                 'name' => 'additionalData',
                 'title' => 'coreshop.order.additional_data',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => true,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
              )),
            ),
             'locked' => false,
             'icon' => NULL,
          )),
          1 => 
          Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
             'fieldtype' => 'panel',
             'labelWidth' => 100,
             'layout' => NULL,
             'border' => false,
             'name' => 'status',
             'type' => NULL,
             'region' => NULL,
             'title' => 'coreshop.order.status',
             'width' => NULL,
             'height' => NULL,
             'collapsible' => false,
             'collapsed' => false,
             'bodyStyle' => '',
             'datatype' => 'layout',
             'permissions' => NULL,
             'childs' => 
            array (
              0 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Input::__set_state(array(
                 'fieldtype' => 'input',
                 'width' => NULL,
                 'defaultValue' => NULL,
                 'queryColumnType' => 'varchar',
                 'columnType' => 'varchar',
                 'columnLength' => 190,
                 'phpdocType' => 'string',
                 'regex' => '',
                 'unique' => false,
                 'showCharCount' => NULL,
                 'name' => 'orderState',
                 'title' => 'coreshop.order.order_state',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => true,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'defaultValueGenerator' => '',
              )),
              1 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Input::__set_state(array(
                 'fieldtype' => 'input',
                 'width' => NULL,
                 'defaultValue' => NULL,
                 'queryColumnType' => 'varchar',
                 'columnType' => 'varchar',
                 'columnLength' => 190,
                 'phpdocType' => 'string',
                 'regex' => '',
                 'unique' => false,
                 'showCharCount' => NULL,
                 'name' => 'paymentState',
                 'title' => 'coreshop.order.payment_state',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => true,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'defaultValueGenerator' => '',
              )),
              2 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Input::__set_state(array(
                 'fieldtype' => 'input',
                 'width' => NULL,
                 'defaultValue' => NULL,
                 'queryColumnType' => 'varchar',
                 'columnType' => 'varchar',
                 'columnLength' => 190,
                 'phpdocType' => 'string',
                 'regex' => '',
                 'unique' => false,
                 'showCharCount' => NULL,
                 'name' => 'shippingState',
                 'title' => 'coreshop.order.shipping_state',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => true,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'defaultValueGenerator' => '',
              )),
              3 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Input::__set_state(array(
                 'fieldtype' => 'input',
                 'width' => NULL,
                 'defaultValue' => NULL,
                 'queryColumnType' => 'varchar',
                 'columnType' => 'varchar',
                 'columnLength' => 190,
                 'phpdocType' => 'string',
                 'regex' => '',
                 'unique' => false,
                 'showCharCount' => NULL,
                 'name' => 'invoiceState',
                 'title' => 'coreshop.order.invoice_state',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => true,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'defaultValueGenerator' => '',
              )),
            ),
             'locked' => false,
             'icon' => NULL,
          )),
          2 => 
          Pimcore\Model\DataObject\ClassDefinition\Layout\Tabpanel::__set_state(array(
             'fieldtype' => 'tabpanel',
             'border' => false,
             'tabPosition' => 'top',
             'name' => 'numbers',
             'type' => NULL,
             'region' => NULL,
             'title' => 'coreshop.order.numbers',
             'width' => NULL,
             'height' => NULL,
             'collapsible' => false,
             'collapsed' => false,
             'bodyStyle' => '',
             'datatype' => 'layout',
             'permissions' => NULL,
             'childs' => 
            array (
              0 => 
              Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
                 'fieldtype' => 'panel',
                 'labelWidth' => 100,
                 'layout' => NULL,
                 'border' => false,
                 'name' => 'numbers_store',
                 'type' => NULL,
                 'region' => NULL,
                 'title' => 'coreshop.order.numbers_store',
                 'width' => NULL,
                 'height' => NULL,
                 'collapsible' => false,
                 'collapsed' => false,
                 'bodyStyle' => '',
                 'datatype' => 'layout',
                 'permissions' => NULL,
                 'childs' => 
                array (
                  0 => 
                  CoreShop\Bundle\CurrencyBundle\CoreExtension\Currency::__set_state(array(
                     'fieldtype' => 'coreShopCurrency',
                     'allowEmpty' => false,
                     'options' => NULL,
                     'width' => '',
                     'defaultValue' => NULL,
                     'optionsProviderClass' => NULL,
                     'optionsProviderData' => NULL,
                     'queryColumnType' => 'varchar',
                     'columnType' => 'varchar',
                     'columnLength' => 190,
                     'phpdocType' => 'string',
                     'dynamicOptions' => false,
                     'name' => 'baseCurrency',
                     'title' => 'coreshop.order.base_currency',
                     'tooltip' => '',
                     'mandatory' => false,
                     'noteditable' => true,
                     'index' => false,
                     'locked' => false,
                     'style' => '',
                     'permissions' => NULL,
                     'datatype' => 'data',
                     'relationType' => false,
                     'invisible' => false,
                     'visibleGridView' => false,
                     'visibleSearch' => false,
                     'defaultValueGenerator' => '',
                  )),
                  1 => 
                  Pimcore\Model\DataObject\ClassDefinition\Layout\Fieldset::__set_state(array(
                     'fieldtype' => 'fieldset',
                     'labelWidth' => 100,
                     'name' => 'totals',
                     'type' => NULL,
                     'region' => NULL,
                     'title' => 'coreshop.order.totals',
                     'width' => NULL,
                     'height' => NULL,
                     'collapsible' => false,
                     'collapsed' => false,
                     'bodyStyle' => '',
                     'datatype' => 'layout',
                     'permissions' => NULL,
                     'childs' => 
                    array (
                      0 => 
                      Pimcore\Model\DataObject\ClassDefinition\Data\Numeric::__set_state(array(
                         'fieldtype' => 'numeric',
                         'width' => '',
                         'defaultValue' => NULL,
                         'queryColumnType' => 'double',
                         'columnType' => 'double',
                         'phpdocType' => 'float',
                         'integer' => true,
                         'unsigned' => false,
                         'minValue' => NULL,
                         'maxValue' => NULL,
                         'unique' => false,
                         'decimalSize' => NULL,
                         'decimalPrecision' => NULL,
                         'name' => 'paymentTotal',
                         'title' => 'coreshop.order.payment_total',
                         'tooltip' => '',
                         'mandatory' => false,
                         'noteditable' => true,
                         'index' => false,
                         'locked' => false,
                         'style' => '',
                         'permissions' => NULL,
                         'datatype' => 'data',
                         'relationType' => false,
                         'invisible' => false,
                         'visibleGridView' => false,
                         'visibleSearch' => false,
                         'defaultValueGenerator' => '',
                      )),
                      1 => 
                      Pimcore\Model\DataObject\ClassDefinition\Data\Numeric::__set_state(array(
                         'fieldtype' => 'numeric',
                         'width' => '',
                         'defaultValue' => NULL,
                         'queryColumnType' => 'double',
                         'columnType' => 'double',
                         'phpdocType' => 'float',
                         'integer' => true,
                         'unsigned' => false,
                         'minValue' => NULL,
                         'maxValue' => NULL,
                         'unique' => false,
                         'decimalSize' => NULL,
                         'decimalPrecision' => NULL,
                         'name' => 'paymentTotal',
                         'title' => 'coreshop.order.payment_total',
                         'tooltip' => '',
                         'mandatory' => false,
                         'noteditable' => true,
                         'index' => false,
                         'locked' => false,
                         'style' => '',
                         'permissions' => NULL,
                         'datatype' => 'data',
                         'relationType' => false,
                         'invisible' => false,
                         'visibleGridView' => false,
                         'visibleSearch' => false,
                         'defaultValueGenerator' => '',
                      )),
                      2 => 
                      CoreShop\Bundle\MoneyBundle\CoreExtension\Money::__set_state(array(
                         'fieldtype' => 'coreShopMoney',
                         'width' => '',
                         'defaultValue' => NULL,
                         'phpdocType' => 'int',
                         'minValue' => NULL,
                         'maxValue' => NULL,
                         'name' => 'totalNet',
                         'title' => 'coreshop.order.total_net',
                         'tooltip' => '',
                         'mandatory' => false,
                         'noteditable' => true,
                         'index' => false,
                         'locked' => false,
                         'style' => '',
                         'permissions' => NULL,
                         'datatype' => 'data',
                         'relationType' => false,
                         'invisible' => false,
                         'visibleGridView' => false,
                         'visibleSearch' => false,
                      )),
                      3 => 
                      CoreShop\Bundle\MoneyBundle\CoreExtension\Money::__set_state(array(
                         'fieldtype' => 'coreShopMoney',
                         'width' => '',
                         'defaultValue' => NULL,
                         'phpdocType' => 'int',
                         'minValue' => NULL,
                         'maxValue' => NULL,
                         'name' => 'totalGross',
                         'title' => 'coreshop.order.total_gross',
                         'tooltip' => '',
                         'mandatory' => false,
                         'noteditable' => true,
                         'index' => false,
                         'locked' => false,
                         'style' => '',
                         'permissions' => NULL,
                         'datatype' => 'data',
                         'relationType' => false,
                         'invisible' => false,
                         'visibleGridView' => false,
                         'visibleSearch' => false,
                      )),
                      4 => 
                      CoreShop\Bundle\MoneyBundle\CoreExtension\Money::__set_state(array(
                         'fieldtype' => 'coreShopMoney',
                         'width' => '',
                         'defaultValue' => NULL,
                         'phpdocType' => 'int',
                         'minValue' => NULL,
                         'maxValue' => NULL,
                         'name' => 'subtotalNet',
                         'title' => 'coreshop.order.subtotal_net',
                         'tooltip' => '',
                         'mandatory' => false,
                         'noteditable' => true,
                         'index' => false,
                         'locked' => false,
                         'style' => '',
                         'permissions' => NULL,
                         'datatype' => 'data',
                         'relationType' => false,
                         'invisible' => false,
                         'visibleGridView' => false,
                         'visibleSearch' => false,
                      )),
                      5 => 
                      CoreShop\Bundle\MoneyBundle\CoreExtension\Money::__set_state(array(
                         'fieldtype' => 'coreShopMoney',
                         'width' => '',
                         'defaultValue' => NULL,
                         'phpdocType' => 'int',
                         'minValue' => NULL,
                         'maxValue' => NULL,
                         'name' => 'subtotalGross',
                         'title' => 'coreshop.order.subtotal_gross',
                         'tooltip' => '',
                         'mandatory' => false,
                         'noteditable' => true,
                         'index' => false,
                         'locked' => false,
                         'style' => '',
                         'permissions' => NULL,
                         'datatype' => 'data',
                         'relationType' => false,
                         'invisible' => false,
                         'visibleGridView' => false,
                         'visibleSearch' => false,
                      )),
                    ),
                     'locked' => false,
                  )),
                  2 => 
                  Pimcore\Model\DataObject\ClassDefinition\Layout\Fieldset::__set_state(array(
                     'fieldtype' => 'fieldset',
                     'labelWidth' => 100,
                     'name' => 'shipping',
                     'type' => NULL,
                     'region' => NULL,
                     'title' => 'coreshop.order.shipping',
                     'width' => NULL,
                     'height' => NULL,
                     'collapsible' => false,
                     'collapsed' => false,
                     'bodyStyle' => '',
                     'datatype' => 'layout',
                     'permissions' => NULL,
                     'childs' => 
                    array (
                      0 => 
                      Pimcore\Model\DataObject\ClassDefinition\Data\Numeric::__set_state(array(
                         'fieldtype' => 'numeric',
                         'width' => '',
                         'defaultValue' => NULL,
                         'queryColumnType' => 'double',
                         'columnType' => 'double',
                         'phpdocType' => 'float',
                         'integer' => false,
                         'unsigned' => false,
                         'minValue' => NULL,
                         'maxValue' => NULL,
                         'unique' => NULL,
                         'decimalSize' => NULL,
                         'decimalPrecision' => NULL,
                         'name' => 'shippingTaxRate',
                         'title' => 'coreshop.order.shipping_tax_rate',
                         'tooltip' => '',
                         'mandatory' => false,
                         'noteditable' => true,
                         'index' => false,
                         'locked' => false,
                         'style' => '',
                         'permissions' => NULL,
                         'datatype' => 'data',
                         'relationType' => false,
                         'invisible' => false,
                         'visibleGridView' => false,
                         'visibleSearch' => false,
                         'defaultValueGenerator' => '',
                      )),
                    ),
                     'locked' => false,
                  )),
                  3 => 
                  Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
                     'fieldtype' => 'panel',
                     'labelWidth' => 100,
                     'layout' => NULL,
                     'border' => false,
                     'name' => 'taxes',
                     'type' => NULL,
                     'region' => NULL,
                     'title' => 'coreshop.order.taxes',
                     'width' => NULL,
                     'height' => NULL,
                     'collapsible' => false,
                     'collapsed' => false,
                     'bodyStyle' => '',
                     'datatype' => 'layout',
                     'permissions' => NULL,
                     'childs' => 
                    array (
                      0 => 
                      Pimcore\Model\DataObject\ClassDefinition\Data\Fieldcollections::__set_state(array(
                         'fieldtype' => 'fieldcollections',
                         'phpdocType' => '\\Pimcore\\Model\\DataObject\\Fieldcollection',
                         'allowedTypes' => 
                        array (
                          0 => 'CoreShopTaxItem',
                        ),
                         'lazyLoading' => true,
                         'maxItems' => '',
                         'disallowAddRemove' => false,
                         'disallowReorder' => false,
                         'collapsed' => false,
                         'collapsible' => false,
                         'border' => false,
                         'name' => 'taxes',
                         'title' => 'coreshop.order.taxes',
                         'tooltip' => '',
                         'mandatory' => false,
                         'noteditable' => false,
                         'index' => false,
                         'locked' => false,
                         'style' => '',
                         'permissions' => NULL,
                         'datatype' => 'data',
                         'relationType' => false,
                         'invisible' => false,
                         'visibleGridView' => false,
                         'visibleSearch' => false,
                      )),
                    ),
                     'locked' => false,
                     'icon' => NULL,
                  )),
                  4 => 
                  Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
                     'fieldtype' => 'panel',
                     'labelWidth' => 100,
                     'layout' => NULL,
                     'border' => false,
                     'name' => 'adjustments',
                     'type' => NULL,
                     'region' => NULL,
                     'title' => 'coreshop.order.adjustments',
                     'width' => NULL,
                     'height' => NULL,
                     'collapsible' => false,
                     'collapsed' => false,
                     'bodyStyle' => '',
                     'datatype' => 'layout',
                     'permissions' => NULL,
                     'childs' => 
                    array (
                      0 => 
                      CoreShop\Bundle\MoneyBundle\CoreExtension\Money::__set_state(array(
                         'fieldtype' => 'coreShopMoney',
                         'width' => '',
                         'defaultValue' => NULL,
                         'phpdocType' => 'int',
                         'minValue' => NULL,
                         'maxValue' => NULL,
                         'name' => 'pimcoreAdjustmentTotalNet',
                         'title' => 'coreshop.order.adjustments_total_net',
                         'tooltip' => '',
                         'mandatory' => false,
                         'noteditable' => true,
                         'index' => false,
                         'locked' => false,
                         'style' => '',
                         'permissions' => NULL,
                         'datatype' => 'data',
                         'relationType' => false,
                         'invisible' => false,
                         'visibleGridView' => false,
                         'visibleSearch' => false,
                      )),
                      1 => 
                      CoreShop\Bundle\MoneyBundle\CoreExtension\Money::__set_state(array(
                         'fieldtype' => 'coreShopMoney',
                         'width' => '',
                         'defaultValue' => NULL,
                         'phpdocType' => 'int',
                         'minValue' => NULL,
                         'maxValue' => NULL,
                         'name' => 'pimcoreAdjustmentTotalGross',
                         'title' => 'coreshop.order.adjustments_total_gross',
                         'tooltip' => '',
                         'mandatory' => false,
                         'noteditable' => true,
                         'index' => false,
                         'locked' => false,
                         'style' => '',
                         'permissions' => NULL,
                         'datatype' => 'data',
                         'relationType' => false,
                         'invisible' => false,
                         'visibleGridView' => false,
                         'visibleSearch' => false,
                      )),
                      2 => 
                      Pimcore\Model\DataObject\ClassDefinition\Data\Fieldcollections::__set_state(array(
                         'fieldtype' => 'fieldcollections',
                         'phpdocType' => '\\Pimcore\\Model\\DataObject\\Fieldcollection',
                         'allowedTypes' => 
                        array (
                          0 => 'CoreShopAdjustment',
                        ),
                         'lazyLoading' => true,
                         'maxItems' => '',
                         'disallowAddRemove' => false,
                         'disallowReorder' => false,
                         'collapsed' => false,
                         'collapsible' => false,
                         'border' => false,
                         'name' => 'adjustmentItems',
                         'title' => 'coreshop.order.adjustments',
                         'tooltip' => '',
                         'mandatory' => false,
                         'noteditable' => true,
                         'index' => false,
                         'locked' => false,
                         'style' => '',
                         'permissions' => NULL,
                         'datatype' => 'data',
                         'relationType' => false,
                         'invisible' => false,
                         'visibleGridView' => false,
                         'visibleSearch' => false,
                      )),
                    ),
                     'locked' => false,
                     'icon' => NULL,
                  )),
                ),
                 'locked' => false,
                 'icon' => NULL,
              )),
              1 => 
              Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
                 'fieldtype' => 'panel',
                 'labelWidth' => 100,
                 'layout' => NULL,
                 'border' => false,
                 'name' => 'numbers_converted',
                 'type' => NULL,
                 'region' => NULL,
                 'title' => 'coreshop.order.numbers_converted',
                 'width' => NULL,
                 'height' => NULL,
                 'collapsible' => false,
                 'collapsed' => false,
                 'bodyStyle' => '',
                 'datatype' => 'layout',
                 'permissions' => NULL,
                 'childs' => 
                array (
                  0 => 
                  CoreShop\Bundle\CurrencyBundle\CoreExtension\Currency::__set_state(array(
                     'fieldtype' => 'coreShopCurrency',
                     'allowEmpty' => false,
                     'options' => NULL,
                     'width' => '',
                     'defaultValue' => NULL,
                     'optionsProviderClass' => NULL,
                     'optionsProviderData' => NULL,
                     'queryColumnType' => 'varchar',
                     'columnType' => 'varchar',
                     'columnLength' => 190,
                     'phpdocType' => 'string',
                     'dynamicOptions' => false,
                     'name' => 'currency',
                     'title' => 'coreshop.order.currency',
                     'tooltip' => '',
                     'mandatory' => false,
                     'noteditable' => true,
                     'index' => false,
                     'locked' => false,
                     'style' => '',
                     'permissions' => NULL,
                     'datatype' => 'data',
                     'relationType' => false,
                     'invisible' => false,
                     'visibleGridView' => false,
                     'visibleSearch' => false,
                     'defaultValueGenerator' => '',
                  )),
                  1 => 
                  Pimcore\Model\DataObject\ClassDefinition\Layout\Fieldset::__set_state(array(
                     'fieldtype' => 'fieldset',
                     'labelWidth' => 100,
                     'name' => 'totals',
                     'type' => NULL,
                     'region' => NULL,
                     'title' => 'coreshop.order.converted_totals',
                     'width' => NULL,
                     'height' => NULL,
                     'collapsible' => false,
                     'collapsed' => false,
                     'bodyStyle' => '',
                     'datatype' => 'layout',
                     'permissions' => NULL,
                     'childs' => 
                    array (
                      0 => 
                      Pimcore\Model\DataObject\ClassDefinition\Data\Numeric::__set_state(array(
                         'fieldtype' => 'numeric',
                         'width' => '',
                         'defaultValue' => NULL,
                         'queryColumnType' => 'double',
                         'columnType' => 'double',
                         'phpdocType' => 'float',
                         'integer' => true,
                         'unsigned' => false,
                         'minValue' => NULL,
                         'maxValue' => NULL,
                         'unique' => false,
                         'decimalSize' => NULL,
                         'decimalPrecision' => NULL,
                         'name' => 'convertedPaymentTotal',
                         'title' => 'coreshop.order.converted_payment_total',
                         'tooltip' => '',
                         'mandatory' => false,
                         'noteditable' => true,
                         'index' => false,
                         'locked' => false,
                         'style' => '',
                         'permissions' => NULL,
                         'datatype' => 'data',
                         'relationType' => false,
                         'invisible' => false,
                         'visibleGridView' => false,
                         'visibleSearch' => false,
                         'defaultValueGenerator' => '',
                      )),
                      1 => 
                      Pimcore\Model\DataObject\ClassDefinition\Data\Numeric::__set_state(array(
                         'fieldtype' => 'numeric',
                         'width' => '',
                         'defaultValue' => NULL,
                         'queryColumnType' => 'double',
                         'columnType' => 'double',
                         'phpdocType' => 'float',
                         'integer' => true,
                         'unsigned' => false,
                         'minValue' => NULL,
                         'maxValue' => NULL,
                         'unique' => false,
                         'decimalSize' => NULL,
                         'decimalPrecision' => NULL,
                         'name' => 'convertedPaymentTotal',
                         'title' => 'coreshop.order.converted_payment_total',
                         'tooltip' => '',
                         'mandatory' => false,
                         'noteditable' => true,
                         'index' => false,
                         'locked' => false,
                         'style' => '',
                         'permissions' => NULL,
                         'datatype' => 'data',
                         'relationType' => false,
                         'invisible' => false,
                         'visibleGridView' => false,
                         'visibleSearch' => false,
                         'defaultValueGenerator' => '',
                      )),
                      2 => 
                      CoreShop\Bundle\MoneyBundle\CoreExtension\Money::__set_state(array(
                         'fieldtype' => 'coreShopMoney',
                         'width' => '',
                         'defaultValue' => NULL,
                         'phpdocType' => 'int',
                         'minValue' => NULL,
                         'maxValue' => NULL,
                         'name' => 'convertedTotalNet',
                         'title' => 'coreshop.order.converted_total_net',
                         'tooltip' => '',
                         'mandatory' => false,
                         'noteditable' => true,
                         'index' => false,
                         'locked' => false,
                         'style' => '',
                         'permissions' => NULL,
                         'datatype' => 'data',
                         'relationType' => false,
                         'invisible' => false,
                         'visibleGridView' => false,
                         'visibleSearch' => false,
                      )),
                      3 => 
                      CoreShop\Bundle\MoneyBundle\CoreExtension\Money::__set_state(array(
                         'fieldtype' => 'coreShopMoney',
                         'width' => '',
                         'defaultValue' => NULL,
                         'phpdocType' => 'int',
                         'minValue' => NULL,
                         'maxValue' => NULL,
                         'name' => 'convertedTotalGross',
                         'title' => 'coreshop.order.converted_total_gross',
                         'tooltip' => '',
                         'mandatory' => false,
                         'noteditable' => true,
                         'index' => false,
                         'locked' => false,
                         'style' => '',
                         'permissions' => NULL,
                         'datatype' => 'data',
                         'relationType' => false,
                         'invisible' => false,
                         'visibleGridView' => false,
                         'visibleSearch' => false,
                      )),
                      4 => 
                      CoreShop\Bundle\MoneyBundle\CoreExtension\Money::__set_state(array(
                         'fieldtype' => 'coreShopMoney',
                         'width' => '',
                         'defaultValue' => NULL,
                         'phpdocType' => 'int',
                         'minValue' => NULL,
                         'maxValue' => NULL,
                         'name' => 'convertedSubtotalNet',
                         'title' => 'coreshop.order.converted_subtotal_net',
                         'tooltip' => '',
                         'mandatory' => false,
                         'noteditable' => true,
                         'index' => false,
                         'locked' => false,
                         'style' => '',
                         'permissions' => NULL,
                         'datatype' => 'data',
                         'relationType' => false,
                         'invisible' => false,
                         'visibleGridView' => false,
                         'visibleSearch' => false,
                      )),
                      5 => 
                      CoreShop\Bundle\MoneyBundle\CoreExtension\Money::__set_state(array(
                         'fieldtype' => 'coreShopMoney',
                         'width' => '',
                         'defaultValue' => NULL,
                         'phpdocType' => 'int',
                         'minValue' => NULL,
                         'maxValue' => NULL,
                         'name' => 'convertedSubtotalGross',
                         'title' => 'coreshop.order.converted_subtotal_gross',
                         'tooltip' => '',
                         'mandatory' => false,
                         'noteditable' => true,
                         'index' => false,
                         'locked' => false,
                         'style' => '',
                         'permissions' => NULL,
                         'datatype' => 'data',
                         'relationType' => false,
                         'invisible' => false,
                         'visibleGridView' => false,
                         'visibleSearch' => false,
                      )),
                    ),
                     'locked' => false,
                  )),
                  2 => 
                  Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
                     'fieldtype' => 'panel',
                     'labelWidth' => 100,
                     'layout' => NULL,
                     'border' => false,
                     'name' => 'taxes_converted',
                     'type' => NULL,
                     'region' => NULL,
                     'title' => 'coreshop.order.converted_taxes',
                     'width' => NULL,
                     'height' => NULL,
                     'collapsible' => false,
                     'collapsed' => false,
                     'bodyStyle' => '',
                     'datatype' => 'layout',
                     'permissions' => NULL,
                     'childs' => 
                    array (
                      0 => 
                      Pimcore\Model\DataObject\ClassDefinition\Data\Fieldcollections::__set_state(array(
                         'fieldtype' => 'fieldcollections',
                         'phpdocType' => '\\Pimcore\\Model\\DataObject\\Fieldcollection',
                         'allowedTypes' => 
                        array (
                          0 => 'CoreShopTaxItem',
                        ),
                         'lazyLoading' => true,
                         'maxItems' => '',
                         'disallowAddRemove' => false,
                         'disallowReorder' => false,
                         'collapsed' => false,
                         'collapsible' => false,
                         'border' => false,
                         'name' => 'convertedTaxes',
                         'title' => 'coreshop.order.converted_taxes',
                         'tooltip' => '',
                         'mandatory' => false,
                         'noteditable' => false,
                         'index' => false,
                         'locked' => false,
                         'style' => '',
                         'permissions' => NULL,
                         'datatype' => 'data',
                         'relationType' => false,
                         'invisible' => false,
                         'visibleGridView' => false,
                         'visibleSearch' => false,
                      )),
                    ),
                     'locked' => false,
                     'icon' => NULL,
                  )),
                  3 => 
                  Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
                     'fieldtype' => 'panel',
                     'labelWidth' => 100,
                     'layout' => NULL,
                     'border' => false,
                     'name' => 'adjustments_converted',
                     'type' => NULL,
                     'region' => NULL,
                     'title' => 'coreshop.order.converted_adjustments',
                     'width' => NULL,
                     'height' => NULL,
                     'collapsible' => false,
                     'collapsed' => false,
                     'bodyStyle' => '',
                     'datatype' => 'layout',
                     'permissions' => NULL,
                     'childs' => 
                    array (
                      0 => 
                      CoreShop\Bundle\MoneyBundle\CoreExtension\Money::__set_state(array(
                         'fieldtype' => 'coreShopMoney',
                         'width' => '',
                         'defaultValue' => NULL,
                         'phpdocType' => 'int',
                         'minValue' => NULL,
                         'maxValue' => NULL,
                         'name' => 'convertedPimcoreAdjustmentTotalNet',
                         'title' => 'coreshop.order.converted_adjustments_total_net',
                         'tooltip' => '',
                         'mandatory' => false,
                         'noteditable' => true,
                         'index' => false,
                         'locked' => false,
                         'style' => '',
                         'permissions' => NULL,
                         'datatype' => 'data',
                         'relationType' => false,
                         'invisible' => false,
                         'visibleGridView' => false,
                         'visibleSearch' => false,
                      )),
                      1 => 
                      CoreShop\Bundle\MoneyBundle\CoreExtension\Money::__set_state(array(
                         'fieldtype' => 'coreShopMoney',
                         'width' => '',
                         'defaultValue' => NULL,
                         'phpdocType' => 'int',
                         'minValue' => NULL,
                         'maxValue' => NULL,
                         'name' => 'convertedPimcoreAdjustmentTotalGross',
                         'title' => 'coreshop.order.converted_adjustments_total_gross',
                         'tooltip' => '',
                         'mandatory' => false,
                         'noteditable' => true,
                         'index' => false,
                         'locked' => false,
                         'style' => '',
                         'permissions' => NULL,
                         'datatype' => 'data',
                         'relationType' => false,
                         'invisible' => false,
                         'visibleGridView' => false,
                         'visibleSearch' => false,
                      )),
                      2 => 
                      Pimcore\Model\DataObject\ClassDefinition\Data\Fieldcollections::__set_state(array(
                         'fieldtype' => 'fieldcollections',
                         'phpdocType' => '\\Pimcore\\Model\\DataObject\\Fieldcollection',
                         'allowedTypes' => 
                        array (
                          0 => 'CoreShopAdjustment',
                        ),
                         'lazyLoading' => true,
                         'maxItems' => '',
                         'disallowAddRemove' => false,
                         'disallowReorder' => false,
                         'collapsed' => false,
                         'collapsible' => false,
                         'border' => false,
                         'name' => 'convertedAdjustmentItems',
                         'title' => 'coreshop.order.converted_adjustments',
                         'tooltip' => '',
                         'mandatory' => false,
                         'noteditable' => true,
                         'index' => false,
                         'locked' => false,
                         'style' => '',
                         'permissions' => NULL,
                         'datatype' => 'data',
                         'relationType' => false,
                         'invisible' => false,
                         'visibleGridView' => false,
                         'visibleSearch' => false,
                      )),
                    ),
                     'locked' => false,
                     'icon' => NULL,
                  )),
                ),
                 'locked' => false,
                 'icon' => NULL,
              )),
              2 => 
              Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
                 'fieldtype' => 'panel',
                 'labelWidth' => 100,
                 'layout' => NULL,
                 'border' => false,
                 'name' => 'other',
                 'type' => NULL,
                 'region' => NULL,
                 'title' => 'coreshop.order.other',
                 'width' => NULL,
                 'height' => NULL,
                 'collapsible' => false,
                 'collapsed' => false,
                 'bodyStyle' => '',
                 'datatype' => 'layout',
                 'permissions' => NULL,
                 'childs' => 
                array (
                  0 => 
                  Pimcore\Model\DataObject\ClassDefinition\Layout\Fieldset::__set_state(array(
                     'fieldtype' => 'fieldset',
                     'labelWidth' => 100,
                     'name' => 'weight',
                     'type' => NULL,
                     'region' => NULL,
                     'title' => 'coreshop.order.weight',
                     'width' => NULL,
                     'height' => NULL,
                     'collapsible' => false,
                     'collapsed' => false,
                     'bodyStyle' => '',
                     'datatype' => 'layout',
                     'permissions' => NULL,
                     'childs' => 
                    array (
                      0 => 
                      Pimcore\Model\DataObject\ClassDefinition\Data\Numeric::__set_state(array(
                         'fieldtype' => 'numeric',
                         'width' => '',
                         'defaultValue' => NULL,
                         'queryColumnType' => 'double',
                         'columnType' => 'double',
                         'phpdocType' => 'float',
                         'integer' => false,
                         'unsigned' => false,
                         'minValue' => NULL,
                         'maxValue' => NULL,
                         'unique' => NULL,
                         'decimalSize' => NULL,
                         'decimalPrecision' => NULL,
                         'name' => 'weight',
                         'title' => 'coreshop.order.weight',
                         'tooltip' => '',
                         'mandatory' => false,
                         'noteditable' => false,
                         'index' => false,
                         'locked' => false,
                         'style' => '',
                         'permissions' => NULL,
                         'datatype' => 'data',
                         'relationType' => false,
                         'invisible' => false,
                         'visibleGridView' => false,
                         'visibleSearch' => false,
                         'defaultValueGenerator' => '',
                      )),
                    ),
                     'locked' => false,
                  )),
                  1 => 
                  Pimcore\Model\DataObject\ClassDefinition\Layout\Fieldset::__set_state(array(
                     'fieldtype' => 'fieldset',
                     'labelWidth' => 100,
                     'name' => 'price_rules',
                     'type' => NULL,
                     'region' => NULL,
                     'title' => 'coreshop.order.price_rules',
                     'width' => NULL,
                     'height' => NULL,
                     'collapsible' => false,
                     'collapsed' => false,
                     'bodyStyle' => '',
                     'datatype' => 'layout',
                     'permissions' => NULL,
                     'childs' => 
                    array (
                      0 => 
                      Pimcore\Model\DataObject\ClassDefinition\Data\Fieldcollections::__set_state(array(
                         'fieldtype' => 'fieldcollections',
                         'phpdocType' => '\\Pimcore\\Model\\DataObject\\Fieldcollection',
                         'allowedTypes' => 
                        array (
                          0 => 'CoreShopProposalCartPriceRuleItem',
                        ),
                         'lazyLoading' => true,
                         'maxItems' => '',
                         'disallowAddRemove' => false,
                         'disallowReorder' => false,
                         'collapsed' => false,
                         'collapsible' => false,
                         'border' => false,
                         'name' => 'priceRuleItems',
                         'title' => 'coreshop.order.price_rules',
                         'tooltip' => '',
                         'mandatory' => false,
                         'noteditable' => true,
                         'index' => false,
                         'locked' => false,
                         'style' => '',
                         'permissions' => NULL,
                         'datatype' => 'data',
                         'relationType' => false,
                         'invisible' => false,
                         'visibleGridView' => false,
                         'visibleSearch' => false,
                      )),
                    ),
                     'locked' => false,
                  )),
                ),
                 'locked' => false,
                 'icon' => NULL,
              )),
            ),
             'locked' => false,
          )),
          3 => 
          Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
             'fieldtype' => 'panel',
             'labelWidth' => 100,
             'layout' => NULL,
             'border' => false,
             'name' => 'items',
             'type' => NULL,
             'region' => NULL,
             'title' => 'coreshop.order.items',
             'width' => NULL,
             'height' => NULL,
             'collapsible' => false,
             'collapsed' => false,
             'bodyStyle' => '',
             'datatype' => 'layout',
             'permissions' => NULL,
             'childs' => 
            array (
              0 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\ManyToManyRelation::__set_state(array(
                 'fieldtype' => 'manyToManyRelation',
                 'width' => '',
                 'height' => '',
                 'maxItems' => '',
                 'assetUploadPath' => '',
                 'queryColumnType' => 'text',
                 'phpdocType' => 'array',
                 'relationType' => true,
                 'objectsAllowed' => true,
                 'assetsAllowed' => false,
                 'assetTypes' => 
                array (
                ),
                 'documentsAllowed' => false,
                 'documentTypes' => 
                array (
                ),
                 'classes' => 
                array (
                  0 => 
                  array (
                    'classes' => 'CoreShopOrderItem',
                  ),
                ),
                 'pathFormatterClass' => '',
                 'name' => 'items',
                 'title' => 'coreshop.order.items',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => true,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
              )),
              1 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Checkbox::__set_state(array(
                 'fieldtype' => 'checkbox',
                 'defaultValue' => 0,
                 'queryColumnType' => 'tinyint(1)',
                 'columnType' => 'tinyint(1)',
                 'phpdocType' => 'boolean',
                 'name' => 'needsRecalculation',
                 'title' => 'coreshop.order.needs_recalculation',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => true,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'relationType' => false,
                 'invisible' => true,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'defaultValueGenerator' => '',
              )),
            ),
             'locked' => false,
             'icon' => NULL,
          )),
          4 => 
          Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
             'fieldtype' => 'panel',
             'labelWidth' => 100,
             'layout' => NULL,
             'border' => false,
             'name' => 'customer',
             'type' => NULL,
             'region' => NULL,
             'title' => 'coreshop.order.customer',
             'width' => NULL,
             'height' => NULL,
             'collapsible' => false,
             'collapsed' => false,
             'bodyStyle' => '',
             'datatype' => 'layout',
             'permissions' => NULL,
             'childs' => 
            array (
              0 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\ManyToOneRelation::__set_state(array(
                 'fieldtype' => 'manyToOneRelation',
                 'width' => '',
                 'assetUploadPath' => '',
                 'relationType' => true,
                 'queryColumnType' => 
                array (
                  'id' => 'int(11)',
                  'type' => 'enum(\'document\',\'asset\',\'object\')',
                ),
                 'phpdocType' => '\\Pimcore\\Model\\Document\\Page | \\Pimcore\\Model\\Document\\Snippet | \\Pimcore\\Model\\Document | \\Pimcore\\Model\\Asset | \\Pimcore\\Model\\DataObject\\AbstractObject',
                 'objectsAllowed' => true,
                 'assetsAllowed' => false,
                 'assetTypes' => 
                array (
                ),
                 'documentsAllowed' => false,
                 'documentTypes' => 
                array (
                ),
                 'classes' => 
                array (
                  0 => 
                  array (
                    'classes' => 'CoreShopCustomer',
                  ),
                ),
                 'pathFormatterClass' => '',
                 'name' => 'customer',
                 'title' => 'coreshop.order.customer',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => true,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
              )),
              1 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\ManyToOneRelation::__set_state(array(
                 'fieldtype' => 'manyToOneRelation',
                 'width' => '',
                 'assetUploadPath' => '',
                 'relationType' => true,
                 'queryColumnType' => 
                array (
                  'id' => 'int(11)',
                  'type' => 'enum(\'document\',\'asset\',\'object\')',
                ),
                 'phpdocType' => '\\Pimcore\\Model\\Document\\Page | \\Pimcore\\Model\\Document\\Snippet | \\Pimcore\\Model\\Document | \\Pimcore\\Model\\Asset | \\Pimcore\\Model\\DataObject\\AbstractObject',
                 'objectsAllowed' => true,
                 'assetsAllowed' => false,
                 'assetTypes' => 
                array (
                ),
                 'documentsAllowed' => false,
                 'documentTypes' => 
                array (
                ),
                 'classes' => 
                array (
                  0 => 
                  array (
                    'classes' => 'CoreShopAddress',
                  ),
                ),
                 'pathFormatterClass' => '',
                 'name' => 'shippingAddress',
                 'title' => 'coreshop.order.shipping_address',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => true,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
              )),
              2 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\ManyToOneRelation::__set_state(array(
                 'fieldtype' => 'manyToOneRelation',
                 'width' => '',
                 'assetUploadPath' => '',
                 'relationType' => true,
                 'queryColumnType' => 
                array (
                  'id' => 'int(11)',
                  'type' => 'enum(\'document\',\'asset\',\'object\')',
                ),
                 'phpdocType' => '\\Pimcore\\Model\\Document\\Page | \\Pimcore\\Model\\Document\\Snippet | \\Pimcore\\Model\\Document | \\Pimcore\\Model\\Asset | \\Pimcore\\Model\\DataObject\\AbstractObject',
                 'objectsAllowed' => true,
                 'assetsAllowed' => false,
                 'assetTypes' => 
                array (
                ),
                 'documentsAllowed' => false,
                 'documentTypes' => 
                array (
                ),
                 'classes' => 
                array (
                  0 => 
                  array (
                    'classes' => 'CoreShopAddress',
                  ),
                ),
                 'pathFormatterClass' => '',
                 'name' => 'invoiceAddress',
                 'title' => 'coreshop.order.invoice_address',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => true,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
              )),
            ),
             'locked' => false,
             'icon' => NULL,
          )),
        ),
         'locked' => false,
      )),
    ),
     'locked' => false,
     'icon' => NULL,
  )),
   'icon' => NULL,
   'previewUrl' => NULL,
   'group' => 'CoreShop',
   'showAppLoggerTab' => false,
   'linkGeneratorReference' => NULL,
   'compositeIndices' => 
  array (
  ),
   'propertyVisibility' => 
  array (
    'grid' => 
    array (
      'id' => true,
      'key' => false,
      'path' => true,
      'published' => true,
      'modificationDate' => true,
      'creationDate' => true,
    ),
    'search' => 
    array (
      'id' => true,
      'key' => false,
      'path' => true,
      'published' => true,
      'modificationDate' => true,
      'creationDate' => true,
    ),
  ),
   'enableGridLocking' => false,
   'dao' => NULL,
));
