<?php
/*
    function errorHandlder($level,$msg,$file,$line){
        echo "Error level:$level,<br>msg:$msg,<br>file:$file,<br>line:$line";
    }
    set_error_handler("errorHandlder");
    echo $name;
*/

    class stu{
        public $name;
        public function __construct($name){
            $this->name=$name;
        }
    }
    class proj{
        private $stu=[];
        public function addstu(stu $st){
            if(count($this->stu)<4){
                $this->stu[]=$st;
            }else{
                throw new fullExp;
            }
        }
    }
    class fullExp extends Exception{
        public function __construct(){
            $this->message="full student";
        }
    }
    try {
        $P=NEW proj;
        $P->addstu(new stu("mo"));
        $P->addstu(new stu("mo"));
        $P->addstu(new stu("mo"));
        $P->addstu(new stu("mo"));
        $P->addstu(new stu("mo"));
        
    } catch (Exception $th) {
        //throw $th;
        echo $th->getMessage();
    }
    
?>