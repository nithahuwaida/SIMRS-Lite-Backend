<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

// $router->get('/', function () use ($router) {
//     return $router->app->version();
// });

$router->get('/user', ['uses' => 'UserController@index']);
$router->post('/user', 'UserController@store');
$router->get('/role', ['uses' => 'RoleController@index']);
$router->post('/role', 'RoleController@store');
$router->get('/polyclinic', 'PolyclinicController@index');
$router->post('/polyclinic', 'PolyclinicController@store');
$router->get('/patient', 'PatientController@index');
$router->post('/patient', 'PatientController@store');