<?php
    include("header.php");
	require_once('controller/finish.php');

?>
<html lang="en">
    <head>
         <style>
            .box
            {
                background: white;
            }
            .form-group
            {
                margin-left: 35px;
                font-size: 18px;
            }
            hr
            {
                margin: 5px;
            }
        </style> 
    </head>
    <body>
        
       
            
            <div class="container box">
             
             
                <center><h1 style="font-family:Kristen ITC;font-size:45px;margin: 45px 0px; ">Thank You ... !   </h1></center>
                <hr class="line">
                <br>
                <form action="controller/finish.php" method="post">
 
                    <div class="form-group">
                        <center><a href="../index.php" class="btn btn-danger btn-lg" name="fsubmit" type="submit">Finish</a></center>
                    </div>
                    
                </form>
            </div>
            
    </body>
</html>

