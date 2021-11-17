<?php
//Courtney Burch CIT 253 Nov 17 2021
//Set the page title and include the header file;
define('TITLE', 'Login');
include('header_footer_and_css_files/header.html');

print '<h2>Login Form</h2>
<p>Users who are logged in can take advantage of certain features like this, that, and the other thing.</p>';

//Check if the user is logged in
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
//Handle the form
    if( (!empty($_POST['email'])) && (!empty($_POST['password'])) ){
        //email and password are not empty
        if( (strtolower($_POST['email']) == 'me@example.com') && (strtolower($_POST['password']) == 'testpass') ){
            //correct test email and password has been entered
            //redirect the user to the welcome page;
            session_start();
            $_SESSION['email'] = $_POST['email'];
            $_SESSION['loggedin'] = time();
            ob_end_clean();
            header('Location: welcome.php');
            exit();

        }   else{
            //incorrect email or password entered
            print '<p class="text--error">The submitted email address and password do not match those on file!<br>Go back and try again.</p>';
        }
    } else {
        //email or password is not entered
        print '<p class="text--error" Please make sure you enter both an email and a password!<br>Go back and try again.</p>';
    }
} else{
    //Display the form
    print '<form action="login.php" method="post" class="form--inline">
    <p>
    <label for="email">Email Address</label>
    <input type="email" name="email" size="20">
    </p>

    <p>
    <label for="password">Password</label>
    <input type="password" name="password" size="20">
    </p>

    <p>
    <input type="submit" name="submit" value="Log In!" class="button--pill">
    </p>
    
    </form>';
}
//inlcude the footer
include('header_footer_and_css_files/footer.html');
?>