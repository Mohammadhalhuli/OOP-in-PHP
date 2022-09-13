<?php
    namespace name;
    class Rquest{
        public function getname($key=null){
            if($key==null){
                return $_GET;
            }
                return $_GET[$key];

        }
    }
?>