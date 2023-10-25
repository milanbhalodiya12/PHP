<!-- Create two arrays, one with fruits and another with vegetables. Merge them into a single array. -->

<?php

    $fruits = ["Apple", "Bannana", "Strawberry", "Kiwi"];
    
    
    $vegetables = ["Potato", "Corn", "Cucumber", "Tomato"];
    
    // Merge the two arrays into a single array
    
    $fruveg = array_merge($fruits, $vegetables);
    
    // Display the merged array
    echo "Merge them into a single array : <br> " ;
    print_r($fruveg);
?>
