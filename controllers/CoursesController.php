<?php
/**
 * Created by PhpStorm.
 * User: Stef
 * Date: 09/06/2018
 * Time: 16:24
 */

class CoursesController
{
    public function home()
    {
        $pdo = Connection::connect();
        $query = new QueryBuilder($pdo);

        if (isset($_GET['id']) && !empty($_GET['id'])){
            $courses = $query->selectWhere('courses', 'Course', 'id='.$_GET['id']);
            return view('courseDetail', ['courses' => $courses]);
        } else {
            $courses = $query->selectAll('courses', 'Course');
            return view('courses', ['courses' => $courses]);
        }
    }

    public function form(){
        return view('addCourse');
    }

    public function add(){
        $course = new Course();
        $course->addCourse($_POST['title'], $_POST['description'], $_POST['date'], $_POST['max'], $_POST['price']);
        return $this->home();
    }
}