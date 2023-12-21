<?php
//class A $a e data type kina ta bujay
 class A{
    public $name;
 }

 class B{
    public $name;
 }

$a = new A();
$b = new B;

/*var_dump($a instanceof A);
var_dump($a instanceof B);*/

$obj = new A();
$obj2 = new B();

if($obj instanceof B){
    echo "This is a object of class A";
}
else{
    echo "This is not a object of class A ";
}


?>