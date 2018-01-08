<?php

# PHP to MySQL connection script

#  connect to MySQL
$conn=@mysql_connect("localhost", "yr1282k", "yohanna16")
                                        or die("Err:Conn");

# select the specified database
$rs=@mysql_select_db("yr1282k", $conn)
                                        or die("Err:Db");
?>
 