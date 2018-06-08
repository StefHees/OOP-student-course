<?php

function my_autoloader($class) {
    include 'classes/' . $class . '.php';
}
spl_autoload_register('my_autoloader');

$pdo = Connection::connect();
$query = new QueryBuilder($pdo);
$students = $query->selectAll('students', 'Student');
foreach($students as $student){
    $student->getInfo();
}
$courses = $query->selectAll('courses', 'Course');
foreach($courses as $course){
    $course->getCourse();
}
$student = new Student();
$student->addStudent('Roy', 24, 'B');
