
<html lang="en">
    <head>
        <title>Login</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            body
            {
/*
                background-image: url(img/login.jpeg);
                background-size: cover;
*/
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
        </style>
        
    </head>
    <body>
        
        <div class="container-fluid">
            
            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-4 box">
                    <h2>Login</h2>
                    <form action="controller/login.php" method="post">
                        <div class="input-group">
                           <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="username" type="text" class="form-control" name="username" placeholder="User Name">
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input id="password" type="password" class="form-control" name="password" placeholder="Password">
                        </div>
                        
                        <div class="form-group" style="margin-top: 15px;" > 
                            <center>
                                <button type="submit" class="btn btn-success" name="submit">login</button>
                            </center>
                        </div>
                    </form>
               </div>
            </div>
        </div>
        
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.js"></script>
    </body>
</html>
