<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Auth\AuthController as Auth;
use App\Controllers\Dashboard\DashboardController as Dashboard;
use App\Controllers\Master\ObatController as Obat;
use App\Controllers\Master\MasterController as Master;
use App\Controllers\Master\CategoryController as Category;
use App\Controllers\Master\UnitsController as Units;
use App\Controllers\Master\LocationController as Location;
use App\Controllers\Master\SupplierController as Supplier;
use App\Controllers\Master\CustomerController as Customer;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', [Auth::class, 'index']);
$routes->get('/create-account', [Auth::class, 'signup']);
$routes->group('auth', static function ($routes) {
  $routes->post('signup', [Auth::class, 'create_account']);
  $routes->post('signin', [Auth::class, 'login']);
});


$routes->group('dashboard', static function ($routes) {
  $routes->get('index', [Dashboard::class, 'index']);
  $routes->get('signout', [Auth::class, 'logout']);
  $routes->group('master', static function ($routes) {
    $routes->get('drug', [Obat::class, 'index']);
    $routes->get('(:alpha)', [Master::class, 'index/$1']);
  });
});


$routes->group('api', static function ($routes) {
  $routes->group('master', static function ($routes) {
    $routes->group('categories', static function ($routes) {
      $routes->get('get', [Category::class, 'index']);
      $routes->post('store', [Category::class, 'store']);
      $routes->get('edit', [Category::class, 'edit']);
      $routes->put('update', [Category::class, 'update']);
      $routes->delete('delete', [Category::class, 'destroy']);
    });

    $routes->group('units', static function ($routes) {
      $routes->get('get', [Units::class, 'index']);
      $routes->post('store', [Units::class, 'store']);
      $routes->get('edit', [Units::class, 'edit']);
      $routes->put('update', [Units::class, 'update']);
      $routes->delete('delete', [Units::class, 'destroy']);
    });

    $routes->group('location', static function ($routes) {
      $routes->get('get', [Location::class, 'index']);
      $routes->post('store', [Location::class, 'store']);
      $routes->get('edit', [Location::class, 'edit']);
      $routes->put('update', [Location::class, 'update']);
      $routes->delete('delete', [Location::class, 'destroy']);
    });

    $routes->group('suppliers', static function ($routes) {
      $routes->get('get', [Supplier::class, 'index']);
      $routes->post('store', [Supplier::class, 'store']);
      $routes->get('edit', [Supplier::class, 'edit']);
      $routes->put('update', [Supplier::class, 'update']);
      $routes->delete('delete', [Supplier::class, 'destroy']);
    });
    $routes->group('customers', static function ($routes) {
      $routes->get('get', [Customer::class, 'index']);
      $routes->post('store', [Customer::class, 'store']);
      $routes->get('edit', [Customer::class, 'edit']);
      $routes->put('update', [Customer::class, 'update']);
      $routes->delete('delete', [Customer::class, 'destroy']);
      $routes->get('code', [Customer::class, 'code']);
    });
    $routes->group('drugs', static function ($routes) {
      $routes->get('get', [Obat::class, 'getObat']);
      $routes->get('edit', [Obat::class, 'edit']);
      $routes->put('update', [Obat::class, 'update']);
      $routes->post('store', [Obat::class, 'store']);
      $routes->delete('delete', [Obat::class, 'destroy']);
    });
  });
});
