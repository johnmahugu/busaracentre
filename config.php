<?php
$db_hostname = 'localhost';         // Database hostname
$db_username = 'chezamax_busarac';              // Database username
$db_password = '725138';                  // Database password
$db_name = 'chezamax_busaracentre';                  // Database name
 
$conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);
 
if(!$conn) 
{
    echo "Unable to connect database".mysqli_error($conn);die;
}
else
{
    // echo "Database connected successfully";
}
?>