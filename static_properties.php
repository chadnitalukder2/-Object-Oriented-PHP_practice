<?php
    class User 
    {
        public static $message = "Hello world";

        public function display()
        {
            echo User:: $message."<br>";
            echo self:: $message."<br>";
        }

        public function setMessage(string $message)
        {
            self::$message = $message;
        }
    }

    class Student extends User{

    }

    echo User:: $message;

    echo "<br>";
    echo User:: $message = "This is new Message";

    echo "<br>";
    $user = new User;
    $user->display();

    echo "<br>";
    $user->setMessage("Welcome to setMessage function");
    $user->display();

    echo "<br>";
    echo User:: $message;

    echo "<br>";
    echo Student::$message;
    Student::$message="Change by Student";

    
    echo "<br>";
    echo User:: $message;



?>