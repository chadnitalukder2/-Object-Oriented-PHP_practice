<?php
#========================constructor================
class Student{
    public $name ;
    public $roll;

    function __construct(string $name, int $roll = 10)
    {
        echo "Object Created <br>";
        //$this->name = "Jone Doe";
        $this->name = $name ;
        $this->roll = $roll;
    }

    function display(): void 
    {
        echo "Name is {$this->name} <br>";
        echo "Roll is {$this->roll}";
    }
}
$std = new Student("Jone Sina", 23);
$std->display();

echo "<br><br>";

$std2 = new Student("Nitesh Dash");
$std2->display();

?>
<?php
#====================Destructor==========================


?>