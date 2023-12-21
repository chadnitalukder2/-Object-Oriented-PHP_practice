<?php
class Student{
    public $name;
    public $roll;

    function getName():string
    {
        return $this->name;
    }

    function getRoll():int 
    {
        return $this->roll;
    }
    function display():void
    {
        echo "Name is ".$this->getName()."<br>";
        echo "Roll is ".$this->getRoll()."<br>";

    }

}

$std = new Student;
$std->name = "Jone doe";
$std->roll = "332";
//echo $std->getName();
//echo "<br>";
//echo $std->getRoll();
//echo "<br>";
$std->display();

$std2 = new Student;
$std2->name = "Mamun Sarkar";
echo $std2->getName();

?>