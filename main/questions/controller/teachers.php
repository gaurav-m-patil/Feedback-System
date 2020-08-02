<?php
    
    require_once('../Db/dbconfig.php');
   //$user_name = $_GET['user_name'];
   
    
    

    date_default_timezone_set('Asia/Kolkata');
    $today = date("d / m / Y");
    $year = date('y');
    $nyear = $year + 1 ;

    
    if(isset($_POST['submit']))
    {
        $t_id = @$_POST['t_id'];    
        $s_id = @$_POST['s_id'];
        $q1 = @$_POST['que1'];
        $q2 = @$_POST['que2'];
        $q3 = @$_POST['que3'];
        $q4 = @$_POST['que4'];
        $q5 = @$_POST['que5'];
        $q6 = @$_POST['que6'];
        $q7 = @$_POST['que7'];
        $q8 = @$_POST['que8'];
        $q9 = @$_POST['que9'];
        $q10 = @$_POST['que10'];
        
        $query = "select * from as_f_teacher where t_id = '".$t_id."' and s_id = '".$s_id."'";
        $query_run = mysqli_query($con, $query);
        if(@mysqli_num_rows($query_run)==0)
        {
            if($q1 != 0 && $q2 != 0 && $q3 != 0 && $q4 != 0 && $q5 != 0 && $q6 != 0 && $q7 != 0 && $q8 != 0 && $q9 != 0 && $q10 != 0 )
            {
                $qry = "insert into as_f_teacher (t_id,s_id,q1,q2,q3,q4,q5,q6,q7,q8,q9,q10) values ('$t_id','$s_id','$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9','$q10')";
                $sql = mysqli_query($con, $qry);
                //echo $qry;
                header("location: ../teachers.php");
            }
            else
            {
                echo "<script>alert('Plase Attent Every Question');window.location.href='../teachers.php';</script>";
            }
            
        }
        else
        {
            if($q1 != 0 && $q2 != 0 && $q3 != 0 && $q4 != 0 && $q5 != 0 && $q6 != 0 && $q7 != 0 && $q8 != 0 && $q9 != 0 && $q10 != 0 )
            {
                $qry = "update as_f_teacher set t_id='$t_id', s_id='$s_id', q1='$q1',q2='$q2',q3='$q3',q4='$q4',q5='$q5',q6='$q6',q7='$q7',q8='$q8',q9='$q9',q10='$q10' where t_id = '".$t_id."' and s_id = '".$s_id."'";
                $sql = mysqli_query($con, $qry);
                //echo $qry;
                header("location: ../teachers.php");
            }
            else
            {
                echo "<script>alert('Plase Attent Every Question');window.location.href='../teachers.php';</script>";
            }
        }
    }


    
    if(isset($_POST['next']))
    {
        $s_id = @$_POST['s_id'];
        $class = @$_POST['class'];
        if($class == 'F.Y.B.Sc(IT)')
        {
            $q = "select t_id from as_teacher where t_class ='".@$class."'";
            $qrun = mysqli_query($con, $q);
            $row = mysqli_fetch_array($qrun, MYSQLI_ASSOC);
            $query = "select t_id from as_f_teacher where s_id = '".$s_id."'";
            $query_run = mysqli_query($con, $query);
            $num = mysqli_num_rows($query_run);    
            if($num == 5)
            {
                    header("location: ../principal.php");
            } 
            else
            {
                echo "<script>alert('Plase Attent Every Teacher ');window.location.href='../teachers.php';</script>";
            }
        }
        elseif($class == 'S.Y.B.Sc(IT)')
        {
            $q = "select t_id from as_teacher where t_class ='".@$class."'";
            $qrun = mysqli_query($con, $q);
            $row = mysqli_fetch_array($qrun, MYSQLI_ASSOC);
            $query = "select t_id from as_f_teacher where s_id = '".$s_id."'";
            $query_run = mysqli_query($con, $query);
            echo $num = mysqli_num_rows($query_run);    
            if($num == 5)
            {
                echo "<script>window.location.href='../principal.php';</script>";
            } 
            else
            {
                echo "<script>alert('Plase Attent Every Teacher ');window.location.href='../teachers.php';</script>";
            }
        }
        elseif($class == 'T.Y.B.Sc(IT)')
        {
            $q = "select t_id from as_teacher where t_class ='".@$class."'";
            $qrun = mysqli_query($con, $q);
            $row = mysqli_fetch_array($qrun, MYSQLI_ASSOC);
            $query = "select t_id from as_f_teacher where s_id = '".$s_id."'";
            $query_run = mysqli_query($con, $query);
            $num = mysqli_num_rows($query_run);    
            if($num == 5)
            {
                    header("location: ../principal.php");
            } 
            else
            {
                echo "<script>alert('Plase Attent Every Teacher ');window.location.href='../teachers.php';</script>";
            }
        }
        
    }

    
?>