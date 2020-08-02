<?php
	session_start();
	require_once('Db/dbconfig.php');
    require_once('controller/graph.php');
    $query = "select name from as_admin where uname = '".$_SESSION['user_name']."'";
    $query_run = mysqli_query($con, $query);
    if(@mysqli_num_rows($query_run)>0)
    {
        $row = mysqli_fetch_array($query_run, MYSQLI_ASSOC);
        @$name = $row['name'];
    }

    date_default_timezone_set('Asia/Kolkata');
    $today = date("d / m / Y");
    $year = date('y');
    $nyear = $year + 1 ;

    
    
?> 
<html lang="en">
    <head>
        <title>Graph</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width">
        <link rel="stylesheet" href="css/bootstrap.css">
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="canvasjs/canvasjs.min.js"></script>
<!--        <script type="text/javascript" src="js/graphload.js"></script>-->
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
            .graph
            {
                width: 100%; 
                height: 80%; 
                padding: 10px;
                margin: 2px;
                background: white;
            }
            .alert
            {
                padding: 8px;
                width: 100%;
            }
            .canvasjs-chart-credit 
            {
                display: none;
            }
            .icanvasjs-chart-canvas
            {
                width: 99%; 
            }
        </style>
        
<script type="text/javascript">
    var tr1 = '<?php echo "Prof. ".@$fytname[0]?>';
    var tr2 = '<?php echo "Prof. ".@$fytname[1]?>';
    var tr3 = '<?php echo "Prof. ".@$fytname[2]?>';
    var tr4 = '<?php echo "Prof. ".@$fytname[3]?>';
    var tr5 = '<?php echo "Prof. ".@$fytname[4]?>';
     
    var sytr1 = '<?php echo "Prof. ".@$sytname[0]?>';
    var sytr2 = '<?php echo "Prof. ".@$sytname[1]?>';
    var sytr3 = '<?php echo "Prof. ".@$sytname[2]?>';
    var sytr4 = '<?php echo "Prof. ".@$sytname[3]?>';
    var sytr5 = '<?php echo "Prof. ".@$sytname[4]?>';
    
    var tytr1 = '<?php echo "Prof. ".@$tytname[0]?>';
    var tytr2 = '<?php echo "Prof. ".@$tytname[1]?>';
    var tytr3 = '<?php echo "Prof. ".@$tytname[2]?>';
    var tytr4 = '<?php echo "Prof. ".@$tytname[3]?>';
    var tytr5 = '<?php echo "Prof. ".@$tytname[4]?>';   
    
//    document.getElementById("tygraph").innerHTML = fyex1;
    
   window.onload = function () {
    var chart1 = new CanvasJS.Chart("fygraph",
    {
      height:330,
      width: 1000,
      title:{
            text:"Class : F.Y.B.Sc.(IT)",
            fontSize: 18,
      },
      legend: {
            horizontalAlign: "center", // left, center ,right 
            verticalAlign: "top",  // top, center, bottom
        },
        exportEnabled: true,
        exportFileName: "F.Y.Chart",
      axisY:{
        maximum: 100
      },
      data: [{        
        type: "column",
        legendText:"Excellent",
        showInLegend: true,
        dataPoints: [
        { label: tr1, y: <?php echo @$fyexper[1]?> },
        { label: tr2, y: <?php echo @$fyexper[2]?> },
        { label: tr3, y: <?php echo @$fyexper[3]?> },
        { label: tr4, y: <?php echo @$fyexper[4]?> },
        { label: tr5, y: <?php echo @$fyexper[5]?> }
        
        ]
      },
      {        
        type: "column",
        legendText:"Very Good",
        showInLegend: true,
        dataPoints: [
        { label: tr1, y: <?php echo @$fyvgper[1]?> },
        { label: tr2, y: <?php echo @$fyvgper[2]?> },
        { label: tr3, y: <?php echo @$fyvgper[3]?> },
        { label: tr4, y: <?php echo @$fyvgper[4]?> },
        { label: tr5, y: <?php echo @$fyvgper[5]?> }
        ]
      },
      {        
        type: "column",
        legendText:"Good",
        showInLegend: true,
        dataPoints: [
        { label: tr1, y: <?php echo @$fygper[1]?> },
        { label: tr2, y: <?php echo @$fygper[2]?> },
        { label: tr3, y: <?php echo @$fygper[3]?> },
        { label: tr4, y: <?php echo @$fygper[4]?> },
        { label: tr5, y: <?php echo @$fygper[5]?> }
        ]
      },
      {        
        type: "column",
        legendText:"Poor",
        showInLegend: true,
        dataPoints: [
        { label: tr1, y: <?php echo @$fypper[1]?> },
        { label: tr2, y: <?php echo @$fypper[2]?> },
        { label: tr3, y: <?php echo @$fypper[3]?> },
        { label: tr4, y: <?php echo @$fypper[4]?> },
        { label: tr5, y: <?php echo @$fypper[5]?> }
        ]
      }    
      ]
    });

    chart1.render();
            
    var chart2 = new CanvasJS.Chart("sygraph",
    {
      height:330,
      width: 1000,
      title:{
            text:"Class : S.Y.B.Sc.(IT)",
            fontSize: 18,
      },
      legend: {
            horizontalAlign: "center", // left, center ,right 
            verticalAlign: "top",  // top, center, bottom
        },
      exportEnabled: true, 
      exportFileName: "S.Y.Chart",
      axisY:{
        maximum: 100
      },
      data: [{        
        type: "column",
        legendText:"Excellent",
        showInLegend: true,
        dataPoints: [
        { label: sytr1, y: <?php echo @$syexper[6]?> },
        { label: sytr2, y: <?php echo @$syexper[7]?> },
        { label: sytr3, y: <?php echo @$syexper[8]?> },
        { label: sytr4, y: <?php echo @$syexper[9]?> },
        { label: sytr5, y: <?php echo @$syexper[10]?> }
        
        ]
      },
      {        
        type: "column",
        legendText:"Very Good",
        showInLegend: true,
        dataPoints: [
        { label: sytr1, y: <?php echo @$syvgper[6]?> },
        { label: sytr2, y: <?php echo @$syvgper[7]?> },
        { label: sytr3, y: <?php echo @$syvgper[8]?> },
        { label: sytr4, y: <?php echo @$syvgper[9]?> },
        { label: sytr5, y: <?php echo @$syvgper[10]?> }
        ]
      },
      {        
        type: "column",
        legendText:"Good",
        showInLegend: true,
        dataPoints: [
        { label: sytr1, y: <?php echo @$sygper[6]?> },
        { label: sytr2, y: <?php echo @$sygper[7]?> },
        { label: sytr3, y: <?php echo @$sygper[8]?> },
        { label: sytr4, y: <?php echo @$sygper[9]?> },
        { label: sytr5, y: <?php echo @$sygper[10]?> }
        ]
      },
      {        
        type: "column",
        legendText:"Poor",
        showInLegend: true,
        dataPoints: [
        { label: sytr1, y: <?php echo @$sypper[6]?> },
        { label: sytr2, y: <?php echo @$sypper[7]?> },
        { label: sytr3, y: <?php echo @$sypper[8]?> },
        { label: sytr4, y: <?php echo @$sypper[9]?> },
        { label: sytr5, y: <?php echo @$sypper[10]?> }
        ]
      }    
      ]
    });

    chart2.render();
            
    var chart3 = new CanvasJS.Chart("tygraph",
    {
      height:330,
      width: 1000,
      title:{
            text:"Class : T.Y.B.Sc.(IT)",
            fontSize: 18,
      },
      legend: {
            horizontalAlign: "center", // left, center ,right 
            verticalAlign: "top",  // top, center, bottom
        },
      exportEnabled: true,
      exportFileName: "T.Y.Chart",
      axisY:{
        maximum: 100
      },
      data: [{        
        type: "column",
        legendText:"Excellent",
        showInLegend: true,
        dataPoints: [
        { label: tytr1, y: <?php echo @$tyexper[11]?> },
        { label: tytr2, y: <?php echo @$tyexper[12]?> },
        { label: tytr3, y: <?php echo @$tyexper[13]?> },
        { label: tytr4, y: <?php echo @$tyexper[14]?> },
        { label: tytr5, y: <?php echo @$tyexper[15]?> }
        
        ]
      },
      {        
        type: "column",
        legendText:"Very Good",
        showInLegend: true,
        dataPoints: [
        { label: tytr1, y: <?php echo @$tyvgper[11]?> },
        { label: tytr2, y: <?php echo @$tyvgper[12]?> },
        { label: tytr3, y: <?php echo @$tyvgper[13]?> },
        { label: tytr4, y: <?php echo @$tyvgper[14]?> },
        { label: tytr5, y: <?php echo @$tyvgper[15]?> }
        ]
      },
      {        
        type: "column",
        legendText:"Good",
        showInLegend: true,
        dataPoints: [
        { label: tytr1, y: <?php echo @$tygper[11]?> },
        { label: tytr2, y: <?php echo @$tygper[12]?> },
        { label: tytr3, y: <?php echo @$tygper[13]?> },
        { label: tytr4, y: <?php echo @$tygper[14]?> },
        { label: tytr5, y: <?php echo @$tygper[15]?> }
        ]
      },
      {        
        type: "column",
        legendText:"Poor",
        showInLegend: true,
        dataPoints: [
        { label: tytr1, y: <?php echo @$typper[11]?> },
        { label: tytr2, y: <?php echo @$typper[12]?> },
        { label: tytr3, y: <?php echo @$typper[13]?> },
        { label: tytr4, y: <?php echo @$typper[14]?> },
        { label: tytr5, y: <?php echo @$typper[15]?> }
        ]
      }    
      ]
    });

    chart3.render(); 
  }
</script>

        
        
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
                    <li><a class="active" href="graph.php">Graph</a></li>
                    <li><a href="suggestion.php">Suggestion</a></li>
                    <li><a href="download.php">Download</a></li>
                </ul>
            </nav>
        </div>
        
        <div class="container-fluid main">
            <h3 style="color:white;">Teacher's Graph</h3>
            <div class="container box" >
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#fy">F.Y.B.Sc.(IT)</a></li>
                    <li><a data-toggle="tab" href="#sy" >S.Y.B.Sc.(IT)</a></li>
                    <li><a data-toggle="tab" href="#ty">T.Y.B.Sc.(IT)</a></li>
                </ul>

                <div class="tab-content">
                    <div id="fy" class="tab-pane fade in active">
                        <div id="fygraph" class="graph" ></div>
                        <div class="alert alert-warning alert-dismissable">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                            <strong>Warning!</strong> Click the right-top button to Download the Graph in JPEG or PNG format
                        </div>
                    </div>
                    <div id="sy" class="tab-pane fade in">
                        <div id="sygraph" class="graph" ></div>
                        <div class="alert alert-warning alert-dismissable">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                            <strong>Warning!</strong> Click the right-top button to Download the Graph in JPEG or PNG format
                        </div>
                    </div>
                    <div id="ty" class="tab-pane fade">
                        <div id="tygraph" class="graph" ></div>
                        <div class="alert alert-warning alert-dismissable">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                            <strong>Warning!</strong> Click the right-top button to Download the Graph in JPEG or PNG format
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
