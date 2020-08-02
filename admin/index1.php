<?php
	session_start();
	require_once('Db/dbconfig.php');
	if(!$_SESSION['username'])
	{
		header( "Location: login.php");
	}
?>
<html>
	<body>
	<h3>Welcome, <?php echo $_SESSION['username']; ?></h3>
	</body>	
	<form action="home.php" method="post">
		<input type="submit" name="logout" value="Logut Here">
	</form>
	<?php
		
		if(isset($_POST['logout']))
		{
			session_destroy();
			header("location: login.php");	
		}
	?>			
</html>