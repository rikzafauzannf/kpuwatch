<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'AuthController::index');
// dashboard
$routes->get('/dashboard', 'Dashboard::index');
$routes->get('/dashboardqckota', 'Dashboard::DashboardQcKota');

