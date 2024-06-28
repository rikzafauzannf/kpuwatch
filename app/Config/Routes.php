<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'AuthController::index');
$routes->post('/login', 'AuthController::login');

$routes->post('/user', 'UserController::store');
// $routes->post('/useredit', 'UserController::update');
$routes->post('/useredit/(:any)', 'UserController::update/$1');
$routes->post('/usersdelete/(:any)', 'UserController::delete/$1');

$routes->group('logout', function ($routes) {
    $routes->get('/', 'LogoutController::index');
});

// dashboard
$routes->get('/dashboard', 'Dashboard::index');
$routes->get('/dashboardquickcount', 'Dashboard::DashboardQuickCount');
$routes->get('/dashboardrealcount', 'Dashboard::DashboardRealCount');
$routes->get('/dashboardqckota', 'Dashboard::DashboardQcKota');

// kelurahan
$routes->get('/datatps', 'KelurahanController::dataTps');

// userManagement
$routes->get('/usermanagement', 'UserController::index');