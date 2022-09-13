<?php 
namespace Test;
use Test\Db;
require ('Request.php');
require('Db.php');
class MySql implements Db{
    private $conn;
    public function __construct($host,$uname,$pass,$db)
    {
        $this->conn=mysqli_connect($host,$uname,$pass,$db);
    }
    public function select($table){
        $query="SELECT * FROM $table";
        $result=mysqli_query($this->conn,$query);
       return mysqli_fetch_all($result);
    }
    public function selectAll($query){}
    public function insert($query){}
    public function update($query){}
    public function delete($query){}
}
?>