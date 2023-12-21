<?php
#class ClassName{}

/*class Foo{
    public $color;

    function display(){
        echo "Welcome to Bangladesh <br>";
    }

    function setColor($color){
        $this->color = $color;
    }

    function getColor(){
        echo "Color is : {$this->color}";
    }

}
$obj = new Foo();
$obj->display();
$obj->color = "Red";
echo $obj->color. '<br>';
$obj->getColor();*/

?>
<?php
#=======================Class Properties and Methods======================
class Vehicle{
    public $name = "Corola";
    public $color = "Red";

    function set($name, $color){
        $this->name = $name;
        $this->color = $color;
    }

    function display(){
        echo "Name is : {$this->name} <br>";
        echo "Color is : {$this->color} <br>";
    }
   
}

$vehicle = new Vehicle();

//$vehicle->name = " Bus";
//$vehicle->color=" Blue";
//echo "Name is :".$vehicle->name."<br>";
//echo "Color is :".$vehicle->color."<br>";

$vehicle->set("BMW", "White");
$vehicle->display();

?>