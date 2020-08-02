<?php
	session_start();
	require_once('Db/dbconfig.php');
    require_once('controller/trchrating.php');
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
        
        <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width">
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
                padding-bottom: ;
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
            .fade
            {
                background-color: ;
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
                    <li><a class="active" href="trchrating.php">Teachers rating</a></li>
                    <li><a href="overallrating.php">Overall rating</a></li>
                    <li><a href="graph.php">Graph</a></li>
                    <li><a href="suggestion.php">Suggestion</a></li>
                    <li><a href="download.php">Download</a></li>
                </ul>
            </nav>
        </div>
        
        <div class="container-fluid main">
            <h3 style="color:white;">Teachers rating</h3>
            <div class="container box" >
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#fy">F.Y.B.Sc.(IT)</a></li>
                    <li><a data-toggle="tab" href="#sy">S.Y.B.Sc.(IT)</a></li>
                    <li><a data-toggle="tab" href="#ty">T.Y.B.Sc.(IT)</a></li>
                </ul>

                <div class="tab-content">
                    <div id="fy" class="tab-pane fade in active">                        
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <?php
                                        $i = 0;
                                        while($i<5)
                                        {
                                            echo "<th>Prof. ".@$fytname[$i]."</th>";
                                            $i = $i +1;
                                        }
                                    ?>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Poor</td>
                                    <?php
                                        $t = 1;
                                        while($t<=5)
                                        {
                                            echo "<td>".@$fypper[$t]."</td>";
                                            $t = $t +1 ;
                                        }
                                    ?>
                                    
                                </tr>
                                <tr>
                                    <td>Good</td>
                                    <?php
                                        $t = 1;
                                        while($t<=5)
                                        {
                                            echo "<td>".@$fygper[$t]."</td>";
                                            $t = $t +1 ;
                                        }
                                    ?>
                                </tr>
                                <tr>
                                    <td>Very Good</td>
                                    <?php
                                        $t = 1;
                                        while($t<=5)
                                        {
                                            echo "<td>".@$fyvgper[$t]."</td>";
                                            $t = $t +1 ;
                                        }
                                    ?>
                                </tr>
                                <tr>
                                    <td>Excellent</td>
                                    <?php
                                        $t = 1;
                                        while($t<=5)
                                        {
                                            echo "<td>".@$fyexper[$t]."</td>";
                                            $t = $t +1 ;
                                        }
                                    ?>
                                </tr>
                            </tbody>
                            <thead>
                                <tr>
                                    <th>Total</th>
                                    <th>100</th>
                                    <th>100</th>
                                    <th>100</th>
                                    <th>100</th>
                                    <th>100</th>
                                </tr>
                            </thead>
                        </table>                            
                    </div>
                    <div id="sy" class="tab-pane fade">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <?php
                                        $i = 0;
                                        while($i<5)
                                        {
                                            echo "<th>Prof. ".@$sytname[$i]."</th>";
                                            $i = $i +1;
                                        }
                                    ?>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Poor</td>
                                    <?php
                                        $t = 6;
                                        while($t<=10)
                                        {
                                            echo "<td>".@$sypper[$t]."</td>";
                                            $t = $t +1 ;
                                        }
                                    ?>
                                    
                                </tr>
                                <tr>
                                    <td>Good</td>
                                    <?php
                                        $t = 6;
                                        while($t<=10)
                                        {
                                            echo "<td>".@$sygper[$t]."</td>";
                                            $t = $t +1 ;
                                        }
                                    ?>
                                </tr>
                                <tr>
                                    <td>Very Good</td>
                                    <?php
                                        $t = 6;
                                        while($t<=10)
                                        {
                                            echo "<td>".@$syvgper[$t]."</td>";
                                            $t = $t +1 ;
                                        }
                                    ?>
                                </tr>
                                <tr>
                                    <td>Excellent</td>
                                    <?php
                                        $t = 6;
                                        while($t<=10)
                                        {
                                            echo "<td>".@$syexper[$t]."</td>";
                                            $t = $t +1 ;
                                        }
                                    ?>
                                </tr>
                            </tbody>
                            <thead>
                                <tr>
                                    <th>Total</th>
                                    <th>100</th>
                                    <th>100</th>
                                    <th>100</th>
                                    <th>100</th>
                                    <th>100</th>
                                </tr>
                            </thead>
                        </table>
                        
                    </div>
                    <div id="ty" class="tab-pane fade">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <?php
                                        $i = 0;
                                        while($i<5)
                                        {
                                            echo "<th>Prof. ".@$tytname[$i]."</th>";
                                            $i = $i +1;
                                        }
                                    ?>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Poor</td>
                                    <?php
                                        $t = 11;
                                        while($t<=15)
                                        {
                                            echo "<td>".@$typper[$t]."</td>";
                                            $t = $t +1 ;
                                        }
                                    ?>
                                    
                                </tr>
                                <tr>
                                    <td>Good</td>
                                    <?php
                                        $t = 11;
                                        while($t<=15)
                                        {
                                            echo "<td>".@$tygper[$t]."</td>";
                                            $t = $t +1 ;
                                        }
                                    ?>
                                </tr>
                                <tr>
                                    <td>Very Good</td>
                                    <?php
                                        $t = 11;
                                        while($t<=15)
                                        {
                                            echo "<td>".@$tyvgper[$t]."</td>";
                                            $t = $t +1 ;
                                        }
                                    ?>
                                </tr>
                                <tr>
                                    <td>Excellent</td>
                                    <?php
                                        $t = 11;
                                        while($t<=15)
                                        {
                                            echo "<td>".@$tyexper[$t]."</td>";
                                            $t = $t +1 ;
                                        }
                                    ?>
                                </tr>
                            </tbody>
                            <thead>
                                <tr>
                                    <th>Total</th>
                                    <th>100</th>
                                    <th>100</th>
                                    <th>100</th>
                                    <th>100</th>
                                    <th>100</th>
                                </tr>
                            </thead>
                        </table>
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
		