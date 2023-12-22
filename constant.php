<?php

    class User 
    {
        const MESSAGE = "Welcome to User Class";
        public $name = "JONE DOE";

        public function display()
        {
            echo $this->name;
            echo self::MESSAGE;
            echo User::MESSAGE;
        }
    }

    echo User::MESSAGE;
echo "<br>";
    $user = new User;
    $user->display();

?>