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
    <p>
    <?php 
        //collect input from form data;
        $firstName = $_POST['first_name'];
        $lastName = $_POST['last_name'];
        $hoursWorked = $_POST['hours_worked'];
        $payRate = $_POST['pay_rate'];
        //compute gross pay
        $grossPay = $payRate * $hoursWorked;
        //federal tax at 10.25%
        $federalTaxRate = 0.1065;
        $federalTax = $grossPay * $federalTaxRate;
        //state tax at 4%
        $stateTaxRate = 0.04;
        $stateTax = $grossPay * $stateTaxRate;
        //Social Security Taxes at 3.8%;
        $socialSecurityTaxRate = 0.038;
        $socialSecurityTax = $grossPay * $socialSecurityTaxRate;
        //medicare tax at 1.3%
        $medicareTaxRate = 0.013;
        $medicareTax = $grossPay * $medicareTaxRate;
        //total taxes
        $totalTax = $federalTax + $stateTax + $socialSecurityTax + $medicareTax;
        //net pay
        $netPay = number_format($grossPay, 2) - number_format($totalTax, 2);

    print "Hello $firstName $lastName, this week you worked $hoursWorked hours. Based on the pay rate of $payRate per hour, your paycheck information is:";

    ?>
    </p>

<table>
        <tr>
        
        <tr>
            <td>Gross Pay:</td>
            <td> <?php print "$" . number_format($grossPay, 2); ?></td>
        </tr>

        <tr>    
            <td>Federal Tax:</td>
            <td> <?php print "$" . number_format($federalTax, 2); ?></td>
        </tr>

        <tr>
            <td>State Tax:</td>
            <td><?php print "$" . number_format($stateTax, 2); ?></td>
        </tr>

        <tr>
            <td>Social Security Tax:</td>
            <td><?php print "$" . number_format($socialSecurityTax, 2); ?></td>
        </tr>
        <tr>
            <td>Medicare Tax:</td>
            <td><?php print "$" . number_format($medicareTax, 2); ?></td>
        </tr>

        <tr>
            <td>Total Tax:</td>
            <td><?php print "$" . number_format($totalTax, 2); ?></td>
        </tr>

        <tr>
            <td>Net Pay:</td>
            <td><?php print "$" . number_format($netPay, 2); ?></td>
        </tr>
        
        <tr>
            <td><a href="user_input.html">Return to Input Form</a></td>
        </tr>

</table>
</body>
</html>
