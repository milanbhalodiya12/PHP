<!-- Create a PHP script that extracts a specific column from a multidimensional array using
the array_column() function. -->

<?php

    $student = array(array('id' => 101, 'name' => 'Milan', 'age' => 21 ),
                     array('id' => 201, 'name' => 'Vishal', 'age' => 20 ),
                     array('id' => 301, 'name' => 'Mehul', 'age' => 21 ),
                     array('id' => 401, 'name' => 'Krushal', 'age' => 22 )
                );

    $name = array_column($student ,'name');

    print_r($name);

?>