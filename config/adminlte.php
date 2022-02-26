<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    |
    | Here you can change the default title of your admin panel.
    |
    | For detailed instructions you can look the title section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'title' => 'AdminLTE 3',
    'title_prefix' => '',
    'title_postfix' => '',

    /*
    |--------------------------------------------------------------------------
    | Favicon
    |--------------------------------------------------------------------------
    |
    | Here you can activate the favicon.
    |
    | For detailed instructions you can look the favicon section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'use_ico_only' => false,
    'use_full_favicon' => false,

    /*
    |--------------------------------------------------------------------------
    | Logo
    |--------------------------------------------------------------------------
    |
    | Here you can change the logo of your admin panel.
    |
    | For detailed instructions you can look the logo section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'logo' => '<b>Kimsa</b>Travel',
    'logo_img' => 'vendor/adminlte/dist/img/AdminLTELogo.png',
    'logo_img_class' => 'brand-image img-circle elevation-3',
    'logo_img_xl' => null,
    'logo_img_xl_class' => 'brand-image-xs',
    'logo_img_alt' => 'Admin Travel Agency',

    /*
    |--------------------------------------------------------------------------
    | User Menu
    |--------------------------------------------------------------------------
    |
    | Here you can activate and change the user menu.
    |
    | For detailed instructions you can look the user menu section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'usermenu_enabled' => true,
    'usermenu_header' => false,
    'usermenu_header_class' => 'bg-primary',
    'usermenu_image' => false,
    'usermenu_desc' => false,
    'usermenu_profile_url' => false,

    /*
    |--------------------------------------------------------------------------
    | Layout
    |--------------------------------------------------------------------------
    |
    | Here we change the layout of your admin panel.
    |
    | For detailed instructions you can look the layout section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'layout_topnav' => null,
    'layout_boxed' => null,
    'layout_fixed_sidebar' => true,
    'layout_fixed_navbar' => null,
    'layout_fixed_footer' => null,
    'layout_dark_mode' => null,

    /*
    |--------------------------------------------------------------------------
    | Authentication Views Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the authentication views.
    |
    | For detailed instructions you can look the auth classes section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'classes_auth_card' => 'card-outline card-primary',
    'classes_auth_header' => '',
    'classes_auth_body' => '',
    'classes_auth_footer' => '',
    'classes_auth_icon' => '',
    'classes_auth_btn' => 'btn-flat btn-primary',

    /*
    |--------------------------------------------------------------------------
    | Admin Panel Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the admin panel.
    |
    | For detailed instructions you can look the admin panel classes here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'classes_body' => '',
    'classes_brand' => '',
    'classes_brand_text' => '',
    'classes_content_wrapper' => '',
    'classes_content_header' => '',
    'classes_content' => '',
    'classes_sidebar' => 'sidebar-light-primary elevation-4',
    'classes_sidebar_nav' => '',
    'classes_topnav' => 'navbar-white navbar-light',
    'classes_topnav_nav' => 'navbar-expand',
    'classes_topnav_container' => 'container',

    /*
    |--------------------------------------------------------------------------
    | Sidebar
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar of the admin panel.
    |
    | For detailed instructions you can look the sidebar section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'sidebar_mini' => 'lg',
    'sidebar_collapse' => false,
    'sidebar_collapse_auto_size' => false,
    'sidebar_collapse_remember' => false,
    'sidebar_collapse_remember_no_transition' => true,
    'sidebar_scrollbar_theme' => 'os-theme-light',
    'sidebar_scrollbar_auto_hide' => 'l',
    'sidebar_nav_accordion' => true,
    'sidebar_nav_animation_speed' => 300,

    /*
    |--------------------------------------------------------------------------
    | Control Sidebar (Right Sidebar)
    |--------------------------------------------------------------------------
    |
    | Here we can modify the right sidebar aka control sidebar of the admin panel.
    |
    | For detailed instructions you can look the right sidebar section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'right_sidebar' => false,
    'right_sidebar_icon' => 'fas fa-cogs',
    'right_sidebar_theme' => 'light',
    'right_sidebar_slide' => true,
    'right_sidebar_push' => true,
    'right_sidebar_scrollbar_theme' => 'os-theme-light',
    'right_sidebar_scrollbar_auto_hide' => 'l',

    /*
    |--------------------------------------------------------------------------
    | URLs
    |--------------------------------------------------------------------------
    |
    | Here we can modify the url settings of the admin panel.
    |
    | For detailed instructions you can look the urls section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'use_route_url' => false,
    'dashboard_url' => '/',
    'logout_url' => 'logout',
    'login_url' => 'login',
    'register_url' => 'register',
    'password_reset_url' => 'password/reset',
    'password_email_url' => 'password/email',
    'profile_url' => false,

    /*
    |--------------------------------------------------------------------------
    | Laravel Mix
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Laravel Mix option for the admin panel.
    |
    | For detailed instructions you can look the laravel mix section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Other-Configuration
    |
    */

    'enabled_laravel_mix' => false,
    'laravel_mix_css_path' => 'css/app.css',
    'laravel_mix_js_path' => 'js/app.js',

    /*
    |--------------------------------------------------------------------------
    | Menu Items
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar/top navigation of the admin panel.
    |
    | For detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Menu-Configuration
    |
    */

    'menu' => [
        // Navbar items:
        [
            'type'         => 'navbar-search',
            'text'         => 'search',
            'topnav_right' => true,
        ],
        [
            'type'         => 'fullscreen-widget',
            'topnav_right' => true,
        ],

        // Sidebar items:
        [
            'type' => 'sidebar-menu-search',
            'text' => 'search',
        ],
        [
            'text' => 'blog',
            'url'  => 'admin/blog',
            'can'  => 'manage-blog',
        ],
        [
            'text'        => 'Dashboard',
            'route'         => 'admin.home',
            'icon'        => 'fas fa-tachometer-alt fa-fw',
            'can' => 'admin.home',
        ],


        ['header' => 'DESTINATIONS',
        'can' => 'admin.nations.index',],
        [
            'text'    => 'Countries',
            'icon'    => 'fas fa-globe-americas',
            'can' => 'admin.nations.index',
            'submenu' => [
                [
                    'text' => 'Manage Countries',
                    'route'  => 'admin.nations.index',  
                    'can' => 'admin.nations.index',              ],
                [
                    'text' => 'Add New Country',
                    'route'  => 'admin.nations.create',
                    'can' => 'admin.nations.create',
                ]
            ],
        ],
        [
            'text'    => 'Destinations',
            'icon'    => 'fas fa-map-marked-alt',
            'can' => 'admin.destinations.index',
            'submenu' => [
                [
                    'text' => 'Manage Destinations',
                    'can' => 'admin.destinations.index',
                    'route'  => 'admin.destinations.index',
                ],
                [
                    'text' => 'Add New Destination',
                    'can' => 'admin.destinations.create',
                    'route'  => 'admin.destinations.create',
                ]
            ],
        ],
        ['header' => 'PACKAGES',
        'can' => 'admin.tours.index',],
        
        [
            'text'    => 'Tours',
            'icon'    => 'fas fa-box-open',
            'can' => 'admin.tours.index',
            'submenu' => [
                [
                    'text' => 'Manage tours',
                    'can' => 'admin.tours.index',
                    'route'  => 'admin.tours.index',
                ],
                [
                    'text' => 'Add new tour',
                     'can' => 'admin.tours.create',
                    'route'  => 'admin.tours.create',
                ],                
            ],
        ], 
        [
            'text'    => 'Complement Tours',
            'icon'    => 'fas fa-th-list',
            'can' => 'admin.extensions.index',
            'submenu' => [
                [
                    'text' => 'Manage Complements',
                    'can' => 'admin.extensions.index',
                    'route'  => 'admin.extensions.index',
                ],
                [
                    'text' => 'Add new Complement',
                    'can' => 'admin.extensions.create',
                    'route'  => 'admin.extensions.create',
                ],                
            ],
        ],
        [
            'text'    => 'Activities by Tours',
            'icon'    => 'fas fa-th-list',
            'can' => 'admin.activities.index',
            'submenu' => [
                [
                    'text' => 'Manage Activities',
                    'can' => 'admin.activities.index',
                    'route'  => 'admin.activities.index',
                ],
                [
                    'text' => 'Add new Activities',
                    'can' => 'admin.activities.create',
                    'route'  => 'admin.activities.create',
                ],                
            ],
        ],
        [
            'text'    => 'Hotels',
            'icon'    => 'fas fa-hotel',
            'can' => 'admin.hotels.index',
            'submenu' => [
                [
                    'text' => 'Manage tours',
                    'can' => 'admin.hotels.index',
                    'route'  => 'admin.hotels.index',
                ],
                [
                    'text' => 'Add new tour',
                    'can' => 'admin.hotels.create',
                    'route'  => 'admin.hotels.create',
                ],                
            ],
        ],

        ['header' => 'POSTS',
        'can' => 'admin.posts.index',],
        [
            'text'    => 'Categories',
            'icon'    => 'fas fa-layer-group',
            'can' => 'admin.categories.index',
            'submenu' => [
                [
                    'text' => 'Manage categories',
                    'route'  => 'admin.categories.index',
                    'can' => 'admin.categories.index',
                    'active' => ['admin/categories*']
                ],
                [
                    'text' => 'Add category',
                    'can' => 'admin.categories.index',
                    'route'  => 'admin.categories.create',
                ],                
            ],
        ],
        [
            'text'    => 'Tags',
            'icon'    => 'fas fa-tags',
            'can' => 'admin.tags.index',
            'submenu' => [
                [
                    'text' => 'Manage Tags',
                    'route'  => 'admin.tags.index',
                    'can' => 'admin.tags.index',
                    'active' => ['admin/tags*']
                ],
                [
                    'text' => 'Add new Tag',
                    'can' => 'admin.tags.create',
                    'route'  => 'admin.tags.create',
                    'active' => ['admin/tags*']
                ],                
            ],
        ],
        [
            'text'    => 'Posts',
            'icon'    => 'far fa-sticky-note',
            'can' => 'admin.posts.index',
            'submenu' => [
                [
                    'text' => 'Manage posts',
                    'route'  => 'admin.posts.index',
                    'can' => 'admin.posts.index',
                    'active' => ['admin/posts*']
                ],
                [
                    'text' => 'Add new posts',
                    'route'=>'admin.posts.create',
                    'can' => 'admin.posts.create',
                    
                ],                
            ],
        ],
        ['header' => 'SERVICES',
        'can' => 'admin.entrances.index',],
        [
            'text' => 'Services',
            'icon' => 'fab fa-servicestack',
            'can' => 'admin.entrances.index',
            'submenu' => [
                [
                    'text'    => 'Entrances',
                    'icon'    => 'fas fa-hotel',
                    'can' => 'admin.entrances.index',
                    'route'=>'admin.entrances.index',
                ],
                [
                    'text'    => 'Guides',
                    'icon'    => 'fas fa-hiking',
                    'can' => 'admin.guides.index',
                    'route'=>'admin.guides.index',
                ],
                [
                    'text'    => 'Hotels',
                    'icon'    => 'fas fa-hotel',
                    'can' => 'admin.accomodations.index',
                    'route'=>'admin.accomodations.index',
                ],
                [
                    'text'    => 'Lodges',
                    'icon'    => 'fas fa-hotel',
                    'can' => 'admin.lodges.index',
                    'route'=>'admin.lodges.index',
                ],
                [
                    'text'    => 'Operators',
                    'icon'    => 'fas fa-hotel',
                    'can' => 'admin.operators.index',
                    'route'=>'admin.operators.index',
                ],
                [
                    'text'    => 'Restaurant',
                    'icon'    => 'fas fa-utensils',
                    'route'=>'admin.restaurants.index',
                    'can' => 'admin.restaurants.index',
                ],  
                [
                    'text'    => 'Transport',
                    'icon'    => 'fas fa-shuttle-van',
                    'route'=>'admin.transfers.index',
                    'can' => 'admin.transfers.index',
                ],                                              
            ]
        ],
        
        ['header' => 'INQUIRES',
        'can' => 'admin.inquires',],
        
        [
            'text'    => 'Inquires',
            'icon'    => 'fas fa-calendar-check',
            'can' => 'admin.inquires',
            'submenu' => [
                [
                    'text' => 'Make inquire',
                    'route'  => 'admin.inquires.index',
                    'icon'    => 'fas fa-money-check',
                    'can' => 'admin.inquires',
                    
                ],
                               
            ],
        ],
        ['header' => 'ADMINISTRATOR',
        'can' => 'admin.home'],
        [
            'text'    => 'Users',
            'icon'    => 'fas fa-users',
            'can' => 'admin.home',
            'submenu' => [
                [
                    'text'    => 'Users',
                    'route'     => 'admin.users.index',
                    'icon' => 'fas fa-id-badge',
                    'can' => 'admin.home',                   
                ],
                [
                    'text'    => 'Roles',
                    'route'     => 'admin.roles.index',
                    'icon' => 'fas fa-user-lock',
                    'can' => 'admin.home',               

                ],
                
            ],
        ],
        [
            'text'    => 'Setting',
            'icon'    => 'fas fa-cogs',
            'can' => 'admin.home',
            'submenu' => [
                [
                    'text' => 'System settings',
                    'icon'    => 'fas fa-cog',
                    'url'  => '#',
                ],
                [
                    'text' => 'Website settings',
                    'icon'    => 'fas fa-toolbox',
                    'url'  => '#',
                ],
                [
                    'text' => 'Payment settings',
                    'icon'    => 'far fa-credit-card',
                    'url'  => '#',
                ],
                [
                    'text' => 'SMTP settings',
                    'icon'    => 'fas fa-mail-bulk',
                    'url'  => '#',
                ],
                [
                    'text' => 'Setting social',
                    'icon'    => 'fas fa-share-alt',
                    'url'  => '#',
                ],
                [
                    'text' => 'About',
                    'icon'    => 'fas fa-user-secret',
                    'url'  => '#',
                ],
            ],
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Menu Filters
    |--------------------------------------------------------------------------
    |
    | Here we can modify the menu filters of the admin panel.
    |
    | For detailed instructions you can look the menu filters section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Menu-Configuration
    |
    */

    'filters' => [
        JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SearchFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\LangFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\DataFilter::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Plugins Initialization
    |--------------------------------------------------------------------------
    |
    | Here we can modify the plugins used inside the admin panel.
    |
    | For detailed instructions you can look the plugins section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Plugins-Configuration
    |
    */

    'plugins' => [
        'Datatables' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css',
                ],
            ],
        ],
        'Select2' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.css',
                ],
            ],
        ],
        'Chartjs' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.min.js',
                ],
            ],
        ],
        'Sweetalert2' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.jsdelivr.net/npm/sweetalert2@8',
                ],
            ],
        ],
        'Pace' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/themes/blue/pace-theme-center-radar.min.css',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js',
                ],
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Livewire
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Livewire support.
    |
    | For detailed instructions you can look the livewire here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Other-Configuration
    */

    'livewire' => true,
];
