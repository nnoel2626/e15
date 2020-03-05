<?php


class Student
{
   
    # Properties. e.g.:
    private $id;

    public function __constructor($id)
    {
        $this->id = $id;
    }
   

    # Methods. e.g.:
    public function getId()
    {
        return $id;
    }
}


$student = new Student(99);

$id = $student->getId();




