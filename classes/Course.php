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

    public function GetCourse(){
        echo $this->title.' '.$this->description.'<br>';
    }
}