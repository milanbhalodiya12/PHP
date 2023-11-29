<?php

$connect=mysqli_connect("localhost","root","","15618223003");
/* print_r($connect); */

$query="SELECT * FROM `registration`";


$execute_query=mysqli_query($connect,$query);

$number_record=mysqli_num_rows($execute_query);
// print_r($number_record);

echo "<form action=delete.php method=REQUEST>";

echo " <center><table border=1>
<tr>
<td> Id </td>
<td> Name </td>
<td> Last name </td>
<td> Delete </td>
</tr>";
for($i=1; $i<=$number_record; $i++)
{
    $fetch_data=mysqli_fetch_row($execute_query);
    echo "<tr><td>$fetch_data[0]</td><td>$fetch_data[1]</td><td>$fetch_data[2]</td><td><input type='checkbox' name='delete[]' value=$fetch_data[0]></td></tr>";
}
echo "</table>";
echo "<input type='submit' name= submit>";
?>