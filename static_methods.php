<?php

    class User 
    {

        public $name = "Chadni Talukder";
        public static $message = "This is a message";

        public static function display()
        {
            $obj = new User;
            echo "Welcome to User Class <br>";
            echo "Name is : {$obj->name} <br>";
            echo User::$message;
        }
    }
    class Student extends User
    {

    }

    User::display();
echo "<br>";
Student::display();

   /* $user = new User;
    $user->display();*/


?>