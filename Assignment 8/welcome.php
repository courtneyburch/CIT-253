<?php
//This is the welcome page. Users are redirected here after they sucessfully log in.
//Start the session:
session_start();

//Set the title page and include the header file:
define('TITLE', 'Welcome to the J.D. Salinger Fan Club!');
include('header_footer_and_css_files/header.html');

//print a greeting
print '<h2>Welcome to the J.D Salinger Fan Club!</h2>
<p>Hello, ' . $_SESSION['email'] . '!</p>
<p> You\'re successfully logged in and can now take advantage of everything the site has to offer.</p>';


//Print how long the user has been logged in
date_default_timezone_set('America/New_York');
print '<p>You\'ve been logged in since: ' . date('g:i a', $_SESSION['loggedin']) . '.</p>';

//Make a logout link
print '<p><a href="logout.php">Logout</a></p>';

//include the footer file
include('header_footer_and_css_files/footer.html');
?>
