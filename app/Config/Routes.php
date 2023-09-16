<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Auth\AuthController as Auth;
use App\Controllers\Dashboard\DashboardController;
use App\Controllers\Master\ObatController;
use App\Controllers\Master\MasterController;
use App\Controllers\Master\CategoryController;
use App\Controllers\Master\UnitsController;
use App\Controllers\Master\LocationController;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', [Auth::class, 'index']);
$routes->get('/create-account', [Auth::class, 'signup']);
$routes->group('auth', static function ($routes) {
  $routes->post('signup', [Auth::class, 'create_account']);
  $routes->post('signin', [Auth::class, 'login']);
  $routes->get('signout', [Auth::class, 'logout']);
});


$routes->group('dashboard', static function ($routes) {
  $routes->get('index', [DashboardController::class, 'index']);

  $routes->group('master', static function ($routes) {
    $routes->get('drug', [ObatController::class, 'index']);
    $routes->get('c/(:alpha)', [MasterController::class, 'masterUnits/$1']);
    $routes->get('s/(:alpha)', [MasterController::class, 'masterClient/$1']);
    $routes->get('d/(:alpha)', [MasterController::class, 'masterPartner/$1']);
  });
});


$routes->group('master', static function ($routes) {

  $routes->group('categories', static function ($routes) {
    $routes->get('get-all', [CategoryController::class, 'ajax_get_category']);
    $routes->post('store', [CategoryController::class, 'ajax_store_category']);
    $routes->get('edit', [CategoryController::class, 'ajax_form_category']);
    $routes->put('update', [CategoryController::class, 'ajax_update_category']);
    $routes->delete('delete', [CategoryController::class, 'ajax_delete_category']);
  });

  $routes->group('units', static function ($routes) {
    $routes->get('get-all', [UnitsController::class, 'ajax_get_unit']);
    $routes->post('store', [UnitsController::class, 'ajax_store_unit']);
    $routes->get('edit', [UnitsController::class, 'ajax_form_unit']);
    $routes->put('update', [UnitsController::class, 'ajax_update_unit']);
    $routes->delete('delete', [UnitsController::class, 'ajax_delete_unit']);
  });

  $routes->group('location', static function ($routes) {
    $routes->delete('delete', [LocationController::class, 'ajax_delete_location']);
    $routes->get('edit', [LocationController::class, 'ajax_form_location']);
    $routes->put('update', [LocationController::class, 'ajax_update_location']);
    $routes->get('get-all', [LocationController::class, 'ajax_get_location']);
    $routes->post('store', [LocationController::class, 'ajax_store_location']);
  });

  $routes->group('drugs', static function ($routes) {
    $routes->post('store', [ObatController::class, 'store']);
  });
});
