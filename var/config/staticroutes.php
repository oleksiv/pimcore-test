<?php 

return [
    1 => [
        "id" => 1,
        "name" => "coreshop_index",
        "pattern" => "/(\\w+)\\/shop(\\/?)\$/",
        "reverse" => "/%_locale/shop",
        "module" => "FrontendBundle",
        "controller" => "@coreshop.frontend.controller.index",
        "action" => "index",
        "variables" => "_locale",
        "defaults" => NULL,
        "siteId" => NULL,
        "methods" => [

        ],
        "priority" => 1,
        "creationDate" => 1595857090,
        "modificationDate" => 1595857090
    ],
    2 => [
        "id" => 2,
        "name" => "coreshop_category_list",
        "pattern" => "/(\\w+)\\/shop\\/(.*?)\\~c([0-9]+)\$/",
        "reverse" => "/%_locale/shop/%name~c%category",
        "module" => "FrontendBundle",
        "controller" => "@coreshop.frontend.controller.category",
        "action" => "index",
        "variables" => "_locale,name,category",
        "defaults" => NULL,
        "siteId" => NULL,
        "methods" => [

        ],
        "priority" => 2,
        "creationDate" => 1595857090,
        "modificationDate" => 1595857090
    ],
    3 => [
        "id" => 3,
        "name" => "coreshop_product_detail",
        "pattern" => "/(\\w+)\\/shop\\/(.*?)\\~p([0-9]+)\$/",
        "reverse" => "/%_locale/shop/%name~p%product",
        "module" => "FrontendBundle",
        "controller" => "@coreshop.frontend.controller.product",
        "action" => "detail",
        "variables" => "_locale,name,product",
        "defaults" => NULL,
        "siteId" => NULL,
        "methods" => [

        ],
        "priority" => 2,
        "creationDate" => 1595857090,
        "modificationDate" => 1595857090
    ],
    4 => [
        "id" => 4,
        "name" => "coreshop_cart_summary",
        "pattern" => "/(\\w+)\\/shop\\/cart\$/",
        "reverse" => "/%_locale/shop/cart",
        "module" => "FrontendBundle",
        "controller" => "@coreshop.frontend.controller.cart",
        "action" => "summary",
        "variables" => "_locale",
        "defaults" => NULL,
        "siteId" => NULL,
        "methods" => [

        ],
        "priority" => 2,
        "creationDate" => 1595857090,
        "modificationDate" => 1595857090
    ],
    5 => [
        "id" => 5,
        "name" => "coreshop_cart_add",
        "pattern" => "/(\\w+)\\/shop\\/cart\\/add\\/([0-9]+)\$/",
        "reverse" => "/%_locale/shop/cart/add/%product",
        "module" => "FrontendBundlex",
        "controller" => "@coreshop.frontend.controller.cart",
        "action" => "addItem",
        "variables" => "_locale,product",
        "defaults" => NULL,
        "siteId" => NULL,
        "methods" => [
            "POST"
        ],
        "priority" => 3,
        "creationDate" => 1595857090,
        "modificationDate" => 1595857090
    ],
    6 => [
        "id" => 6,
        "name" => "coreshop_partial_cart_add",
        "pattern" => "/(\\w+)\\/_partial\\/cart\\/add\\/([0-9]+)\$/",
        "reverse" => "/%_locale/_partial/cart/add/%product",
        "module" => "FrontendBundle",
        "controller" => "@coreshop.frontend.controller.cart",
        "action" => "addItem",
        "variables" => "_locale,product",
        "defaults" => NULL,
        "siteId" => NULL,
        "methods" => [

        ],
        "priority" => 3,
        "creationDate" => 1595857090,
        "modificationDate" => 1595857090
    ],
    7 => [
        "id" => 7,
        "name" => "coreshop_cart_remove",
        "pattern" => "/(\\w+)\\/shop\\/cart\\/remove\\/([0-9]+)\$/",
        "reverse" => "/%_locale/shop/cart/remove/%cartItem",
        "module" => "FrontendBundle",
        "controller" => "@coreshop.frontend.controller.cart",
        "action" => "removeItem",
        "variables" => "_locale,cartItem",
        "defaults" => NULL,
        "siteId" => NULL,
        "methods" => [

        ],
        "priority" => 3,
        "creationDate" => 1595857090,
        "modificationDate" => 1595857090
    ],
    8 => [
        "id" => 8,
        "name" => "coreshop_cart_remove_price_rule",
        "pattern" => "/(\\w+)\\/shop\\/cart\\/remove-price-rule\$/",
        "reverse" => "/%_locale/shop/cart/remove-price-rule",
        "module" => "FrontendBundle",
        "controller" => "@coreshop.frontend.controller.cart",
        "action" => "removePriceRule",
        "variables" => "_locale",
        "defaults" => NULL,
        "siteId" => NULL,
        "methods" => [

        ],
        "priority" => 3,
        "creationDate" => 1595857090,
        "modificationDate" => 1595857090
    ],
    9 => [
        "id" => 9,
        "name" => "coreshop_cart_check_shipment",
        "pattern" => "/(\\w+)\\/shop\\/cart\\/shipment-calculation\$/",
        "reverse" => "/%_locale/shop/cart/shipment-calculation",
        "module" => "FrontendBundle",
        "controller" => "@coreshop.frontend.controller.cart",
        "action" => "shipmentCalculation",
        "variables" => "_locale",
        "defaults" => NULL,
        "siteId" => NULL,
        "methods" => [

        ],
        "priority" => 3,
        "creationDate" => 1595857090,
        "modificationDate" => 1595857090
    ],
    10 => [
        "id" => 10,
        "name" => "coreshop_login",
        "pattern" => "/(\\w+)\\/shop\\/login\$/",
        "reverse" => "/%_locale/shop/login",
        "module" => "FrontendBundle",
        "controller" => "@coreshop.frontend.controller.security",
        "action" => "login",
        "variables" => "_locale",
        "defaults" => NULL,
        "siteId" => NULL,
        "methods" => [

        ],
        "priority" => 2,
        "creationDate" => 1595857090,
        "modificationDate" => 1595857090
    ],
    11 => [
        "id" => 11,
        "name" => "coreshop_login_check",
        "pattern" => "/(\\w+)\\/shop\\/login-check\$/",
        "reverse" => "/%_locale/shop/login-check",
        "module" => "FrontendBundle",
        "controller" => "@coreshop.frontend.controller.security",
        "action" => "check",
        "variables" => "_locale",
        "defaults" => NULL,
        "siteId" => NULL,
        "methods" => [

        ],
        "priority" => 3,
        "creationDate" => 1595857090,
        "modificationDate" => 1595857090
    ],
    12 => [
        "id" => 12,
        "name" => "coreshop_logout",
        "pattern" => "/(\\w+)\\/shop\\/logout\$/",
        "reverse" => "/%_locale/shop/logout",
        "module" => "FrontendBundle",
        "controller" => "@coreshop.frontend.controller.security",
        "action" => "logout",
        "variables" => "_locale",
        "defaults" => NULL,
        "siteId" => NULL,
        "methods" => [

        ],
        "priority" => 2,
        "creationDate" => 1595857090,
        "modificationDate" => 1595857090
    ],
    13 => [
        "id" => 13,
        "name" => "coreshop_cart_create_qoute",
        "pattern" => "/(\\w+)\\/shop\\/cart\\/quote\$/",
        "reverse" => "/%_locale/shop/cart/quote",
        "module" => "FrontendBundle",
        "controller" => "@coreshop.frontend.controller.cart",
        "action" => "createQuote",
        "variables" => "_locale",
        "defaults" => NULL,
        "siteId" => NULL,
        "methods" => [

        ],
        "priority" => 3,
        "creationDate" => 1595857090,
        "modificationDate" => 1595857090
    ],
    14 => [
        "id" => 14,
        "name" => "coreshop_quote_detail",
        "pattern" => "/(\\w+)\\/shop\\/quote\\~q([0-9]+)\$/",
        "reverse" => "/%_locale/shop/quote~q%quote",
        "module" => "FrontendBundle",
        "controller" => "@coreshop.frontend.controller.quote",
        "action" => "show",
        "variables" => "_locale,quote",
        "defaults" => NULL,
        "siteId" => NULL,
        "methods" => [

        ],
        "priority" => 2,
        "creationDate" => 1595857090,
        "modificationDate" => 1595857090
    ],
    15 => [
        "id" => 15,
        "name" => "coreshop_checkout",
        "pattern" => "/(\\w+)\\/shop\\/checkout\\/(.*)\$/",
        "reverse" => "/%_locale/shop/checkout/%stepIdentifier",
        "module" => "FrontendBundle",
        "controller" => "@coreshop.frontend.controller.checkout",
        "action" => "process",
        "variables" => "_locale,stepIdentifier",
        "defaults" => NULL,
        "siteId" => NULL,
        "methods" => [

        ],
        "priority" => 2,
        "creationDate" => 1595857090,
        "modificationDate" => 1595857090
    ],
    16 => [
        "id" => 16,
        "name" => "coreshop_order_revise",
        "pattern" => "/(\\w+)\\/shop\\/order\\/revise\\/(.*)\$/",
        "reverse" => "/%_locale/shop/order/revise/%token",
        "module" => "FrontendBundle",
        "controller" => "@coreshop.frontend.controller.order",
        "action" => "revise",
        "variables" => "_locale,token",
        "defaults" => NULL,
        "siteId" => NULL,
        "methods" => [

        ],
        "priority" => 2,
        "creationDate" => 1595857090,
        "modificationDate" => 1595857090
    ],
    17 => [
        "id" => 17,
        "name" => "coreshop_order_revise_pay",
        "pattern" => "/(\\w+)\\/shop\\/order\\/revise\\/(.*)\\/pay\$/",
        "reverse" => "/%_locale/shop/order/revise/%token/pay",
        "module" => "FrontendBundle",
        "controller" => "@coreshop.frontend.controller.payment",
        "action" => "prepareCapture",
        "variables" => "_locale,token",
        "defaults" => NULL,
        "siteId" => NULL,
        "methods" => [

        ],
        "priority" => 3,
        "creationDate" => 1595857090,
        "modificationDate" => 1595857090
    ],
    18 => [
        "id" => 18,
        "name" => "coreshop_checkout_do",
        "pattern" => "/(\\w+)\\/shop\\/checkout-do\$/",
        "reverse" => "/%_locale/shop/checkout-do",
        "module" => "FrontendBundle",
        "controller" => "@coreshop.frontend.controller.checkout",
        "action" => "doCheckout",
        "variables" => "_locale",
        "defaults" => NULL,
        "siteId" => NULL,
        "methods" => [

        ],
        "priority" => 2,
        "creationDate" => 1595857090,
        "modificationDate" => 1595857090
    ],
    19 => [
        "id" => 19,
        "name" => "coreshop_checkout_confirmation",
        "pattern" => "/(\\w+)\\/shop\\/checkout-thank-you\$/",
        "reverse" => "/%_locale/shop/checkout-thank-you",
        "module" => "FrontendBundle",
        "controller" => "@coreshop.frontend.controller.checkout",
        "action" => "thankYou",
        "variables" => "_locale",
        "defaults" => NULL,
        "siteId" => NULL,
        "methods" => [

        ],
        "priority" => 2,
        "creationDate" => 1595857090,
        "modificationDate" => 1595857090
    ],
    20 => [
        "id" => 20,
        "name" => "coreshop_payment",
        "pattern" => "/(\\w+)\\/shop\\/pay\\/([0-9]+)\$/",
        "reverse" => "/%_locale/shop/pay/%order",
        "module" => "FrontendBundle",
        "controller" => "@coreshop.frontend.controller.payment",
        "action" => "prepareCapture",
        "variables" => "_locale,order",
        "defaults" => NULL,
        "siteId" => NULL,
        "methods" => [

        ],
        "priority" => 2,
        "creationDate" => 1595857090,
        "modificationDate" => 1595857090
    ],
    21 => [
        "id" => 21,
        "name" => "coreshop_checkout_error",
        "pattern" => "/(\\w+)\\/shop\\/checkout-error\$/",
        "reverse" => "/%_locale/shop/checkout-error",
        "module" => "FrontendBundle",
        "controller" => "@coreshop.frontend.controller.checkout",
        "action" => "error",
        "variables" => "_locale",
        "defaults" => NULL,
        "siteId" => NULL,
        "methods" => [

        ],
        "priority" => 2,
        "creationDate" => 1595857090,
        "modificationDate" => 1595857090
    ],
    22 => [
        "id" => 22,
        "name" => "coreshop_switch_currency",
        "pattern" => "/(\\w+)\\/shop\\/switch-currency\\/(.*)\$/",
        "reverse" => "/%_locale/shop/switch-currency/%currencyCode",
        "module" => "FrontendBundle",
        "controller" => "@coreshop.frontend.controller.currency",
        "action" => "switch",
        "variables" => "_locale,currencyCode",
        "defaults" => NULL,
        "siteId" => NULL,
        "methods" => [

        ],
        "priority" => 2,
        "creationDate" => 1595857090,
        "modificationDate" => 1595857090
    ],
    23 => [
        "id" => 23,
        "name" => "coreshop_register",
        "pattern" => "/(\\w+)\\/shop\\/register\$/",
        "reverse" => "/%_locale/shop/register",
        "module" => "FrontendBundle",
        "controller" => "@coreshop.frontend.controller.register",
        "action" => "register",
        "variables" => "_locale",
        "defaults" => NULL,
        "siteId" => NULL,
        "methods" => [

        ],
        "priority" => 2,
        "creationDate" => 1595857090,
        "modificationDate" => 1595857090
    ],
    24 => [
        "id" => 24,
        "name" => "coreshop_customer_profile",
        "pattern" => "/(\\w+)\\/shop\\/customer\\/profile\$/",
        "reverse" => "/%_locale/shop/customer/profile",
        "module" => "FrontendBundle",
        "controller" => "@coreshop.frontend.controller.customer",
        "action" => "profile",
        "variables" => "_locale",
        "defaults" => NULL,
        "siteId" => NULL,
        "methods" => [

        ],
        "priority" => 2,
        "creationDate" => 1595857090,
        "modificationDate" => 1595857090
    ],
    25 => [
        "id" => 25,
        "name" => "coreshop_customer_orders",
        "pattern" => "/(\\w+)\\/shop\\/customer\\/orders\$/",
        "reverse" => "/%_locale/shop/customer/orders",
        "module" => "FrontendBundle",
        "controller" => "@coreshop.frontend.controller.customer",
        "action" => "orders",
        "variables" => "_locale",
        "defaults" => NULL,
        "siteId" => NULL,
        "methods" => [

        ],
        "priority" => 2,
        "creationDate" => 1595857090,
        "modificationDate" => 1595857090
    ],
    26 => [
        "id" => 26,
        "name" => "coreshop_customer_order_detail",
        "pattern" => "/(\\w+)\\/shop\\/customer\\/order\\/([0-9]+)\$/",
        "reverse" => "/%_locale/shop/customer/order/%order",
        "module" => "FrontendBundle",
        "controller" => "@coreshop.frontend.controller.customer",
        "action" => "orderDetail",
        "variables" => "_locale,order",
        "defaults" => NULL,
        "siteId" => NULL,
        "methods" => [

        ],
        "priority" => 2,
        "creationDate" => 1595857090,
        "modificationDate" => 1595857090
    ],
    27 => [
        "id" => 27,
        "name" => "coreshop_customer_addresses",
        "pattern" => "/(\\w+)\\/shop\\/customer\\/addresses\$/",
        "reverse" => "/%_locale/shop/customer/addresses",
        "module" => "FrontendBundle",
        "controller" => "@coreshop.frontend.controller.customer",
        "action" => "addresses",
        "variables" => "_locale",
        "defaults" => NULL,
        "siteId" => NULL,
        "methods" => [

        ],
        "priority" => 2,
        "creationDate" => 1595857090,
        "modificationDate" => 1595857090
    ],
    28 => [
        "id" => 28,
        "name" => "coreshop_customer_address_edit",
        "pattern" => "/(\\w+)\\/shop\\/customer\\/address\\/(.*?)\\~a([0-9]+)\$/",
        "reverse" => "/%_locale/shop/customer/address/%name~a%address",
        "module" => "FrontendBundle",
        "controller" => "@coreshop.frontend.controller.customer",
        "action" => "address",
        "variables" => "_locale,name,address",
        "defaults" => NULL,
        "siteId" => NULL,
        "methods" => [

        ],
        "priority" => 2,
        "creationDate" => 1595857090,
        "modificationDate" => 1595857090
    ],
    29 => [
        "id" => 29,
        "name" => "coreshop_customer_address_new",
        "pattern" => "/(\\w+)\\/shop\\/customer\\/address\\/new\$/",
        "reverse" => "/%_locale/shop/customer/address/new",
        "module" => "FrontendBundle",
        "controller" => "@coreshop.frontend.controller.customer",
        "action" => "address",
        "variables" => "_locale",
        "defaults" => NULL,
        "siteId" => NULL,
        "methods" => [

        ],
        "priority" => 3,
        "creationDate" => 1595857090,
        "modificationDate" => 1595857090
    ],
    30 => [
        "id" => 30,
        "name" => "coreshop_customer_address_delete",
        "pattern" => "/(\\w+)\\/shop\\/customer\\/addresses\\/delete\\/([0-9]+)\$/",
        "reverse" => "/%_locale/shop/customer/addresses/delete/%address",
        "module" => "FrontendBundle",
        "controller" => "@coreshop.frontend.controller.customer",
        "action" => "addressDelete",
        "variables" => "_locale,address",
        "defaults" => NULL,
        "siteId" => NULL,
        "methods" => [

        ],
        "priority" => 4,
        "creationDate" => 1595857090,
        "modificationDate" => 1595857090
    ],
    31 => [
        "id" => 31,
        "name" => "coreshop_customer_settings",
        "pattern" => "/(\\w+)\\/shop\\/customer\\/settings\$/",
        "reverse" => "/%_locale/shop/customer/settings",
        "module" => "FrontendBundle",
        "controller" => "@coreshop.frontend.controller.customer",
        "action" => "settings",
        "variables" => "_locale",
        "defaults" => NULL,
        "siteId" => NULL,
        "methods" => [

        ],
        "priority" => 2,
        "creationDate" => 1595857090,
        "modificationDate" => 1595857090
    ],
    32 => [
        "id" => 32,
        "name" => "coreshop_customer_change_password",
        "pattern" => "/(\\w+)\\/shop\\/customer\\/change-password\$/",
        "reverse" => "/%_locale/shop/customer/change-password",
        "module" => "FrontendBundle",
        "controller" => "@coreshop.frontend.controller.customer",
        "action" => "changePassword",
        "variables" => "_locale",
        "defaults" => NULL,
        "siteId" => NULL,
        "methods" => [

        ],
        "priority" => 2,
        "creationDate" => 1595857090,
        "modificationDate" => 1595857090
    ],
    33 => [
        "id" => 33,
        "name" => "coreshop_customer_password_reset_request",
        "pattern" => "/(\\w+)\\/shop\\/password-reset-request\$/",
        "reverse" => "/%_locale/shop/password-reset-request",
        "module" => "FrontendBundle",
        "controller" => "@coreshop.frontend.controller.register",
        "action" => "passwordResetRequest",
        "variables" => "_locale",
        "defaults" => NULL,
        "siteId" => NULL,
        "methods" => [

        ],
        "priority" => 6,
        "creationDate" => 1595857090,
        "modificationDate" => 1595857090
    ],
    34 => [
        "id" => 34,
        "name" => "coreshop_customer_password_reset",
        "pattern" => "/(\\w+)\\/shop\\/password-reset\$/",
        "reverse" => "/%_locale/shop/password-reset",
        "module" => "FrontendBundle",
        "controller" => "@coreshop.frontend.controller.register",
        "action" => "passwordReset",
        "variables" => "_locale",
        "defaults" => NULL,
        "siteId" => NULL,
        "methods" => [

        ],
        "priority" => 5,
        "creationDate" => 1595857090,
        "modificationDate" => 1595857090
    ],
    35 => [
        "id" => 35,
        "name" => "coreshop_customer_confirm_newsletter",
        "pattern" => "/(\\w+)\\/shop\\/customer\\/confirm-newsletter\$/",
        "reverse" => "/%_locale/shop/customer/confirm-newsletter",
        "module" => "FrontendBundle",
        "controller" => "@coreshop.frontend.controller.customer",
        "action" => "confirmNewsletter",
        "variables" => "_locale",
        "defaults" => NULL,
        "siteId" => NULL,
        "methods" => [

        ],
        "priority" => 2,
        "creationDate" => 1595857090,
        "modificationDate" => 1595857090
    ],
    36 => [
        "id" => 36,
        "name" => "coreshop_search",
        "pattern" => "/(\\w+)\\/shop\\/search\$/",
        "reverse" => "/%_locale/shop/search",
        "module" => "FrontendBundle",
        "controller" => "@coreshop.frontend.controller.search",
        "action" => "search",
        "variables" => "_locale",
        "defaults" => NULL,
        "siteId" => NULL,
        "methods" => [

        ],
        "priority" => 2,
        "creationDate" => 1595857090,
        "modificationDate" => 1595857090
    ],
    37 => [
        "id" => 37,
        "name" => "coreshop_wishlist_summary",
        "pattern" => "/(\\w+)\\/shop\\/wishlist\$/",
        "reverse" => "/%_locale/shop/wishlist",
        "module" => "FrontendBundle",
        "controller" => "@coreshop.frontend.controller.wishlist",
        "action" => "summary",
        "variables" => "_locale",
        "defaults" => NULL,
        "siteId" => NULL,
        "methods" => [

        ],
        "priority" => 2,
        "creationDate" => 1595857090,
        "modificationDate" => 1595857090
    ],
    38 => [
        "id" => 38,
        "name" => "coreshop_wishlist_add",
        "pattern" => "/(\\w+)\\/shop\\/wishlist\\/add\\/([0-9]+)\$/",
        "reverse" => "/%_locale/shop/wishlist/add/%product",
        "module" => "FrontendBundle",
        "controller" => "@coreshop.frontend.controller.wishlist",
        "action" => "addItem",
        "variables" => "_locale,product",
        "defaults" => NULL,
        "siteId" => NULL,
        "methods" => [

        ],
        "priority" => 3,
        "creationDate" => 1595857090,
        "modificationDate" => 1595857090
    ],
    39 => [
        "id" => 39,
        "name" => "coreshop_wishlist_remove",
        "pattern" => "/(\\w+)\\/shop\\/wishlist\\/remove\\/([0-9]+)\$/",
        "reverse" => "/%_locale/shop/wishlist/remove/%product",
        "module" => "FrontendBundle",
        "controller" => "@coreshop.frontend.controller.wishlist",
        "action" => "removeItem",
        "variables" => "_locale,product",
        "defaults" => NULL,
        "siteId" => NULL,
        "methods" => [

        ],
        "priority" => 3,
        "creationDate" => 1595857090,
        "modificationDate" => 1595857090
    ]
];
