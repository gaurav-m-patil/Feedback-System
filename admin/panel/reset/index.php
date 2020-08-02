<?php
	session_start();
	require_once('../Db/dbconfig.php');
    $query = "select name from as_admin where uname = '".$_SESSION['user_name']."'";
    $query_run = mysqli_query($con, $query);
    if(@mysqli_num_rows($query_run)>0)
    {
        $row = mysqli_fetch_array($query_run, MYSQLI_ASSOC);
        @$name = $row['name'];
    }

    date_default_timezone_set('Asia/Kolkata');
    $today = date("d / m / Y");
?>
<html lang="en">
    <head>
        <title>Login</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/bootstrap.css">
   
        
        <style>
            body
            {
                margin-top: 4%;
            }
            .nav-left 
            {
                float: left;
                background-color: #337ab7;
                width: 15%;
                height: 91.2%;
                
            }
            .nav-left  ul
            {
                float: left;
                list-style-type: none;
                margin: 0;
                padding: 0;
                width: 15%;
                background-color: #f1f1f1;
                position: fixed;
                height: 100%;
                overflow: auto;
                border-right: 1px solid white;
            }
            
            .nav-left  li a 
            {
                display: block;
                color: #000;
                padding: 8px 16px;
                text-decoration: none;
            }

            .nav-left  li a.active 
            {
                background-color: #337ab7;
                color: white;
            }

            .nav-left  li a:hover:not(.active) 
            {
                background-color: #555;
                color: white;
            }
            .main
            {
                background-color: #337ab7;
                float: right;
                width: 84%;
                height: 91.2%;
            }
            .box
            {
                background-color: whitesmoke;
                width: 100%;
                height: 88%;    
                border-radius: 5px;
                padding: 15px;  
            }
            .img
            {
                width: 60%;
            }
            .graph-content
            {
                padding: 5%;
            }
            .thumbnail
            {
                padding: 10px;
                box-shadow: 10px 10px 5px #888888;;
            }
            .file
            {
                width: 115px;    
                margin: 5px;
            }
        </style>
        
    </head>
    <body>
        <div class="nav">
            <nav class="navbar navbar-inverse navbar-fixed-top" style="margin:0px;">
                <div class="container">
                    <div class="navbar-header" style="margin:0px;">
                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#topNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                      </button>
                      <a class="navbar-brand" href="index.php">FeedBack <sub>Admin</sub></a>
                    </div>
                    <div class="collapse navbar-collapse" id="topNavbar">
                        <u class="nav navbar-nav">
                            
                        </u>
                      <ul class="nav navbar-nav navbar-right" style="margin-right:10px;">
                        <li><p style="color:white;margin:15 20;font-size:16px;">Mr. <?php echo @$name; ?></p></li> 
                        <li>
                            <form action="../controller/index.php" method="post">
                                <button type="submit" class="btn btn-primary" style="margin-top:8px;" name="logout">Logout</button>
                            </form>
                        </li>
                      </ul>
                    </div>
                </div>
            </nav>
        </div>
        
        <div class="container-fluid nav-left" >
            <nav>
                <ul>
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="../teachers.php">Update Teachers</a></li>
                    <li><a href="../trchrating.php">Teachers rating</a></li>
                    <li><a href="../overallrating.php">Overall rating</a></li>
                    <li><a href="../graph.php">Graph</a></li>
                    <li><a href="../suggestion.php">Suggestion</a></li>
                    <li><a class="active" href="../download.php">Download</a></li>
                </ul>
            </nav>
        </div>
        
        
        <div class="container-fluid main">
            <h3 style="color:white;">Reset</h3>
            <div class="container box">
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#orating">Reset</a></li>
                </ul>

                <div class="tab-content graph-content">
                    <div id="orating" class="tab-pane fade in active">
                        <div class='row text-center'>
                            
                                <span data-toggle='modal' data-target='#trch2'>
                                    <div class='col-sm-4'>
                                        <div class='thumbnail'>
                                            <img class="img" src='reset.png'><hr class='line'>
                                            <form action="index.php" method="post">
                                                <button type="submit" name="submit1" class="btn btn-success btn-lg">Feedback</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class='col-sm-4'>
                                        <div class='thumbnail'>
                                            <img class="img" src='reset.png'><hr class='line'>
                                            <form action="index.php" method="post">
                                                <button type="submit" name="submit2" class="btn btn-success btn-lg">Student</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class='col-sm-4'>
                                        <div class='thumbnail'>
                                            <img class="img" src='reset.png'><hr class='line'>
                                            <form action="index.php" method="post">
                                                <button type="submit" name="submit3" class="btn btn-success btn-lg">Teacher</button>
                                            </form>
                                        </div>
                                    </div>
                                </span>
                                
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.js"></script>
    </body>
    <footer>
        <div class="nav">
            <nav class="navbar navbar-inverse  navbar-fixed-bottom">
                <div class="container-fluid">
                    <div class="navbar-header" style="margin:0px;">
                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#botNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                      </button>
                      
                    </div>
                    <div class="collapse navbar-collapse" id="botNavbar">
                        <u class="nav navbar-nav">
                            <li><p style="color:white;margin:15 20;font-size:16px;"><?php echo "Date :- ".$today;?></p></li> 
                        </u>
                        <center>
                            <p style="color:white;margin:15 20;font-size:16px;">&copy; 2017-2018</p>
                        </center>
                        <ul class="nav navbar-nav navbar-right">
                            
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </footer>
</html>
<?php 
    if(isset($_POST['submit1']))
    {
        $q1 = "DELETE FROM as_f_activities";
        $run1 = mysqli_query($con, $q1);
        $que1 = "ALTER TABLE as_f_activities AUTO_INCREMENT = 1";
        $run1 = mysqli_query($con, $que1);
        $q2 = "DELETE FROM as_f_administration";
        $run2 = mysqli_query($con, $q2);
        $que2 = "ALTER TABLE as_f_administration AUTO_INCREMENT = 1";
        $run2 = mysqli_query($con, $que2);
        $q3 = "DELETE FROM as_f_gymkhana";
        $run3 = mysqli_query($con, $q3);
        $que3 = "ALTER TABLE as_f_gymkhana AUTO_INCREMENT = 1";
        $run3 = mysqli_query($con, $que3);
        $q4 = "DELETE FROM as_f_infrastucture";
        $run4 = mysqli_query($con, $q4);
        $que4 = "ALTER TABLE as_f_infrastucture AUTO_INCREMENT = 1";
        $run4 = mysqli_query($con, $que4);
        $q5 = "DELETE FROM as_f_library";
        $run5 = mysqli_query($con, $q5);
        $que5 = "ALTER TABLE as_f_library AUTO_INCREMENT = 1";
        $run5 = mysqli_query($con, $que5);
        $q6 = "DELETE FROM as_f_ncc";
        $run6 = mysqli_query($con, $q6);
        $que6 = "ALTER TABLE as_f_ncc AUTO_INCREMENT = 1";
        $run6 = mysqli_query($con, $que6);
        $q7 = "DELETE FROM as_f_principal";
        $run7 = mysqli_query($con, $q7);
        $que7 = "ALTER TABLE as_f_principal AUTO_INCREMENT = 1";
        $run7 = mysqli_query($con, $que7);
        $q8 = "DELETE FROM as_f_teacher";
        $run8 = mysqli_query($con, $q8);
        $que8 = "ALTER TABLE as_f_teacher AUTO_INCREMENT = 1";
        $run8 = mysqli_query($con, $que8);
        
        
        if ($run1 && $run2 && $run3 && $run4 && $run5 && $run5 && $run6 && $run7 && $run8) 
        {
            echo "Record deleted successfully";
        } 
        else 
        {
            echo "Error deleting record: " . mysqli_error($conn);
        }
    }

    if(isset($_POST['submit2']))
    {
        $q1 = "DELETE FROM as_student";
        $run1 = mysqli_query($con, $q1); 
        $q2 = "ALTER TABLE as_student AUTO_INCREMENT = 1";
        $run2 = mysqli_query($con, $q2); 
    }

    if(isset($_POST['submit2']))
    {
        $q1 = "DELETE FROM as_teacher";
        $run1 = mysqli_query($con, $q1); 
    }
?>