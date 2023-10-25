<!-- Write a PHP script to reverse the elements of an array using the array_reverse() function -->

<?php

$numbers=array(60,5,41,78,52);

$b= array_reverse($numbers);

foreach($b as $a)
{

    echo $a."<br>";
}

?>
