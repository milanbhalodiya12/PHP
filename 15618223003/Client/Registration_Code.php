<?php

$f_name=$_REQUEST["fname"];
$m_name=$_REQUEST["mname"];
$l_name=$_REQUEST["lname"];
$email=$_REQUEST["email"];
$mobile=$_REQUEST["mobile"];
$password=$_REQUEST["pass"];
$city=$_REQUEST["city"];
$state=$_REQUEST["state"];
$country=$_REQUEST["country"];
$ec=$_REQUEST["ec"];
$gender=$_REQUEST["gender"];


$connect=mysqli_connect("localhost","root","","15618223003");
/* print_r($connect); */

$query="INSERT INTO `registration`(`first_name`, `middle_name`, `last_name`, `email`, `mobile`, `password`, `city`, `state`, `country`, `education_qualification`, `gender`) VALUES ('$f_name','$m_name','$l_name','$email','$mobile','$password','$city','$state','$country','$ec','$gender')";

$execute_query=mysqli_query($connect,$query);

?>