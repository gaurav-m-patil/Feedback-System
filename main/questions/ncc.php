<?php
    
    include("../header.php");
	require_once('controller/ncc.php');

   
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
                    <h3>N.C.C. / N.S.S. :</h3>
                   
                    
                    <!--  Ncc -->
                    <div class="form-group ">
                          <lable for="que1">1. Activeness of N.C.C. / N.S.S.</lable>
                                        
                              <div class="stars">
                                  <input class="star star-4" id="star-4-1-ncc" type="radio" name="que1" value="4"/>
                                  <label class="star star-4" for="star-4-1-ncc"> Excellent</label>
                                  <input class="star star-3" id="star-3-1-ncc" type="radio" name="que1" value="3"/>
                                  <label class="star star-3" for="star-3-1-ncc"> Very Good</label>
                                  <input class="star star-2" id="star-2-1-ncc" type="radio" name="que1" value="2"/>
                                  <label class="star star-2" for="star-2-1-ncc"> Good</label>
                                  <input class="star star-1" id="star-1-1-ncc" type="radio" name="que1" value="1"/>
                                  <label class="star star-1" for="star-1-1-ncc"> Poor</label>
                            </div>
                    </div>
                    <hr class="line">
                    <div class="form-group ">
                        <lable for="que2">2. Facilities provided to the N.C.C / N.S.S. cadets.</lable>
                        <div class="stars">
                            <input class="star star-4" id="star-4-2-ncc" type="radio" name="que2" value="4"/>
                            <label class="star star-4" for="star-4-2-ncc"> Excellent</label>
                            <input class="star star-3" id="star-3-2-ncc" type="radio" name="que2" value="3"/>
                            <label class="star star-3" for="star-3-2-ncc"> Very Good</label>
                            <input class="star star-2" id="star-2-2-ncc" type="radio" name="que2" value="2"/>
                            <label class="star star-2" for="star-2-2-ncc"> Good</label>
                            <input class="star star-1" id="star-1-2-ncc" type="radio" name="que2" value="1"/>
                            <label class="star star-1" for="star-1-2-ncc"> Poor</label>
                        </div>
                    </div>
                    <hr class="line">
                    <div class="form-group ">
                        <lable for="que3">3. Organizing of programmes at local, zonal or camp level.</lable>
                        <div class="stars">
                            <input class="star star-4" id="star-4-3-ncc" type="radio" name="que3" value="4"/>
                            <label class="star star-4" for="star-4-3-ncc"> Excellent</label>
                            <input class="star star-3" id="star-3-3-ncc" type="radio" name="que3" value="3"/>
                            <label class="star star-3" for="star-3-3-ncc"> Very Good</label>
                            <input class="star star-2" id="star-2-3-ncc" type="radio" name="que3" value="2"/>
                            <label class="star star-2" for="star-2-3-ncc"> Good</label>
                            <input class="star star-1" id="star-1-3-ncc" type="radio" name="que3" value="1"/>
                            <label class="star star-1" for="star-1-3-ncc"> Poor</label>
                        </div>
                    </div>
                    <hr class="line">
                    <div class="form-group ">
                        <lable for="que4">4. Working of the N.C.C. / N.S.S. unit inside and outside college.</lable>
                        <div class="stars">
                            <input class="star star-4" id="star-4-4-ncc" type="radio" name="que4" value="4"/>
                            <label class="star star-4" for="star-4-4-ncc"> Excellent</label>
                            <input class="star star-3" id="star-3-4-ncc" type="radio" name="que4" value="3"/>
                            <label class="star star-3" for="star-3-4-ncc"> Very Good</label>
                            <input class="star star-2" id="star-2-4-ncc" type="radio" name="que4" value="2"/>
                            <label class="star star-2" for="star-2-4-ncc"> Good</label>
                            <input class="star star-1" id="star-1-4-ncc" type="radio" name="que4" value="1"/>
                            <label class="star star-1" for="star-1-4-ncc"> Poor</label>
                        </div>
                    </div>
                    <hr class="line">
                    <div class="form-group ">
                        <lable for="que5">5. Display of notices related to administrative work.</lable>
                        <div class="stars">
                            <input class="star star-4" id="star-4-5-ncc" type="radio" name="que5" value="4"/>
                            <label class="star star-4" for="star-4-5-ncc"> Excellent</label>
                            <input class="star star-3" id="star-3-5-ncc" type="radio" name="que5" value="3"/>
                            <label class="star star-3" for="star-3-5-ncc"> Very Good</label>
                            <input class="star star-2" id="star-2-5-ncc" type="radio" name="que5" value="2"/>
                            <label class="star star-2" for="star-2-5-ncc"> Good</label>
                            <input class="star star-1" id="star-1-5-ncc" type="radio" name="que5" value="1"/>
                            <label class="star star-1" for="star-1-5-ncc"> Poor</label>
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


