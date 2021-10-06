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
    
    <?php 
    //trim spaces from name and capitalize first letters
    $fullName = ucwords(strtolower(trim($_POST['full_name'])));
    //trim spaces from phone number and remove parentheses and dashes
    $phoneNumber = trim($_POST['phone_num']);
    $phoneNumber = str_ireplace(" ", "", $phoneNumber);
    $phoneNumber = str_ireplace("(","", $phoneNumber);
    $phoneNumber = str_ireplace(")","", $phoneNumber);
    $phoneNumber = str_ireplace("-","", $phoneNumber);

    //trim spaces from email and display in lowercase
    $emailAddress = strtolower(trim($_POST['email_address']));
    $emailAddress = str_ireplace(" ","", $emailAddress);
    
    //get username and domain from email address
    $userName = strtok($emailAddress, "@");
    //split email address at @
    $domain = strstr($emailAddress, "@");
    //remove @ from beginning of domain
    $domain = substr($domain, 1);

    //replace spaces with dashes in notes and display only 30 chars
    $notes = trim($_POST['notes']);
    $notes = substr($notes, 0, 30);
    $notes = str_ireplace(" ", "-", $notes);
    $notes = str_ireplace("\n", "<br>", $notes);

echo "<table> 
        
         <tr>
             <td>Name:</td>
             <td>$fullName</td>
        </tr>

         <tr>    
             <td>Phone:</td>
             <td>$phoneNumber</td>
         </tr>

         <tr>
             <td>User Name:</td>
             <td>$userName</td>
         </tr>

         <tr> 
         <td>Domain:</td>
         <td>$domain</td>
        </tr>

         <tr>
             <td>Notes:</td>
             <td>$notes</td>
         </tr>

 </table>";
 ?>
</body>
</html>
