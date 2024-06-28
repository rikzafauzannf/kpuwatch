<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'AuthController::index');
// dashboard
$routes->get('/dashboard', 'Dashboard::index');
$routes->get('/dashboardquickcount', 'Dashboard::DashboardQuickCount');
$routes->get('/dashboardrealcount', 'Dashboard::DashboardRealCount');
$routes->get('/dashboardqckota', 'Dashboard::DashboardQcKota');

// kelurahan
$routes->get('/datatps', 'KelurahanController::dataTps');

// userManagement
$routes->get('/usermanagement', 'UserController::index');
