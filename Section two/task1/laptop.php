<?php require "product.php";
    class Laptop extends product{
    
        public function setDiscunt(){
            $this->newprice = $this->price-($this->price * 0.5);
        }
        public function getDiscunt(){
            echo "mobli name $this->name , price $this->price,
            qty $this->qty";
        }  
    }
?>