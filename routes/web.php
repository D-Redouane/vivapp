<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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

$router->get('/teachers','TeacherController@index');
$router->post('/teachers','TeacherController@store');
$router->get('/teachers/{teachers}','TeacherController@show');
$router->delete('/teachers/{teachers}','TeacherController@destroy');


$router->get('/students','StudentController@index');
$router->post('/students','StudentController@store');
$router->get('/students/{students}','StudentController@show');
$router->delete('/students/{students}','StudentController@destroy');


$router->get('/courses','CourseController@index');
$router->get('/courses/{courses}','CourseController@show');


$router->get('/teachers/{teachers}/courses','TeacherCourseController@index');
$router->post('/teachers/{teachers}/courses','TeacherCourseController@store');
$router->delete('/teachers/{teachers}/courses/{courses}','TeacherCourseController@destroy');


$router->get('/courses/{courses}/students','StudentController@index');
$router->post('/courses/{courses}/students/{students}','StudentController@store');
$router->delete('/courses/{courses}/students/{students}','StudentController@destroy');

