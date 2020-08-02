<?php
    //session_start();
	require_once('../Db/dbconfig.php');

// FY
    if(isset($_POST['fyadd']))
    {
        $tname = $_POST['tname'];
        $tid = $_POST['t_id'];
        $tclass = 'F.Y.B.Sc(IT)';
        
        $query = "select * from as_teacher where t_id = '$tid'";
        $queryrun = mysqli_query($con, $query);

        if(mysqli_num_rows($queryrun) == 0)
        {
            $querys = "insert into as_teacher (t_id,tname,t_class) values ('$tid','$tname','$tclass') ";
            $querysrun = mysqli_query($con, $querys);
            if($querysrun>0)
            {
                echo "<script>alert('Add Successfull');  window.location.href='../teachers.php'; </script>";
            }
            else
            {   
                echo "<script>alert('Error While Registration Please Try Again'); window.location.href='../teachers.php';</script>";
            }

        }
        else
        {
            echo "<script>alert('Index Already Exist'); window.location.href='../teachers.php';</script>";
        }
    }

    
    if(isset($_POST['fyremove']))
    {
        echo "<script>confirm('Delete Successfully'); window.location.href='../teachers.php';</script>";     
        $val = $_POST['fyremove'];
        $sql = "delete from as_teacher where t_id ='".$val."'";
        $queryrun = mysqli_query($con, $sql);

    }


    $q = "select t_id,tname from as_teacher where t_class = 'F.Y.B.Sc(IT)' order by t_id asc";
    $qrun = mysqli_query($con, $q);
    $i = 0;
    while($i<5)
    {
        if(mysqli_num_rows($qrun)>0)
        {
            $row = mysqli_fetch_array($qrun, MYSQLI_ASSOC);
            @$fyt_id[$i] = $row['t_id'];
            @$fytname[$i] = $row['tname']; 
        }  
        $i=$i+1;
    }
    

//SY
    if(isset($_POST['syadd']))
    {
        $tname = $_POST['tname'];
        $tid = $_POST['t_id'];
        $tclass = 'S.Y.B.Sc(IT)';
        
        $query = "select * from as_teacher where t_id = '$tid'";
        $queryrun = mysqli_query($con, $query);

        if(mysqli_num_rows($queryrun) == 0)
        {
            $querys = "insert into as_teacher (t_id,tname,t_class) values ('$tid','$tname','$tclass') ";
            $querysrun = mysqli_query($con, $querys);
            if($querysrun>0)
            {
                echo "<script>alert('Add Successfull');  window.location.href='../teachers.php'; </script>";
            }
            else
            {   
                echo "<script>alert('Error While Registration Please Try Again'); window.location.href='../teachers.php';</script>";
            }

        }
        else
        {
            echo "<script>alert('Index Already Exist'); window.location.href='../teachers.php';</script>";
        }
    }
    
    if(isset($_POST['syremove']))
    {
        $val = $_POST['syremove'];
        $sql = "delete from as_teacher where t_id ='".$val."'";
        $queryrun = mysqli_query($con, $sql);
        echo "<script>alert('Delete Successfully'); window.location.href='../teachers.php';</script>";
    }

    $q = "select t_id,tname from as_teacher where t_class = 'S.Y.B.Sc(IT)' order by t_id asc";
    $qrun = mysqli_query($con, $q);
    $i = 0;
    while($i<5)
    {
        if(mysqli_num_rows($qrun)>0)
        {
            $row = mysqli_fetch_array($qrun, MYSQLI_ASSOC);
            @$syt_id[$i] = $row['t_id'];
            @$sytname[$i] = $row['tname']; 
        }  
        $i=$i+1;
    }


//TY  
    if(isset($_POST['tyadd']))
    {
        $tname = $_POST['tname'];
        $tid = $_POST['t_id'];
        $tclass = 'T.Y.B.Sc(IT)';
        
        $query = "select * from as_teacher where t_id = '$tid'";
        $queryrun = mysqli_query($con, $query);

        if(mysqli_num_rows($queryrun) == 0)
        {
            $querys = "insert into as_teacher (t_id,tname,t_class) values ('$tid','$tname','$tclass') ";
            $querysrun = mysqli_query($con, $querys);
            if($querysrun>0)
            {
                echo "<script>alert('Add Successfull');  window.location.href='../teachers.php'; </script>";
            }
            else
            {   
                echo "<script>alert('Error While Registration Please Try Again'); window.location.href='../teachers.php';</script>";
            }

        }
        else
        {
            echo "<script>alert('Index Already Exist'); window.location.href='../teachers.php';</script>";
        }
    }
    

    if(isset($_POST['tyremove']))
    {
        $val = $_POST['tyremove'];
        $sql = "delete from as_teacher where t_id ='".$val."'";
        $queryrun = mysqli_query($con, $sql);
        echo "<script>alert('Delete Successfully'); window.location.href='../teachers.php';</script>";
    }

    $q = "select t_id,tname from as_teacher where t_class = 'T.Y.B.Sc(IT)' order by t_id asc";
    $qrun = mysqli_query($con, $q);
    $i = 0;
    while($i<5)
    {
        if(mysqli_num_rows($qrun)>0)
        {
            $row = mysqli_fetch_array($qrun, MYSQLI_ASSOC);
            @$tyt_id[$i] = $row['t_id'];
            @$tytname[$i] = $row['tname']; 
        }  
        $i=$i+1;
    }


?>