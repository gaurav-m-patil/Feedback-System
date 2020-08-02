<?php
    session_start();
    require_once('../Db/dbconfig.php');
    require_once('../controller/overallrating.php');
    require_once('mpdf/mpdf.php');
   
    error_reporting(E_ERROR | E_PARSE);
    date_default_timezone_set('Asia/Kolkata');
    $today = date("d / m / Y");
    $year = date('y');
    $nyear = $year + 1 ;
   

    $html = "
    <html>
        <head>            
            <link rel='stylesheet' href='css/bootstrap.css'>
            <script type='text/javascript' src='canvasjs.min.js'></script>
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
                    padding: 5px;  
                    text-align:center;
                    width : 150px;
                    font-size : 20px;
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
            <h4 style='text-align:center;margin:0px;'>People's Education society's</h4>
            <h2 class='colgname'><b>Dr.Ambedkar College of Commerce & Economics</b></h2>
            <h4 style='text-align:center;margin:0px;'>Wadala, Mumbai - 400 031</h4>
            <h3 style='text-align:center;margin:0px;'><u>Student Feedback : 20$year - $nyear</u></h3>
            <h3 style='text-align:center;margin:0px;'><u>Department : B.Sc.(Information Technology)</u></h3>
            <h3 style='text-align:center;'>All Over rating  </h4>
            <br>
            <table class='table table-striped'>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Principal</th>
                            <th>Infrastucture</th>
                            <th>Library</th>
                            <th>Gymkhana</th>
                            <th>Administration</th>
                            <th>Extra Activities</th>
                            <th>Ncc/Nss</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Poor</td>
                            <td>$princpper </td>
                            <td>$infrapper </td>
                            <td>$libpper </td>
                            <td>$gympper </td>
                            <td>$adminpper</td>
                            <td>$actpper </td>
                            <td>$nccpper </td>
                        </tr>
                        <tr>
                            <td>Good</td>
                            <td>$princgper </td>
                            <td>$infragper </td>
                            <td>$libgper </td>
                            <td>$gymgper </td>
                            <td>$admingper </td>
                            <td>$actgper </td>
                            <td>$nccgper </td>
                        </tr>
                        <tr>
                            <td>Very Good</td>
                            <td>$princvgper </td>
                            <td>$infravgper </td>
                            <td>$libvgper </td>
                            <td>$gymvgper </td>
                            <td>$adminvgper </td>
                            <td>$actvgper </td>
                            <td>$nccvgper </td>
                        </tr>
                        <tr>
                            <td>Excellent</td>
                            <td>$princexper </td>
                            <td>$infraexper </td>
                            <td>$libexper </td>
                            <td>$gymexper </td>
                            <td>$adminexper </td>
                            <td>$actexper </td>
                            <td>$nccexper </td>
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
                            <th>100</th>
                            <th>100</th>
                        </tr>
                    </thead>
                </table>            
            <br><br><br><br><br><br>
            <p>Co-Ordinator</p>
            
        </body>
    </html>";


    $mpdf = new mPDF('',"A4-L");
    $mpdf->WriteHTML($html);
    $mpdf->Output('Rating.pdf','I');
    
?>