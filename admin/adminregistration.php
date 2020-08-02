
<html>
    <head>
        <title>Registration</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        
        <style>
            body
            {
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
                    <form action="controller/register.php" method="post">
                        <div class="input-group">
                           <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="name" type="text" class="form-control" name="name" placeholder="Full Name" required>
                        </div>
                        <div class="input-group">
                           <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="username" type="text" class="form-control" name="username" placeholder="User Name" required>
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
                        <div class="form-group" style="margin-top: 15px;" > 
                            <div class=" col-sm-10">
                            <button type="submit" class="btn btn-success" name="register">Register</button>
                                <a class="btn btn-primary" style="margin-left : 10px;" href="login.php">Login</a>
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
