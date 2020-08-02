<?php
	session_start();
	require_once('Db/dbconfig.php');
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
        <link rel="stylesheet" href="css/bootstrap.css">
        
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
            img
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
                            <form action="controller/index.php" method="post">
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
                    <li><a href="index.php">Home</a></li>
                    <li><a href="teachers.php">Update Teachers</a></li>
                    <li><a href="trchrating.php">Teachers rating</a></li>
                    <li><a href="overallrating.php">Overall rating</a></li>
                    <li><a href="graph.php">Graph</a></li>
                    <li><a href="suggestion.php">Suggestion</a></li>
                    <li><a class="active" href="download.php">Download</a></li>
                </ul>
            </nav>
        </div>
        
        
        <div class="container-fluid main">
            <h3 style="color:white;">Download</h3>
            <div class="container box">
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#graph">Teacher's rating</a></li>
                    <li><a data-toggle="tab" href="#orating">Overall raiting</a></li>
                    <li><a data-toggle="tab" href="#sugg">Suggestion</a></li>
                </ul>

                <div class="tab-content graph-content">
                    <div id="graph" class="tab-pane fade in active">
                        <div class='row text-center'>
                            <div class='col-sm-1'></div>
                                <span data-toggle='modal' data-target='#trch1'>
                                    <div class='col-sm-3'>
                                        <div class='thumbnail'>
                                            <img src='img/chart.png'><hr class='line'>
                                            <form action="PDF/fygraph.php" method="post" enctype="multipart/form-data">
                                                <center>
                                                <input type="file" name="picture" id="picture" class="file btn btn-primary" required>
                                                </center>
                                                <button type="submit" class="btn btn-success btn-lg">F.Y.B.Sc(IT)</button>
                                            </form>
                                        </div>
                                    </div>
                                </span>
                                <span data-toggle='modal' data-target='#trch2'>
                                    <div class='col-sm-3'>
                                        <div class='thumbnail'>
                                            <img src='img/chart.png'><hr class='line'>
                                            <form action="PDF/sygraph.php" method="post" enctype="multipart/form-data">
                                                <center>
                                                <input type="file" name="picture" id="picture" class="file btn btn-primary" required>
                                                </center>
                                                <button type="submit" class="btn btn-success btn-lg">S.Y.B.Sc(IT)</button>
                                            </form>
                                        </div>
                                    </div>
                                </span>
                                <span data-toggle='modal' data-target='#trch3'>
                                    <div class='col-sm-3'>
                                        <div class='thumbnail'>
                                            <img src='img/chart.png'><hr class='line'>
                                            <form action="PDF/tygraph.php" method="post" enctype="multipart/form-data">
                                                <center>
                                                <input type="file" name="picture" id="picture" class="file btn btn-primary" required>
                                                </center>
                                                <button type="submit" class="btn btn-success btn-lg">T.Y.B.Sc(IT)</button>
                                            </form>
                                        </div>
                                    </div>
                                </span>
                            <div class='col-sm-1'></div>
                        </div>
                        <div class="alert alert-warning">
                            <strong>Warning!</strong> Download file from <a href="graph.php">Graph</a> in JPEG or PNG format and Upload to Generate PDF
                        </div>
                    </div>
                    
                    <div id="orating" class="tab-pane fade">
                        <div class='row text-center'>
                            <div class='col-sm-4'></div>
                            
                                <span data-toggle='modal' data-target='#trch2'>
                                    <div class='col-sm-4'>
                                        <div class='thumbnail'>
                                            <img src='img/rating.png'><hr class='line'>
                                            <form action="PDF/overall.php" method="post">
                                                <button type="submit" class="btn btn-success btn-lg">Generate PDF</button>
                                            </form>
                                        </div>
                                    </div>
                                </span>
                                
                            <div class='col-sm-4'></div>
                        </div>
                    </div>
                    <div id="sugg" class="tab-pane fade">
                        <div id="tygraph" class="graph" >
                        
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
		