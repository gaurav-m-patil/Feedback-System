<?php
    session_start();
    if(!$_SESSION['user_name'])
    {
        header("location:'../index.php'");
    }
	require_once('Db/dbconfig.php');

    $query = "select class from student where uname = '".$_SESSION['user_name']."'";
    $query_run = mysqli_query($con, $query);
    if(@mysqli_num_rows($query_run)>0)
    {
        $row = mysqli_fetch_array($query_run, MYSQLI_ASSOC);
        @$class = $row['class'];
    }
    
    date_default_timezone_set('Asia/Kolkata');
    $today = date("d / m / Y");
    $year = date('y');
    $nyear = $year + 1 ;
?>
<head>
    <title>Feedback</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="css/star.css" type="text/css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <style>
        body
        {
            background-color: whitesmoke;
            overflow: auto;
            background-image: url(img/bg-1.jpg);
            font-family: sans-serif;
        }
        .navbar
        {
           margin-bottom: 0px;
        }
        .main
        {
            padding: 10px;
        }
        .logo
        {
            height: 110;
            float: left; 
        }
        .header
        {
            width: 70%;
        }
        .colgname
        {
            font-family: Baskerville Old Face;
        }
        /*            button css*/
        .button 
        {
            border-radius: 4px;
            background-color: #f4511e;
            border: none;
            color: #FFFFFF;
            text-align: center;
            font-size: 18px;
            padding: 10px;
            width: 200px;
            transition: all 0.5s;
            cursor: pointer;
            margin: 5px 15px 15px 0px; 
        }
        .button span 
        {
            cursor: pointer;
            display: inline-block;
            position: relative;
            transition: 0.5s;
        }
        .button span:after 
        {
            content: '\00bb';
            position: absolute;
            opacity: 0;
            top: 0;
            right: -20px;
            transition: 0.5s;
        }
        .button:hover span 
        {
            padding-right: 25px;
        }
        .button:hover span:after 
        {
            opacity: 1;
            right: 0;
        }
    </style>
</head>
<body>
    <div class="top">
        <nav class="navbar navbar-inverse">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" style="font-size:18px;color :white;">STUDENTS FEEDBACK FORM <?php echo date("Y")." - ".$nyear;?></a>
                </div>
                <ul class="nav navbar-nav navbar-right">
                    <li><a><span class="user" style="font-size:18px;color:white;"><?php echo "User Name :- <u>".$_SESSION['user_name']."</u>";?></span></a></li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="jumbotron main">
        <div class="container header">
            <img src="img/PESLOGO.png" class="logo">
            <center>
            <h5 >People's Education Society's</h5>
            <h3 style="margin:;" class="colgname"><b>Dr.Ambedkar College of Commerce & Economics</b></h3>
            <h5>Wadala, Mumbai - 400 031</h5>
            </center>
        </div>
    </div>
    <div class="container">
    </div>
</body>
