<?php

    class User
    {
        public $name = "Nitesh";
        public static $message = "This is message";

        public function display()
        {
            echo "Name is : {$this->name} <br>";
            echo "Message is : ".self::$message."<br>";
        }

        public static function hello()
        {
            (new User)->display();
        }
    }

    $user = new User;
    $user->name = "Watson";

    $user2 = new User;
    $user2->name ="Big Show";

    $user->display();
    $user->display();

    User::hello();

?>