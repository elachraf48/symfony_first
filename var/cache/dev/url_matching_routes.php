<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [
            [['_route' => 'app_home_index', '_controller' => 'App\\Controller\\Home::index'], null, null, null, false, false, null],
            [['_route' => 'index', '_controller' => 'App\\Controller\\Home::index'], null, null, null, false, false, null],
        ],
        '/add' => [[['_route' => 'post_add', '_controller' => 'App\\Controller\\Home::add'], null, null, null, false, false, null]],
        '/home' => [[['_route' => 'post_home', '_controller' => 'App\\Controller\\Home::home'], null, null, null, false, false, null]],
        '/about' => [[['_route' => 'post_about', '_controller' => 'App\\Controller\\Home::about'], null, null, null, false, false, null]],
        '/resume' => [[['_route' => 'post_resume', '_controller' => 'App\\Controller\\Home::resume'], null, null, null, false, false, null]],
        '/services' => [[['_route' => 'post_services', '_controller' => 'App\\Controller\\Home::services'], null, null, null, false, false, null]],
        '/skills' => [[['_route' => 'post_skills', '_controller' => 'App\\Controller\\Home::skills'], null, null, null, false, false, null]],
        '/projects' => [[['_route' => 'post_projects', '_controller' => 'App\\Controller\\Home::projects'], null, null, null, false, false, null]],
        '/blog' => [[['_route' => 'post_blog', '_controller' => 'App\\Controller\\Home::blog'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'post_contact', '_controller' => 'App\\Controller\\Home::contact'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
