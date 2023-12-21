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
    public $price;

    function set($name, $color, $price = 2000)
    {
        $this->name  = $name;
        $this->color = $color;
        $this->price = $price;
    }

    function display()
    {
        echo "Name is : {$this->name} <br>";
        echo "Color is : {$this->color} <br>";
        echo "Price is : {$this->price} <br>";
    }
   
}

$vehicle = new Vehicle();

//$vehicle->name = " Bus";
//$vehicle->color=" Blue";
//echo "Name is :".$vehicle->name."<br>";
//echo "Color is :".$vehicle->color."<br>";

$vehicle->display();

echo "<br>";
$vehicle->set("BMW", "White");
$vehicle->display();

echo "<br>";
$vehicle->set("BMW", "White", 9000);
$vehicle->display();

?>