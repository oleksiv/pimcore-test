<?php 

/** 
* Inheritance: no
* Variants: no


Fields Summary: 
- order [manyToOneRelation]
- invoiceDate [date]
- invoiceNumber [input]
- state [input]
- totalNet [coreShopMoney]
- totalGross [coreShopMoney]
- subtotalNet [coreShopMoney]
- subtotalGross [coreShopMoney]
- adjustmentItems [fieldcollections]
- pimcoreAdjustmentTotalGross [coreShopMoney]
- pimcoreAdjustmentTotalNet [coreShopMoney]
- convertedTotalNet [coreShopMoney]
- convertedTotalGross [coreShopMoney]
- convertedSubtotalNet [coreShopMoney]
- convertedSubtotalGross [coreShopMoney]
- convertedAdjustmentItems [fieldcollections]
- convertedPimcoreAdjustmentTotalGross [coreShopMoney]
- convertedPimcoreAdjustmentTotalNet [coreShopMoney]
- items [manyToManyRelation]
*/ 


return Pimcore\Model\DataObject\ClassDefinition::__set_state(array(
   'id' => 'cs_order_invoice',
   'name' => 'CoreShopOrderInvoice',
   'description' => NULL,
   'creationDate' => NULL,
   'modificationDate' => 1595857077,
   'userOwner' => 0,
   'userModification' => 0,
   'parentClass' => 'CoreShop\\Component\\Order\\Model\\OrderInvoice',
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
             'name' => 'Invoice',
             'type' => NULL,
             'region' => NULL,
             'title' => 'coreshop.order_invoice.invoice',
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
                    'classes' => 'CoreShopOrder',
                  ),
                ),
                 'pathFormatterClass' => '',
                 'name' => 'order',
                 'title' => 'coreshop.order_invoice.order',
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
              Pimcore\Model\DataObject\ClassDefinition\Data\Date::__set_state(array(
                 'fieldtype' => 'date',
                 'queryColumnType' => 'bigint(20)',
                 'columnType' => 'bigint(20)',
                 'phpdocType' => '\\Carbon\\Carbon',
                 'defaultValue' => NULL,
                 'useCurrentDate' => false,
                 'name' => 'invoiceDate',
                 'title' => 'coreshop.order_invoice.date',
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
                 'unique' => NULL,
                 'showCharCount' => NULL,
                 'name' => 'invoiceNumber',
                 'title' => 'coreshop.order_invoice.number',
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
                 'name' => 'state',
                 'title' => 'coreshop.order_invoice.state',
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
          1 => 
          Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
             'fieldtype' => 'panel',
             'labelWidth' => 100,
             'layout' => NULL,
             'border' => false,
             'name' => 'Numbers',
             'type' => NULL,
             'region' => NULL,
             'title' => 'coreshop.order_invoice.numbers',
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
                     'name' => 'numbers_store',
                     'type' => NULL,
                     'region' => NULL,
                     'title' => 'coreshop.order_invoice.numbers_store',
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
                         'name' => 'totalNet',
                         'title' => 'coreshop.order_invoice.total_net',
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
                         'name' => 'totalGross',
                         'title' => 'coreshop.order_invoice.total_gross',
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
                      CoreShop\Bundle\MoneyBundle\CoreExtension\Money::__set_state(array(
                         'fieldtype' => 'coreShopMoney',
                         'width' => '',
                         'defaultValue' => NULL,
                         'phpdocType' => 'int',
                         'minValue' => NULL,
                         'maxValue' => NULL,
                         'name' => 'subtotalNet',
                         'title' => 'coreshop.order_invoice.subtotal_net',
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
                         'name' => 'subtotalGross',
                         'title' => 'coreshop.order_invoice.subtotal_gross',
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
                         'title' => 'coreshop.order_invoice.adjustments',
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
                         'name' => 'pimcoreAdjustmentTotalGross',
                         'title' => 'coreshop.order_invoice.adjustments_total_gross',
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
                      6 => 
                      CoreShop\Bundle\MoneyBundle\CoreExtension\Money::__set_state(array(
                         'fieldtype' => 'coreShopMoney',
                         'width' => '',
                         'defaultValue' => NULL,
                         'phpdocType' => 'int',
                         'minValue' => NULL,
                         'maxValue' => NULL,
                         'name' => 'pimcoreAdjustmentTotalNet',
                         'title' => 'coreshop.order_invoice.adjustments_total_net',
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
                     'name' => 'numbers_converted',
                     'type' => NULL,
                     'region' => NULL,
                     'title' => 'coreshop.order_invoice.numbers_converted',
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
                         'name' => 'convertedTotalNet',
                         'title' => 'coreshop.order_invoice.converted_total_net',
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
                         'name' => 'convertedTotalGross',
                         'title' => 'coreshop.order_invoice.converted_total_gross',
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
                      CoreShop\Bundle\MoneyBundle\CoreExtension\Money::__set_state(array(
                         'fieldtype' => 'coreShopMoney',
                         'width' => '',
                         'defaultValue' => NULL,
                         'phpdocType' => 'int',
                         'minValue' => NULL,
                         'maxValue' => NULL,
                         'name' => 'convertedSubtotalNet',
                         'title' => 'coreshop.order_invoice.converted_subtotal_net',
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
                         'name' => 'convertedSubtotalGross',
                         'title' => 'coreshop.order_invoice.converted_subtotal_gross',
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
                         'title' => 'coreshop.order_invoice.converted_adjustments',
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
                         'name' => 'convertedPimcoreAdjustmentTotalGross',
                         'title' => 'coreshop.order_invoice.converted_adjustments_total_gross',
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
                      6 => 
                      CoreShop\Bundle\MoneyBundle\CoreExtension\Money::__set_state(array(
                         'fieldtype' => 'coreShopMoney',
                         'width' => '',
                         'defaultValue' => NULL,
                         'phpdocType' => 'int',
                         'minValue' => NULL,
                         'maxValue' => NULL,
                         'name' => 'convertedPimcoreAdjustmentTotalNet',
                         'title' => 'coreshop.order_invoice.converted_adjustments_total_net',
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
             'name' => 'Items',
             'type' => NULL,
             'region' => NULL,
             'title' => 'coreshop.order_invoice.items',
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
                    'classes' => 'CoreShopOrderInvoiceItem',
                  ),
                ),
                 'pathFormatterClass' => '',
                 'name' => 'items',
                 'title' => 'coreshop.order_invoice.items',
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
