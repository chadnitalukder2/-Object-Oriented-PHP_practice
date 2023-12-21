<?php
class Vehicle{
    public $brand;

    function display():void
    {
        echo "This is a vehicle";
    }
}

class Car extends Vehicle{

    function test():void
    {
        echo "This is test function <br>";
    }
}

class Bus extends Vehicle{
    function Hello(){
        echo "This is hello function";
    }
}

$car = new Car();
$car->display();
echo "<br>";

$car->test();

$car->brand = "BMW";
echo $car->brand."<br>";

$bus = new Bus;
$bus->Hello();

?>