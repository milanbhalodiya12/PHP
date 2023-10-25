<!-- 1. Create an indexed array containing your favourite colors.
2. Add a new color to the array from question 1.
3. Display the color at index 2 of the array from question 1.
4. Check if the color "Green" exists in the array from question 1. -->

<?php

echo "1 - Create an indexed array containing your favourite colors :<br>";

$colors = array("Red", "Yellow", "Blue",  "Lime");

print_r($colors);

echo "<br><br>";

echo "2 - Add a new color to the array from question 1 : <br> ";
array_push($colors, "Green");
print_r($colors);

echo "<br><br>";

echo " 3 - Display the color at index 2 of the array from question 1 : <br>";

echo "Color at index 2: " . $colors[2] . "<br><br>";

echo "4 - Check if the color Green exists in the array from question 1 : <br> ";

if (in_array("Green", $colors)) 
{
    echo "The color Green exists in the array.";
} 
else 
            {
    echo "The color Green does not exist in the array.";
}

?>