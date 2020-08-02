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
                    margin: 0   ;
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
            <h4 style='text-align:center;margin:0px'>Class : F.Y.B.Sc.(IT)</h4>
            <br>
            <table class='table' align='center'>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Prof. $fytname[0]</th>
                        <th>Prof. $fytname[1]</th>
                        <th>Prof. $fytname[2]</th>
                        <th>Prof. $fytname[3]</th>
                        <th>Prof. $fytname[4]</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Poor</td>
                        <td>$fypper[1]</td>
                        <td>$fypper[2]</td>
                        <td>$fypper[3]</td>
                        <td>$fypper[4]</td>
                        <td>$fypper[5]</td>
                    </tr>
                    <tr>
                        <td>Good</td>
                        <td>$fygper[1]</td>
                        <td>$fygper[2]</td>
                        <td>$fygper[3]</td>
                        <td>$fygper[4]</td>
                        <td>$fygper[5]</td>
                    </tr>
                    <tr>
                        <td>Very Good</td>
                        <td>$fyvgper[1]</td>
                        <td>$fyvgper[2]</td>
                        <td>$fyvgper[3]</td>
                        <td>$fyvgper[4]</td>
                        <td>$fyvgper[5]</td>
                    </tr>
                    <tr>
                        <td>Excellent</td>
                        <td>$fyexper[1]</td>
                        <td>$fyexper[2]</td>
                        <td>$fyexper[3]</td>
                        <td>$fyexper[4]</td>
                        <td>$fyexper[5]</td>
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
    $mpdf->Output('fychart','I');
    
?>
