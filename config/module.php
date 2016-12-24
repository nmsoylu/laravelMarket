<?php
return [
    'Menus' => [
        1 => [
            'Product Pool' => [
                'general' => [
                    'url' => '#',
                    'path' => '/user/filter',
                    'icon' => 'filter_list',
                    'permission_id' => 1,
                ],
                'sub_menu' => [
                    'Create Filter' => ['url' => '/user/filter', 'icon' => 'fa fa-plus', 'permission_id' => 13],
                    'List Filters' => ['url' => '/user/filter/action/lists', 'icon' => 'fa fa-list', 'permission_id' => 7],
                ]
            ],
            'ASIN Match' => [
                'general' => [
                    'url' => '/user/AsinMatch/action',
                    'icon' => 'refresh',
                    'path' => '/user/AsinMatch/action',
                    'permission_id' => 30,
                ],
                'sub_menu' => [

                ]
            ],
            'Purchase Engine' => [
                'general' => [
                    'url' => '/user/PurchaseEngine/action',
                    'icon' => 'attach_money',
                    'path' => '/user/PurchaseEngine/action',
                    'permission_id' => 21,
                ],
                'sub_menu' => [

                ]
            ],
            'Amazon Bulk Software' => [
                'general' => [
                    'url' => '#',
                    'icon' => 'track_changes',
                    'path' => '/user/amazon/action/show',
                    'permission_id' => 18,
                ],
                'sub_menu' => [
                    'Search Listing' => ['url' => '/user/amazon/action/show/listing', 'icon' => 'fa fa-search', 'permission_id' => 18],
                    'Listing' => ['url' => '/user/amazon/action/show/listings', 'icon' => 'fa fa-list', 'permission_id' => 18],
                    'Export Listings' => ['url' => 'user/amazon/action/show/excel', 'icon' => 'fa fa-file-excel-o', 'permission_id' => 18],
                    'Parameters' => ['url' => 'user/amazon/action/show/parameters', 'icon' => 'fa fa-credit-card', 'permission_id' => 18],
                ]

            ],

        ],
        2 => [
            'Product Pool' => [
                'general' => [
                    'url' => '#',
                    'path' => '/user/filter',
                    'icon' => 'filter_list',
                    'permission_id' => 1,
                ],
                'sub_menu' => [
                    'Create Filter' => ['url' => '/user/filter', 'icon' => 'fa fa-plus', 'permission_id' => 13],
                    'List Filters' => ['url' => '/user/filter/action/lists', 'icon' => 'fa fa-list', 'permission_id' => 7],
                    'Products' => ['url' => '/user/filter/action/productPools', 'icon' => 'fa fa-tag', 'permission_id' => 1],
                ]
            ],
            'ASIN Match' => [
                'general' => [
                    'url' => '/user/AsinMatch/action',
                    'icon' => 'refresh',
                    'path' => '/user/AsinMatch/action',
                    'permission_id' => 30,
                ],
                'sub_menu' => [

                ]
            ],
            'Purchase Engine' => [
                'general' => [
                    'url' => '/user/PurchaseEngine/action',
                    'icon' => 'attach_money',
                    'path' => '/user/PurchaseEngine/action',
                    'permission_id' => 21,
                ],
                'sub_menu' => [

                ]
            ],
            'Amazon Bulk Software' => [
                'general' => [
                    'url' => '#',
                    'icon' => 'track_changes',
                    'path' => '/user/amazon/',
                    'permission_id' => 18,
                ],
                'sub_menu' => [
                    'Search Listing'    => ['url' => '/user/amazon/SearchListing', 'icon' => 'fa fa-search', 'permission_id' => 18],
                    'Listing'           => ['url' => '/user/amazon/Listings', 'icon' => 'fa fa-list', 'permission_id' => 33],
                    'Export Listings'   => ['url' => 'user/amazon/Export', 'icon' => 'fa fa-file-excel-o', 'permission_id' => 18],
                    'Parameters'        => ['url' => 'user/amazon/Parameters', 'icon' => 'fa fa-credit-card', 'permission_id' => 18],
                ]

            ],
            'Products' => [
                'general' => [
                    'url' => '#',
                    'icon' => 'playlist_add',
                    'path' => '/user/product/',
                    'permission_id' => 52,
                ],
                'sub_menu' => [
                    'Add'   => ['url' => '/user/product/add', 'icon' => 'fa fa-plus', 'permission_id' => 52],
                    'List'  => ['url' => '/user/product/list', 'icon' => 'fa fa-list', 'permission_id' => 33],
                    'Manage Manu'  => ['url' => '/user/product/manageManu', 'icon' => 'fa fa-pencil', 'permission_id' => 69],
                ]

            ],
            'Inventory Management' => [
                'general' => [
                    'url' => '/user/InventoryManagement/Dashboard',
                    'icon' => 'toc',
                    'path' => '/user/InventoryManagement/Dashboard',
                    'permission_id' => 61,
                ],
                'sub_menu' => [

                ],
                'inside_menu' => [
                    'Warehouses'    => ['url' => '/user/InventoryManagement/Warehouse', 'icon' => 'fa fa-plus', 'permission_id' => 62],
                    'Vendors'       => ['url' => '/user/InventoryManagement/Vendor', 'icon' => 'fa fa-list', 'permission_id' => 63],
                    'Marketplaces'  => ['url' => '/user/InventoryManagement/Marketplace', 'icon' => 'fa fa-list', 'permission_id' => 64],
                ]
            ],

        ],
        3 => [
            'Manage Package' => [
                'general' => [
                    'url' => '#',
                    'icon' => 'track_changes',
                    'path' => '/admin/packageManager',
                    'permission_id' => 1,
                ],
                'sub_menu' => [
                    'Create' => ['url' => '/admin/packageManager', 'icon' => 'fa fa-th', 'permission_id' => 1],
                    'List' => ['url' => '/admin/packageManager/action/packageLists', 'icon' => 'fa fa-list', 'permission_id' => 1],
                ]
            ],'Ticket' => [
                'general' => [
                    'url' => '/admin/ticket',
                    'icon' => 'chat',
                    'path' => '/admin/ticket',
                    'permission_id' => 1,
                ],
                'sub_menu' => [
                ]
            ],
        ],
    ],
    'Admin' => [
        'Groups',
        'Index',
        'Company',
        'PackageManager',
        'Ticket'
    ],
    'Frontend' => [
    ],
    'User' => [
        'Dashboard',
        'Filter',
        'FilterManager',
        'Blacklist',
        'AsinMatch',
        'PurchaseEngine',
        'AmazonBulk',
        'Amazon',
        'MyAccount',
        'Product',
        'InventoryManagement'
    ]
];