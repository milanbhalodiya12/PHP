<?php 


$file = fopen("hello.txt","w");

$txt  = "Vishal";

fwrite($file, $txt);


$fileread = fopen("hello.txt","r");

echo fread($fileread,filesize("hello.txt"))

?>