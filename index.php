<?php
require_once('vendor/autoload.php');

Router::load('routes.php')
    ->direct(Request::uri(), Request::method());

/*
$query = new QueryBuilder($pdo);
$course = new Course();
$course->addCourse('Laravel', 'This is a Laravel Course.', '10-10-2018', 50, 1000.00);
$students = $query->selectAll('students', 'Student');
foreach($students as $student){
    $student->getInfo();
}
$courses = $query->selectAll('courses', 'Course');
foreach($courses as $course){
    $course->getCourse();
}
//$student = new Student();
//$student->addStudent('Roy', 24, 'B');

include_once('views/courses.view.php');*/