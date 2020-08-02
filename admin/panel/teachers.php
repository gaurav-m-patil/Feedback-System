<?php
	session_start();
	require_once('Db/dbconfig.php');
    require_once('controller/teacher.php');
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
        <meta http-equiv="Content-Security-Policy" content="default-src 'self' data: gap: https://ssl.gstatic.com 'unsafe-eval'; style-src 'self' 'unsafe-inline'; media-src *; img-src 'self' data: content:;">
        <meta name="format-detection" content="telephone=no">
        <meta name="msapplication-tap-highlight" content="no">
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
                    <li><a class="active" href="teachers.php">Update Teachers</a></li>
                    <li><a href="trchrating.php">Teachers rating</a></li>
                    <li><a href="overallrating.php">Overall rating</a></li>
                    <li><a href="graph.php">Graph</a></li>
                    <li><a href="suggestion.php">Suggestion</a></li>
                    <li><a href="download.php">Download</a></li>
                </ul>
            </nav>
        </div>
        
        <div class="container-fluid main">
            <h3 style="color:white;">Update Teacher</h3>
            <div class="container box" >
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#fy">F.Y.B.Sc.(IT)</a></li>
                    <li><a data-toggle="tab" href="#sy">S.Y.B.Sc.(IT)</a></li>
                    <li><a data-toggle="tab" href="#ty">T.Y.B.Sc.(IT)</a></li>
                </ul>

                <div class="tab-content">
                    <div id="fy" class="tab-pane fade in active">
                        <form action="controller/teacher.php" method="post">
                            <table class="table table-striped table-responsive">
                                <thead >
                                    <tr >
                                        <th>Sr. No</th>
                                        <th>Teacher Name</th>
                                        <th>Remove</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $i = 0;
                                        while($i<5)
                                        {
                                            echo "<tr>";
                                                echo "<td>".@$fyt_id[$i]."</td>";
                                                echo "<td>Prof. ".@$fytname[$i]."</td>"; 
                                                $j = $i+1;
                                                echo "<td><form style='margin:0;' action='controller/teacher.php' method='post'><button type=submit class='btn btn-danger' name='fyremove' value=".@$fyt_id[$i].">remove</button></form></td>";
                                            echo "</tr>";   
                                            $i=$i+1;
                                        }
                                    ?>
                                </tbody>
                            </table>
                            <button type="button" class="btn btn-success" style="float:right" data-toggle="modal" data-target="#fyModal">Add Teacher</button>
                                 <!-- Modal -->
                                  <div class="modal fade" id="fyModal" role="dialog">
                                     <div class="modal-dialog">

                                      <!-- Modal content-->
                                      <div class="modal-content">
                                        <form action="controller/teacher.php" method="post">
                                            <div class="modal-header">
                                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                                              <h4 class="modal-title">Add Teacher in F.Y</h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                                    <input id="tname" type="text" class="form-control" name="tname" placeholder="Teacher Name" required>
                                                </div><br>

                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                                                    <select class="form-control" name="t_id" required>
                                                        <option>Select Index</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                              <button type="submit" class="btn btn-success" name="fyadd">Add</button>
                                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                        </form>
                                      </div>

                                    </div>
                                  </div>
                        </form>
                    </div>
                    <div id="sy" class="tab-pane fade">
                        
                            <table class="table table-striped">
                                <thead >
                                    <tr >
                                        <th>Sr. No</th>
                                        <th>Teacher Name</th>
                                        <th>Remove</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $i = 0;
                                        while($i<5)
                                        {
                                            echo "<tr>";
                                                echo "<td>".@$syt_id[$i]."</td>";
                                                echo "<td>Prof. ".@$sytname[$i]."</td>"; 
                                                $j = $i+1;
                                                echo "<td><form style='margin:0;' action='controller/teacher.php' method='post'><button type=submit class='btn btn-danger' name='fyremove' value=".@$syt_id[$i].">remove</button></form></td>";
                                            echo "</tr>";   
                                            $i=$i+1;
                                        }
                                    ?>
                                </tbody>
                            </table>
                            <button type="button" class="btn btn-success" style="float:right" data-toggle="modal" data-target="#syModal">Add Teacher</button>
                                 <!-- Modal -->
                                  <div class="modal fade" id="syModal" role="dialog">
                                     <div class="modal-dialog">

                                      <!-- Modal content-->
                                      <div class="modal-content">
                                        <form action="controller/teacher.php" method="post">
                                            <div class="modal-header">
                                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                                              <h4 class="modal-title">Add Teacher in S.Y</h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                                    <input id="tname" type="text" class="form-control" name="tname" placeholder="Teacher Name" required>
                                                </div><br>

                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                                                    <select class="form-control" name="t_id" required>
                                                        <option>Select Index</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                              <button type="submit" class="btn btn-success" name="syadd">Add</button>
                                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                        </form>
                                      </div>

                                    </div>
                                  </div>
                        
                    </div>
                    <div id="ty" class="tab-pane fade">
                        
                            <table class="table table-striped">
                                <thead >
                                    <tr >
                                        <th>Sr. No</th>
                                        <th>Teacher Name</th>
                                        <th>Remove</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $i = 0;
                                        while($i<5)
                                        {
                                            echo "<tr>";
                                                echo "<td>".@$tyt_id[$i]."</td>";
                                                echo "<td>Prof. ".@$tytname[$i]."</td>"; 
                                                $j = $i+1;
                                                echo "<td><form style='margin:0;' action='controller/teacher.php' method='post'><button type=submit class='btn btn-danger' name='fyremove' value=".@$tyt_id[$i].">remove</button></form></td>";
                                            echo "</tr>";   
                                            $i=$i+1;
                                        }
                                    ?>
                                </tbody>
                            </table>
                            <button type="button" class="btn btn-success" style="float:right" data-toggle="modal" data-target="#tyModal">Add Teacher</button>
                                 <!-- Modal -->
                                  <div class="modal fade" id="tyModal" role="dialog">
                                     <div class="modal-dialog">

                                      <!-- Modal content-->
                                      <div class="modal-content">
                                        <form action="controller/teacher.php" method="post">
                                            <div class="modal-header">
                                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                                              <h4 class="modal-title">Add Teacher in T.Y</h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                                    <input id="tname" type="text" class="form-control" name="tname" placeholder="Teacher Name" required>
                                                </div><br>

                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                                                    <select class="form-control" name="t_id" required>
                                                        <option>Select Index</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                        <option value="13">13</option>
                                                        <option value="14">14</option>
                                                        <option value="15">15</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                              <button type="submit" class="btn btn-success" name="tyadd">Add</button>
                                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                        </form>
                                      </div>

                                    </div>
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
		