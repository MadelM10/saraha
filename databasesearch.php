<?php

/**
 * Created by PhpStorm.
 * User: auto
 * Date: 7/14/17
 * Time: 10:08 PM
 */
class databasesearch
{
function databasesearch()
{
    $this->connection=mysqli_connect('localhost','root','','register');
    if($this->connection->connect_error){return false;}else{return true;}

}
    
    function searchname($name)
    {
        $query = "select * from registers where name LIKE '%".$name."%';";
        return mysqli_query($this->connection, $query);


    }}
    
?>