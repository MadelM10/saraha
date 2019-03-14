<?php
require_once ('databasesearch.php');
if(isset($_POST['search'])){
$db=new databasesearch();
    $list1=$db->searchname($_POST['search']);
    if ($list1->num_rows > 0 ){
        while( $x=$list1->fetch_assoc())
        {echo $x['username'].$x['name'];
        }}
else
{echo "Nothing";}}
?>