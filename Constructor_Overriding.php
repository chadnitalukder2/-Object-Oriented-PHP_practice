<?php
    class User
    {
        public $name;
        public $address;

        public function __construct(string $name, string $address)
        {       
            $this->name    = $name;
            $this->address = $address;
        }
        public function display():void
        {
            echo "Name is : {$this->name} <br>";
            echo "Address is : {$this->address} <br>";
        }
    }

    class Student extends User
    {
        public $roll;

        public function __construct (string $name, string $address, int $roll)
        {
            parent::__construct($name, $address);
            // $this->name      = $name;
            // $this->address   = $address;
            $this->roll      = $roll;
        }

        public function getRoll():int
        {
            return $this->roll;
        }
    }


    $std = new Student("Chadni", "Sylhet", 100);
    $std->display();
    echo $std->getRoll();

echo "<br>";

    // $user = new User("Puja", "Derai");
    // $user->display();
?>