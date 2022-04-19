<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/back/test' => [[['_route' => 'back_test_index', '_controller' => 'App\\Controller\\BackTestController::index'], null, ['GET' => 0], null, true, false, null]],
        '/back/test/new' => [[['_route' => 'back_test_new', '_controller' => 'App\\Controller\\BackTestController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/cart' => [[['_route' => 'cart', '_controller' => 'App\\Controller\\CartController::index'], null, null, null, false, false, null]],
        '/delete' => [[['_route' => 'deleteAll', '_controller' => 'App\\Controller\\CartController::delete_cartAll'], null, null, null, false, false, null]],
        '/checkOut' => [[['_route' => 'checkOut', '_controller' => 'App\\Controller\\CartController::checkOut'], null, null, null, false, false, null]],
        '/category' => [[['_route' => 'category_index', '_controller' => 'App\\Controller\\CategoryController::index'], null, ['GET' => 0], null, true, false, null]],
        '/category/new' => [[['_route' => 'category_new', '_controller' => 'App\\Controller\\CategoryController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/client' => [[['_route' => 'client_index', '_controller' => 'App\\Controller\\ClientController::index'], null, ['GET' => 0], null, true, false, null]],
        '/client/new' => [[['_route' => 'client_new', '_controller' => 'App\\Controller\\ClientController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/commande' => [[['_route' => 'commande_index', '_controller' => 'App\\Controller\\CommandeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/commande/new' => [[['_route' => 'commande_new', '_controller' => 'App\\Controller\\CommandeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/commande/searchAjaxCommande' => [[['_route' => 'searchAjaxCommande', '_controller' => 'App\\Controller\\CommandeController::searchAjaxCommande'], null, null, null, false, false, null]],
        '/front/test' => [[['_route' => 'front_test_index', '_controller' => 'App\\Controller\\FrontTestController::index'], null, ['GET' => 0], null, true, false, null]],
        '/front/test/new' => [[['_route' => 'front_test_new', '_controller' => 'App\\Controller\\FrontTestController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'global', '_controller' => 'App\\Controller\\GlobalController::index'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'inscription', '_controller' => 'App\\Controller\\GlobalController::inscription'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\GlobalController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'logout', '_controller' => 'App\\Controller\\GlobalController::logout'], null, null, null, false, false, null]],
        '/pf' => [[['_route' => 'pf_index', '_controller' => 'App\\Controller\\PfController::index'], null, ['GET' => 0], null, true, false, null]],
        '/pf/new' => [[['_route' => 'pf_new', '_controller' => 'App\\Controller\\PfController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/pf/searchResajax' => [[['_route' => 'searchResajax', '_controller' => 'App\\Controller\\PfController::searchResajax'], null, null, null, false, false, null]],
        '/produit' => [[['_route' => 'produit_index', '_controller' => 'App\\Controller\\ProduitController::index'], null, ['GET' => 0], null, true, false, null]],
        '/produit/new' => [[['_route' => 'produit_new', '_controller' => 'App\\Controller\\ProduitController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reclamation' => [[['_route' => 'reclamation_index', '_controller' => 'App\\Controller\\ReclamationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reclamation/new' => [[['_route' => 'reclamation_new', '_controller' => 'App\\Controller\\ReclamationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/back/test/([^/]++)(?'
                    .'|(*:191)'
                    .'|/edit(*:204)'
                    .'|(*:212)'
                .')'
                .'|/add_cart/([^/]++)(*:239)'
                .'|/re(?'
                    .'|move/([^/]++)(*:266)'
                    .'|clamation/([^/]++)(?'
                        .'|(*:295)'
                        .'|/edit(*:308)'
                        .'|(*:316)'
                    .')'
                .')'
                .'|/delete/([^/]++)(*:342)'
                .'|/c(?'
                    .'|ategory/([^/]++)(?'
                        .'|(*:374)'
                        .'|/edit(*:387)'
                        .'|(*:395)'
                    .')'
                    .'|lient/([^/]++)(?'
                        .'|(*:421)'
                        .'|/edit(*:434)'
                        .'|(*:442)'
                    .')'
                    .'|ommande/(?'
                        .'|show/([^/]++)(*:475)'
                        .'|([^/]++)/edit(*:496)'
                        .'|delete/([^/]++)(*:519)'
                    .')'
                .')'
                .'|/front/test/([^/]++)(?'
                    .'|(*:552)'
                    .'|/edit(*:565)'
                    .'|(*:573)'
                .')'
                .'|/p(?'
                    .'|f/(?'
                        .'|show/([^/]++)(*:605)'
                        .'|([^/]++)/edit(*:626)'
                        .'|delete/([^/]++)(*:649)'
                    .')'
                    .'|roduit/([^/]++)(?'
                        .'|(*:676)'
                        .'|/edit(*:689)'
                        .'|(*:697)'
                    .')'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        191 => [[['_route' => 'back_test_show', '_controller' => 'App\\Controller\\BackTestController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        204 => [[['_route' => 'back_test_edit', '_controller' => 'App\\Controller\\BackTestController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        212 => [[['_route' => 'back_test_delete', '_controller' => 'App\\Controller\\BackTestController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        239 => [[['_route' => 'add_cart', '_controller' => 'App\\Controller\\CartController::add_cart'], ['id'], null, null, false, true, null]],
        266 => [[['_route' => 'remove_cart', '_controller' => 'App\\Controller\\CartController::remove_cart'], ['id'], null, null, false, true, null]],
        295 => [[['_route' => 'reclamation_show', '_controller' => 'App\\Controller\\ReclamationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        308 => [[['_route' => 'reclamation_edit', '_controller' => 'App\\Controller\\ReclamationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        316 => [[['_route' => 'reclamation_delete', '_controller' => 'App\\Controller\\ReclamationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        342 => [[['_route' => 'delete_cart', '_controller' => 'App\\Controller\\CartController::delete_cart'], ['id'], null, null, false, true, null]],
        374 => [[['_route' => 'category_show', '_controller' => 'App\\Controller\\CategoryController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        387 => [[['_route' => 'category_edit', '_controller' => 'App\\Controller\\CategoryController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        395 => [[['_route' => 'category_delete', '_controller' => 'App\\Controller\\CategoryController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        421 => [[['_route' => 'client_show', '_controller' => 'App\\Controller\\ClientController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        434 => [[['_route' => 'client_edit', '_controller' => 'App\\Controller\\ClientController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        442 => [[['_route' => 'client_delete', '_controller' => 'App\\Controller\\ClientController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        475 => [[['_route' => 'commande_show', '_controller' => 'App\\Controller\\CommandeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        496 => [[['_route' => 'commande_edit', '_controller' => 'App\\Controller\\CommandeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        519 => [[['_route' => 'commande_delete', '_controller' => 'App\\Controller\\CommandeController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        552 => [[['_route' => 'front_test_show', '_controller' => 'App\\Controller\\FrontTestController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        565 => [[['_route' => 'front_test_edit', '_controller' => 'App\\Controller\\FrontTestController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        573 => [[['_route' => 'front_test_delete', '_controller' => 'App\\Controller\\FrontTestController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        605 => [[['_route' => 'pf_show', '_controller' => 'App\\Controller\\PfController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        626 => [[['_route' => 'pf_edit', '_controller' => 'App\\Controller\\PfController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        649 => [[['_route' => 'pf_delete', '_controller' => 'App\\Controller\\PfController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        676 => [[['_route' => 'produit_show', '_controller' => 'App\\Controller\\ProduitController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        689 => [[['_route' => 'produit_edit', '_controller' => 'App\\Controller\\ProduitController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        697 => [
            [['_route' => 'produit_delete', '_controller' => 'App\\Controller\\ProduitController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
