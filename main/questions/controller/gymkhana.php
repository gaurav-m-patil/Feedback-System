<?php
    
	require_once('../Db/dbconfig.php');

    $query = "select *from as_student where uname = '".$_SESSION['user_name']."'";
    $query_run = mysqli_query($con, $query);
    if(@mysqli_num_rows($query_run)>0)
    {
        $row = mysqli_fetch_array($query_run, MYSQLI_ASSOC);
        @$class = $row['class'];
        $s_id = $row['s_id'];
    }

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


    if(isset($_POST['fsubmit']))
    {
        $q1 = @$_POST['que1'];
        $q2 = @$_POST['que2'];
        $q3 = @$_POST['que3'];
        $q4 = @$_POST['que4'];
        $sugg = @$_POST['sugg'];
        
        
        $query = "select * from as_f_gymkhana where s_id = '".$s_id."'";
        $query_run = mysqli_query($con, $query);
        if(@mysqli_num_rows($query_run)==0)
        {
            if($q1 != 0 && $q2 != 0 && $q3 != 0 && $q4 != 0 )
            {
                $qry = "insert into as_f_gymkhana(s_id,q1,q2,q3,q4,sugg) values ('$s_id','$q1','$q2','$q3','$q4','$sugg')";
                $sql = mysqli_query($con, $qry);

                header("location: administration.php");
            }
            else
            {
                echo "<script>alert('Plase Attent Every Question');window.location.href='gymkhana.php';</script>";
            }

        }
        else
        {
            if($q1 != 0 && $q2 != 0 && $q3 != 0 && $q4 != 0 )
            {
                $qry = "update as_f_gymkhana set s_id='$s_id', q1='$q1',q2='$q2',q3='$q3',q4='$q4',sugg='$sugg' where s_id = '".$s_id."'";
                $sql = mysqli_query($con, $qry);
                //echo $qry;
                header("location: administration.php");
            }
            else
            {
                echo "<script>alert('Plase Attent Every Question');window.location.href='gymkhana.php';</script>";
            }
               
        }         
    }
    
    
?>