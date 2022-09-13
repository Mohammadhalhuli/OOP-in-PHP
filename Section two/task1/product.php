<?php
    class Product{
        private $name,$price,$qty;
        public function __construct($name,$price,$qty){
            $this->name=$name;
            $this->price=$price;
            $this->qty=$qty;
        }
        public abstract function setDiscunt();
        public abstract function getDiscunt();
    }
?>