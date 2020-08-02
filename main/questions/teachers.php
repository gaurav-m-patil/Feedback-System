<?php
    
    include("../header.php");
    require_once("controller/teachers.php");
    
    
    $abc = $_SESSION['user_name'];
    
    //echo $abc;
    
    $query = "select * from as_student where uname = '".$abc."'";
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



?>
        
 <html lang="en">       
     <head>
         <link rel="stylesheet" href="../font-awesome-4.7.0/css/font-awesome.css">
         <link rel="stylesheet" href="css/star.css">
         <script src="js/jquery.min.js"></script>
         <style>
             .box
             {
                 background-color: white;
                 padding: 15px 21 5 15;
             }
             .thumbnail 
             {  
                 padding: 0 0 0 0;
                 border:;
                 border-radius: 0;
                 background-color: #103047;
                 color: white;
             }
             .thumbnail:hover
             {
                 box-shadow: 10px 10px 30px #888888;
                 transition: 0.5s;
                 cursor: pointer;
             }
             .thumbnail:focus 
             {
                background-color: green;
                outline: 0;
             } 
             .line
             {
                 margin: 5px;
             }
             .modal , .modal-dialog
             {
                 border: 1px solid;
                 border-radius: 0px;
             }
         </style>
     </head>
<body>
    <div class='container box'>
        
        
            <h3>Teacher's :</h3>
                
            <div class='row text-center'>
                <div class='col-sm-1'></div>
                    <span data-toggle='modal' data-target='#trch1'>
                        <div class='col-sm-2'>
                            <div class='thumbnail' id='th1'>
                                <img src='img/user.jpg'><hr class='line'>
                                <h4><?php $i=0; echo 'Prof. '.$tname[$i].''; ?></h4>
                            </div>
                        </div>
                    </span>
                    <span data-toggle='modal' data-target='#trch2'>
                        <div class='col-sm-2'>
                            <div class='thumbnail' id='th2'>
                                <img src='img/user.jpg'><hr class='line'>
                                <h4><?php $i=1; echo 'Prof. '.$tname[$i].''; ?></h4>
                            </div>
                        </div>
                    </span>
                    <span data-toggle='modal' data-target='#trch3'>
                        <div class='col-sm-2'>
                            <div class='thumbnail' id='th3'>
                                <img src='img/user.jpg'><hr class='line'>
                                <h4><?php $i=2; echo 'Prof. '.$tname[$i].''; ?></h4>
                            </div>
                        </div>
                    </span>
                    <span data-toggle='modal' data-target='#trch4'>
                        <div class='col-sm-2'>
                            <div class='thumbnail' id='th4'>
                                <img src='img/user.jpg'><hr class='line'>
                                <h4><?php $i=3; echo 'Prof. '.$tname[$i].''; ?></h4>
                            </div>
                        </div>
                    </span>
                    <span data-toggle='modal' data-target='#trch5'>
                        <div class='col-sm-2'>
                            <div class='thumbnail' id='th5'>
                                <img src='img/user.jpg'><hr class='line'>
                                <h4><?php $i=4; echo 'Prof. '.$tname[$i].''; ?></h4>
                            </div>
                        </div>
                    </span>
                <div class='col-sm-1'></div>
            </div>
            

            <!-- Modal 1 -->
            <div class='modal fade' id='trch1' role='dialog'>
                <div class='modal-dialog modal-lg' style='width: 80%;'>
                    <div class='modal-content'>
                        <form method='post' action='controller/teachers.php' class="form-disable">
                            <div class='modal-header'>
                                <button type='button' class='close' data-dismiss='modal'>&times;</button>
                                <h4 class='modal-title'>Feedback Questions For Prof. <?php $i=0; echo $tname[$i]; ?></h4>
                            </div>
                            <div class='modal-body'>
                                    <div class='form-group'>
                                      <lable for='que1'>1. Command over the subject taught and communication skill.</lable>
                                        <div class='stars'>
                                            <input class='star star-4' id='star-4-1-tr-1' type='radio' name='que1' value='4'/>
                                            <label class='star star-4' for='star-4-1-tr-1'> Excellent</label>
                                            <input class='star star-3' id='star-3-1-tr-1' type='radio' name='que1' value='3'/>
                                            <label class='star star-3' for='star-3-1-tr-1'> Very Good</label>
                                            <input class='star star-2' id='star-2-1-tr-1' type='radio' name='que1' value='2'/>
                                            <label class='star star-2' for='star-2-1-tr-1'> Good</label>
                                            <input class='star star-1' id='star-1-1-tr-1' type='radio' name='que1' value='1'/>
                                            <label class='star star-1' for='star-1-1-tr-1'> Poor</label>
                                        </div>
                                    </div>
                                    <hr class='line'>
                                    <div class='form-group '>
                                        <lable for='que2'>2. Readiness to solve the student doubts or questions etc.</lable>
                                        <div class='stars'>
                                            <input class='star star-4' id='star-4-2-tr-1' type='radio' name='que2' value='4'/>
                                            <label class='star star-4' for='star-4-2-tr-1'> Excellent</label>
                                            <input class='star star-3' id='star-3-2-tr-1' type='radio' name='que2' value='3'/>
                                            <label class='star star-3' for='star-3-2-tr-1'> Very Good</label>
                                            <input class='star star-2' id='star-2-2-tr-1' type='radio' name='que2' value='2'/>
                                            <label class='star star-2' for='star-2-2-tr-1'> Good</label>
                                            <input class='star star-1' id='star-1-2-tr-1' type='radio' name='que2' value='1'/>
                                            <label class='star star-1' for='star-1-2-tr-1'> Poor</label>
                                        </div>
                                    </div>
                                    <hr class='line'>
                                    <div class='form-group '>
                                        <lable for='que3'>3. Skills in making the subject interesting and connecting with current affairs.</lable>
                                        <div class='stars'>
                                            <input class='star star-4' id='star-4-3-tr-1' type='radio' name='que3' value='4'/>
                                            <label class='star star-4' for='star-4-3-tr-1'> Excellent</label>
                                            <input class='star star-3' id='star-3-3-tr-1' type='radio' name='que3' value='3'/>
                                            <label class='star star-3' for='star-3-3-tr-1'> Very Good</label>
                                            <input class='star star-2' id='star-2-3-tr-1' type='radio' name='que3' value='2'/>
                                            <label class='star star-2' for='star-2-3-tr-1'> Good</label>
                                            <input class='star star-1' id='star-1-3-tr-1' type='radio' name='que3' value='1'/>
                                            <label class='star star-1' for='star-1-3-tr-1'> Poor</label>
                                        </div>
                                    </div>
                                    <hr class='line'>
                                    <div class='form-group '>
                                        <lable for='que4'>4. Behavior of Teachers towards students.</lable>
                                        <div class='stars'>
                                            <input class='star star-4' id='star-4-4-tr-1' type='radio' name='que4' value='4'/>
                                            <label class='star star-4' for='star-4-4-tr-1'> Excellent</label>
                                            <input class='star star-3' id='star-3-4-tr-1' type='radio' name='que4' value='3'/>
                                            <label class='star star-3' for='star-3-4-tr-1'> Very Good</label>
                                            <input class='star star-2' id='star-2-4-tr-1' type='radio' name='que4' value='2'/>
                                            <label class='star star-2' for='star-2-4-tr-1'> Good</label>
                                            <input class='star star-1' id='star-1-4-tr-1' type='radio' name='que4' value='1'/>
                                            <label class='star star-1' for='star-1-4-tr-1'> Poor</label>
                                        </div>
                                    </div>
                                    <hr class='line'>
                                    <div class='form-group '>
                                        <lable for='que5'>5. Use of interactive teaching - Seminar,Tutorials,Quiz,Assignments etc.</lable>
                                        <div class='stars'>
                                            <input class='star star-4' id='star-4-5-tr-1' type='radio' name='que5' value='4'/>
                                            <label class='star star-4' for='star-4-5-tr-1'> Excellent</label>
                                            <input class='star star-3' id='star-3-5-tr-1' type='radio' name='que5' value='3'/>
                                            <label class='star star-3' for='star-3-5-tr-1'> Very Good</label>
                                            <input class='star star-2' id='star-2-5-tr-1' type='radio' name='que5' value='2'/>
                                            <label class='star star-2' for='star-2-5-tr-1'> Good</label>
                                            <input class='star star-1' id='star-1-5-tr-1' type='radio' name='que5' value='1'/>
                                            <label class='star star-1' for='star-1-5-tr-1'> Poor</label>
                                        </div>
                                    </div>
                                    <hr class='line'>
                                    <div class='form-group '>
                                        <lable for='que6'>6. Frequency of asking short questions in class while teaching.</lable>
                                        <div class='stars'>
                                            <input class='star star-4' id='star-4-6-tr-1' type='radio' name='que6' value='4'/>
                                            <label class='star star-4' for='star-4-6-tr-1'> Excellent</label>
                                            <input class='star star-3' id='star-3-6-tr-1' type='radio' name='que6' value='3'/>
                                            <label class='star star-3' for='star-3-6-tr-1'> Very Good</label>
                                            <input class='star star-2' id='star-2-6-tr-1' type='radio' name='que6' value='2'/>
                                            <label class='star star-2' for='star-2-6-tr-1'> Good</label>
                                            <input class='star star-1' id='star-1-6-tr-1' type='radio' name='que6' value='1'/>
                                            <label class='star star-1' for='star-1-6-tr-1'> Poor</label>
                                        </div>
                                    </div>
                                    <hr class='line'>
                                    <div class='form-group '>
                                        <lable for='que7'>7. Conducting periodical tests / questions answer sessions.</lable>
                                        <div class='stars'>
                                            <input class='star star-4' id='star-4-7-tr-1' type='radio' name='que7' value='4'/>
                                            <label class='star star-4' for='star-4-7-tr-1'> Excellent</label>
                                            <input class='star star-3' id='star-3-7-tr-1' type='radio' name='que7' value='3'/>
                                            <label class='star star-3' for='star-3-7-tr-1'> Very Good</label>
                                            <input class='star star-2' id='star-2-7-tr-1' type='radio' name='que7' value='2'/>
                                            <label class='star star-2' for='star-2-7-tr-1'> Good</label>
                                            <input class='star star-1' id='star-1-7-tr-1' type='radio' name='que7' value='1'/>
                                            <label class='star star-1' for='star-1-7-tr-1'> Poor</label>
                                        </div>
                                    </div>
                                    <hr class='line'>
                                    <div class='form-group '>
                                        <lable for='que8'>8. Training and motivating students for extra curricular activies.</lable>
                                        <div class='stars'>
                                            <input class='star star-4' id='star-4-8-tr-1' type='radio' name='que8' value='4'/>
                                            <label class='star star-4' for='star-4-8-tr-1'> Excellent</label>
                                            <input class='star star-3' id='star-3-8-tr-1' type='radio' name='que8' value='3'/>
                                            <label class='star star-3' for='star-3-8-tr-1'> Very Good</label>
                                            <input class='star star-2' id='star-2-8-tr-1' type='radio' name='que8' value='2'/>
                                            <label class='star star-2' for='star-2-8-tr-1'> Good</label>
                                            <input class='star star-1' id='star-1-8-tr-1' type='radio' name='que8' value='1'/>
                                            <label class='star star-1' for='star-1-8-tr-1'> Poor</label>
                                        </div>
                                    </div>
                                    <hr class='line'>
                                    <div class='form-group '>
                                        <lable for='que9'>9. Class Control / Discipline.</lable>
                                        <div class='stars'>
                                            <input class='star star-4' id='star-4-9-tr-1' type='radio' name='que9' value='4'/>
                                            <label class='star star-4' for='star-4-9-tr-1'> Excellent</label>
                                            <input class='star star-3' id='star-3-9-tr-1' type='radio' name='que9' value='3'/>
                                            <label class='star star-3' for='star-3-9-tr-1'> Very Good</label>
                                            <input class='star star-2' id='star-2-9-tr-1' type='radio' name='que9' value='2'/>
                                            <label class='star star-2' for='star-2-9-tr-1'> Good</label>
                                            <input class='star star-1' id='star-1-9-tr-1' type='radio' name='que9' value='1'/>
                                            <label class='star star-1' for='star-1-9-tr-1'> Poor</label>
                                        </div>
                                    </div>
                                    <hr class='line'>
                                    <div class='form-group '>
                                        <lable for='que10'>10. Regularity / Punctuality in lactures.</lable>
                                        <div class='stars'>
                                            <input class='star star-4' id='star-4-10-tr-1' type='radio' name='que10' value='4'/>
                                            <label class='star star-4' for='star-4-10-tr-1'> Excellent</label>
                                            <input class='star star-3' id='star-3-10-tr-1' type='radio' name='que10' value='3'/>
                                            <label class='star star-3' for='star-3-10-tr-1'> Very Good</label>
                                            <input class='star star-2' id='star-2-10-tr-1' type='radio' name='que10' value='2'/>
                                            <label class='star star-2' for='star-2-10-tr-1'> Good</label>
                                            <input class='star star-1' id='star-1-10-tr-1' type='radio' name='que10' value='1'/>
                                            <label class='star star-1' for='star-1-10-tr-1'> Poor</label>
                                        </div>
                                    </div>
                            </div>

                            <div class='modal-footer'>
                                <?php 
                                $i = 0;
                                echo "<input type='hidden' name='t_id' value='$tid[$i]' >";
                                echo "<input type='hidden' name='user_name' value='$abc'>";
                                echo "<input type='hidden' name='s_id' value='$s_id '>";
                                ?>
                                <button type='submit' class='btn btn-success' name='submit' id='sub1' >Submit</button>
                                <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div> 
        
        
            <!-- Modal 2 -->
            <div class='modal fade' id='trch2' role='dialog'>
                <div class='modal-dialog modal-lg' style='width: 80%;'>
                    <div class='modal-content'>
                        <form method='post' action='controller/teachers.php'>
                            <div class='modal-header'>
                                <button type='button' class='close' data-dismiss='modal'>&times;</button>
                                <h4 class='modal-title'>Feedback Questions For Prof. <?php $i=1; echo $tname[$i]; ?></h4>
                            </div>
                            <div class='modal-body'>
                                    <div class='form-group'>
                                      <lable for='que1'>1. Command over the subject taught and communication skill.</lable>
                                        <div class='stars'>
                                            <input class='star star-4' id='star-4-1-tr-2' type='radio' name='que1' value='4'/>
                                            <label class='star star-4' for='star-4-1-tr-2'> Excellent</label>
                                            <input class='star star-3' id='star-3-1-tr-2' type='radio' name='que1' value='3'/>
                                            <label class='star star-3' for='star-3-1-tr-2'> Very Good</label>
                                            <input class='star star-2' id='star-2-1-tr-2' type='radio' name='que1' value='2'/>
                                            <label class='star star-2' for='star-2-1-tr-2'> Good</label>
                                            <input class='star star-1' id='star-1-1-tr-2' type='radio' name='que1' value='1'/>
                                            <label class='star star-1' for='star-1-1-tr-2'> Poor</label>
                                        </div>
                                    </div>
                                    <hr class='line'>
                                    <div class='form-group '>
                                        <lable for='que2'>2. Readiness to solve the student doubts or questions etc.</lable>
                                        <div class='stars'>
                                            <input class='star star-4' id='star-4-2-tr-2' type='radio' name='que2' value='4'/>
                                            <label class='star star-4' for='star-4-2-tr-2'> Excellent</label>
                                            <input class='star star-3' id='star-3-2-tr-2' type='radio' name='que2' value='3'/>
                                            <label class='star star-3' for='star-3-2-tr-2'> Very Good</label>
                                            <input class='star star-2' id='star-2-2-tr-2' type='radio' name='que2' value='2'/>
                                            <label class='star star-2' for='star-2-2-tr-2'> Good</label>
                                            <input class='star star-1' id='star-1-2-tr-2' type='radio' name='que2' value='1'/>
                                            <label class='star star-1' for='star-1-2-tr-2'> Poor</label>
                                        </div>
                                    </div>
                                    <hr class='line'>
                                    <div class='form-group '>
                                        <lable for='que3'>3. Skills in making the subject interesting and connecting with current affairs.</lable>
                                        <div class='stars'>
                                            <input class='star star-4' id='star-4-3-tr-2' type='radio' name='que3' value='4'/>
                                            <label class='star star-4' for='star-4-3-tr-2'> Excellent</label>
                                            <input class='star star-3' id='star-3-3-tr-2' type='radio' name='que3' value='3'/>
                                            <label class='star star-3' for='star-3-3-tr-2'> Very Good</label>
                                            <input class='star star-2' id='star-2-3-tr-2' type='radio' name='que3' value='2'/>
                                            <label class='star star-2' for='star-2-3-tr-2'> Good</label>
                                            <input class='star star-1' id='star-1-3-tr-2' type='radio' name='que3' value='1'/>
                                            <label class='star star-1' for='star-1-3-tr-2'> Poor</label>
                                        </div>
                                    </div>
                                    <hr class='line'>
                                    <div class='form-group '>
                                        <lable for='que4'>4. Behavior of Teachers towards students.</lable>
                                        <div class='stars'>
                                            <input class='star star-4' id='star-4-4-tr-2' type='radio' name='que4' value='4'/>
                                            <label class='star star-4' for='star-4-4-tr-2'> Excellent</label>
                                            <input class='star star-3' id='star-3-4-tr-2' type='radio' name='que4' value='3'/>
                                            <label class='star star-3' for='star-3-4-tr-2'> Very Good</label>
                                            <input class='star star-2' id='star-2-4-tr-2' type='radio' name='que4' value='2'/>
                                            <label class='star star-2' for='star-2-4-tr-2'> Good</label>
                                            <input class='star star-1' id='star-1-4-tr-2' type='radio' name='que4' value='1'/>
                                            <label class='star star-1' for='star-1-4-tr-2'> Poor</label>
                                        </div>
                                    </div>
                                    <hr class='line'>
                                    <div class='form-group '>
                                        <lable for='que5'>5. Use of interactive teaching - Seminar,Tutorials,Quiz,Assignments etc.</lable>
                                        <div class='stars'>
                                            <input class='star star-4' id='star-4-5-tr-2' type='radio' name='que5' value='4'/>
                                            <label class='star star-4' for='star-4-5-tr-2'> Excellent</label>
                                            <input class='star star-3' id='star-3-5-tr-2' type='radio' name='que5' value='3'/>
                                            <label class='star star-3' for='star-3-5-tr-2'> Very Good</label>
                                            <input class='star star-2' id='star-2-5-tr-2' type='radio' name='que5' value='2'/>
                                            <label class='star star-2' for='star-2-5-tr-2'> Good</label>
                                            <input class='star star-1' id='star-1-5-tr-2' type='radio' name='que5' value='1'/>
                                            <label class='star star-1' for='star-1-5-tr-2'> Poor</label>
                                        </div>
                                    </div>
                                    <hr class='line'>
                                    <div class='form-group '>
                                        <lable for='que6'>6. Frequency of asking short questions in class while teaching.</lable>
                                        <div class='stars'>
                                            <input class='star star-4' id='star-4-6-tr-2' type='radio' name='que6' value='4'/>
                                            <label class='star star-4' for='star-4-6-tr-2'> Excellent</label>
                                            <input class='star star-3' id='star-3-6-tr-2' type='radio' name='que6' value='3'/>
                                            <label class='star star-3' for='star-3-6-tr-2'> Very Good</label>
                                            <input class='star star-2' id='star-2-6-tr-2' type='radio' name='que6' value='2'/>
                                            <label class='star star-2' for='star-2-6-tr-2'> Good</label>
                                            <input class='star star-1' id='star-1-6-tr-2' type='radio' name='que6' value='1'/>
                                            <label class='star star-1' for='star-1-6-tr-2'> Poor</label>
                                        </div>
                                    </div>
                                    <hr class='line'>
                                    <div class='form-group '>
                                        <lable for='que7'>7. Conducting periodical tests / questions answer sessions.</lable>
                                        <div class='stars'>
                                            <input class='star star-4' id='star-4-7-tr-2' type='radio' name='que7' value='4'/>
                                            <label class='star star-4' for='star-4-7-tr-2'> Excellent</label>
                                            <input class='star star-3' id='star-3-7-tr-2' type='radio' name='que7' value='3'/>
                                            <label class='star star-3' for='star-3-7-tr-2'> Very Good</label>
                                            <input class='star star-2' id='star-2-7-tr-2' type='radio' name='que7' value='2'/>
                                            <label class='star star-2' for='star-2-7-tr-2'> Good</label>
                                            <input class='star star-1' id='star-1-7-tr-2' type='radio' name='que7' value='1'/>
                                            <label class='star star-1' for='star-1-7-tr-2'> Poor</label>
                                        </div>
                                    </div>
                                    <hr class='line'>
                                    <div class='form-group '>
                                        <lable for='que8'>8. Training and motivating students for extra curricular activies.</lable>
                                        <div class='stars'>
                                            <input class='star star-4' id='star-4-8-tr-2' type='radio' name='que8' value='4'/>
                                            <label class='star star-4' for='star-4-8-tr-2'> Excellent</label>
                                            <input class='star star-3' id='star-3-8-tr-2' type='radio' name='que8' value='3'/>
                                            <label class='star star-3' for='star-3-8-tr-2'> Very Good</label>
                                            <input class='star star-2' id='star-2-8-tr-2' type='radio' name='que8' value='2'/>
                                            <label class='star star-2' for='star-2-8-tr-2'> Good</label>
                                            <input class='star star-1' id='star-1-8-tr-2' type='radio' name='que8' value='1'/>
                                            <label class='star star-1' for='star-1-8-tr-2'> Poor</label>
                                        </div>
                                    </div>
                                    <hr class='line'>
                                    <div class='form-group '>
                                        <lable for='que9'>9. Class Control / Discipline.</lable>
                                        <div class='stars'>
                                            <input class='star star-4' id='star-4-9-tr-2' type='radio' name='que9' value='4'/>
                                            <label class='star star-4' for='star-4-9-tr-2'> Excellent</label>
                                            <input class='star star-3' id='star-3-9-tr-2' type='radio' name='que9' value='3'/>
                                            <label class='star star-3' for='star-3-9-tr-2'> Very Good</label>
                                            <input class='star star-2' id='star-2-9-tr-2' type='radio' name='que9' value='2'/>
                                            <label class='star star-2' for='star-2-9-tr-2'> Good</label>
                                            <input class='star star-1' id='star-1-9-tr-2' type='radio' name='que9' value='1'/>
                                            <label class='star star-1' for='star-1-9-tr-2'> Poor</label>
                                        </div>
                                    </div>
                                    <hr class='line'>
                                    <div class='form-group '>
                                        <lable for='que10'>10. Regularity / Punctuality in lactures.</lable>
                                        <div class='stars'>
                                            <input class='star star-4' id='star-4-10-tr-2' type='radio' name='que10' value='4'/>
                                            <label class='star star-4' for='star-4-10-tr-2'> Excellent</label>
                                            <input class='star star-3' id='star-3-10-tr-2' type='radio' name='que10' value='3'/>
                                            <label class='star star-3' for='star-3-10-tr-2'> Very Good</label>
                                            <input class='star star-2' id='star-2-10-tr-2' type='radio' name='que10' value='2'/>
                                            <label class='star star-2' for='star-2-10-tr-2'> Good</label>
                                            <input class='star star-1' id='star-1-10-tr-2' type='radio' name='que10' value='1'/>
                                            <label class='star star-1' for='star-1-10-tr-2'> Poor</label>
                                        </div>
                                    </div>
                            </div>

                            <div class='modal-footer'>
                                <?php 
                                $i = 1;
                                echo "<input type='hidden' name='t_id' value='$tid[$i]' >";
                                echo "<input type='hidden' name='user_name' value='$abc'>";
                                echo "<input type='hidden' name='s_id' value='$s_id '>";
                                ?>
                                <button type='submit' class='btn btn-success' name='submit' id='sub2' >Submit</button>
                                <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div> 
        
        
            <!-- Modal 3 -->
            <div class='modal fade' id='trch3' role='dialog'>
                <div class='modal-dialog modal-lg' style='width: 80%;'>
                    <div class='modal-content'>
                        <form method='post' action='controller/teachers.php'>
                            <div class='modal-header'>
                                <button type='button' class='close' data-dismiss='modal'>&times;</button>
                                <h4 class='modal-title'>Feedback Questions For Prof. <?php $i=2; echo $tname[$i]; ?></h4>
                            </div>
                            <div class='modal-body'>
                                    <div class='form-group'>
                                      <lable for='que1'>1. Command over the subject taught and communication skill.</lable>
                                        <div class='stars'>
                                            <input class='star star-4' id='star-4-1-tr-3' type='radio' name='que1' value='4'/>
                                            <label class='star star-4' for='star-4-1-tr-3'> Excellent</label>
                                            <input class='star star-3' id='star-3-1-tr-3' type='radio' name='que1' value='3'/>
                                            <label class='star star-3' for='star-3-1-tr-3'> Very Good</label>
                                            <input class='star star-2' id='star-2-1-tr-3' type='radio' name='que1' value='2'/>
                                            <label class='star star-2' for='star-2-1-tr-3'> Good</label>
                                            <input class='star star-1' id='star-1-1-tr-3' type='radio' name='que1' value='1'/>
                                            <label class='star star-1' for='star-1-1-tr-3'> Poor</label>
                                        </div>
                                    </div>
                                    <hr class='line'>
                                    <div class='form-group '>
                                        <lable for='que2'>2. Readiness to solve the student doubts or questions etc.</lable>
                                        <div class='stars'>
                                            <input class='star star-4' id='star-4-2-tr-3' type='radio' name='que2' value='4'/>
                                            <label class='star star-4' for='star-4-2-tr-3'> Excellent</label>
                                            <input class='star star-3' id='star-3-2-tr-3' type='radio' name='que2' value='3'/>
                                            <label class='star star-3' for='star-3-2-tr-3'> Very Good</label>
                                            <input class='star star-2' id='star-2-2-tr-3' type='radio' name='que2' value='2'/>
                                            <label class='star star-2' for='star-2-2-tr-3'> Good</label>
                                            <input class='star star-1' id='star-1-2-tr-3' type='radio' name='que2' value='1'/>
                                            <label class='star star-1' for='star-1-2-tr-3'> Poor</label>
                                        </div>
                                    </div>
                                    <hr class='line'>
                                    <div class='form-group '>
                                        <lable for='que3'>3. Skills in making the subject interesting and connecting with current affairs.</lable>
                                        <div class='stars'>
                                            <input class='star star-4' id='star-4-3-tr-3' type='radio' name='que3' value='4'/>
                                            <label class='star star-4' for='star-4-3-tr-3'> Excellent</label>
                                            <input class='star star-3' id='star-3-3-tr-3' type='radio' name='que3' value='3'/>
                                            <label class='star star-3' for='star-3-3-tr-3'> Very Good</label>
                                            <input class='star star-2' id='star-2-3-tr-3' type='radio' name='que3' value='2'/>
                                            <label class='star star-2' for='star-2-3-tr-3'> Good</label>
                                            <input class='star star-1' id='star-1-3-tr-3' type='radio' name='que3' value='1'/>
                                            <label class='star star-1' for='star-1-3-tr-3'> Poor</label>
                                        </div>
                                    </div>
                                    <hr class='line'>
                                    <div class='form-group '>
                                        <lable for='que4'>4. Behavior of Teachers towards students.</lable>
                                        <div class='stars'>
                                            <input class='star star-4' id='star-4-4-tr-3' type='radio' name='que4' value='4'/>
                                            <label class='star star-4' for='star-4-4-tr-3'> Excellent</label>
                                            <input class='star star-3' id='star-3-4-tr-3' type='radio' name='que4' value='3'/>
                                            <label class='star star-3' for='star-3-4-tr-3'> Very Good</label>
                                            <input class='star star-2' id='star-2-4-tr-3' type='radio' name='que4' value='2'/>
                                            <label class='star star-2' for='star-2-4-tr-3'> Good</label>
                                            <input class='star star-1' id='star-1-4-tr-3' type='radio' name='que4' value='1'/>
                                            <label class='star star-1' for='star-1-4-tr-3'> Poor</label>
                                        </div>
                                    </div>
                                    <hr class='line'>
                                    <div class='form-group '>
                                        <lable for='que5'>5. Use of interactive teaching - Seminar,Tutorials,Quiz,Assignments etc.</lable>
                                        <div class='stars'>
                                            <input class='star star-4' id='star-4-5-tr-3' type='radio' name='que5' value='4'/>
                                            <label class='star star-4' for='star-4-5-tr-3'> Excellent</label>
                                            <input class='star star-3' id='star-3-5-tr-3' type='radio' name='que5' value='3'/>
                                            <label class='star star-3' for='star-3-5-tr-3'> Very Good</label>
                                            <input class='star star-2' id='star-2-5-tr-3' type='radio' name='que5' value='2'/>
                                            <label class='star star-2' for='star-2-5-tr-3'> Good</label>
                                            <input class='star star-1' id='star-1-5-tr-3' type='radio' name='que5' value='1'/>
                                            <label class='star star-1' for='star-1-5-tr-3'> Poor</label>
                                        </div>
                                    </div>
                                    <hr class='line'>
                                    <div class='form-group '>
                                        <lable for='que6'>6. Frequency of asking short questions in class while teaching.</lable>
                                        <div class='stars'>
                                            <input class='star star-4' id='star-4-6-tr-3' type='radio' name='que6' value='4'/>
                                            <label class='star star-4' for='star-4-6-tr-3'> Excellent</label>
                                            <input class='star star-3' id='star-3-6-tr-3' type='radio' name='que6' value='3'/>
                                            <label class='star star-3' for='star-3-6-tr-3'> Very Good</label>
                                            <input class='star star-2' id='star-2-6-tr-3' type='radio' name='que6' value='2'/>
                                            <label class='star star-2' for='star-2-6-tr-3'> Good</label>
                                            <input class='star star-1' id='star-1-6-tr-3' type='radio' name='que6' value='1'/>
                                            <label class='star star-1' for='star-1-6-tr-3'> Poor</label>
                                        </div>
                                    </div>
                                    <hr class='line'>
                                    <div class='form-group '>
                                        <lable for='que7'>7. Conducting periodical tests / questions answer sessions.</lable>
                                        <div class='stars'>
                                            <input class='star star-4' id='star-4-7-tr-3' type='radio' name='que7' value='4'/>
                                            <label class='star star-4' for='star-4-7-tr-3'> Excellent</label>
                                            <input class='star star-3' id='star-3-7-tr-3' type='radio' name='que7' value='3'/>
                                            <label class='star star-3' for='star-3-7-tr-3'> Very Good</label>
                                            <input class='star star-2' id='star-2-7-tr-3' type='radio' name='que7' value='2'/>
                                            <label class='star star-2' for='star-2-7-tr-3'> Good</label>
                                            <input class='star star-1' id='star-1-7-tr-3' type='radio' name='que7' value='1'/>
                                            <label class='star star-1' for='star-1-7-tr-3'> Poor</label>
                                        </div>
                                    </div>
                                    <hr class='line'>
                                    <div class='form-group '>
                                        <lable for='que8'>8. Training and motivating students for extra curricular activies.</lable>
                                        <div class='stars'>
                                            <input class='star star-4' id='star-4-8-tr-3' type='radio' name='que8' value='4'/>
                                            <label class='star star-4' for='star-4-8-tr-3'> Excellent</label>
                                            <input class='star star-3' id='star-3-8-tr-3' type='radio' name='que8' value='3'/>
                                            <label class='star star-3' for='star-3-8-tr-3'> Very Good</label>
                                            <input class='star star-2' id='star-2-8-tr-3' type='radio' name='que8' value='2'/>
                                            <label class='star star-2' for='star-2-8-tr-3'> Good</label>
                                            <input class='star star-1' id='star-1-8-tr-3' type='radio' name='que8' value='1'/>
                                            <label class='star star-1' for='star-1-8-tr-3'> Poor</label>
                                        </div>
                                    </div>
                                    <hr class='line'>
                                    <div class='form-group '>
                                        <lable for='que9'>9. Class Control / Discipline.</lable>
                                        <div class='stars'>
                                            <input class='star star-4' id='star-4-9-tr-3' type='radio' name='que9' value='4'/>
                                            <label class='star star-4' for='star-4-9-tr-3'> Excellent</label>
                                            <input class='star star-3' id='star-3-9-tr-3' type='radio' name='que9' value='3'/>
                                            <label class='star star-3' for='star-3-9-tr-3'> Very Good</label>
                                            <input class='star star-2' id='star-2-9-tr-3' type='radio' name='que9' value='2'/>
                                            <label class='star star-2' for='star-2-9-tr-3'> Good</label>
                                            <input class='star star-1' id='star-1-9-tr-3' type='radio' name='que9' value='1'/>
                                            <label class='star star-1' for='star-1-9-tr-3'> Poor</label>
                                        </div>
                                    </div>
                                    <hr class='line'>
                                    <div class='form-group '>
                                        <lable for='que10'>10. Regularity / Punctuality in lactures.</lable>
                                        <div class='stars'>
                                            <input class='star star-4' id='star-4-10-tr-3' type='radio' name='que10' value='4'/>
                                            <label class='star star-4' for='star-4-10-tr-3'> Excellent</label>
                                            <input class='star star-3' id='star-3-10-tr-3' type='radio' name='que10' value='3'/>
                                            <label class='star star-3' for='star-3-10-tr-3'> Very Good</label>
                                            <input class='star star-2' id='star-2-10-tr-3' type='radio' name='que10' value='2'/>
                                            <label class='star star-2' for='star-2-10-tr-3'> Good</label>
                                            <input class='star star-1' id='star-1-10-tr-3' type='radio' name='que10' value='1'/>
                                            <label class='star star-1' for='star-1-10-tr-3'> Poor</label>
                                        </div>
                                    </div>
                            </div>

                            <div class='modal-footer'>
                                <?php 
                                $i = 2;
                                echo "<input type='hidden' name='t_id' value='$tid[$i]' >";
                                echo "<input type='hidden' name='user_name' value='$abc'>";
                                echo "<input type='hidden' name='s_id' value='$s_id '>";
                                ?>
                                <button type='submit' class='btn btn-success' name='submit' id='sub3' >Submit</button>
                                <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div> 
        
        
            <!-- Modal 4 -->
            <div class='modal fade' id='trch4' role='dialog'>
                <div class='modal-dialog modal-lg' style='width: 80%;'>
                    <div class='modal-content'>
                        <form method='post' action='controller/teachers.php'>
                            <div class='modal-header'>
                                <button type='button' class='close' data-dismiss='modal'>&times;</button>
                                <h4 class='modal-title'>Feedback Questions For Prof. <?php $i=3; echo $tname[$i]; ?></h4>
                            </div>
                            <div class='modal-body'>
                                    <div class='form-group'>
                                      <lable for='que1'>1. Command over the subject taught and communication skill.</lable>
                                        <div class='stars'>
                                            <input class='star star-4' id='star-4-1-tr-4' type='radio' name='que1' value='4'/>
                                            <label class='star star-4' for='star-4-1-tr-4'> Excellent</label>
                                            <input class='star star-3' id='star-3-1-tr-4' type='radio' name='que1' value='3'/>
                                            <label class='star star-3' for='star-3-1-tr-4'> Very Good</label>
                                            <input class='star star-2' id='star-2-1-tr-4' type='radio' name='que1' value='2'/>
                                            <label class='star star-2' for='star-2-1-tr-4'> Good</label>
                                            <input class='star star-1' id='star-1-1-tr-4' type='radio' name='que1' value='1'/>
                                            <label class='star star-1' for='star-1-1-tr-4'> Poor</label>
                                        </div>
                                    </div>
                                    <hr class='line'>
                                    <div class='form-group '>
                                        <lable for='que2'>2. Readiness to solve the student doubts or questions etc.</lable>
                                        <div class='stars'>
                                            <input class='star star-4' id='star-4-2-tr-4' type='radio' name='que2' value='4'/>
                                            <label class='star star-4' for='star-4-2-tr-4'> Excellent</label>
                                            <input class='star star-3' id='star-3-2-tr-4' type='radio' name='que2' value='3'/>
                                            <label class='star star-3' for='star-3-2-tr-4'> Very Good</label>
                                            <input class='star star-2' id='star-2-2-tr-4' type='radio' name='que2' value='2'/>
                                            <label class='star star-2' for='star-2-2-tr-4'> Good</label>
                                            <input class='star star-1' id='star-1-2-tr-4' type='radio' name='que2' value='1'/>
                                            <label class='star star-1' for='star-1-2-tr-4'> Poor</label>
                                        </div>
                                    </div>
                                    <hr class='line'>
                                    <div class='form-group '>
                                        <lable for='que3'>3. Skills in making the subject interesting and connecting with current affairs.</lable>
                                        <div class='stars'>
                                            <input class='star star-4' id='star-4-3-tr-4' type='radio' name='que3' value='4'/>
                                            <label class='star star-4' for='star-4-3-tr-4'> Excellent</label>
                                            <input class='star star-3' id='star-3-3-tr-4' type='radio' name='que3' value='3'/>
                                            <label class='star star-3' for='star-3-3-tr-4'> Very Good</label>
                                            <input class='star star-2' id='star-2-3-tr-4' type='radio' name='que3' value='2'/>
                                            <label class='star star-2' for='star-2-3-tr-4'> Good</label>
                                            <input class='star star-1' id='star-1-3-tr-4' type='radio' name='que3' value='1'/>
                                            <label class='star star-1' for='star-1-3-tr-4'> Poor</label>
                                        </div>
                                    </div>
                                    <hr class='line'>
                                    <div class='form-group '>
                                        <lable for='que4'>4. Behavior of Teachers towards students.</lable>
                                        <div class='stars'>
                                            <input class='star star-4' id='star-4-4-tr-4' type='radio' name='que4' value='4'/>
                                            <label class='star star-4' for='star-4-4-tr-4'> Excellent</label>
                                            <input class='star star-3' id='star-3-4-tr-4' type='radio' name='que4' value='3'/>
                                            <label class='star star-3' for='star-3-4-tr-4'> Very Good</label>
                                            <input class='star star-2' id='star-2-4-tr-4' type='radio' name='que4' value='2'/>
                                            <label class='star star-2' for='star-2-4-tr-4'> Good</label>
                                            <input class='star star-1' id='star-1-4-tr-4' type='radio' name='que4' value='1'/>
                                            <label class='star star-1' for='star-1-4-tr-4'> Poor</label>
                                        </div>
                                    </div>
                                    <hr class='line'>
                                    <div class='form-group '>
                                        <lable for='que5'>5. Use of interactive teaching - Seminar,Tutorials,Quiz,Assignments etc.</lable>
                                        <div class='stars'>
                                            <input class='star star-4' id='star-4-5-tr-4' type='radio' name='que5' value='4'/>
                                            <label class='star star-4' for='star-4-5-tr-4'> Excellent</label>
                                            <input class='star star-3' id='star-3-5-tr-4' type='radio' name='que5' value='3'/>
                                            <label class='star star-3' for='star-3-5-tr-4'> Very Good</label>
                                            <input class='star star-2' id='star-2-5-tr-4' type='radio' name='que5' value='2'/>
                                            <label class='star star-2' for='star-2-5-tr-4'> Good</label>
                                            <input class='star star-1' id='star-1-5-tr-4' type='radio' name='que5' value='1'/>
                                            <label class='star star-1' for='star-1-5-tr-4'> Poor</label>
                                        </div>
                                    </div>
                                    <hr class='line'>
                                    <div class='form-group '>
                                        <lable for='que6'>6. Frequency of asking short questions in class while teaching.</lable>
                                        <div class='stars'>
                                            <input class='star star-4' id='star-4-6-tr-4' type='radio' name='que6' value='4'/>
                                            <label class='star star-4' for='star-4-6-tr-4'> Excellent</label>
                                            <input class='star star-3' id='star-3-6-tr-4' type='radio' name='que6' value='3'/>
                                            <label class='star star-3' for='star-3-6-tr-4'> Very Good</label>
                                            <input class='star star-2' id='star-2-6-tr-4' type='radio' name='que6' value='2'/>
                                            <label class='star star-2' for='star-2-6-tr-4'> Good</label>
                                            <input class='star star-1' id='star-1-6-tr-4' type='radio' name='que6' value='1'/>
                                            <label class='star star-1' for='star-1-6-tr-4'> Poor</label>
                                        </div>
                                    </div>
                                    <hr class='line'>
                                    <div class='form-group '>
                                        <lable for='que7'>7. Conducting periodical tests / questions answer sessions.</lable>
                                        <div class='stars'>
                                            <input class='star star-4' id='star-4-7-tr-4' type='radio' name='que7' value='4'/>
                                            <label class='star star-4' for='star-4-7-tr-4'> Excellent</label>
                                            <input class='star star-3' id='star-3-7-tr-4' type='radio' name='que7' value='3'/>
                                            <label class='star star-3' for='star-3-7-tr-4'> Very Good</label>
                                            <input class='star star-2' id='star-2-7-tr-4' type='radio' name='que7' value='2'/>
                                            <label class='star star-2' for='star-2-7-tr-4'> Good</label>
                                            <input class='star star-1' id='star-1-7-tr-4' type='radio' name='que7' value='1'/>
                                            <label class='star star-1' for='star-1-7-tr-4'> Poor</label>
                                        </div>
                                    </div>
                                    <hr class='line'>
                                    <div class='form-group '>
                                        <lable for='que8'>8. Training and motivating students for extra curricular activies.</lable>
                                        <div class='stars'>
                                            <input class='star star-4' id='star-4-8-tr-4' type='radio' name='que8' value='4'/>
                                            <label class='star star-4' for='star-4-8-tr-4'> Excellent</label>
                                            <input class='star star-3' id='star-3-8-tr-4' type='radio' name='que8' value='3'/>
                                            <label class='star star-3' for='star-3-8-tr-4'> Very Good</label>
                                            <input class='star star-2' id='star-2-8-tr-4' type='radio' name='que8' value='2'/>
                                            <label class='star star-2' for='star-2-8-tr-4'> Good</label>
                                            <input class='star star-1' id='star-1-8-tr-4' type='radio' name='que8' value='1'/>
                                            <label class='star star-1' for='star-1-8-tr-4'> Poor</label>
                                        </div>
                                    </div>
                                    <hr class='line'>
                                    <div class='form-group '>
                                        <lable for='que9'>9. Class Control / Discipline.</lable>
                                        <div class='stars'>
                                            <input class='star star-4' id='star-4-9-tr-4' type='radio' name='que9' value='4'/>
                                            <label class='star star-4' for='star-4-9-tr-4'> Excellent</label>
                                            <input class='star star-3' id='star-3-9-tr-4' type='radio' name='que9' value='3'/>
                                            <label class='star star-3' for='star-3-9-tr-4'> Very Good</label>
                                            <input class='star star-2' id='star-2-9-tr-4' type='radio' name='que9' value='2'/>
                                            <label class='star star-2' for='star-2-9-tr-4'> Good</label>
                                            <input class='star star-1' id='star-1-9-tr-4' type='radio' name='que9' value='1'/>
                                            <label class='star star-1' for='star-1-9-tr-4'> Poor</label>
                                        </div>
                                    </div>
                                    <hr class='line'>
                                    <div class='form-group '>
                                        <lable for='que10'>10. Regularity / Punctuality in lactures.</lable>
                                        <div class='stars'>
                                            <input class='star star-4' id='star-4-10-tr-4' type='radio' name='que10' value='4'/>
                                            <label class='star star-4' for='star-4-10-tr-4'> Excellent</label>
                                            <input class='star star-3' id='star-3-10-tr-4' type='radio' name='que10' value='3'/>
                                            <label class='star star-3' for='star-3-10-tr-4'> Very Good</label>
                                            <input class='star star-2' id='star-2-10-tr-4' type='radio' name='que10' value='2'/>
                                            <label class='star star-2' for='star-2-10-tr-4'> Good</label>
                                            <input class='star star-1' id='star-1-10-tr-4' type='radio' name='que10' value='1'/>
                                            <label class='star star-1' for='star-1-10-tr-4'> Poor</label>
                                        </div>
                                    </div>
                            </div>

                            <div class='modal-footer'>
                                <?php 
                                $i = 3;
                                echo "<input type='hidden' name='t_id' value='$tid[$i]' >";
                                echo "<input type='hidden' name='user_name' value='$abc'>";
                                echo "<input type='hidden' name='s_id' value='$s_id '>";
                                ?>
                                <button type='submit' class='btn btn-success' name='submit' id='sub4' >Submit</button>
                                <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div> 
        
        
            <!-- Modal 5 -->
            <div class='modal fade' id='trch5' role='dialog'>
                <div class='modal-dialog modal-lg' style='width: 80%;'>
                    <div class='modal-content'>
                        <form method='post' action='controller/teachers.php'>
                            <div class='modal-header'>
                                <button type='button' class='close' data-dismiss='modal'>&times;</button>
                                <h4 class='modal-title'>Feedback Questions For Prof. <?php $i=4; echo $tname[$i]; ?></h4>
                            </div>
                            <div class='modal-body'>
                                    <div class='form-group'>
                                      <lable for='que1'>1. Command over the subject taught and communication skill.</lable>
                                        <div class='stars'>
                                            <input class='star star-4' id='star-4-1-tr-5' type='radio' name='que1' value='4'/>
                                            <label class='star star-4' for='star-4-1-tr-5'> Excellent</label>
                                            <input class='star star-3' id='star-3-1-tr-5' type='radio' name='que1' value='3'/>
                                            <label class='star star-3' for='star-3-1-tr-5'> Very Good</label>
                                            <input class='star star-2' id='star-2-1-tr-5' type='radio' name='que1' value='2'/>
                                            <label class='star star-2' for='star-2-1-tr-5'> Good</label>
                                            <input class='star star-1' id='star-1-1-tr-5' type='radio' name='que1' value='1'/>
                                            <label class='star star-1' for='star-1-1-tr-5'> Poor</label>
                                        </div>
                                    </div>
                                    <hr class='line'>
                                    <div class='form-group '>
                                        <lable for='que2'>2. Readiness to solve the student doubts or questions etc.</lable>
                                        <div class='stars'>
                                            <input class='star star-4' id='star-4-2-tr-5' type='radio' name='que2' value='4'/>
                                            <label class='star star-4' for='star-4-2-tr-5'> Excellent</label>
                                            <input class='star star-3' id='star-3-2-tr-5' type='radio' name='que2' value='3'/>
                                            <label class='star star-3' for='star-3-2-tr-5'> Very Good</label>
                                            <input class='star star-2' id='star-2-2-tr-5' type='radio' name='que2' value='2'/>
                                            <label class='star star-2' for='star-2-2-tr-5'> Good</label>
                                            <input class='star star-1' id='star-1-2-tr-5' type='radio' name='que2' value='1'/>
                                            <label class='star star-1' for='star-1-2-tr-5'> Poor</label>
                                        </div>
                                    </div>
                                    <hr class='line'>
                                    <div class='form-group '>
                                        <lable for='que3'>3. Skills in making the subject interesting and connecting with current affairs.</lable>
                                        <div class='stars'>
                                            <input class='star star-4' id='star-4-3-tr-5' type='radio' name='que3' value='4'/>
                                            <label class='star star-4' for='star-4-3-tr-5'> Excellent</label>
                                            <input class='star star-3' id='star-3-3-tr-5' type='radio' name='que3' value='3'/>
                                            <label class='star star-3' for='star-3-3-tr-5'> Very Good</label>
                                            <input class='star star-2' id='star-2-3-tr-5' type='radio' name='que3' value='2'/>
                                            <label class='star star-2' for='star-2-3-tr-5'> Good</label>
                                            <input class='star star-1' id='star-1-3-tr-5' type='radio' name='que3' value='1'/>
                                            <label class='star star-1' for='star-1-3-tr-5'> Poor</label>
                                        </div>
                                    </div>
                                    <hr class='line'>
                                    <div class='form-group '>
                                        <lable for='que4'>4. Behavior of Teachers towards students.</lable>
                                        <div class='stars'>
                                            <input class='star star-4' id='star-4-4-tr-5' type='radio' name='que4' value='4'/>
                                            <label class='star star-4' for='star-4-4-tr-5'> Excellent</label>
                                            <input class='star star-3' id='star-3-4-tr-5' type='radio' name='que4' value='3'/>
                                            <label class='star star-3' for='star-3-4-tr-5'> Very Good</label>
                                            <input class='star star-2' id='star-2-4-tr-5' type='radio' name='que4' value='2'/>
                                            <label class='star star-2' for='star-2-4-tr-5'> Good</label>
                                            <input class='star star-1' id='star-1-4-tr-5' type='radio' name='que4' value='1'/>
                                            <label class='star star-1' for='star-1-4-tr-5'> Poor</label>
                                        </div>
                                    </div>
                                    <hr class='line'>
                                    <div class='form-group '>
                                        <lable for='que5'>5. Use of interactive teaching - Seminar,Tutorials,Quiz,Assignments etc.</lable>
                                        <div class='stars'>
                                            <input class='star star-4' id='star-4-5-tr-5' type='radio' name='que5' value='4'/>
                                            <label class='star star-4' for='star-4-5-tr-5'> Excellent</label>
                                            <input class='star star-3' id='star-3-5-tr-5' type='radio' name='que5' value='3'/>
                                            <label class='star star-3' for='star-3-5-tr-5'> Very Good</label>
                                            <input class='star star-2' id='star-2-5-tr-5' type='radio' name='que5' value='2'/>
                                            <label class='star star-2' for='star-2-5-tr-5'> Good</label>
                                            <input class='star star-1' id='star-1-5-tr-5' type='radio' name='que5' value='1'/>
                                            <label class='star star-1' for='star-1-5-tr-5'> Poor</label>
                                        </div>
                                    </div>
                                    <hr class='line'>
                                    <div class='form-group '>
                                        <lable for='que6'>6. Frequency of asking short questions in class while teaching.</lable>
                                        <div class='stars'>
                                            <input class='star star-4' id='star-4-6-tr-5' type='radio' name='que6' value='4'/>
                                            <label class='star star-4' for='star-4-6-tr-5'> Excellent</label>
                                            <input class='star star-3' id='star-3-6-tr-5' type='radio' name='que6' value='3'/>
                                            <label class='star star-3' for='star-3-6-tr-5'> Very Good</label>
                                            <input class='star star-2' id='star-2-6-tr-5' type='radio' name='que6' value='2'/>
                                            <label class='star star-2' for='star-2-6-tr-5'> Good</label>
                                            <input class='star star-1' id='star-1-6-tr-5' type='radio' name='que6' value='1'/>
                                            <label class='star star-1' for='star-1-6-tr-5'> Poor</label>
                                        </div>
                                    </div>
                                    <hr class='line'>
                                    <div class='form-group '>
                                        <lable for='que7'>7. Conducting periodical tests / questions answer sessions.</lable>
                                        <div class='stars'>
                                            <input class='star star-4' id='star-4-7-tr-5' type='radio' name='que7' value='4'/>
                                            <label class='star star-4' for='star-4-7-tr-5'> Excellent</label>
                                            <input class='star star-3' id='star-3-7-tr-5' type='radio' name='que7' value='3'/>
                                            <label class='star star-3' for='star-3-7-tr-5'> Very Good</label>
                                            <input class='star star-2' id='star-2-7-tr-5' type='radio' name='que7' value='2'/>
                                            <label class='star star-2' for='star-2-7-tr-5'> Good</label>
                                            <input class='star star-1' id='star-1-7-tr-5' type='radio' name='que7' value='1'/>
                                            <label class='star star-1' for='star-1-7-tr-5'> Poor</label>
                                        </div>
                                    </div>
                                    <hr class='line'>
                                    <div class='form-group '>
                                        <lable for='que8'>8. Training and motivating students for extra curricular activies.</lable>
                                        <div class='stars'>
                                            <input class='star star-4' id='star-4-8-tr-5' type='radio' name='que8' value='4'/>
                                            <label class='star star-4' for='star-4-8-tr-5'> Excellent</label>
                                            <input class='star star-3' id='star-3-8-tr-5' type='radio' name='que8' value='3'/>
                                            <label class='star star-3' for='star-3-8-tr-5'> Very Good</label>
                                            <input class='star star-2' id='star-2-8-tr-5' type='radio' name='que8' value='2'/>
                                            <label class='star star-2' for='star-2-8-tr-5'> Good</label>
                                            <input class='star star-1' id='star-1-8-tr-5' type='radio' name='que8' value='1'/>
                                            <label class='star star-1' for='star-1-8-tr-5'> Poor</label>
                                        </div>
                                    </div>
                                    <hr class='line'>
                                    <div class='form-group '>
                                        <lable for='que9'>9. Class Control / Discipline.</lable>
                                        <div class='stars'>
                                            <input class='star star-4' id='star-4-9-tr-5' type='radio' name='que9' value='4'/>
                                            <label class='star star-4' for='star-4-9-tr-5'> Excellent</label>
                                            <input class='star star-3' id='star-3-9-tr-5' type='radio' name='que9' value='3'/>
                                            <label class='star star-3' for='star-3-9-tr-5'> Very Good</label>
                                            <input class='star star-2' id='star-2-9-tr-5' type='radio' name='que9' value='2'/>
                                            <label class='star star-2' for='star-2-9-tr-5'> Good</label>
                                            <input class='star star-1' id='star-1-9-tr-5' type='radio' name='que9' value='1'/>
                                            <label class='star star-1' for='star-1-9-tr-5'> Poor</label>
                                        </div>
                                    </div>
                                    <hr class='line'>
                                    <div class='form-group '>
                                        <lable for='que10'>10. Regularity / Punctuality in lactures.</lable>
                                        <div class='stars'>
                                            <input class='star star-4' id='star-4-10-tr-5' type='radio' name='que10' value='4'/>
                                            <label class='star star-4' for='star-4-10-tr-5'> Excellent</label>
                                            <input class='star star-3' id='star-3-10-tr-5' type='radio' name='que10' value='3'/>
                                            <label class='star star-3' for='star-3-10-tr-5'> Very Good</label>
                                            <input class='star star-2' id='star-2-10-tr-5' type='radio' name='que10' value='2'/>
                                            <label class='star star-2' for='star-2-10-tr-5'> Good</label>
                                            <input class='star star-1' id='star-1-10-tr-5' type='radio' name='que10' value='1'/>
                                            <label class='star star-1' for='star-1-10-tr-5'> Poor</label>
                                        </div>
                                    </div>
                            </div>

                            <div class='modal-footer'>
                                <?php 
                                $i = 4;
                                echo "<input type='hidden' name='t_id' value='$tid[$i]' >";
                                echo "<input type='hidden' name='user_name' value='$abc'>";
                                echo "<input type='hidden' name='s_id' value='$s_id '>";
                                ?>
                                <button type='submit' class='btn btn-success' name='submit' id='sub5' >Submit</button>
                                <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>               
            <form method='post' action='controller/teachers.php'>
                <?php 
                    echo "<input type='hidden' name='class' value='$class'>";
                    echo "<input type='hidden' name='s_id' value='$s_id '>";
                ?>
                <button type="submit" style='float:right;' name="next" class='button'><span>Next    </span></button>
            </form>

    </div>
    
       <!--    scripts-->
    <script>
//        disable the next button




        
// disable the next button end
        
$(document).ready(function() {

    // changing color of thumbnail
        var getColour, Disable;    
                getColour = sessionStorage.background1;
                    $('#th1').css('color', getColour);
                
                getColour = sessionStorage.background2;
                    $('#th2').css('color', getColour); 
    
                getColour = sessionStorage.background3;
                    $('#th3').css('color', getColour);
             
                getColour = sessionStorage.background4;
                    $('#th4').css('color', getColour);  
    
                getColour = sessionStorage.background5;
                    $('#th5').css('color', getColour);
    
                        $('#sub1').on('click', function() {
                        $(':radio').each(function () {
                          if($(':radio[name=que1]:checked').length && $(':radio[name=que2]:checked').length && $(':radio[name=que3]:checked').length && $(':radio[name=que4]:checked').length && $(':radio[name=que5]:checked').length && $(':radio[name=que6]:checked').length && $(':radio[name=que7]:checked').length && $(':radio[name=que8]:checked').length && $(':radio[name=que9]:checked').length && $(':radio[name=que10]:checked').length)
                            {
                                sessionStorage.setItem('background1', 'green');    
                            }
                        else
                            {
                                sessionStorage.setItem('background1', 'red');                            
                            }
                            });
                            
                        });
                    $('#sub2').on('click', function() {
                        $(':radio').each(function () {
                          if($(':radio[name=que1]:checked').length && $(':radio[name=que2]:checked').length && $(':radio[name=que3]:checked').length && $(':radio[name=que4]:checked').length && $(':radio[name=que5]:checked').length && $(':radio[name=que6]:checked').length && $(':radio[name=que7]:checked').length && $(':radio[name=que8]:checked').length && $(':radio[name=que9]:checked').length && $(':radio[name=que10]:checked').length)
                            {
                                sessionStorage.setItem('background2', 'green');
                            }
                        else
                            {
                                sessionStorage.setItem('background2', 'red');     
                            }
                            });
                        });
                    $('#sub3').on('click', function() {
                        $(':radio').each(function () {
                          if($(':radio[name=que1]:checked').length && $(':radio[name=que2]:checked').length && $(':radio[name=que3]:checked').length && $(':radio[name=que4]:checked').length && $(':radio[name=que5]:checked').length && $(':radio[name=que6]:checked').length && $(':radio[name=que7]:checked').length && $(':radio[name=que8]:checked').length && $(':radio[name=que9]:checked').length && $(':radio[name=que10]:checked').length)
                            {
                                sessionStorage.setItem('background3', 'green');
                            }
                        else
                            {
                                sessionStorage.setItem('background3', 'red');     
                            }
                            });
                        });
                    $('#sub4').on('click', function() {
                        $(':radio').each(function () {
                          if($(':radio[name=que1]:checked').length && $(':radio[name=que2]:checked').length && $(':radio[name=que3]:checked').length && $(':radio[name=que4]:checked').length && $(':radio[name=que5]:checked').length && $(':radio[name=que6]:checked').length && $(':radio[name=que7]:checked').length && $(':radio[name=que8]:checked').length && $(':radio[name=que9]:checked').length && $(':radio[name=que10]:checked').length)
                            {
                                sessionStorage.setItem('background4', 'green');
                            }
                        else
                            {
                                sessionStorage.setItem('background4', 'red');     
                            }
                            });
                        });
                    $('#sub5').on('click', function() {
                        $(':radio').each(function () {
                          if($(':radio[name=que1]:checked').length && $(':radio[name=que2]:checked').length && $(':radio[name=que3]:checked').length && $(':radio[name=que4]:checked').length && $(':radio[name=que5]:checked').length && $(':radio[name=que6]:checked').length && $(':radio[name=que7]:checked').length && $(':radio[name=que8]:checked').length && $(':radio[name=que9]:checked').length && $(':radio[name=que10]:checked').length)
                            {
                                sessionStorage.setItem('background5', 'green');
                            }
                        else
                            {
                                sessionStorage.setItem('background5', 'red');     
                            }
                            });
                        });

    
//    changing color of thumbnail end
//
//    reset all value 
    $('.btn-default').on('click',function(){
            var ele = document.getElementsByName("que1");
   for(var i=0;i<ele.length;i++)
      ele[i].checked = false;
        
            var ele = document.getElementsByName("que2");
   for(var i=0;i<ele.length;i++)
      ele[i].checked = false;
        
            var ele = document.getElementsByName("que3");
   for(var i=0;i<ele.length;i++)
      ele[i].checked = false;
        
            var ele = document.getElementsByName("que4");
   for(var i=0;i<ele.length;i++)
      ele[i].checked = false;
        
            var ele = document.getElementsByName("que5");
   for(var i=0;i<ele.length;i++)
      ele[i].checked = false;
        
            var ele = document.getElementsByName("que6");
   for(var i=0;i<ele.length;i++)
      ele[i].checked = false;
        
            var ele = document.getElementsByName("que7");
   for(var i=0;i<ele.length;i++)
      ele[i].checked = false;
        
            var ele = document.getElementsByName("que8");
   for(var i=0;i<ele.length;i++)
      ele[i].checked = false;
        
            var ele = document.getElementsByName("que9");
   for(var i=0;i<ele.length;i++)
      ele[i].checked = false;
        
            var ele = document.getElementsByName("que10");
   for(var i=0;i<ele.length;i++)
      ele[i].checked = false;
    });

      //  reset the value end

});
                </script>    
</body>        
</html>