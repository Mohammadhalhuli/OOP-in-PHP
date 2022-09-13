<?php

//1 data source name --> DATA BASE ENGIN ,HOST, PORT,DATABASE NAME,ROOT,PASS
    $connString = "mysql:host=localhost;dbname=test";
    $dbuser = "root";
    $dbpass = "";
    $pdo = new PDO($connString,$dbuser,$dbpass);
   //$st= $pdo -> query("SELECT * FROM city");
   $id=2121;
   $name="nonoonono";
    $st= $pdo -> prepare("INSERT INTO `city`(`id`, `c_name`) VALUES (:id,:name)");
    $st->bindparam(":id",$id);
    $st->bindparam(":name",$name);
    
    $admin=$st->fetchObject(); //first information 
    $admin=$st->fetchAll(); //all information 
    print_r($admin);
    
?>