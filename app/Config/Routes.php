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
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/ceklist-rak', 'Ceklist::index');

// route juklak
$routes->get('/juklak', 'Juklak::index');
$routes->post('/juklak/uploadGambar', 'Juklak::uploadGambar');
$routes->get('/juklak/upload', 'Juklak::index');
$routes->get('/juklak/form_add', 'Juklak::add');
$routes->post('/juklak/add', 'Juklak::save');
$routes->post('/juklak/edit/(:num)', 'Juklak::update/$1');
$routes->delete('/juklak/delete/(:num)', 'Juklak::delete/$1');

// route logbook
$routes->get('/logbook', 'LogBook::index');
$routes->post('/logbook/add', 'LogBook::add');
$routes->post('/logbook/edit/(:num)', 'LogBook::update/$1');
$routes->post('/logbook/updateStatus/(:num)', 'LogBook::updateStatus/$1');
$routes->delete('/logbook/delete/(:num)', 'LogBook::delete/$1');

// route rak-it
$routes->get('/rak-it', 'RakIT::index');
$routes->post('/rak-it/add', 'RakIT::add');
$routes->post('/rak-it/edit/(:num)', 'RakIT::update/$1');
$routes->post('/rak-it/updateStatus/(:num)', 'RakIT::updateStatus/$1');
$routes->delete('/rak-it/delete/(:num)', 'RakIT::delete/$1');

// route data checklist rak IT
$routes->get('/data-checklist-rakIT', 'CheckListRakIT::index');
$routes->post('/CheckListRakIT/add', 'CheckListRakIT::add');
$routes->post('/CheckListRakIT/edit/(:num)', 'CheckListRakIT::update/$1');
$routes->post('/CheckListRakIT/updateStatus/(:num)', 'CheckListRakIT::updateStatus/$1');
$routes->delete('/CheckListRakIT/delete/(:num)', 'CheckListRakIT::delete/$1');

// route qr-code rak IT
$routes->get('/qr-code', 'QrRakIT::index');
$routes->post('/qr-code/add', 'QrRakIT::add');
$routes->post('/qr-code/save', 'QrRakIT::save');
$routes->post('/qr-code/edit/(:num)', 'QrRakIT::update/$1');
$routes->delete('/qr-code/delete/(:num)', 'QrRakIT::delete/$1');

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
