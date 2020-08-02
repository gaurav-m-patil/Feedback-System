<?php
    session_start();
    require_once('../Db/dbconfig.php');
    require_once('../controller/trchrating.php');
    require_once('mpdf/mpdf.php');
    //require_once('canvasjs.min.js');
    error_reporting(E_ERROR | E_PARSE);
    date_default_timezone_set('Asia/Kolkata');
    $today = date("d / m / Y");
    $year = date('y');
    $nyear = $year + 1 ;

    $filename    = $_FILES["picture"]["tmp_name"];
    $destination = "upload/" . $_FILES["picture"]["name"]; 
    move_uploaded_file($filename, $destination); //save uploaded picture in your directory

    $_SESSION['picture'] = $destination;


    $html = "
    <html>
        <head>            

            <style>
                .colgname
                {
                    text-align :center;
                    font-family: Baskerville Old Face;
                    margin : 5px;
                }
                table, th, td 
                {
                    border: 1px solid black;
                    border-collapse: collapse;
                }
                th, td  
                {
                    padding: 2px;  
                    text-align:center;
                }
                .graph
                {
                    width: 99%; 
                    padding: 10px;
                    margin: 2px;
                    background: white;
                }
            </style>
        </head>
        <body>
            <h3 class='colgname'><b>Dr.Ambedkar College of Commerce & Economics</b></h3>
            <h4 style='text-align:center;margin:0px'><u>Student Feedback : 20$year - $nyear</u></h4>
            <h4 style='text-align:center;margin:0px'><u>Department : B.Sc.(Information Technology)</u></h4>
            <h4 style='text-align:center;margin:0px'>Class : S.Y.B.Sc.(IT)</h4>
            <br>
            <table class='table'  align='center'>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Prof. $sytname[0]</th>
                        <th>Prof. $sytname[1]</th>
                        <th>Prof. $sytname[2]</th>
                        <th>Prof. $sytname[3]</th>
                        <th>Prof. $sytname[4]</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Poor</td>
                        <td>$sypper[6]</td>
                        <td>$sypper[7]</td>
                        <td>$sypper[8]</td>
                        <td>$sypper[9]</td>
                        <td>$sypper[10]</td>
                    </tr>
                    <tr>
                        <td>Good</td>
                        <td>$sygper[6]</td>
                        <td>$sygper[7]</td>
                        <td>$sygper[8]</td>
                        <td>$sygper[9]</td>
                        <td>$sygper[10]</td>
                    </tr>
                    <tr>
                        <td>Very Good</td>
                        <td>$syvgper[6]</td>
                        <td>$syvgper[7]</td>
                        <td>$syvgper[8]</td>
                        <td>$syvgper[9]</td>
                        <td>$syvgper[10]</td>
                    </tr>
                    <tr>
                        <td>Excellent</td>
                        <td>$syexper[6]</td>
                        <td>$syexper[7]</td>
                        <td>$syexper[8]</td>
                        <td>$syexper[9]</td>
                        <td>$syexper[10]</td>
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
            <br> 
            
            <div style='border:2px solid black; ' >
                <img src='$destination' width:'80%' height:'300'> 
            </div>
            <br><br>
            <p style='text-align:center;margin-top:15;'>Co-Ordinator</p>

        </body>
    </html>";


    $mpdf = new mPDF('',"A4-L");
    $mpdf->WriteHTML($html);
    $mpdf->Output('SYchart','I');
    
?>
