<?php
    


    if(isset($_POST['logout']))
    {
        session_destroy();
        echo "<script>alert('Logout'); window.location.href='../../index.php';</script>";
    }

//FY
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
    
    @$ex[5] = 0;
    @$vg[5] = 0;
    @$g[5] = 0;
    @$p[5] = 0;

    $t = 1;
    while($t<=5)
    {
        $q1 = "select s_id from as_student where class = 'F.Y.B.Sc(IT)' and s_id in (select s_id from as_f_teacher)";
        $qrun1 = mysqli_query($con, $q1);
        $count = 0;
        $i = 0;
        while($row = mysqli_fetch_array($qrun1, MYSQLI_ASSOC))
        {   
            $i = $i + 1 ;
            if(mysqli_num_rows($qrun1)>0)
            {
                @$fysid[$i] = $row['s_id'];
                $count = $count + 1;
            } 

            $q2 = "select q1,q2,q3,q4,q5,q6,q7,q8,q9,q10 from as_f_teacher where s_id = '".@$fysid[$i]."' and t_id = '".$t."' ";
            $qrun2 = mysqli_query($con,$q2);
            while($row2 = mysqli_fetch_array($qrun2, MYSQLI_ASSOC))
            {
                if(mysqli_num_rows($qrun1) > 0)
                {
                    // Excellent
                    if($row2['q1'] == 4)
                    {
                        @$ex[$t] = @$ex[$t] + 1;
                    }
                    if($row2['q2'] == 4)
                    {
                        @$ex[$t] = @$ex[$t] + 1;
                    }
                    if($row2['q3'] == 4)
                    {
                        @$ex[$t] = @$ex[$t] + 1;
                    }
                    if($row2['q4'] == 4)
                    {
                        @$ex[$t] = @$ex[$t] + 1;
                    }
                    if($row2['q5'] == 4)
                    {
                        @$ex[$t] = @$ex[$t] + 1;
                    }
                    if($row2['q6'] == 4)
                    {
                        @$ex[$t] = @$ex[$t] + 1;
                    }
                    if($row2['q7'] == 4)
                    {
                        @$ex[$t] = @$ex[$t] + 1;
                    }
                    if($row2['q8'] == 4)
                    {
                        @$ex[$t] = @$ex[$t] + 1;
                    }
                    if($row2['q9'] == 4)
                    {
                        @$ex[$t] = @$ex[$t] + 1;
                    }
                    if($row2['q10'] == 4)
                    {
                        @$ex[$t] = @$ex[$t] + 1;
                    }
                    //very good
                    if($row2['q1'] == 3)
                    {
                        @$vg[$t] = @$vg[$t] + 1;
                    }
                    if($row2['q2'] == 3)
                    {
                        @$vg[$t] = @$vg[$t] + 1;
                    }
                    if($row2['q3'] == 3)
                    {
                        @$vg[$t] = @$vg[$t] + 1;
                    }
                    if($row2['q4'] == 3)
                    {
                        @$vg[$t] = @$vg[$t] + 1;
                    }
                    if($row2['q5'] == 3)
                    {
                        @$vg[$t] = @$vg[$t] + 1;
                    }
                    if($row2['q6'] == 3)
                    {
                        @$vg[$t] = @$vg[$t] + 1;
                    }
                    if($row2['q7'] == 3)
                    {
                        @$vg[$t] = @$vg[$t] + 1;
                    }
                    if($row2['q8'] == 3)
                    {
                        @$vg[$t] = @$vg[$t] + 1;
                    }
                    if($row2['q9'] == 3)
                    {
                        @$vg[$t] = @$vg[$t] + 1;
                    }
                    if($row2['q10'] == 3)
                    {
                        @$vg[$t] = @$vg[$t] + 1;
                    }
                    //good
                    if($row2['q1'] == 2)
                    {
                        @$g[$t] = @$g[$t] + 1;
                    }
                    if($row2['q2'] == 2)
                    {
                        @$g[$t] = @$g[$t] + 1;
                    }
                    if($row2['q3'] == 2)
                    {
                        @$g[$t] = @$g[$t] + 1;
                    }
                    if($row2['q4'] == 2)
                    {
                        @$g[$t] = @$g[$t] + 1;
                    }
                    if($row2['q5'] == 2)
                    {
                        @$g[$t] = @$g[$t] + 1;
                    }
                    if($row2['q6'] == 2)
                    {
                        @$g[$t] = @$g[$t] + 1;
                    }
                    if($row2['q7'] == 2)
                    {
                        @$g[$t] = @$g[$t] + 1;
                    }
                    if($row2['q8'] == 2)
                    {
                        @$g[$t] = @$g[$t] + 1;
                    }
                    if($row2['q9'] == 2)
                    {
                        @$g[$t] = @$g[$t] + 1;
                    }
                    if($row2['q10'] == 2)
                    {
                        @$g[$t] = @$g[$t] + 1;
                    }
                    //Poor
                    if($row2['q1'] == 1)
                    {
                        @$p[$t] = @$p[$t] + 1;
                    }
                    if($row2['q2'] == 1)
                    {
                        @$p[$t] = @$p[$t] + 1;
                    }
                    if($row2['q3'] == 1)
                    {
                        @$p[$t] = @$p[$t] + 1;
                    }
                    if($row2['q4'] == 1)
                    {
                        @$p[$t] = @$p[$t] + 1;
                    }
                    if($row2['q5'] == 1)
                    {
                        @$p[$t] = @$p[$t] + 1;
                    }
                    if($row2['q6'] == 1)
                    {
                        @$p[$t] = @$p[$t] + 1;
                    }
                    if($row2['q7'] == 1)
                    {
                        @$p[$t] = @$p[$t] + 1;
                    }
                    if($row2['q8'] == 1)
                    {
                        @$p[$t] = @$p[$t] + 1;
                    }
                    if($row2['q9'] == 1)
                    {
                        @$p[$t] = @$p[$t] + 1;
                    }
                    if($row2['q10'] == 1)
                    {
                        @$p[$t] = @$p[$t] + 1;
                    }
                }  
            } 
        }
        
        $t = $t + 1;
    }

    $z = 1;
    while($z <= 5)
    {
        
        @$ex[$z];
        @$fyexper[$z] = number_format(((@$ex[$z]/($count*10)) * 100),1);
        @$vg[$z];
        @$fyvgper[$z] = number_format(((@$vg[$z]/($count*10)) * 100),1);
        @$g[$z];
        @$fygper[$z] = number_format(((@$g[$z]/($count*10)) * 100),1);
        @$p[$z];
        @$fypper[$z] = number_format(((@$p[$z]/($count*10)) * 100),1);
        $z= $z + 1;
    }

    


//SY
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

    @$ex[5] = 0;
    @$vg[5] = 0;
    @$g[5] = 0;
    @$p[5] = 0;

    $t = 6;
    while($t<=10)
    {
        $q1 = "select s_id from as_student where class = 'S.Y.B.Sc(IT)' and s_id in (select s_id from as_f_teacher)";
        $qrun1 = mysqli_query($con, $q1);
        $count = 0;
        $i = 0;
        while($row = mysqli_fetch_array($qrun1, MYSQLI_ASSOC))
        {   
            $i = $i + 1 ;
            if(mysqli_num_rows($qrun1)>0)
            {
                @$sysid[$i] = $row['s_id'];
                $count = $count + 1;
            } 

            $q2 = "select q1,q2,q3,q4,q5,q6,q7,q8,q9,q10 from as_f_teacher where s_id = '".@$sysid[$i]."' and t_id = '".$t."' ";
            $qrun2 = mysqli_query($con,$q2);
            while($row2 = mysqli_fetch_array($qrun2, MYSQLI_ASSOC))
            {
                if(mysqli_num_rows($qrun1) > 0)
                {
                    // Excellent
                    if($row2['q1'] == 4)
                    {
                        @$ex[$t] = @$ex[$t] + 1;
                    }
                    if($row2['q2'] == 4)
                    {
                        @$ex[$t] = @$ex[$t] + 1;
                    }
                    if($row2['q3'] == 4)
                    {
                        @$ex[$t] = @$ex[$t] + 1;
                    }
                    if($row2['q4'] == 4)
                    {
                        @$ex[$t] = @$ex[$t] + 1;
                    }
                    if($row2['q5'] == 4)
                    {
                        @$ex[$t] = @$ex[$t] + 1;
                    }
                    if($row2['q6'] == 4)
                    {
                        @$ex[$t] = @$ex[$t] + 1;
                    }
                    if($row2['q7'] == 4)
                    {
                        @$ex[$t] = @$ex[$t] + 1;
                    }
                    if($row2['q8'] == 4)
                    {
                        @$ex[$t] = @$ex[$t] + 1;
                    }
                    if($row2['q9'] == 4)
                    {
                        @$ex[$t] = @$ex[$t] + 1;
                    }
                    if($row2['q10'] == 4)
                    {
                        @$ex[$t] = @$ex[$t] + 1;
                    }
                    //very good
                    if($row2['q1'] == 3)
                    {
                        @$vg[$t] = @$vg[$t] + 1;
                    }
                    if($row2['q2'] == 3)
                    {
                        @$vg[$t] = @$vg[$t] + 1;
                    }
                    if($row2['q3'] == 3)
                    {
                        @$vg[$t] = @$vg[$t] + 1;
                    }
                    if($row2['q4'] == 3)
                    {
                        @$vg[$t] = @$vg[$t] + 1;
                    }
                    if($row2['q5'] == 3)
                    {
                        @$vg[$t] = @$vg[$t] + 1;
                    }
                    if($row2['q6'] == 3)
                    {
                        @$vg[$t] = @$vg[$t] + 1;
                    }
                    if($row2['q7'] == 3)
                    {
                        @$vg[$t] = @$vg[$t] + 1;
                    }
                    if($row2['q8'] == 3)
                    {
                        @$vg[$t] = @$vg[$t] + 1;
                    }
                    if($row2['q9'] == 3)
                    {
                        @$vg[$t] = @$vg[$t] + 1;
                    }
                    if($row2['q10'] == 3)
                    {
                        @$vg[$t] = @$vg[$t] + 1;
                    }
                    //good
                    if($row2['q1'] == 2)
                    {
                        @$g[$t] = @$g[$t] + 1;
                    }
                    if($row2['q2'] == 2)
                    {
                        @$g[$t] = @$g[$t] + 1;
                    }
                    if($row2['q3'] == 2)
                    {
                        @$g[$t] = @$g[$t] + 1;
                    }
                    if($row2['q4'] == 2)
                    {
                        @$g[$t] = @$g[$t] + 1;
                    }
                    if($row2['q5'] == 2)
                    {
                        @$g[$t] = @$g[$t] + 1;
                    }
                    if($row2['q6'] == 2)
                    {
                        @$g[$t] = @$g[$t] + 1;
                    }
                    if($row2['q7'] == 2)
                    {
                        @$g[$t] = @$g[$t] + 1;
                    }
                    if($row2['q8'] == 2)
                    {
                        @$g[$t] = @$g[$t] + 1;
                    }
                    if($row2['q9'] == 2)
                    {
                        @$g[$t] = @$g[$t] + 1;
                    }
                    if($row2['q10'] == 2)
                    {
                        @$g[$t] = @$g[$t] + 1;
                    }
                    //Poor
                    if($row2['q1'] == 1)
                    {
                        @$p[$t] = @$p[$t] + 1;
                    }
                    if($row2['q2'] == 1)
                    {
                        @$p[$t] = @$p[$t] + 1;
                    }
                    if($row2['q3'] == 1)
                    {
                        @$p[$t] = @$p[$t] + 1;
                    }
                    if($row2['q4'] == 1)
                    {
                        @$p[$t] = @$p[$t] + 1;
                    }
                    if($row2['q5'] == 1)
                    {
                        @$p[$t] = @$p[$t] + 1;
                    }
                    if($row2['q6'] == 1)
                    {
                        @$p[$t] = @$p[$t] + 1;
                    }
                    if($row2['q7'] == 1)
                    {
                        @$p[$t] = @$p[$t] + 1;
                    }
                    if($row2['q8'] == 1)
                    {
                        @$p[$t] = @$p[$t] + 1;
                    }
                    if($row2['q9'] == 1)
                    {
                        @$p[$t] = @$p[$t] + 1;
                    }
                    if($row2['q10'] == 1)
                    {
                        @$p[$t] = @$p[$t] + 1;
                    }
                }  
            } 
        }
        
        $t = $t + 1;
    }
    
    $z = 6;
    while($z <= 10)
    {
        @$ex[$z];
        @$syexper[$z] = number_format(((@$ex[$z]/($count*10)) * 100),1);
        @$vg[$z];
        @$syvgper[$z] = number_format(((@$vg[$z]/($count*10)) * 100),1);
        @$g[$z];
        @$sygper[$z] = number_format(((@$g[$z]/($count*10)) * 100),1);
        @$p[$z];        
        @$sypper[$z] = number_format(((@$p[$z]/($count*10)) * 100),1);
        $z= $z + 1;
    }




//TY
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

    @$ex[5] = 0;
    @$vg[5] = 0;
    @$g[5] = 0;
    @$p[5] = 0;

    $t = 11;
    while($t<=15)
    {
        $q1 = "select s_id from as_student where class = 'T.Y.B.Sc(IT)' and s_id in (select s_id from as_f_teacher)";
        $qrun1 = mysqli_query($con, $q1);
        $count = 0;
        $i = 0;
        while($row = mysqli_fetch_array($qrun1, MYSQLI_ASSOC))
        {   
            $i = $i + 1 ;
            if(mysqli_num_rows($qrun1)>0)
            {
                @$tysid[$i] = $row['s_id'];
                $count = $count + 1;
            } 

            $q2 = "select q1,q2,q3,q4,q5,q6,q7,q8,q9,q10 from as_f_teacher where s_id = '".@$tysid[$i]."' and t_id = '".$t."' ";
            $qrun2 = mysqli_query($con,$q2);
            while($row2 = mysqli_fetch_array($qrun2, MYSQLI_ASSOC))
            {
                if(mysqli_num_rows($qrun1) > 0)
                {
                    // Excellent
                    if($row2['q1'] == 4)
                    {
                        @$ex[$t] = @$ex[$t] + 1;
                    }
                    if($row2['q2'] == 4)
                    {
                        @$ex[$t] = @$ex[$t] + 1;
                    }
                    if($row2['q3'] == 4)
                    {
                        @$ex[$t] = @$ex[$t] + 1;
                    }
                    if($row2['q4'] == 4)
                    {
                        @$ex[$t] = @$ex[$t] + 1;
                    }
                    if($row2['q5'] == 4)
                    {
                        @$ex[$t] = @$ex[$t] + 1;
                    }
                    if($row2['q6'] == 4)
                    {
                        @$ex[$t] = @$ex[$t] + 1;
                    }
                    if($row2['q7'] == 4)
                    {
                        @$ex[$t] = @$ex[$t] + 1;
                    }
                    if($row2['q8'] == 4)
                    {
                        @$ex[$t] = @$ex[$t] + 1;
                    }
                    if($row2['q9'] == 4)
                    {
                        @$ex[$t] = @$ex[$t] + 1;
                    }
                    if($row2['q10'] == 4)
                    {
                        @$ex[$t] = @$ex[$t] + 1;
                    }
                    //very good
                    if($row2['q1'] == 3)
                    {
                        @$vg[$t] = @$vg[$t] + 1;
                    }
                    if($row2['q2'] == 3)
                    {
                        @$vg[$t] = @$vg[$t] + 1;
                    }
                    if($row2['q3'] == 3)
                    {
                        @$vg[$t] = @$vg[$t] + 1;
                    }
                    if($row2['q4'] == 3)
                    {
                        @$vg[$t] = @$vg[$t] + 1;
                    }
                    if($row2['q5'] == 3)
                    {
                        @$vg[$t] = @$vg[$t] + 1;
                    }
                    if($row2['q6'] == 3)
                    {
                        @$vg[$t] = @$vg[$t] + 1;
                    }
                    if($row2['q7'] == 3)
                    {
                        @$vg[$t] = @$vg[$t] + 1;
                    }
                    if($row2['q8'] == 3)
                    {
                        @$vg[$t] = @$vg[$t] + 1;
                    }
                    if($row2['q9'] == 3)
                    {
                        @$vg[$t] = @$vg[$t] + 1;
                    }
                    if($row2['q10'] == 3)
                    {
                        @$vg[$t] = @$vg[$t] + 1;
                    }
                    //good
                    if($row2['q1'] == 2)
                    {
                        @$g[$t] = @$g[$t] + 1;
                    }
                    if($row2['q2'] == 2)
                    {
                        @$g[$t] = @$g[$t] + 1;
                    }
                    if($row2['q3'] == 2)
                    {
                        @$g[$t] = @$g[$t] + 1;
                    }
                    if($row2['q4'] == 2)
                    {
                        @$g[$t] = @$g[$t] + 1;
                    }
                    if($row2['q5'] == 2)
                    {
                        @$g[$t] = @$g[$t] + 1;
                    }
                    if($row2['q6'] == 2)
                    {
                        @$g[$t] = @$g[$t] + 1;
                    }
                    if($row2['q7'] == 2)
                    {
                        @$g[$t] = @$g[$t] + 1;
                    }
                    if($row2['q8'] == 2)
                    {
                        @$g[$t] = @$g[$t] + 1;
                    }
                    if($row2['q9'] == 2)
                    {
                        @$g[$t] = @$g[$t] + 1;
                    }
                    if($row2['q10'] == 2)
                    {
                        @$g[$t] = @$g[$t] + 1;
                    }
                    //Poor
                    if($row2['q1'] == 1)
                    {
                        @$p[$t] = @$p[$t] + 1;
                    }
                    if($row2['q2'] == 1)
                    {
                        @$p[$t] = @$p[$t] + 1;
                    }
                    if($row2['q3'] == 1)
                    {
                        @$p[$t] = @$p[$t] + 1;
                    }
                    if($row2['q4'] == 1)
                    {
                        @$p[$t] = @$p[$t] + 1;
                    }
                    if($row2['q5'] == 1)
                    {
                        @$p[$t] = @$p[$t] + 1;
                    }
                    if($row2['q6'] == 1)
                    {
                        @$p[$t] = @$p[$t] + 1;
                    }
                    if($row2['q7'] == 1)
                    {
                        @$p[$t] = @$p[$t] + 1;
                    }
                    if($row2['q8'] == 1)
                    {
                        @$p[$t] = @$p[$t] + 1;
                    }
                    if($row2['q9'] == 1)
                    {
                        @$p[$t] = @$p[$t] + 1;
                    }
                    if($row2['q10'] == 1)
                    {
                        @$p[$t] = @$p[$t] + 1;
                    }
                }  
            } 
        }
        
        $t = $t + 1;
    }
    
    $z = 11;
    while($z <= 15)
    {
        
        @$ex[$z];
        @$tyexper[$z] = number_format(((@$ex[$z]/($count*10)) * 100),1);
        @$vg[$z];
        @$tyvgper[$z] = number_format(((@$vg[$z]/($count*10)) * 100),1);
        @$g[$z];
        @$tygper[$z] = number_format(((@$g[$z]/($count*10)) * 100),1);
        @$p[$z];
        @$typper[$z] = number_format(((@$p[$z]/($count*10)) * 100),1);
        $z= $z + 1;
    }



?>