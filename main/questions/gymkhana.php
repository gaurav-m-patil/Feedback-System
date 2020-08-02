<?php
    
    include("../header.php");
    require_once("controller/gymkhana.php");

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
                    <h3 >Gymkhana :</h3>
                   
                    
                    <!--  Gymkhana -->
                    <div class="form-group ">
                          <lable for="que1">1. Sufficient equipments for indoor &#x2215; outdoor games.</lable>
                                        
                              <div class="stars">
                                  <input class="star star-4" id="star-4-1-gym" type="radio" name="que1" value="4"/>
                                  <label class="star star-4" for="star-4-1-gym"> Excellent</label>
                                  <input class="star star-3" id="star-3-1-gym" type="radio" name="que1" value="3"/>
                                  <label class="star star-3" for="star-3-1-gym"> Very Good</label>
                                  <input class="star star-2" id="star-2-1-gym" type="radio" name="que1" value="2"/>
                                  <label class="star star-2" for="star-2-1-gym"> Good</label>
                                  <input class="star star-1" id="star-1-1-gym" type="radio" name="que1" value="1"/>
                                  <label class="star star-1" for="star-1-1-gym"> Poor</label>
                            </div>
                    </div>
                    <hr class="line">
                    <div class="form-group ">
                        <lable for="que2">2. helpfulness and motivation to the students to adopt sport as a career.</lable>
                        <div class="stars">
                            <input class="star star-4" id="star-4-2-gym" type="radio" name="que2" value="4"/>
                            <label class="star star-4" for="star-4-2-gym"> Excellent</label>
                            <input class="star star-3" id="star-3-2-gym" type="radio" name="que2" value="3"/>
                            <label class="star star-3" for="star-3-2-gym"> Very Good</label>
                            <input class="star star-2" id="star-2-2-gym" type="radio" name="que2" value="2"/>
                            <label class="star star-2" for="star-2-2-gym"> Good</label>
                            <input class="star star-1" id="star-1-2-gym" type="radio" name="que2" value="1"/>
                            <label class="star star-1" for="star-1-2-gym"> Poor</label>
                        </div>
                    </div>
                    <hr class="line">
                    <div class="form-group ">
                        <lable for="que3">3. Space provided to play.</lable>
                        <div class="stars">
                            <input class="star star-4" id="star-4-3-gym" type="radio" name="que3" value="4"/>
                            <label class="star star-4" for="star-4-3-gym"> Excellent</label>
                            <input class="star star-3" id="star-3-3-gym" type="radio" name="que3" value="3"/>
                            <label class="star star-3" for="star-3-3-gym"> Very Good</label>
                            <input class="star star-2" id="star-2-3-gym" type="radio" name="que3" value="2"/>
                            <label class="star star-2" for="star-2-3-gym"> Good</label>
                            <input class="star star-1" id="star-1-3-gym" type="radio" name="que3" value="1"/>
                            <label class="star star-1" for="star-1-3-gym"> Poor</label>
                        </div>
                    </div>
                    <hr class="line">
                    <div class="form-group ">
                        <lable for="que4">4. Coaching provided.</lable>
                        <div class="stars">
                            <input class="star star-4" id="star-4-4-gym" type="radio" name="que4" value="4"/>
                            <label class="star star-4" for="star-4-4-gym"> Excellent</label>
                            <input class="star star-3" id="star-3-4-gym" type="radio" name="que4" value="3"/>
                            <label class="star star-3" for="star-3-4-gym"> Very Good</label>
                            <input class="star star-2" id="star-2-4-gym" type="radio" name="que4" value="2"/>
                            <label class="star star-2" for="star-2-4-gym"> Good</label>
                            <input class="star star-1" id="star-1-4-gym" type="radio" name="que4" value="1"/>
                            <label class="star star-1" for="star-1-4-gym"> Poor</label>
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


