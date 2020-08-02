<?php
	session_start();
	require_once('../Db/dbconfig.php');

    if(isset($_POST['submit']))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $query = "select * from as_student where uname = '$username' AND password = '$password'";
        $queryrun = mysqli_query($con, $query);
        $row = mysqli_fetch_array($queryrun, MYSQLI_ASSOC);
        $status = $row['status'];
        if(mysqli_num_rows($queryrun) > 0)
        {
            if($status == 'new')
            {
                $_SESSION['user_name'] = $username;

                echo "<script>alert('Login Sucssesful');  window.location.href='../main/index.php';</script>";
            }
            else if($status == 'success')
            {
                echo "<script>alert('User is Disable');  window.location.href='../index.php';</script>";
            }
        }
        else
        {
            echo "<script>alert('Invalid Username Or Password');  window.location.href='../index.php';</script>";
        }
    }

    mysqli_close($con);
?>