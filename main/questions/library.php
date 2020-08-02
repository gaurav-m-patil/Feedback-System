<?php
    
    include("../header.php");
	require_once('controller/library.php');
    
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
                    <h3>Library :</h3>
                   
                    
                    <!--  LIBRARY -->
                    <div class="form-group ">
		                  <lable for="que1">1. Availibility of latest book and book bank facility.</lable>
                                        
                              <div class="stars">
                                  <input class="star star-4" id="star-4-1-lib" type="radio" name="que1" value="4"/>
                                  <label class="star star-4" for="star-4-1-lib"> Excellent</label>
                                  <input class="star star-3" id="star-3-1-lib" type="radio" name="que1" value="3"/>
                                  <label class="star star-3" for="star-3-1-lib"> Very Good</label>
                                  <input class="star star-2" id="star-2-1-lib" type="radio" name="que1" value="2"/>
                                  <label class="star star-2" for="star-2-1-lib"> Good</label>
                                  <input class="star star-1" id="star-1-1-lib" type="radio" name="que1" value="1"/>
                                  <label class="star star-1" for="star-1-1-lib"> Poor</label>
                            </div>
                    </div>
                    <hr class="line">
                    <div class="form-group ">
                        <lable for="que2">2. Spacious reading room .</lable>
                        <div class="stars">
                            <input class="star star-4" id="star-4-2-lib" type="radio" name="que2" value="4"/>
                            <label class="star star-4" for="star-4-2-lib"> Excellent</label>
                            <input class="star star-3" id="star-3-2-lib" type="radio" name="que2" value="3"/>
                            <label class="star star-3" for="star-3-2-lib"> Very Good</label>
                            <input class="star star-2" id="star-2-2-lib" type="radio" name="que2" value="2"/>
                            <label class="star star-2" for="star-2-2-lib"> Good</label>
                            <input class="star star-1" id="star-1-2-lib" type="radio" name="que2" value="1"/>
                            <label class="star star-1" for="star-1-2-lib"> Poor</label>
                        </div>
                    </div>
                    <hr class="line">
                    <div class="form-group ">
                        <lable for="que3">3. Help of library in improving general knowledge, news papers, gaining relevant <br>&emsp; materials for projects, improving the reading habits.</lable>
                        <div class="stars">
                            <input class="star star-4" id="star-4-3-lib" type="radio" name="que3" value="4"/>
                            <label class="star star-4" for="star-4-3-lib"> Excellent</label>
                            <input class="star star-3" id="star-3-3-lib" type="radio" name="que3" value="3"/>
                            <label class="star star-3" for="star-3-3-lib"> Very Good</label>
                            <input class="star star-2" id="star-2-3-lib" type="radio" name="que3" value="2"/>
                            <label class="star star-2" for="star-2-3-lib"> Good</label>
                            <input class="star star-1" id="star-1-3-lib" type="radio" name="que3" value="1"/>
                            <label class="star star-1" for="star-1-3-lib"> Poor</label>
                        </div>
                    </div>
                    
                    <hr class="line">
                    <div class="form-group ">
                        <lable for="que4">4. Attitude of the Librarian and other related staff.</lable>
                        <div class="stars">
                            <input class="star star-4" id="star-4-4-lib" type="radio" name="que4" value="4"/>
                            <label class="star star-4" for="star-4-4-lib"> Excellent</label>
                            <input class="star star-3" id="star-3-4-lib" type="radio" name="que4" value="3"/>
                            <label class="star star-3" for="star-3-4-lib"> Very Good</label>
                            <input class="star star-2" id="star-2-4-lib" type="radio" name="que4" value="2"/>
                            <label class="star star-2" for="star-2-4-lib"> Good</label>
                            <input class="star star-1" id="star-1-4-lib" type="radio" name="que4" value="1"/>
                            <label class="star star-1" for="star-1-4-lib"> Poor</label>
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


