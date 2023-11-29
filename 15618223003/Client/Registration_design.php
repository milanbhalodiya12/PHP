
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        table {
            width: 50%;
            margin: 0 auto;
            border-collapse: collapse;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: cadetblue;
        }

        .hidden {
            display: none;
        }
        
    body {
        font-family: Arial, sans-serif;
        background-color: #ddd;
        margin: 0;
        padding: 0;
    }

    h1 {
        text-align: center;
        color: #333;
    }

    table {
        width: 50%;
        margin: 0 auto;
        border-collapse: collapse;
        background-color: lime;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    th, td {
        padding: 10px;
        text-align: left;

    }

    th {
        background-color: cyan;
        color: white;
    }

    tr:nth-child(even) {
        background-color: cyan;
    }

    input[type="text"],
    input[type="email"],
    input[type="tel"],
    input[type="password"],
    textarea {
        width: 80%;
        padding: 10px;
        box-sizing: border-box;
        border: 1px solid #ccc;
        border-radius: 4px;
        margin: 5px 0;
    }

    input[type="radio"] {
        margin-right: 5px;
    }

    input[type="submit"] {
        background-color: cadetblue;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
        font-weight: bold;
    }

    input[type="submit"]:hover {
        background-color: #2383a8;
    }

</style>

    
</head>
<body>
    <h1 align="center">Registration Form</h1>
    <form id="registrationForm" action="Registration_Code.php" method="REQUEST">
        <table>
       
        
            <tr>
                <td>First Name:</td>
                <td><input type="text" id="fname" name="fname" required></td>
            </tr>
            <tr>
                <td>Middle Name:</td>
                <td><input type="text" id="mname" name="mname" required></td>
            </tr>
            <tr>
                <td>Last Name:</td>
                <td><input type="text" id="lname" name="lname" required></td>
            </tr>
            
            <tr>
                <td>Email:</td>
                <td><input type="email" id="email" name="email" required></td>
            </tr>
            <tr>
                <td>Mobile Number:</td>
                <td><input type="tel" id="mobile" name="mobile" required></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" id="pass" name="pass" required></td>
            </tr>
            <tr>
                <td>City:</td>
                <td><input type="text" id="city" name="city" required></td>
            </tr>
            <tr>
                <td>State:</td>
                <td><input type="text" id="state" name="state" required></td>
            </tr>
            <tr>
                <td>Country:</td>
                <td><input type="text" id="country" name="country" required></td>
            </tr>

            <tr>
                <td>Educatio_Qualification:</td>
                <td><textarea id="text" name="ec" required></textarea></td>
            </tr>
            <tr>
    <td>
    <label>Gender:</label>
    <td>
    <label for="male">Male</label>
    <input type="radio" id="male" name="gender" value="male">
    
    <label for="female">Female</label>
    <input type="radio" id="female" name="gender" value="female">
  
        
    <label for="other">Other</label>
    <input type="radio" id="other" name="gender" value="other">
        
</td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center">
                   <input type="submit" value="Submit"uib-collapse="10">
                </td>
            </tr>
      
        </table>
    </form>

</body>
</html>


