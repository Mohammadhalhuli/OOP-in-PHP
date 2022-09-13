<?php 
     class Oprations{
        public static $name="محمد";
        public function filter($str){
            return htmlspecialchars(trim($str));
        }
        public static function uppercaseFirst($str){
            return ucfirst(trim($str));
        }
        public function testname(){
            echo self::$name;
        }
     }
    
    //echo  Oprations::uppercaseFirst("moomoo");
    //echo  Oprations::$name;
    $O=new Oprations;
     $O->testname();
?>