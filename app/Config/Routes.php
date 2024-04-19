<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->group('cust', function ($r) {
    $r->get('', 'Pelanggan::index', ['as' => 'pelanggan']);
});
