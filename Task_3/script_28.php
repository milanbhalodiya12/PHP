<!-- Develop a PHP script that sorts an array of integers in ascending order using the sort()
function. -->

<?php

$numbers=array(5,88,50,100,69);    
sort($numbers);  
foreach( $numbers as $n )    
{    
  echo "$n<br />";    
}  

?>
