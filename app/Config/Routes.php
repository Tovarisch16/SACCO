<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Login::index');
$routes->get('home', 'Home::index');
$routes->get('members', 'Members::index');
$routes->get('payments', 'Payments::index');
$routes->get('loans', 'Loans::index');
$routes->get('borrowers', 'Borrowers::index');
