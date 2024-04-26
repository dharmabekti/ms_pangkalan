<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->group('cust', function ($r) {
    $r->get('', 'Pelanggan::index', ['as' => 'pelanggan']);
    $r->get('(:any)', 'Pelanggan::form/$1', ['as' => 'form_pelanggan']);
    $r->post('(:any)', 'Pelanggan::save/$1', ['as' => 'save_pelanggan']);
});
