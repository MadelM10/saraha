<?php

/**
 * Created by PhpStorm.
 * User: auto
 * Date: 7/27/17
 * Time: 2:11 PM
 */
class passworddatabase
{
function passworddatabase()
{
    $this->connection=mysqli_connect('localhost','root','','register');
    if($this->connection->connect_error){return false;}else{return true;}
}
    function insertusers($email)
    {
        $query="insert into password(email) values ('".$email."');";
        return mysqli_query($this->connection,$query);
    }
    
}
?>