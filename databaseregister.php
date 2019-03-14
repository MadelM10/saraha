<?php

/**
 * Created by PhpStorm.
 * User: auto
 * Date: 7/25/17
 * Time: 1:28 PM
 */
class database
{
function database()
{
    $this->connection=mysqli_connect('localhost','root','','register');
    if($this->connection->connect_error){return false;}else{return true;}
}
    function getall()
    {
        $query="select * from registers";
        return mysqli_query($this->connection,$query);
    }
    function insertusers($email,$password,$confirmpassword,$username,$name,$image)
    {
$query="insert into registers(email,password,confirmPassword,username,name,image) values ('".$email."','".$password."','".$confirmpassword."','".$username."','".$name."','".$image."');";
        return mysqli_query($this->connection,$query);
    }
    function search($name)
    {
        $query="select * from registers where name LIKE '%".$name."%';";
        return mysqli_query($this->connection,$query);

    }
}
?>