<?php
 trait User 
 {
    public function get()
    {
        echo "Welcome to User Trait. <br>";
    }
 }
 trait Person  
 {
    private $name = "Jone Doe";

    public function showSecsson()
    {
        echo "Welcome to show Class. <br>";
    }

    public function showName()
    {
        echo "Name is : {$this->name}. <br>";
    }
 }

   

 class Student 
 {
    use User, Person;

    public function display()
    {
        $this->showSecsson();
        $this->showName();
    }
 }

$std = new Student;
$std->get();
// $std->showClass();
// $std->showName();
$std->display();






?>