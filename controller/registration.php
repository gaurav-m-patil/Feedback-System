<?php
	require_once('../Db/dbconfig.php');


	if(isset($_POST['register']))
	{
		$username = $_POST['username'];
		$password = $_POST['password'];
		$cpassword = $_POST['confpassword'];
        $class = $_POST['class'];
        $status = $_POST['status'];

		if($password == $cpassword)
		{
			$query = "select * from as_student where uname = '$username'";
			$queryrun = mysqli_query($con, $query);

			if(mysqli_num_rows($queryrun) == 0)
			{
                $querys = "insert into as_student(uname,password,class,status) values ('$username','$password','$class','$status')";
				$querysrun = mysqli_query($con, $querys);
				if($querysrun>0)
				{
					echo "<script>alert('Registration Successfull'); window.location.href='../index.php';</script>";
				}
				else
				{
					echo "<script>alert('Error While Registration Please Try Again'); window.location.href='../Registration.php';</script>";
				}
			}
			else
			{
				echo "<script>alert('Username Already Exist'); window.location.href='../Registration.php';</script>";
			}
		}
		else
		{
			echo "<script>alert('Password Do Not Match'); window.location.href='../Registration.php';</script>";
		}
	}
	mysqli_close($con);
?>