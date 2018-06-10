<?php
/**
 * Created by PhpStorm.
 * User: Stef
 * Date: 09/06/2018
 * Time: 16:25
 */

// Handles getting info and sending it into the views.
class StudentController
{
    public function home(){
        $query = new QueryBuilder(Connection::connect());
        $students = $query->selectAll('students', 'Student');
        return view('students', ['students' => $students ]);
    }

    public function form(){
        return view('addStudent');
    }

    public function add(){
        $student = new Student();
        $student->addStudent($_POST['name'], $_POST['age'], $_POST['class']);
        return $this->home();
    }

    public function enroll(){
        $query = new QueryBuilder(Connection::connect());
        $students = $query->selectAll('students', 'Student');
        $courses = $query->selectAll('courses', 'Course');
        return view('enrollStudent', ['students' => $students, 'courses' => $courses]);
    }

    public function storeEnroll(){
        $query = new QueryBuilder(Connection::connect());
        $insert = [
            'student_id' => $_POST['student'],
            'course_id' => $_POST['course']
        ];
        $query->insert('enrolled', $insert);
        return $this->home();
    }
}