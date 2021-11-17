<?php 
//start the session
session_start();
//reset the session array
$_SESSION = [];
//destroy the session data on the server
session_destroy();

//Define a page title and include the header:
define('TITLE', 'Logout');
include('header_footer_and_css_files/header.html');

?>

<h2>Welcome to the J.D Salinger Fan Club!</h2>
<p> You've successfully logged out.</p>
<p>Thank you for using this site. We hope that you liked it.<br>Please visit us again soon!</p>

<?php
include('header_footer_and_css_files/footer.html');
?>