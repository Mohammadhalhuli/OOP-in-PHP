<?php
namespace Test;
class Request {
    public function get($key=null){
        if($key==null){
            return $_GET;
        }return $_GET[$key];
    }
    public function post($key=null){
        if($key==null){
            return $_POST;
        }return $_POST[$key];
    }
    public function hasPost($key){
        return isset($_POST[$key]);
    }
    public function hasGet($key){
        return isset($_GET[$key]);
    }
    public function redirect($location){
        header("location:$location");
    }
}
?>