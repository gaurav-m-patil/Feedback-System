<html>
    <head>
        <title>Registration</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        
        <style>
            body
            {
                background-image: url(img/regitration.jpg);
                background-size: cover;
            }
            .input-group
            {
                margin-top: 15px;
            }
            .container-fluid    
            {
                margin-top: 10%;
            
            }
            .box
            {
                border: 1px solid black;
                padding: 30px;
                box-shadow: 8px 8px 8px #888888;
                background-color: whitesmoke;
                border-radius: 5px;
            }
            select 
            {
                width: 100%;
                padding: 8px 15px;
                margin: 0px 0;
                display: inline-block;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
            }
        </style>
    </head>
    <body>
        <div class="container-fluid">
            
            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-4 box">
                    <h2>Registration</h2>
                    <form action="controller/registration.php" method="post">
                        <div class="input-group">
                           <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="email" type="text" class="form-control" name="username" placeholder="Enter Unique User Name" required>
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input id="password" type="password" class="form-control" name="confpassword" placeholder="Confirm Password" required>
                        </div>
                        <br>
                        <div class="form-group"> 
                            <label for="country">Class</label>
                            <select id="class" name="class">
                                  <option value="F.Y.B.Sc(IT)">FY (Bsc.IT)</option>
                                  <option value="S.Y.B.Sc(IT)">SY (Bsc.IT)</option>
                                  <option value="T.Y.B.Sc(IT)">TY (Bsc.IT)</option>
                            </select>
                        </div>
                        <input type="hidden" value="new" name="status">
                        <div class="form-group" style="margin-top: 15px;" > 
                            <div class=" col-sm-10">
                            <button type="submit" class="btn btn-success" name="register" id="register">Register</button>&nbsp;&nbsp;&nbsp;<a href="index.php" style="text-aling:center">Go For Login</a>
                            </div>
                        </div>
                        
                    </form>
               </div>
            </div>
        </div>
        
    </body>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="Db/data.js"></script>
</html>
