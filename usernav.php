<?php
session_start();
// Record that the user is logged in and display user nav links
if (isset($_COOKIE['email'])) {
  print "<li>
	<a href='forum.php'>Forum</a>
	</li>"
	;}
?>
