<?php

/**
 * Created by PhpStorm.
 * User: auto
 * Date: 7/26/17
 * Time: 1:36 PM
 */
class logindatabase
{
function logindatabase()
{
    $this->connection=mysqli_connect('localhost','root','','register');
    if($this->connection->connect_error){return false;}else{return true;}
}
    function getall()
    {
        $query="select * from login";
        return mysqli_query($this->connection,$query);
    }
    function insertusers($email,$password)
    {
        $query="insert into login(email,password) values ('".$email."','".$password."');";
        return mysqli_query($this->connection,$query);
    }
    
}