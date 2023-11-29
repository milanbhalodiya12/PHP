<?php
$targetDirectory="upload/";
$targetFile=$targetDirectory.basename($_FILES["fileupload"] ["name"]);

/* echo $targetFile; */

move_uploaded_file($_FILES["fileupload"] ["tmp_name"],$targetFile);


$connect=mysqli_connect("localhost","root","","15618223003");

$query="INSERT INTO `upload`(`file_name`) VALUES ('$targetFile')";

$execute=mysqli_query($connect,$query);


$query = "select * from upload";

$execute = mysqli_query($connect,$query);

$data = mysqli_fetch_row($execute);

print_r($data);

echo "<img src=$data[5] height=200px width='200px'>";

?>
