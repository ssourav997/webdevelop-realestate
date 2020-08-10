<html>
<head>
    <title> User login</title>
    <link rel="stylesheet" type="text/css" href="loginstyle.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <style>
        body{
        background-image:url(https://papers.co/wallpaper/papers.co-sf18-city-blue-day-gradation-blur-30-wallpaper.jpg);
         background-size: cover;
         background-position: center
    
        }
    </style>
</head>
    <body>
    <div class="container">
        <div class="login_box">
        <div class="row">
        <div class="col-lg-6 login_left">
            <h1>Login Here</h1>
            <form action="validation.php" method="post">
            <div class="form-group">
                <label>username</label>
                <input type="text" name="user" class="form-control" required>
                </div>
              <div class="form-group">
                <label>password</label>
                <input type="password" name="password" class="form-control" required>
                </div>
            <button type="submit" class="btn btn-primary">Login</button>
            </form>
            </div>
            <div class="col-lg-6 login_right">
            <h1>Register </h1>
            <form action="registration.php" method="post">
            <div class="form-group">
                <label>username</label>
                <input type="text" name="user" class="form-control" required>
                </div>
              <div class="form-group">
                <label>password</label>
                <input type="password" name="password" class="form-control" required>
                </div>
            <button type="submit" class="btn btn-primary">Register</button>
            </form>
            </div>
        </div>
            </div>
        </div>
    </body>
</html>