<?php

class User{

    public $name = "Jone doe";

    function display() : void 
    {
        echo "This is User <br>";
    }
}

class SchoolUser extends User{
    function text():void
    {
        echo "Welcome to our School";
    }
}

class Student extends SchoolUser
{
    function name():void
    {
        echo "This is Student name <br>";
    }

}



$sUser = new SchoolUser;

//$sUser->display();
//$sUser->text();

$std = new Student;
$std->display();
$std->text();
$std->name();
echo $std->name;



?>