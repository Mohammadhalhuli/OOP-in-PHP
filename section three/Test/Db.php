<?php 
namespace Test;
interface Db{
    public function select($table);
    public function selectAll($table);
    public function insert($table);
    public function update($table);
    public function delete($table);
}
?>