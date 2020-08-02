<?php
    if(isset($_POST['logout']))
    {
        session_destroy();
        echo "<script>alert('Logout'); window.location.href='../../index.php';</script>";
    }

    $q1 = "select s_id from as_student where s_id in (select s_id from as_f_activities) and s_id in (select s_id from as_f_administration) and s_id in (select s_id from as_f_gymkhana) and s_id in (select s_id from as_f_infrastucture) and s_id in (select s_id from as_f_library) and s_id in (select s_id from as_f_ncc) and s_id in (select s_id from as_f_principal) ";
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
    }

//PRINCIPAL (princ)    
    @$princex= 0;
    @$princvg= 0;
    @$princg= 0;
    @$princp= 0;


    $q2 = " select q1,q2,q3,q4 from as_f_principal " ;
    $qrun2 = mysqli_query($con,$q2);
    while($row2 = mysqli_fetch_array($qrun2, MYSQLI_ASSOC))
    {
        if(mysqli_num_rows($qrun2) > 0)
        {
            // Excellent
            if($row2['q1'] == 4)
            {
                @$princex= @$princex+ 1;
            }
            if($row2['q2'] == 4)
            {
                @$princex= @$princex+ 1;
            }
            if($row2['q3'] == 4)
            {
                @$princex= @$princex+ 1;
            }
            if($row2['q4'] == 4)
            {
                @$princex= @$princex+ 1;
            }

            //very good
            if($row2['q1'] == 3)
            {
                @$princvg= @$princvg+ 1;
            }
            if($row2['q2'] == 3)
            {
                @$princvg= @$princvg+ 1;
            }
            if($row2['q3'] == 3)
            {
                @$princvg= @$princvg+ 1;
            }
            if($row2['q4'] == 3)
            {
                @$princvg= @$princvg+ 1;
            }

            //good
            if($row2['q1'] == 2)
            {
                @$princg= @$princg+ 1;
            }
            if($row2['q2'] == 2)
            {
                @$princg= @$princg+ 1;
            }
            if($row2['q3'] == 2)
            {
                @$princg= @$princg+ 1;
            }
            if($row2['q4'] == 2)
            {
                @$princg= @$princg+ 1;
            }

            //Poor
            if($row2['q1'] == 1)
            {
                @$princp= @$princp+ 1;
            }
            if($row2['q2'] == 1)
            {
                @$princp= @$princp+ 1;
            }
            if($row2['q3'] == 1)
            {
                @$princp= @$princp+ 1;
            }
            if($row2['q4'] == 1)
            {
                @$princp= @$princp+ 1;
            }

        }  
    }
    @$princexper = number_format(((@$princex/($count*4)) * 100),1);    
    @$princvgper = number_format(((@$princvg/($count*4)) * 100),1);
    @$princgper = number_format(((@$princg/($count*4)) * 100),1);
    @$princpper = number_format(((@$princp/($count*4)) * 100),1);

 //Infrastucture (infra)
    @$infraex= 0;
    @$infravg= 0;
    @$infrag= 0;
    @$infrap= 0;
    $q2 = "select q1,q2,q3,q4 from as_f_infrastucture " ;
    $qrun2 = mysqli_query($con,$q2);
    while($row2 = mysqli_fetch_array($qrun2, MYSQLI_ASSOC))
    {
        if(mysqli_num_rows($qrun2) > 0)
        {
            // Excellent
            if($row2['q1'] == 4)
            {
                @$infraex= @$infraex+ 1;
            }
            if($row2['q2'] == 4)
            {
                @$infraex= @$infraex+ 1;
            }
            if($row2['q3'] == 4)
            {
                @$infraex= @$infraex+ 1;
            }
            if($row2['q4'] == 4)
            {
                @$infraex= @$infraex+ 1;
            }

            //very good
            if($row2['q1'] == 3)
            {
                @$infravg= @$infravg+ 1;
            }
            if($row2['q2'] == 3)
            {
                @$infravg= @$infravg+ 1;
            }
            if($row2['q3'] == 3)
            {
                @$infravg= @$infravg+ 1;
            }
            if($row2['q4'] == 3)
            {
                @$infravg= @$infravg+ 1;
            }

            //good
            if($row2['q1'] == 2)
            {
                @$infrag= @$infrag+ 1;
            }
            if($row2['q2'] == 2)
            {
                @$infrag= @$infrag+ 1;
            }
            if($row2['q3'] == 2)
            {
                @$infrag= @$infrag+ 1;
            }
            if($row2['q4'] == 2)
            {
                @$infrag= @$infrag+ 1;
            }

            //Poor
            if($row2['q1'] == 1)
            {
                @$infrap= @$infrap+ 1;
            }
            if($row2['q2'] == 1)
            {
                @$infrap= @$infrap+ 1;
            }
            if($row2['q3'] == 1)
            {
                @$infrap= @$infrap+ 1;
            }
            if($row2['q4'] == 1)
            {
                @$infrap= @$infrap+ 1;
            }

        }  
    }
    @$infraexper = number_format(((@$infraex/($count*4)) * 100),1);    
    @$infravgper = number_format(((@$infravg/($count*4)) * 100),1);
    @$infragper = number_format(((@$infrag/($count*4)) * 100),1);
    @$infrapper = number_format(((@$infrap/($count*4)) * 100),1);

//Library (lib)
    @$libex= 0;
    @$libvg= 0;
    @$libg= 0;
    @$libp= 0;

    $q2 = "select q1,q2,q3,q4 from as_f_library " ;
    $qrun2 = mysqli_query($con,$q2);
    while($row2 = mysqli_fetch_array($qrun2, MYSQLI_ASSOC))
    {
        if(mysqli_num_rows($qrun2) > 0)
        {
            // Excellent
            if($row2['q1'] == 4)
            {
                @$libex= @$libex+ 1;
            }
            if($row2['q2'] == 4)
            {
                @$libex= @$libex+ 1;
            }
            if($row2['q3'] == 4)
            {
                @$libex= @$libex+ 1;
            }
            if($row2['q4'] == 4)
            {
                @$libex= @$libex+ 1;
            }

            //very good
            if($row2['q1'] == 3)
            {
                @$libvg= @$libvg+ 1;
            }
            if($row2['q2'] == 3)
            {
                @$libvg= @$libvg+ 1;
            }
            if($row2['q3'] == 3)
            {
                @$libvg= @$libvg+ 1;
            }
            if($row2['q4'] == 3)
            {
                @$libvg= @$libvg+ 1;
            }

            //good
            if($row2['q1'] == 2)
            {
                @$libg= @$libg+ 1;
            }
            if($row2['q2'] == 2)
            {
                @$libg= @$libg+ 1;
            }
            if($row2['q3'] == 2)
            {
                @$libg= @$libg+ 1;
            }
            if($row2['q4'] == 2)
            {
                @$libg= @$libg+ 1;
            }

            //Poor
            if($row2['q1'] == 1)
            {
                @$libp= @$libp+ 1;
            }
            if($row2['q2'] == 1)
            {
                @$libp= @$libp+ 1;
            }
            if($row2['q3'] == 1)
            {
                @$libp= @$libp+ 1;
            }
            if($row2['q4'] == 1)
            {
                @$libp= @$libp+ 1;
            }

        }  
    }
    @$libexper = number_format(((@$libex/($count*4)) * 100),1);    
    @$libvgper = number_format(((@$libvg/($count*4)) * 100),1);
    @$libgper = number_format(((@$libg/($count*4)) * 100),1);
    @$libpper = number_format(((@$libp/($count*4)) * 100),1);

//Gymkhana (gym)
    @$gymex= 0;
    @$gymvg= 0;
    @$gymg= 0;
    @$gymp= 0;

    $q2 = "select q1,q2,q3,q4 from as_f_gymkhana " ;
    $qrun2 = mysqli_query($con,$q2);
    while($row2 = mysqli_fetch_array($qrun2, MYSQLI_ASSOC))
    {
        if(mysqli_num_rows($qrun2) > 0)
        {
            // Excellent
            if($row2['q1'] == 4)
            {
                @$gymex= @$gymex+ 1;
            }
            if($row2['q2'] == 4)
            {
                @$gymex= @$gymex+ 1;
            }
            if($row2['q3'] == 4)
            {
                @$gymex= @$gymex+ 1;
            }
            if($row2['q4'] == 4)
            {
                @$gymex= @$gymex+ 1;
            }

            //very good
            if($row2['q1'] == 3)
            {
                @$gymvg= @$gymvg+ 1;
            }
            if($row2['q2'] == 3)
            {
                @$gymvg= @$gymvg+ 1;
            }
            if($row2['q3'] == 3)
            {
                @$gymvg= @$gymvg+ 1;
            }
            if($row2['q4'] == 3)
            {
                @$gymvg= @$gymvg+ 1;
            }

            //good
            if($row2['q1'] == 2)
            {
                @$gymg= @$gymg+ 1;
            }
            if($row2['q2'] == 2)
            {
                @$gymg= @$gymg+ 1;
            }
            if($row2['q3'] == 2)
            {
                @$gymg= @$gymg+ 1;
            }
            if($row2['q4'] == 2)
            {
                @$gymg= @$gymg+ 1;
            }

            //Poor
            if($row2['q1'] == 1)
            {
                @$gymp= @$gymp+ 1;
            }
            if($row2['q2'] == 1)
            {
                @$gymp= @$gymp+ 1;
            }
            if($row2['q3'] == 1)
            {
                @$gymp= @$gymp+ 1;
            }
            if($row2['q4'] == 1)
            {
                @$gymp= @$gymp+ 1;
            }

        }  
    }
    @$gymexper = number_format(((@$gymex/($count*4)) * 100),1);    
    @$gymvgper = number_format(((@$gymvg/($count*4)) * 100),1);
    @$gymgper = number_format(((@$gymg/($count*4)) * 100),1);
    @$gympper = number_format(((@$gymp/($count*4)) * 100),1);

//Administration (admin)
    @$adminex= 0;
    @$adminvg= 0;
    @$adming= 0;
    @$adminp= 0;

    $q2 = "select q1,q2,q3,q4,q5 from as_f_administration " ;
    $qrun2 = mysqli_query($con,$q2);
    while($row2 = mysqli_fetch_array($qrun2, MYSQLI_ASSOC))
    {
        if(mysqli_num_rows($qrun2) > 0)
        {
            // Excellent
            if($row2['q1'] == 4)
            {
                @$adminex= @$adminex+ 1;
            }
            if($row2['q2'] == 4)
            {
                @$adminex= @$adminex+ 1;
            }
            if($row2['q3'] == 4)
            {
                @$adminex= @$adminex+ 1;
            }
            if($row2['q4'] == 4)
            {
                @$adminex= @$adminex+ 1;
            }
            if($row2['q5'] == 4)
            {
                @$adminex= @$adminex+ 1;
            }

            //very good
            if($row2['q1'] == 3)
            {
                @$adminvg= @$adminvg+ 1;
            }
            if($row2['q2'] == 3)
            {
                @$adminvg= @$adminvg+ 1;
            }
            if($row2['q3'] == 3)
            {
                @$adminvg= @$adminvg+ 1;
            }
            if($row2['q4'] == 3)
            {
                @$adminvg= @$adminvg+ 1;
            }
            if($row2['q5'] == 3)
            {
                @$adminvg= @$adminvg+ 1;
            }

            //good
            if($row2['q1'] == 2)
            {
                @$adming= @$adming+ 1;
            }
            if($row2['q2'] == 2)
            {
                @$adming= @$adming+ 1;
            }
            if($row2['q3'] == 2)
            {
                @$adming= @$adming+ 1;
            }
            if($row2['q4'] == 2)
            {
                @$adming= @$adming+ 1;
            }
            if($row2['q5'] == 2)
            {
                @$adming= @$adming+ 1;
            }

            //Poor
            if($row2['q1'] == 1)
            {
                @$adminp= @$adminp+ 1;
            }
            if($row2['q2'] == 1)
            {
                @$adminp= @$adminp+ 1;
            }
            if($row2['q3'] == 1)
            {
                @$adminp= @$adminp+ 1;
            }
            if($row2['q4'] == 1)
            {
                @$adminp= @$adminp+ 1;
            }
            if($row2['q5'] == 1)
            {
                @$adminp= @$adminp+ 1;
            }
        }  
    }
    @$adminexper = number_format(((@$adminex/($count*5)) * 100),1);    
    @$adminvgper = number_format(((@$adminvg/($count*5)) * 100),1);
    @$admingper = number_format(((@$adming/($count*5)) * 100),1);
    @$adminpper = number_format(((@$adminp/($count*5)) * 100),1);

//Extra Activities (act)
    @$actex= 0;
    @$actvg= 0;
    @$actg= 0;
    @$actp= 0;

    $q2 = "select q1,q2,q3,q4,q5 from as_f_activities " ;
    $qrun2 = mysqli_query($con,$q2);
    while($row2 = mysqli_fetch_array($qrun2, MYSQLI_ASSOC))
    {
        if(mysqli_num_rows($qrun2) > 0)
        {
            // Excellent
            if($row2['q1'] == 4)
            {
                @$actex= @$actex+ 1;
            }
            if($row2['q2'] == 4)
            {
                @$actex= @$actex+ 1;
            }
            if($row2['q3'] == 4)
            {
                @$actex= @$actex+ 1;
            }
            if($row2['q4'] == 4)
            {
                @$actex= @$actex+ 1;
            }if($row2['q5'] == 4)
            {
                @$actex= @$actex+ 1;
            }

            //very good
            if($row2['q1'] == 3)
            {
                @$actvg= @$actvg+ 1;
            }
            if($row2['q2'] == 3)
            {
                @$actvg= @$actvg+ 1;
            }
            if($row2['q3'] == 3)
            {
                @$actvg= @$actvg+ 1;
            }
            if($row2['q4'] == 3)
            {
                @$actvg= @$actvg+ 1;
            }
            if($row2['q5'] == 3)
            {
                @$actvg= @$actvg+ 1;
            }

            //good
            if($row2['q1'] == 2)
            {
                @$actg= @$actg+ 1;
            }
            if($row2['q2'] == 2)
            {
                @$actg= @$actg+ 1;
            }
            if($row2['q3'] == 2)
            {
                @$actg= @$actg+ 1;
            }
            if($row2['q4'] == 2)
            {
                @$actg= @$actg+ 1;
            }
            if($row2['q5'] == 2)
            {
                @$actg= @$actg+ 1;
            }

            //Poor
            if($row2['q1'] == 1)
            {
                @$actp= @$actp+ 1;
            }
            if($row2['q2'] == 1)
            {
                @$actp= @$actp+ 1;
            }
            if($row2['q3'] == 1)
            {
                @$actp= @$actp+ 1;
            }
            if($row2['q4'] == 1)
            {
                @$actp= @$actp+ 1;
            }
            if($row2['q5'] == 1)
            {
                @$actp= @$actp+ 1;
            }

        }  
    }
    @$actexper = number_format(((@$actex/($count*5)) * 100),1);    
    @$actvgper = number_format(((@$actvg/($count*5)) * 100),1);
    @$actgper = number_format(((@$actg/($count*5)) * 100),1);
    @$actpper = number_format(((@$actp/($count*5)) * 100),1);

//Ncc/Nss   (ncc)

    $q1 = "select s_id from as_student where s_id in (select s_id from as_f_ncc) ";
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
    }


    @$nccex= 0;
    @$nccvg= 0;
    @$nccg= 0;
    @$nccp= 0;

    $q2 = "select q1,q2,q3,q4 from as_f_ncc " ;
    $qrun2 = mysqli_query($con,$q2);
    while($row2 = mysqli_fetch_array($qrun2, MYSQLI_ASSOC))
    {
        if(mysqli_num_rows($qrun2) > 0)
        {
            // Excellent
            if($row2['q1'] == 4)
            {
                @$nccex= @$nccex+ 1;
            }
            if($row2['q2'] == 4)
            {
                @$nccex= @$nccex+ 1;
            }
            if($row2['q3'] == 4)
            {
                @$nccex= @$nccex+ 1;
            }
            if($row2['q4'] == 4)
            {
                @$nccex= @$nccex+ 1;
            }

            //very good
            if($row2['q1'] == 3)
            {
                @$nccvg= @$nccvg+ 1;
            }
            if($row2['q2'] == 3)
            {
                @$nccvg= @$nccvg+ 1;
            }
            if($row2['q3'] == 3)
            {
                @$nccvg= @$nccvg+ 1;
            }
            if($row2['q4'] == 3)
            {
                @$nccvg= @$nccvg+ 1;
            }

            //good
            if($row2['q1'] == 2)
            {
                @$nccgh= @$nccg+ 1;
            }
            if($row2['q2'] == 2)
            {
                @$nccg= @$nccg+ 1;
            }
            if($row2['q3'] == 2)
            {
                @$nccg= @$nccg+ 1;
            }
            if($row2['q4'] == 2)
            {
                @$nccg= @$nccg+ 1;
            }

            //Poor
            if($row2['q1'] == 1)
            {
                @$nccp= @$nccp+ 1;
            }
            if($row2['q2'] == 1)
            {
                @$nccp= @$nccp+ 1;
            }
            if($row2['q3'] == 1)
            {
                @$nccp= @$nccp+ 1;
            }
            if($row2['q4'] == 1)
            {
                @$nccp= @$nccp+ 1;
            }

        }  
    }
    @$nccexper = number_format(((@$nccex/($count*4)) * 100),1);    
    @$nccvgper = number_format(((@$nccvg/($count*4)) * 100),1);
    @$nccgper = number_format(((@$nccg/($count*4)) * 100),1);
    @$nccpper = number_format(((@$nccp/($count*4)) * 100),1);


?>