<?php
session_start();
// Record that the user is logged in and display user nav links
if (isset($_COOKIE['email'])) {
  print "<div style='padding:0;margin:0;'>
			<p style='padding:0;margin:0;text-align:right;'><a href='logout.php' style='text-align:right;'>Log out of Pipe's Football Club!</a></p>
  		</div>"
	;}
?>
