<?php

    $a = 10;
    $b = 5;
    $c = 5;

    if ($a > $b && $a > $c) 
    {
        echo " {$a} is a largest number.";

    } elseif ($b > $c && $b > $a) 
    {
        echo "  {$b} is a largest number.";

    } elseif ($c > $a && $c > $b)
    {
        echo "  {$c} is a largest number. ";
    }
    return 0;

?>