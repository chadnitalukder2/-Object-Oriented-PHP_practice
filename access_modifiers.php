<?php
#Private = e class e make kora hoy sudu ai class ei use kora jay
#Public = all class e use kora jay
#Protected = same class and child class e use kora jay
#===================================================================

/*class Student{
    //public $name;
    private $name = "Chadni";
    public $roll = 12;

    public function setName(string $name):void
    {
        $this->name = $name;
    }

    public function display():void #bydifault public
    {
        echo "Student Name is: {$this->name} <br>";
        echo "Student Roll is: {$this->roll} <br>";
        $this->test();
        $this->hello();
    }

    private function test():void
    {
        echo "Welcome to Test <br>";
    }
    public function hello()
    {
        echo "Welcome to Hello Function <br>";
    }

}

$std = new Student;
//$std->name = "Jone Doe";
//echo $std->name;
$std->roll = 10;

$std->setName("Puja");
$std->display();
//$std->test();*/
?>

<?php
echo "=================================== <br>";
#========================Protected-===========

class User {
    private   $name = "Chadni";
    protected $roll = "12";

    public function display(){
        echo "Name is : {$this->name} <br>";
        echo "Roll is : {$this->roll} <br>";
    }

    protected function test():void 
    {
        echo "Welcome to test";
    }
}

class Person extends User {
    public function set():void 
    {
        $this->name = "Sarkar";
        $this->roll = "10";
    }

    public function hello():void 
    {
        $this->test();
    }

  
}

$user = new User;
$user->display();

$std = new Person;
$std->set();
echo "<br>";
$std->display();
$std->hello();

?>

