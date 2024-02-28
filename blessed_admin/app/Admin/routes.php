<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    $router->resource('products', ProductController::class);
    $router->resource('employees', EmployeeController::class);
    $router->resource('locations', LocationController::class);
  
//     Route::middleware(['api', 'auth:sanctum', 'admin'])->group(function () {
//     Route::apiResource('products', ProductController::class);
//     Route::get('products/{id}', [ProductController::class, 'apiShow'])->name('products.show');


});
