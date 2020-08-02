<?php
    
    include("header.php");

    
?>
<html lang="en">
    <head>
        <style>
            .box
            {
                background-color: white;
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
                margin: 5px;
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
        <div class="container box">
            <center><h1 style="font-family:Kristen ITC;font-size:45px;margin: 45px 0px; ">WELCOME <sub>to</sub> Online Feedback</h1></center>
            <h4 style="font-family:Comic Sans MS;color:red;"><u>Instruction's</u> :</h4 >
            <ol>
                <li style="font-family:Comic Sans MS;font-size:17px;">Students are requested to objectively express their evaluation based on four point scale.</li>
                <li style="font-family:Comic Sans MS;font-size:17px;">Students have to select only one option Like :</li>
                <img src="img/eg.PNG">
            </ol>

            <br>
            <form action="index.php" method="post">
                <div class="form-group">
                    <center>
                        <a href="questions/teachers.php?user_name='<?php echo $_SESSION['user_name'];?>"><button type="button" class="button" ><span>Get Started </span></button></a></center>
                </div>
            </form>
        </div>
    </body>
    
</html>

