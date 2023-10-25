<!-- 9. Sort an array of words in alphabetical order.
10. Sort the array from question 9 in reverse alphabetical order. -->

<?php

    $fruits = ["Dragon-Fruit", "Apple", "Strawberry", "Mango", "Kiwi"];
    
    // Sort the array in alphabetical order
    
    sort($fruits);
    
    // Display the array in alphabetical order
    echo "Alphabetical Order :<br>";
    print_r($fruits);
    echo "<br><br>";
    
    // 10 - Sort the array in reverse alphabetical order
    rsort($fruits);
    
    echo "Reverse Alphabetical Order :<br>";
    print_r($fruits);
?>
