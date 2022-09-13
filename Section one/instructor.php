<?php
    require "User.php";
    class Instructor extends User{
        private $Hours
    }
    $use=new Instructor;
    echo $use->setage(5);
    echo $use->getage();

?>