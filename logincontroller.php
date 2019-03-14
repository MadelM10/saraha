<?php
require_once ('logindatabase.php');
if(isset($_POST['sub'])){
    $db=new logindatabase();
    $db->getall();
    $list2=$db->insertusers($_POST['email'],$_POST['password']);
	
	
    if ($list2-> num_rows > 0 ){
        while( $y=$list2->fetch_assoc())
        { echo '<div>'.$y['image'].'</br>'.$y['name'].'</br>'.$y['email'].'</div>';}}
    else
    {echo "try again";}}
?>