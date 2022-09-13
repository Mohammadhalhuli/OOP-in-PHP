<?php 
use Test\Request;
use Test\Session;
use Test\MySql;
use Test\PostGre;
require('Session.php');
require("MySql.php");
require('PostGree.php');
$r = new Request;
$session= new Session;
$mysql = new MySql('localhost','pma','','test');
$postGree = new PostGre;

?>