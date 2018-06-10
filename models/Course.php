<?php
/**
 * Created by PhpStorm.
 * User: Stef
 * Date: 07/06/2018
 * Time: 20:39
 */

class Course
{
    protected $id;
    protected $title;
    protected $description;
    protected $date;
    protected $max;
    protected $price;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    public function getCourse(){
        echo $this->title.' '.$this->description.'<br>';
    }

    public function getTitle(){
        echo $this->title;
    }

    public function getDescription(){
        echo $this->description;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @return mixed
     */
    public function getMax()
    {
        return $this->max;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    public function addCourse($title, $description, $date, $max, $price){
        $time = strtotime($date);

        $newformat = date('Y-m-d',$time);

        $insert = [
            'title' => $title,
            'description' => $description,
            'date' => $newformat,
            'max' => $max,
            'price' => $price
        ];
        $pdo = Connection::connect();
        $query = new QueryBuilder($pdo);
        $query->insert('courses', $insert);
    }

    public function getEnrolled(){
        $query = new QueryBuilder(Connection::connect());
        $studentids = $query->selectQuery("SELECT * FROM enrolled WHERE course_id=".$this->id);
        foreach($studentids as $studentid){
            $students[] = $query->selectWhere('students', 'Student', 'id='.$studentid['id']);
        }
        if (isset($students)) {
            return $students;
        }
        else {
            return array();
        }

    }
}