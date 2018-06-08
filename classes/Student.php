<?php
/**
 * Created by PhpStorm.
 * User: Stef
 * Date: 07/06/2018
 * Time: 18:04
 */

class Student
{
    protected $id;
    protected $name;
    protected $age;

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

    public function getInfo(){
        echo $this->age;
    }
}