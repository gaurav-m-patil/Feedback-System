<?php
    
    include("../header.php");
	require_once('controller/infra.php');

?>
<html lang="en">
    <link rel="stylesheet" href="css/star.css" type="text/css">
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
              
                <form action="#" method="post">
                    <h3>Infrastructure :</h3>
                   
                    
                    <!--  INFRASRUCTURE -->
                    <div class="form-group ">
		                  <lable for="que1">1. Lecture rooms are well furnished.</lable>
                                        
                              <div class="stars">
                                  <input class="star star-4" id="star-4-1-inf" type="radio" name="que1" value="4"/>
                                  <label class="star star-4" for="star-4-1-inf"> Excellent</label>
                                  <input class="star star-3" id="star-3-1-inf" type="radio" name="que1" value="3"/>
                                  <label class="star star-3" for="star-3-1-inf"> Very Good</label>
                                  <input class="star star-2" id="star-2-1-inf" type="radio" name="que1" value="2"/>
                                  <label class="star star-2" for="star-2-1-inf"> Good</label>
                                  <input class="star star-1" id="star-1-1-inf" type="radio" name="que1" value="1"/>
                                  <label class="star star-1" for="star-1-1-inf"> Poor</label>
                            </div>
                    </div>
                    <hr class="line">
                    <div class="form-group ">
                        <lable for="que2">2. Cleanliness, drinking water facility and toilet, facility, Garden etc.</lable>
                        <div class="stars">
                            <input class="star star-4" id="star-4-2-inf" type="radio" name="que2" value="4"/>
                            <label class="star star-4" for="star-4-2-inf"> Excellent</label>
                            <input class="star star-3" id="star-3-2-inf" type="radio" name="que2" value="3"/>
                            <label class="star star-3" for="star-3-2-inf"> Very Good</label>
                            <input class="star star-2" id="star-2-2-inf" type="radio" name="que2" value="2"/>
                            <label class="star star-2" for="star-2-2-inf"> Good</label>
                            <input class="star star-1" id="star-1-2-inf" type="radio" name="que2" value="1"/>
                            <label class="star star-1" for="star-1-2-inf"> Poor</label>
                        </div>
                    </div>
                    <hr class="line">
                    <div class="form-group ">
                        <lable for="que3">3. Availability of First Aid box, Dustbins etc.</lable>
                        <div class="stars">
                            <input class="star star-4" id="star-4-3-inf" type="radio" name="que3" value="4"/>
                            <label class="star star-4" for="star-4-3-inf"> Excellent</label>
                            <input class="star star-3" id="star-3-3-inf" type="radio" name="que3" value="3"/>
                            <label class="star star-3" for="star-3-3-inf"> Very Good</label>
                            <input class="star star-2" id="star-2-3-inf" type="radio" name="que3" value="2"/>
                            <label class="star star-2" for="star-2-3-inf"> Good</label>
                            <input class="star star-1" id="star-1-3-inf" type="radio" name="que3" value="1"/>
                            <label class="star star-1" for="star-1-3-inf"> Poor</label>
                        </div>
                    </div>
                    <hr class="line">
                    <div class="form-group ">
                        <lable for="que4">4. Condition of boys common room and girls common room.</lable>
                        <div class="stars">
                            <input class="star star-4" id="star-4-4-inf" type="radio" name="que4" value="4"/>
                            <label class="star star-4" for="star-4-4-inf"> Excellent</label>
                            <input class="star star-3" id="star-3-4-inf" type="radio" name="que4" value="3"/>
                            <label class="star star-3" for="star-3-4-inf"> Very Good</label>
                            <input class="star star-2" id="star-2-4-inf" type="radio" name="que4" value="2"/>
                            <label class="star star-2" for="star-2-4-inf"> Good</label>
                            <input class="star star-1" id="star-1-4-inf" type="radio" name="que4" value="1"/>
                            <label class="star star-1" for="star-1-4-inf"> Poor</label>
                        </div>
                    </div>
                    <hr class="line">
                    <div class="form-group">
                        <label for="sugg">Any Suggestions : </label>
                        <textarea type="text" class="form-control" rows="1  " style="resize:none;" name="sugg" value=""></textarea>
                    </div>
                    
                    <hr class="line">
                    <div class="form-group">
                        <button type="sumbit" style="float:right;" name="fsubmit" class="button" onclick="location.href='questions/teachers.php';"><span>Next    </span></button>
                    </div>
                </form>
            </div>
        
    </body>
</html>


