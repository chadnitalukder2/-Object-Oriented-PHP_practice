<?php

    abstract class User
    {
        public abstract function getName();
        public abstract function display();
    }

    class Student extends User
    {
        public $name = "Jone Doe";

        public function getName()
        {
            return $this->name;
        }
        public function display(){
            echo "Welcome to display <br>";
        }

    }
$std = new Student;
$std->display();
echo $std->getName();











?>