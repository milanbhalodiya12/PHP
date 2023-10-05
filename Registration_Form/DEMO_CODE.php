<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data Submission</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body align="center">
    <h1>Register Data</h1>
    
    <?php
    $name = $_REQUEST['name'];
    $email = $_REQUEST["email"];
    $mobile = $_REQUEST["mobile_number"];
    $address = $_REQUEST["address"];
    $department = $_REQUEST["department"];
    $university = $_REQUEST["university"];
    $hobbies = $_REQUEST["hobbies"];
    ?>

    <table>
        <tr>
            <th>Field</th>
            <th>Value</th>
        </tr>
        <tr>
            <td>Name</td>
            <td><?php echo $name; ?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><?php echo $email; ?></td>
        </tr>
        <tr>
            <td>Mobile Number</td>
            <td><?php echo $mobile; ?></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><?php echo $address; ?></td>
        </tr>
        <tr>
            <td>Department</td>
            <td><?php echo $department; ?></td>
        </tr>
        <tr>
            <td>University</td>
            <td><?php echo $university;?></td>
        </tr>
