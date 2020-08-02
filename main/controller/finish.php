<?php

	require_once('../Db/dbconfig.php');

    $query = "select class from as_student where uname = '".$_SESSION['user_name']."'";
    $query_run = mysqli_query($con, $query);
    if(@mysqli_num_rows($query_run)>0)
    {
        $row = mysqli_fetch_array($query_run, MYSQLI_ASSOC);
        @$class = $row['class'];
    }
    
    $qry = "update as_student set status = 'success'";
    $sql = mysqli_query($con, $qry);


    $q = "select t_id,tname from as_teacher where t_class ='".@$class."'";
    $qrun = mysqli_query($con, $q);
    $i =0;  
    while($i<5)
    {
        if(mysqli_num_rows($qrun)>0)
        {
            $row = mysqli_fetch_array($qrun, MYSQLI_ASSOC);
            @$tid[$i]= $row['t_id'];
            @$tname[$i] = $row['tname'];
        }  
        $i=$i+1;
    }

    date_default_timezone_set('Asia/Kolkata');
    $today = date("d / m / Y");
    $year = date('y');
    $nyear = $year + 1 ;

    
   
    
?>