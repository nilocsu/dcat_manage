<?php

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use Dcat\Admin\Admin;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index');
    $router->resource('coupon-card', 'CouponCardController');
    $router->resource('project', 'ProjectController');
    $router->resource('customer', 'CustomerController');
    $router->resource('salary', 'SalaryController');
    $router->resource('records-consumption', 'RecordsConsumptionController');
    $router->resource('staff', 'StaffController');

});
