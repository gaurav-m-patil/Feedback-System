<?php
    if(isset($_POST['logout']))
    {
        session_destroy();
        echo "<script>alert('Logout'); window.location.href='../../index.php';</script>";
    }
//infra
    $q1 = "select sugg from as_f_infrastucture WHERE LENGTH(sugg) > 0";
    $qrun = mysqli_query($con, $q1);
    $i = 0;
    while($i <= $rows1 = mysqli_num_rows($qrun))
    {
        if(mysqli_num_rows($qrun)>0)
        {
            $row = mysqli_fetch_array($qrun, MYSQLI_ASSOC);
            $infra[$i] = $row['sugg'];
        }  
        $i=$i+1;
    }
    
    
//library
    $q1 = "select sugg from as_f_library WHERE LENGTH(sugg) > 0";
    $qrun = mysqli_query($con, $q1);
    $i = 0;
    while($i <= $rows2 = mysqli_num_rows($qrun))
    {
        if(mysqli_num_rows($qrun)>0)
        {
            $row = mysqli_fetch_array($qrun, MYSQLI_ASSOC);
            $lib[$i] = $row['sugg'];
        }  
        $i=$i+1;
    }

//Gymkhana
    $q1 = "select sugg from as_f_gymkhana WHERE LENGTH(sugg) > 0";
    $qrun = mysqli_query($con, $q1);
    $i = 0;
    while($i <= $rows3 = mysqli_num_rows($qrun))
    {
        if(mysqli_num_rows($qrun)>0)
        {
            $row = mysqli_fetch_array($qrun, MYSQLI_ASSOC);
            $gym[$i] = $row['sugg'];
        }  
        $i=$i+1;
    }

//Administration
    $q1 = "select sugg from as_f_administration WHERE LENGTH(sugg) > 0";
    $qrun = mysqli_query($con, $q1);
    $i = 0;
    while($i <= $rows4 = mysqli_num_rows($qrun))
    {
        if(mysqli_num_rows($qrun)>0)
        {
            $row = mysqli_fetch_array($qrun, MYSQLI_ASSOC);
            $admin[$i] = $row['sugg'];
        }  
        $i=$i+1;
    }

//Extra Activities
    $q1 = "select sugg from as_f_activities WHERE LENGTH(sugg) > 0";
    $qrun = mysqli_query($con, $q1);
    $i = 0;
    while($i <= $rows5 = mysqli_num_rows($qrun))
    {
        if(mysqli_num_rows($qrun)>0)
        {
            $row = mysqli_fetch_array($qrun, MYSQLI_ASSOC);
            $act[$i] = $row['sugg'];
        }  
        $i=$i+1;
    }

?>