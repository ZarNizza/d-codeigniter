<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Pages::index', ['as' => 'ci_base']);
$routes->post('news/update/(:segment)', 'News::update/$1', ['as' => 'n_up']);
$routes->get('news/delete/(:segment)', 'News::delete/$1', ['as' => 'n_del']);
$routes->get('news/edit/(:segment)', 'News::edit/$1', ['as' => 'n_ed']);
$routes->match(['get', 'post'], 'news/create', 'News::create', ['as' => 'n_cre']);
$routes->get('news/(:segment)', 'News::view/$1', ['as' => 'n_view']);
$routes->get('news', 'News::index', ['as' => 'n_base']);
$routes->get('pages/(:segment)', 'Pages::viewpage/$1');
$routes->get('pages', 'Pages::index', ['as' => 'p_base']);
// $routes->get('/(:segment)', 'Pages::viewpage/$1');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
