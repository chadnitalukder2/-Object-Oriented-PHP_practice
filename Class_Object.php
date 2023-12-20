<?php
#========================class and object=================
#class ClassName{}

class Foo{
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
$obj->getColor();
?>