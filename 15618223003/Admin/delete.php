<?php
$select_id=$_REQUEST['delete'];

$connect=mysqli_connect("localhost", "root", "", "15618223003");
/* print_r($connect);*/
foreach($select_id as $myquery)
{
    $query="DELETE FROM `registration` WHERE reg_id=$myquery";
    $execute_query=mysqli_query($connect,$query);


}

header("Location: view.php");



?>