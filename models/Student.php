<?php
/**
 * Created by PhpStorm.
 * User: Stef
 * Date: 07/06/2018
 * Time: 18:04
 */


// The student class handles everything student related

class Student
{
    protected $id;
    protected $name;
    protected $age;
    protected $class;

    public function __construct()
    {

    }

    public function addStudent($name, $age, $class)
    {
        $insert = [
            'name' => $name,
            'age' => $age,
            'class' => $class
        ];
        $pdo = Connection::connect();
        $query = new QueryBuilder($pdo);
        $query->insert('students', $insert);
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getClass()
    {
        return $this->class;
    }

    public function getCourses(){
        $query = new QueryBuilder(Connection::connect());
        $courseids = $query->selectQuery("SELECT * FROM enrolled WHERE student_id=".$this->id);
        if (isset($courseids)) {
            foreach ($courseids as $course) {
                $courses[] = $query->selectQuery("SELECT * FROM courses WHERE id=" . $course['course_id']);
            }
            if (isset($courses)) {
                return $courses;
            } else {
                return $course = array();
            }

        } else {
            return $courses = array();
        }

    }

}