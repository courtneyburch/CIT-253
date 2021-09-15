<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">  
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Information</title>
    <link rel="stylesheet" href="styles.css">
</head>
<!-- User input display -->
<body>
<table>
        <tr>
        <th colspan="2">User Information:</th>
        </tr>
        <tr>
            <td>Name:</td>
            <td> <?php echo $_POST["fname"]." ".$_POST["lname"] ?> </td>
        </tr>
        <tr>
            <td>Address:</td>
            <td> <?php echo $_POST["address"] ?> </td>
        </tr>

        <tr>    
            <td>City, State, Zip:</td>
            <td> <?php echo $_POST["city"]." ".$_POST["state"]." ".$_POST["zip"]?> </td>
        </tr>

        <tr>
            <td>Phone Number:</td>
            <td><?php echo $_POST["phone"] ?> </td>
        </tr>

        <tr>
            <td>Email:</td>
            <td><?php echo $_POST["email"]?> </td>
        </tr>
        
        <tr>
            <td><a href="user_input.html">Return to User Input Form</a></td>
        </tr>

</table>
</body>
</html>