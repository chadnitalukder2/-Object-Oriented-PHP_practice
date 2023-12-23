<?php

   /* interface A
    {
        public function get();
    }
    interface B
    {
        public function show();
    }

    class User implements A,B
    {
        public function get()
        {
            echo "This is get function <br>";
        }
        public function show()
        {
            echo "This is show function <br>";
        }

    }

    $user = new User;
    $user->get();
    $user->show();
*/
?>

<?php
    abstract class A 
    {
        public abstract function get();
    }
    abstract class B 
    {
        public abstract function show();
    }
   
 class User extends A 
 {
    public function get() 
    {
        echo "This get function of Abastract. <br>";
    }
 }

$user = new User;
$user->get();

?>