<?php

    class User 
    {
        public $name;
        public $address;

        public function set(string $name, string $address):void
        {
            $this->name    = $name;
            $this->address = $address;
        }

        public function display()
        {
            echo "Name is : {$this->name} <br>";
            echo "Address is : {$this->address} <br>";
        }

    }

    class Student extends User{
        public $roll;

        public function set(string $name, string $address, int $roll = 12):void
        {
            parent::set($name, $address);
            //$this->name = $name;
            //$this->address = $address;
            $this->roll = $roll;
        }

        public function  display()
        {
            echo "Student Information. <br>";
            echo "Roll is : $this->roll <br>";
            parent::display(); #parent er display function show korbe
            
        }

    }
    class Teacher extends User{
        public function  display()
        {
            echo "Teacher Information. <br>";
           parent::display(); #parent er display function show korbe
        }
    }
    


    $std = new Student;
    $std->set("Nitesh", "Sylhet");
    $std->display();

    echo "<br>";
    $teacher = new Teacher;
    $teacher->set("Puja", "Deri");
    $teacher->display();
?>