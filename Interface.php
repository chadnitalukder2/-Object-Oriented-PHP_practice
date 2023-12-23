<?php
    interface UserInterface
    {
        public function  getName();
        public function display();
    }

    class User implements UserInterface
    {
        public $name = "Jone Doe";

        public function getName():string
        {
            return $this->name;
        }
        public function display():void
        {
            echo "This is display <br>";
        }
    }

  $user = new User;
  echo $user->getName()  ;


?>