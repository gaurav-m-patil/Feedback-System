<?php 
$con = mysqli_connect('localhost','root','') or die('could not connect'.mysqli_connect_errno());

	mysqli_select_db($con,'feedback') or die(mysql_error());
    //echo("connected");
?>