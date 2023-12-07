<?php 

$file = fopen("hello.txt","r");

echo fread($file,filesize("hello.txt"))

?>