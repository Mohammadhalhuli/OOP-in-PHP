<?php require "product.php";
    class Mobile extends product{
       
        public function setDiscunt(){
            $this->newprice = $this->price-($this->price * 0.10);
        }
        public function getDiscunt(){
            echo "mobli name $this->name , price $this->price,
            qty $this->qty";
        }
    }
?>