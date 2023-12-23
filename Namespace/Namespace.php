<?php
require "user.php";
require "student.php";

use App\User; #namespace use
use School\User as StdUser;
use School\Student; # namespace diye function er name dite hoy

$user = new User;
$user->get();

$user2 = new StdUser;
//$user2 = new  School\User;
$user2->get();

$std = new Student;
$std->display();




?>