<?php 

$user = "user"; 
$password = "XDSandman2388"; 
$host = "host"; 

$connection= mysql_connect ($host, $user, $password);
if (!$connection)
{
die ('Could not connect:' . mysql_error());
}



$showtables= mysql_query("SHOW TABLES FROM database_name");

while($table = mysql_fetch_array($showtables)) { 
    echo($table[0] . "<br>");    
}
?>