<?php
    
    include("../header.php");
	require_once('controller/administration.php');
    
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
                
                <form action="#" method="post">
                    <h3 >Administration :</h3>
                   
                    
                    <!--  Administration -->
                  <div class="form-group ">
                          <lable for="que1">1. Helpfulness of the administrative staff in college office.</lable>
                                        
                              <div class="stars">
                                  <input class="star star-4" id="star-4-1-off" type="radio" name="que1" value="4"/>
                                  <label class="star star-4" for="star-4-1-off"> Excellent</label>
                                  <input class="star star-3" id="star-3-1-off" type="radio" name="que1" value="3"/>
                                  <label class="star star-3" for="star-3-1-off"> Very Good</label>
                                  <input class="star star-2" id="star-2-1-off" type="radio" name="que1" value="2"/>
                                  <label class="star star-2" for="star-2-1-off"> Good</label>
                                  <input class="star star-1" id="star-1-1-off" type="radio" name="que1" value="1"/>
                                  <label class="star star-1" for="star-1-1-off"> Poor</label>
                            </div>
                    </div>
                    <hr class="line">
                    <div class="form-group ">
                        <lable for="que2">2. Attitude of peons, gate security etc.</lable>
                        <div class="stars">
                            <input class="star star-4" id="star-4-2-off" type="radio" name="que2" value="4"/>
                            <label class="star star-4" for="star-4-2-off"> Excellent</label>
                            <input class="star star-3" id="star-3-2-off" type="radio" name="que2" value="3"/>
                            <label class="star star-3" for="star-3-2-off"> Very Good</label>
                            <input class="star star-2" id="star-2-2-off" type="radio" name="que2" value="2"/>
                            <label class="star star-2" for="star-2-2-off"> Good</label>
                            <input class="star star-1" id="star-1-2-off" type="radio" name="que2" value="1"/>
                            <label class="star star-1" for="star-1-2-off"> Poor</label>
                        </div>
                    </div>
                    <hr class="line">
                    <div class="form-group ">
                        <lable for="que3">3. Conduct of admission process.</lable>
                        <div class="stars">
                            <input class="star star-4" id="star-4-3-off" type="radio" name="que3" value="4"/>
                            <label class="star star-4" for="star-4-3-off"> Excellent</label>
                            <input class="star star-3" id="star-3-3-off" type="radio" name="que3" value="3"/>
                            <label class="star star-3" for="star-3-3-off"> Very Good</label>
                            <input class="star star-2" id="star-2-3-off" type="radio" name="que3" value="2"/>
                            <label class="star star-2" for="star-2-3-off"> Good</label>
                            <input class="star star-1" id="star-1-3-off" type="radio" name="que3" value="1"/>
                            <label class="star star-1" for="star-1-3-off"> Poor</label>
                        </div>
                    </div>
                    <hr class="line">
                    <div class="form-group ">
                        <lable for="que4">4. Satisfaction with regard to administration work.</lable>
                        <div class="stars">
                            <input class="star star-4" id="star-4-4-off" type="radio" name="que4" value="4"/>
                            <label class="star star-4" for="star-4-4-off"> Excellent</label>
                            <input class="star star-3" id="star-3-4-off" type="radio" name="que4" value="3"/>
                            <label class="star star-3" for="star-3-4-off"> Very Good</label>
                            <input class="star star-2" id="star-2-4-off" type="radio" name="que4" value="2"/>
                            <label class="star star-2" for="star-2-4-off"> Good</label>
                            <input class="star star-1" id="star-1-4-off" type="radio" name="que4" value="1"/>
                            <label class="star star-1" for="star-1-4-off"> Poor</label>
                        </div>
                    </div>
                    <hr class="line">
                    <div class="form-group ">
                        <lable for="que5">5. Display of notices related to administrative work.</lable>
                        <div class="stars">
                            <input class="star star-4" id="star-4-5-off" type="radio" name="que5" value="4"/>
                            <label class="star star-4" for="star-4-5-off"> Excellent</label>
                            <input class="star star-3" id="star-3-5-off" type="radio" name="que5" value="3"/>
                            <label class="star star-3" for="star-3-5-off"> Very Good</label>
                            <input class="star star-2" id="star-2-5-off" type="radio" name="que5" value="2"/>
                            <label class="star star-2" for="star-2-5-off"> Good</label>
                            <input class="star star-1" id="star-1-5-off" type="radio" name="que5" value="1"/>
                            <label class="star star-1" for="star-1-5-off"> Poor</label>
                        </div>
                    </div>
                    <hr class="line">
                    <div class="form-group">
                        <label for="sugg">Any Suggestions : </label>
                        <textarea type="text" class="form-control" rows="1" style="resize:none;" name="sugg" value=""></textarea>
                    </div>
                    
                    <hr class="line">
                    <div class="form-group">
                        <button type="sumbit" style="float:right;" name="fsubmit" class="button" ><span>Next    </span></button>
                    </div>
                </form>
            </div>
            
    </body>
</html>


