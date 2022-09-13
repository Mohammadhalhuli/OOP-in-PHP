<?php 
    class Sum{
        private $number;
        public function setnum($num){
            $this->number=$num;
            return $this;
        }
        public function addone(){
            $this->number++;
            return $this;
        }
        public function addtwo(){
            $this->number++;
            return $this;
        }
        public function getnum(){
            echo $this->number;
        }
    }
    $u=new Sum;
    $u->setnum(5)->addone()->addtwo()->getnum();
?>