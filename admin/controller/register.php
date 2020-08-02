<?php
	require_once('../Db/dbconfig.php');


	if(isset($_POST['register']))
	{
        $name = $_POST['name'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$cpassword = $_POST['confpassword'];
        

		if($password == $cpassword)
		{
			$query = "select * from as_admin where uname = '$username'";
			$queryrun = mysqli_query($con, $query);

			if(mysqli_num_rows($queryrun) == 0)
			{
                $querys = "insert into as_admin(uname,name,password) values ('$username','$name','$password')";
				$querysrun = mysqli_query($con, $querys);
				if($querysrun>0)
				{
					echo "<script>alert('Registration Successfull'); window.location.href='../index.php';</script>";
				}
				else
				{   
					echo "<script>alert('Error While Registration Please Try Again'); window.location.href='../adminregistration.php';</script>";
				}
				
			}
			else
			{
				echo "<script>alert('Username Already Exist'); window.location.href='../adminregistration.php';</script>";
			}
		}
		else
		{
			echo "<script>alert('Password Do Not Match'); window.location.href='../adminregistration.php';</script>";
		}
	}
	mysqli_close($con);
?>