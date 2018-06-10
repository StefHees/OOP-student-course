<?php
/**
 * Created by PhpStorm.
 * User: Stef
 * Date: 09/06/2018
 * Time: 11:43
 */


function view($name, $data = [])
{
    extract($data);
    return require "views/{$name}.view.php";
}
/**
 * Redirect to a new page.
 *
 * @param  string $path
 */
function redirect($path)
{
    header("Location: /{$path}");
}

$router->get('', 'CoursesController@home');
$router->get('addcourse', 'CoursesController@form');
$router->post('addcourse', 'CoursesController@add');

$router->get('students', 'StudentController@home');
$router->get('addstudent', 'StudentController@form');
$router->post('addstudent', 'StudentController@add');

$router->get('enroll', 'StudentController@enroll');
$router->post('enroll', 'StudentController@storeEnroll');