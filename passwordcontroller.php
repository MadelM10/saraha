<?php
require_once ('passworddatabase.php');
if(isset($_POST['sub'])){
    $db=new passworddatabase();
    $list=$db->insertusers($_POST['email']);
    if ($list-> num_rows > 0 ){
        while( $y=$list->fetch_assoc())
        { echo ' please check your email';}}
    else
    {echo "this email is not registed";}}
?>