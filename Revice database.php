<?php
$conn=mysqli_connect("localhost","root","","tarundb");
if(!$conn)
{
die("Can't Connect To the Server".mysqli_connect_error($conn));
 }
 else
 {
 	echo "Connection Established Successfully<br>";
 }
 $queries="create table students"
?>