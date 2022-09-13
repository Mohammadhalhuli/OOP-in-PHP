<?php 
    class User{
        public function getTest(){
            echo "from user ";
        }
    }
    class A extends User {
        public function getTest(){
            echo "from A";
        }
    }
?>