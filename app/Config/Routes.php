<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */

// Public Routes
$routes->get('/', 'Home::index');
$routes->get('menu', 'Menu::index');

// Admin Auth Routes (Guest)
$routes->get('admin/login', 'Admin\Auth::login');
$routes->post('admin/login', 'Admin\Auth::attemptLogin');
$routes->get('admin/logout', 'Admin\Auth::logout');

// Admin Protected Routes
$routes->group('admin', ['filter' => 'adminAuth'], static function ($routes) {
    $routes->get('/', 'Admin\Dashboard::index');
    $routes->get('dashboard', 'Admin\Dashboard::index');

    // Menu CRUD
    $routes->get('menu', 'Admin\Menu::index');
    $routes->get('menu/create', 'Admin\Menu::create');
    $routes->post('menu', 'Admin\Menu::store');
    $routes->get('menu/edit/(:num)', 'Admin\Menu::edit/$1');
    $routes->post('menu/update/(:num)', 'Admin\Menu::update/$1');
    $routes->get('menu/delete/(:num)', 'Admin\Menu::delete/$1');
    $routes->post('menu/delete/(:num)', 'Admin\Menu::delete/$1');
});
