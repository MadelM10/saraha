
<?php
require_once('databaseregister.php');
if(isset($_POST['sub']))
{
    $db=new database();
    $db->getall();
    $list=$db->insertusers($_POST['email'],$_POST['password'],$_POST['confirmPassword'],$_POST['username'],$_POST['name'],$_POST['image']);
    if ($list[num_rows] > 0  ){
        while( $y=$list->fetch_assoc())
        { echo '<div>'.$y['image'].'</br>'.$y['name'].'</br>'.$y['email'].'</div>';}}
    else
    {echo "try again";}}

?>