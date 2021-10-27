<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">  
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Information</title>
    <link rel="stylesheet" href="styles.css">
</head>
<!-- User coffee order -->
<body>
    
    <?php 

  
    $okay = true;
    
    if(empty($_POST['coffee']) or !isset($_POST['coffee'])) {
            echo '<p class="error"> Please choose a coffee type. </p>';
            $okay = false;  
        } else {
        $coffee = $_POST['coffee'];
    }

    if(!isset($_POST['coffee-type']))
        {
            echo '<p class="error"> Please choose regular or decaffeinated. </p>';
            $okay = false;  
        } else {
        $coffee_type = $_POST['coffee-type'];
    }

    if(empty($_POST['quantity']) or !is_numeric($_POST['quantity']))
        {
        echo '<p class="error"> Please enter a number for quantity. </p>';
            $okay = false;  
        } else{
    
            $quantity = $_POST['quantity'];
    } 

    
    if(empty($_POST['name']))
        {
            echo '<p class="error"> Please enter your name. </p>';
            $okay = false;
        } else{
        $name = ucwords(strtolower(trim($_POST['name'])));
    }

    if(empty($_POST['email_address']))
        {
            echo '<p class="error"> Please enter an email address. </p>';
            $okay = false;
        } else{
        $email = strtolower(trim($_POST['email_address']));
    }

    if(empty($_POST['phone_num']))
        {
            echo '<p class="error"> Please enter your phone number. </p>';
            $okay = false;
        } else {
            $phoneNumber = trim($_POST['phone_num']);
            $phoneNumber = str_ireplace(" ", "", $phoneNumber);
            $phoneNumber = str_ireplace("(","", $phoneNumber);
            $phoneNumber = str_ireplace(")","", $phoneNumber);
            $phoneNumber = str_ireplace("-","", $phoneNumber);
    }

    if(empty($_POST['address']))
        {
            echo '<p class="error"> Please enter your address. </p>';
            $okay = false;
    } else {
        $address = $_POST['address'];
    }

    if(empty($_POST['city']))
        {
            echo '<p class="error"> Please enter your city. </p>';
            $okay = false;
    } else {
        $city = $_POST['city'];
    }

    if(empty($_POST['state']) or strlen($_POST['state']) !== 2)
        {
            echo '<p class="error"> Please enter the two-digit abbreviation for your state. </p>';
            $okay = false;
    } else {
        $state = strtoupper($_POST['state']) ;
    }

    if(empty($_POST['zip']) or !is_numeric($_POST['zip']) or strlen($_POST['zip']) != 5){
        echo '<p class="error"> Please enter a five-digit zip code. </p>';
        $okay = false;
    
    } else { 
            $zip = trim($_POST['zip']);
    } 

    if($okay){
        echo "<p>Thank you for your order</p>";
    
    //assign values for coffee selection prices
    $price = 0;
    switch ($_POST['coffee']){
        case 'boca-villa':
            $price = 7.99;
            break;
        case 'south-beach-rhythm':
            $price = 8.99;
            break;
        case 'pumpkin-paradise':
            $price = 8.99;
            break;
        case 'sumatran-sunset':
            $price = 9.99;
            break;
        case 'bali-batur':
            $price = 10.95;
            break;
        case 'double-dark':
            $price = 9.95;
            break;
        default: 
            echo 'please select a coffee type';
            $okay = false;
            break;
    }
    if($coffee_type == 'decaf'){
        $price += 1;
    }

    $total_price = $price * $quantity;
    $total_price = number_format((float)$total_price, 2, '.', '');
  

echo "<table> 
        
         <tr>
             <td>Name:</td>
             <td>$name</td>
        </tr>

        <tr>
             <td>Email:</td>
             <td>$email</td>
        </tr>

        <tr>    
             <td>Phone:</td>
             <td>$phoneNumber</td>
        </tr>

        <tr>
             <td>Address:</td>
             <td>$address</td>
        </tr>

        <tr> 
            <td>City:</td>
            <td>$city</td>
        </tr>

        <tr> 
            <td>State:</td>
            <td>$state</td>
        </tr>

        <tr> 
            <td>Zip:</td>
            <td>$zip</td>
        </tr>


 </table>
 
 <p>Order Information</p>

 <table class='order-info'>

    <tr>
        <td>Coffee</td>
        <td>Type</td>
        <td>Quantity</td>
        <td>Unit Cost</td>
        <td>Total</td>
    </tr>  
    <tr>
        <td>$coffee</td>
        <td>$coffee_type</td>
        <td>$quantity</td>
        <td>$$price</td>
        <td>$$total_price</td>
    </tr>

 </table>

 ";
    }
 ?>
 <div class="link"><a href='user_input.html'>Go back to order form</a></div>
 
</body>
</html>