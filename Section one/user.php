<?php
   /* class User{
        public int $id;
        public string$name;
        public int $age;
        public bool $isadmin=false;
        
        //public function welcome($name){
        //    return "Hi"." ".$name;
       // }
        public function welcome(){
            return "Hi"." ".$this->name;
        }
        public function upgrade(){
            return $this->isadmin=1;
        }
        public function updatename($newName){
            return $this->name=$newName;
        }
        public function __construct($id,$name,$age,$isadmin){
            $this->id=$id;
            $this->naem=$name;
            $this->age=$age;
            $this->isadmin=$isadmin;

        }
        //-------------------
        private int $id;
        private string $name;
        private int $age;
        public function setage($age){
            if($age<0){
                return 0;
            }
            $this->age=$age;
        }
        public function getage(){
            return $this->age;
        }
        public function __construct(){
            return "Hi";
        }
    }

    */
    //$use=new User(11,"mo",22,true);
    //print_r($use);
    /*
    print_r($use);

    $use->name="Mohammad";
    //$use->name=$_SESSION['user'];
    $use->id=2;
    $use->age=20;
    //print_r($use);
    
    $use1=new User;

    $use1->name="MO";
    $use1->isadmin=true;
    $use1->pass=123;//!!!!!!!!
    //print_r($use);
    //echo $use1->welcome();
    print_r($use1);
    $use1->upgrade();
    echo "<pre>";
    $use1->updatename("momomomomo");
    print_r($use1);*/

/*
    $use=new User;
    echo $use->setage(-55);
    echo $use->getage();

*/

/*
    class User{
        private $id;
        public $name;
        private  $age;
        public function __construct($id,$name,$age){
            $this->id=$id;
            $this->naem=$name;
            $this->age=$age;
        }
        public function welcom(){
            echo "welcome "." ".$this->name;
        }
    }

     */

    abstract class User{
        private $id;
        public $name;
        private  $age;
        public function __construct($id,$name,$age){
            $this->id=$id;
            $this->naem=$name;
            $this->age=$age;
        }
        public abstract function welcom();
    }
?>